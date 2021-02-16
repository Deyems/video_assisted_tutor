"use strict";

var STX = STX || {};

STX.LayerRenderer = function(params) {
    var self = this;

    var id = 0;
    this.layerScale = 0;

    this.onLayerMouseDown = params.onLayerMouseDown;
    this.onLayerMouseUp = params.onLayerMouseUp;
    this.onLayerMove = params.onLayerMove;
    this.$sliderPreviewArea = jQuery(".slider-preview-area");

    this.$wrapper = jQuery(".slider-preview-area .stx-layers");
    this.$canvas = jQuery(".slider-preview-area .stx-layers-canvas");
    this.$content = jQuery(".slider-preview-area .stx-layers-content");

    this.$wrapper.bind("mousedown", function(e) {
        self.dragging = true;
        self.dragOriginX = e.clientX;
        self.dragOriginY = e.clientY;
    });

    this.styles = {}

    this.$wrapper.bind("mousemove", function(e) {
        if (self.dragging) {
            self.dragChangeX = e.clientX - self.dragOriginX;
            self.dragChangeY = e.clientY - self.dragOriginY;
            self.dragOriginX = e.clientX;
            self.dragOriginY = e.clientY;
            self.onLayerMove({
                x: self.dragChangeX / self.layerScale,
                y: self.dragChangeY / self.layerScale
            });
        }
    });

    window.addEventListener("mouseup", function(e) {
        self.dragging = false;
        self.onLayerMouseUp();
    });

    this.render = function(elements, deviceType) {
        this.elements = elements;
        this.deviceType = deviceType

        self.clear();

        self.nodes = 0;

        if (elements) {
            self.addNodeElements(elements);
        }
    };

    this.updateLayerSize = function(options, currentSlide) {
        this.options = options
        var o = options;
        var slide = o.slides[currentSlide];

        var layerWidth = o.layerWidth || slide.layerWidth;
        var layerHeight = o.layerHeight || slide.layerHeight;
        var layerWidthMin = o.layerWidthMin || "initial";
        var layerWidthMax = o.layerWidthMax || "initial";
        var layerHeightMin = o.layerHeightMin || "initial";
        var layerHeightMax = o.layerHeightMax || "initial";
        var layerScale = 1;
        var sliderWrapperWidth = this.$sliderPreviewArea.width();
        var sliderWrapperHeight = this.$sliderPreviewArea.height();

        this.$wrapper.css({
            width: layerWidth,
            height: layerHeight,
            minWidth: layerWidthMin,
            maxWidth: layerWidthMax,
            minHeight: layerHeightMin,
            maxHeight: layerHeightMax,
            "-webkit-transform": "translateX(-50%) translateY(-50%)",
            left: "50%",
            top: "50%",
            backgroundColor: o.layerBackground
        });

        var lw = this.$wrapper.width();
        var lh = this.$wrapper.height();

        var scaleX = sliderWrapperWidth / lw;
        var scaleY = sliderWrapperHeight / lh;

        layerScale = scaleX > scaleY ? scaleY : scaleX;
        this.layerScale = layerScale;

        this.$wrapper.css({
            "-webkit-transform": "scale(" + layerScale + ") translateX(-50%) translateY(-50%)"
        });
        this.updateElementPositios();
    };

    this.updateElementPositios = function() {
        var index = 0
        this.elements.forEach(function(element) {
            self.updateElementPosition(index);
            index++;
        });
    };

    this.renderAddedElement = function(elements) {
        this.elements = elements;
        this.addNodeElement(elements.length - 1);
        this.updateElementProperties(elements.length - 1);
    };

    this.updateElement = function(index, settingName, hover) {
        this.updateElementProperties(index, settingName, hover);
    };

    this.focusElement = function(index) {
        if (this.elements && this.elements[index] && this.elements[index].node) {
            jQuery(this.elements[index].node).addClass("focused-element");
        }
    };

    this.unfocusElement = function() {
        jQuery(".focused-element").removeClass("focused-element");
    };

    this.clear = function() {
        this.$wrapper.find("td").empty();
        this.$canvas.empty();
    };

    this.loadFont = function(val) {
        var self = this;
        var element, fontFamily, fontWeight;

        if(typeof val === 'object'){
            fontFamily = val.fontFamily
            fontWeight = val.fontWeight
        }else{
            element = this.elements[val];
            fontFamily = element.fontFamily;
            fontWeight = element.fontWeight
        }

        var fontVariationsToLoad = 2;

        if (fontFamily && fontFamily != 'initial') {
            if(fontFamily.startsWith("\"") || fontFamily.startsWith("\'")) fontFamily = fontFamily.slice(1, -1);

            WebFont.load({
                google: {
                    families: [fontFamily, fontFamily + ":" + fontWeight]
                },
                fontactive: function() {
                    --fontVariationsToLoad;
                    if (fontVariationsToLoad <= 0 && !typeof val === 'object')
                        self.updateElementPosition(val);
                },
                fontinactive: function() {
                    --fontVariationsToLoad;
                    if (fontVariationsToLoad <= 0 && !typeof val === 'object')
                        self.updateElementPosition(val);
                }
            });
        }else{
            this.updateElementPosition(val);
        }
    };

    this.updateElementProperties = function(index, settingName, hover) {
        var el = this.elements[index]
        var node = el.node,
            $node = jQuery(node),
            self = this;


        var view = this.deviceType

        var styleIndex = 0
        if(view == "tablet")
             styleIndex = 1;
        else if(view == "mobile")
             styleIndex = 2;

        if(hover)
        styleIndex = 3

        var id = "s" + el.id

        function cssValue(name, val) {
            return isNaN(val) || name === "fontWeight" || val == "" ? val : val + "px";
        }

        var settingVal

        if((view == 'mobile' || view == 'tablet') && el[view])
             settingVal = el[view][settingName]
        else
             settingVal = el[settingName]

        if(settingName == "textColor") settingName = "color"
        el.color = el.textColor

        if(hover) settingVal = el.hover[settingName]

        switch (settingName) {
            case "src":
                if (el.src) node.src = el.src;
                break;
            case "content":
                if (typeof el.content == "string") node.innerHTML = el.content;
                this.updateElementPosition(index);
                break;

            case "position":
            case "position.offsetX":
            case "position.offsetY":
            case "position.x":
            case "position.y":
                this.updateElementPosition(index);
                break;

            case "fontFamily":
                this.loadFont(index)
                document.getElementById(id).sheet.cssRules[styleIndex].style[settingName] = settingVal
                break;

            case "fontWeight":
                this.loadFont(index)
                document.getElementById(id).sheet.cssRules[styleIndex].style[settingName] = cssValue(settingName, settingVal)
                break;
            case "fontSize":
            case "letterSpacing":
            case "lineHeight":
            case "borderWidth":
            case "borderStyle":
                document.getElementById(id).sheet.cssRules[styleIndex].style[settingName] = cssValue(settingName, settingVal)
                this.updateElementPosition(index);
                break;

            case "color":
            case "background":
            case "backgroundColor":
            case "borderColor":
            case "borderRadius":
            case "textAlign":
            case "margin":
            case "marginLeft":
            case "marginTop":
            case "marginRight":
            case "marginBottom":
            case "padding":
            case "paddingTop":
            case "paddingLeft":
            case "paddingRight":
            case "paddingBottom":
            case "display":
            case "width":
            case "minWidth":
            case "maxWidth":
            case "height":
            case "minHeight":
            case "maxHeight":
                document.getElementById(id).sheet.cssRules[styleIndex].style[settingName] = cssValue(settingName, settingVal)
                break;
            case "textShadow":
                document.getElementById(id).sheet.cssRules[styleIndex].style[settingName] = cssValue(settingName, settingVal)
                break;

            case "mode":
                break;

            default:
                switch (el.type) {
                    case "text":
                        this.loadFont(index);
                        break;

                    case "button":
                        this.loadFont(index);
                        break;
                }

                if (el.content) node.innerHTML = el.content;

                this.updateElementPosition(index);


                break;
        }

    };

    this.updateElementPosition = function(index) {

        var el = this.elements[index]
        var view = this.deviceType

        var node = el.node,
            $node = jQuery(node);

        var pos = el.position
        var mode = el.mode

        if(el[view] && el[view].mode) mode = el[view].mode
        if(el[view] && el[view].position) pos = el[view].position

        pos.x = pos.x || 'center';
         pos.y = pos.y || 'center';
         pos.offsetX = pos.offsetX || 0;
         pos.offsetY = pos.offsetY || 0;


        if (mode != "content") {

            if (pos.x === "center") $node.css({ left: "calc(50% - " + $node.outerWidth() / 2 + "px + " + pos.offsetX + "px)", right: "unset" });
            else if (pos.x === "left") $node.css({ left: pos.offsetX + "px", right: "unset" });
            else if (pos.x === "right") $node.css({ right: pos.offsetX + "px", left: "unset" });
            else node.style.setProperty("left", pos.x.toString() + "%");

            if (pos.y === "center") $node.css({ top: "calc(50% - " + $node.outerHeight() / 2 + "px - " + pos.offsetY + "px)", bottom: "unset" });
            else if (pos.y === "top") $node.css({ top: pos.offsetY + "px", bottom: "unset" });
            else if (pos.y === "bottom") $node.css({ bottom: pos.offsetY + "px", top: "unset" });
            else node.style.setProperty("top", pos.y.toString() + "%");

        }

    };

     this.updateElementMode = function(index) {

        var el = this.elements[index]
        var view = this.deviceType
        var pos = el.position
        var mode = el.mode

        if(el[view] && el[view].mode) mode = el[view].mode
        if(el[view] && el[view].position) pos = el[view].position

        pos.x = pos.x || 'center';
         pos.y = pos.y || 'center';
         pos.offsetX = pos.offsetX || 0;
         pos.offsetY = pos.offsetY || 0;



        if (mode == "content") {

            var $container = this.$wrapper.find(".row-" + pos.y).find(".col-" + pos.x);

            el.$node.addClass("el-" + pos.x);
            el.$node.removeClass("element-canvas").addClass("element-content")

            if (el.parent) {
                this.$wrapper.find("#" + el.parent).append(el.$node);
            } else if (el.node.wrapper) {
                el.node.wrapper.append(el.$node);
                $container.append(el.node.wrapper);
            } else {
                $container.append(el.$node);
            }

            if (jQuery(".el-center").length && (jQuery(".el-left").length || jQuery(".el-right").length)) this.$content.find("td").css("width", "33.33%");
            else this.$content.find("td").css("width", "auto");
        } else {

            el.$node.removeClass("element-content").addClass("element-canvas")
            el.$node.removeClass("el-" + pos.x);

            this.$canvas.append(el.node.wrapper)
        }

        if (el.display) el.node.wrapper.css("display", el.display);
    };

    this.addNodeElement = function(index) {
        var self = this;
        var el = this.elements[index]
        var view = this.deviceType

        switch (el.type) {
            case "text":
                el.node = document.createElement(el.htmlTag || "p");
                break;

            case "heading":
                el.node = document.createElement(el.htmlTag || "h2");
                break;

            case "image":
                el.node = new Image();
                el.node.draggable = false;

                if (el.src) el.node.src = el.src;
                if (el.size) {
                    el.node.style.setProperty("width", el.size + "px");
                    el.node.style.setProperty("height", "auto");
                }

                el.node.onload = function() {
                    self.updateElementPosition(index);
                };
                break;

            case "video":
                var $node = jQuery('<video width="320" height="240" muted="muted" autoplay="autoplay" loop="loop" playsinline="playsinline" preload="metadata" data-aos="fade-up"><source src="' + el.src + '" type="video/mp4"></video>');
                var node = $node[0];
                el.node = node;
                if (el.width) node.width = el.width;
                if (el.height) node.height = el.height;
                node.oncanplaythrough = function() {
                    node.muted = true;
                    node.play();
                    node.pause();
                    node.play();
                    self.updateElementPosition(index);
                };

                el.node.draggable = false;

                if (el.size) {
                    el.node.style.setProperty("width", el.size + "px");
                    el.node.style.setProperty("height", "auto");
                }

                break;
            case "iframe":
                var iframe = document.createElement('iframe');
                iframe.src = el.src;
                iframe.width = '100%';
                iframe.height = '100%';
                jQuery(iframe).css('pointer-events','none');

                var $node = jQuery('<div>' + iframe.outerHTML + '</div>');
                var node = $node[0];
                el.node = node;
                if (el.width) node.width = el.width;
                if (el.height) node.height = el.height;

                el.node.draggable = false;

                if (el.size) {
                    el.node.style.setProperty("width", el.size + "px");
                    el.node.style.setProperty("height", "auto");
                }

                break;

            case "button":
                el.node = document.createElement("a");
                el.node.classList.add("stx-layer-button");
                break;
        }

        el.$node = jQuery(el.node)

        el.node.wrapper = jQuery(document.createElement("div"));
        el.node.wrapper.append(el.$node);
        if (el.display) el.node.wrapper.css("display", el.display);

        el.mode = el.mode || "canvas";
        el.contentAnimationType = el.contentAnimationType || "animating";

        el.node.classList.add("element-" + el.mode);
        el.node.classList.add("element");

        el.node.dataset.id = self.nodes;
        el.index = self.nodes;

        self.nodes++;

        el.node.onmousedown = function(e) {
            self.onLayerMouseDown(Number(this.dataset.id), e.shiftKey);
        };

        this.createStyle(el.index)

        this.updateElementMode(index)

        this.updateElementProperties(el.index);

        el.$node.css({
            '-webkit-transition':'none',
            '-moz-transition':'none',
            '-o-transition':'none',
            'transition':'none',
        })
    };

    this.addNodeElements = function(elements) {
        for(var i = 0; i < elements.length; i++){
            this.addNodeElement(i);
            this.updateClasses(i)
        }
    };

    this.createStyle = function(index){

        var el = this.elements[index]

        el.id = el.id || String(Date.now()) + parseInt(Math.random()*100)

        el.node.id = "n" + el.id

        var cssProperties = {

            size: "width",
            width: 'width',
            height: 'height',
            margin: 'margin',
            padding: 'padding',

            paddingTop: 'padding-top',
            paddingBottom: 'padding-bottom',
            paddingLeft: 'padding-left',
            paddingRight: 'padding-right',

            marginTop: 'margin-top',
            marginBottom: 'margin-bottom',
            marginLeft: 'margin-left',
            marginRight: 'margin-right',

            fontFamily: 'font-family',
            fontSize: 'font-size',
            fontWeight: 'font-weight',

            lineHeight: 'line-height',
            letterSpacing: 'letter-spacing',
            textAlign: 'text-align',
            backgroundColor: 'background-color',

            borderWidth: 'border-width',
            borderStyle: 'border-style',
            borderColor: 'border-color',
            borderRadius: 'border-radius',

            textColor: 'color',
            textShadow: 'text-shadow',

            minWidth: 'min-width',
            maxWidth: 'max-width'
        }

         function appendStyle(styles, id) {
            var css = document.createElement("style");
            css.type = "text/css";
            css.id = id

            if (css.styleSheet) css.styleSheet.cssText = styles;
            else css.appendChild(document.createTextNode(styles));

            document.body.appendChild(css);
        }

        function createStyle(className, properties, customCSS, mobileSize, mobileProperties, tabletSize, tabletProperties, hoverProperties) {
            if (!properties) return "";

            var style = className + "{";
            var cssPropertyName = "";

            Object.keys(properties).forEach(function(property) {
                cssPropertyName = STX.Utils.camelToDash(property);
                if ("textColor" === property) cssPropertyName = "color";
                if(properties[property] != "")
                    style += cssPropertyName + ":" + properties[property] + ";";
            });

            if(customCSS)
                style += customCSS;


            style += "}";



            style += className + '.tablet';

            style += '{';

            Object.keys(tabletProperties).forEach(function(property) {
                cssPropertyName = STX.Utils.camelToDash(property);
                if ("textColor" === property) cssPropertyName = "color";
                if(tabletProperties[property] != "")
                    style += cssPropertyName + ":" + tabletProperties[property] + ";";
            });

            style += "}";



            style += className + ".mobile";

            style += '{';

            Object.keys(mobileProperties).forEach(function(property) {
                cssPropertyName = STX.Utils.camelToDash(property);
                if ("textColor" === property) cssPropertyName = "color";
                if(mobileProperties[property] != "")
                    style += cssPropertyName + ":" + mobileProperties[property] + ";";
            });

            style += "}";



            style += className + ":hover{";

            Object.keys(hoverProperties).forEach(function(property) {
                cssPropertyName = STX.Utils.camelToDash(property);
                if ("textColor" === property) cssPropertyName = "color";
                if(hoverProperties[property] != "")
                    style += cssPropertyName + ":" + hoverProperties[property] + ";";
            });

            style += "}";



            return style;
        }

        function cssValue(name, val) {
            return isNaN(val) || name === "fontWeight" || val == "" ? val : val + "px";
        }

        var style = {}
        var mobileSize = 768
        var tabletSize = 1024
        var styleMobile = {}
        var styleTablet = {}
        var styleHover = {}

        for (var prop in cssProperties) {
            if(el[prop] != "")
                style[cssProperties[prop]] = cssValue(prop, el[prop] || '');
            if(el['mobile'] && el['mobile'][prop] != "")
                styleMobile[cssProperties[prop]] = cssValue(prop, el['mobile'][prop] || '');
            if(el['tablet'] && el['tablet'][prop] != "")
                styleTablet[cssProperties[prop]] = cssValue(prop, el['tablet'][prop] || '');
             if(el['hover'] && el['hover'][prop] != "")
                styleHover[cssProperties[prop]] = cssValue(prop, el['hover'][prop] || '');
        }

        if(!this.styles[el.id]){
            var s = createStyle('#n'+el.id, style, el.customCSS, mobileSize, styleMobile, tabletSize, styleTablet, styleHover)
            appendStyle(s, "s" + el.id)
            this.styles[el.id] = s
        }

    }

    this.setDeviceType = function(deviceType){
        this.deviceType = deviceType

        if(!this.elements || !this.elements.length) return;

        for(var i = 0; i < this.elements.length; i++){
            this.updateClasses(i)
            this.updateElementMode(i);
            this.updateElementPosition(i)
        }


    }

    this.updateClasses = function(index){
        var el = this.elements[index]
        el.$node.removeClass('mobile tablet desktop').addClass(this.deviceType)
    }
};
