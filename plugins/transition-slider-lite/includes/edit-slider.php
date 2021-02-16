<div class='wrap' style="display: none;">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <div id="post-body-content">
                <div id='edit-slider' style="display: ">
                    <form method="post" id="slider-options-form" enctype="multipart/form-data" action="admin-ajax.php?page=transition_slider_admin&action=save_settings&id=<?php echo( esc_html($current_id));?>">

                        <div id="STX-admin" class="STX-admin">
                            <div class="STX-nav">
                                <div class="STX-header-admin-nav STX-header-right">
                                    <div class="STX-nav-logo"></div>
                                    <a href="admin.php?page=transition_slider_admin" class="STX-h4 STX-btn-topbar-edit STX-btn-dashboard-edit" data-form-name="dashboard"><?php esc_html_e( 'Dashboard', 'stx' ); ?></a>
									<div class="STX-breadcrumb">
										<span class="STX-breadcrumb-icon dashicons dashicons-arrow-right-alt2"></span>
										<a class="STX-h4 STX-active STX-btn-topbar-edit btn-slider-name" data-form-name="slider-name"></a>
									</div>
                                </div>
								<div class="STX-notification-messages">
									<div class="STX-saved-notification-wrapper">
										<div class="STX-saved-notification-content"><?php esc_html_e( 'Slider saved', 'stx' ); ?></div>
									</div>
								</div>
								<div class="transition-slider-sticky-btns">
									<div class="STX-save-btn-wrapper btn-disabled">
										<span class="STX-save-btn-icon dashicons dashicons-open-folder"></span>
										<input type="submit" form="slider-options-form" title="Save" value="<?php esc_html_e( 'SAVE', 'stx' ); ?>" class="save-input-text-disabled slider-save-btn btns-dashboard-nav"/>
									</div>
									<div class="STX-preview-btn-wrapper btn-disabled">
										<span class="STX-preview-btn-icon dashicons dashicons-visibility"></span>
										<a id="transition-slider-preview" class="slider-preview-btn btns-dashboard-nav slider-preview" title="Preview"><?php esc_html_e( 'PREVIEW', 'stx' ); ?>
										</a>
									</div>
									<div class="STX-delete-btn-wrapper btn-disabled">
										<span class="STX-delete-btn-icon dashicons dashicons-trash"></span>
										<a class="delete-all-slides-button" title="Delete all slides">
											<?php esc_html_e( 'DELETE', 'stx' ); ?>
										</a>
									</div>
								</div>

                                                                <div class="STX-header-right-nav">
                                    <a class="STX-nav-go-pro" href="https://codecanyon.net/item/transition-slider-wordpress-plugin/23531533?ref=creativeinteractivemedia&amp;ref2=wporg" target="_blank" deluminate_imagetype="unknown">GO PRO VERSION!</a>
                                </div>

                                                            </div>

                                                        <div style="font-size: 14px;background-color: #f8bf3a;border-radius: 4px;padding: 4px;margin: 20px 0px 0px 0px;text-align: center;color: #fff;"><div>This is Transition Slider Lite. Get PRO version to enable more features - premium templates, import &amp; export sliders, more options for slider responsive size.</div></div>

                                                        <div class="STX-admin-content STX-table STX-table-fixed STX-content">
                                <div class="STX-tr">
                                    <div class="STX-edit-wrapp STX-td STX-content-base-bg">
                                        <div class="STX-main-table-wrapp">
                                            <div class="STX-td STX-sidebar STX-sidebar-base-bg">
                                                <dl class="STX-list STX-h3">
                                                    <dt><a class="STX-btn-menu" data-form-name="slides"><?php esc_html_e( 'Slides', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="publish"><?php esc_html_e( 'Publish', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="general_settings"><?php esc_html_e( 'General', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="size"><?php esc_html_e( 'Size', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="layer"><?php esc_html_e( 'Layer', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="autoplay"><?php esc_html_e( 'Autoplay', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="buttons"><?php esc_html_e( 'Video', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="arrows"><?php esc_html_e( 'Navigation', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="wheel_navigation"><?php esc_html_e( 'Wheel Navigation', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="pagination"><?php esc_html_e( 'Pagination', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="thumbs"><?php esc_html_e( 'Thumbnails', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="hash_navigation"><?php esc_html_e( 'Hash navigation', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="loading"><?php esc_html_e( 'Loading', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="lightbox"><?php esc_html_e( 'Lightbox', 'stx' ); ?></a></dt>
                                                </dl>
                                            </div>
                                            <div class="general-settings-form">
                                                <div class="slider-options-wrappper">
                                                    <div class="column-left">
														<div class="options_slides STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Slides', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-slides">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_publish STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Publish', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-publish">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_general_settings STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'General', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-general-settings">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>


                                                        <div class="options_size STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Size', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-size">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_layer STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Layer', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-layer">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_autoplay STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Autoplay', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-autoplay">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_arrows STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Navigation', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-arrows">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_wheel_navigation STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Wheel Navigation', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-wheel-navigation">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_pagination STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Pagination', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-pagination">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_thumbs STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Thumbnails', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-thumbs">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_hash_navigation STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Hash navigation', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-hash-navigation">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_buttons STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Video', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-buttons">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_loading STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Loading', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-loading">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_lightbox STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Lightbox', 'stx' ); ?></div>
                                                            <div class="table-wrap">
                                                                <table class="form-table" id="slider-options-lightbox">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="preview-slider-modal" tabindex="0" class="STX-fullscreen-modal media-modal wp-core-ui" style="display: none;">
    <button type="button" class="media-modal-close STX-modal-close STX-modal-close-preview"><span class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span></button>
    <div class="media-modal-content STX-modal-content">
        <div class="edit-attachment-frame mode-select hide-menu hide-router">
            <div class="edit-media-header">
            </div>
            <div class="media-frame-title STX-modal-title"><h1>Slider Preview</h1></div>
            <div class="media-frame-content STX-modal-frame-content">
                <div id="slider-preview-container">
                    <div id="slider-preview"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="edit-slide-modal" tabindex="0" class="STX-fullscreen-modal media-modal wp-core-ui" style="display: none;">
    <div class="media-modal-content STX-modal-content">
        <div class="edit-attachment-frame mode-select hide-menu hide-router">
            <div class="edit-media-header">
                <div class="media-frame-title STX-modal-title">
					<div class="STX-nav">
						<div class="STX-header-admin-nav STX-header-right">
							<a href="admin.php?page=transition_slider_admin" class="STX-h4 STX-btn-topbar-edit STX-btn-dashboard-edit" data-form-name="dashboard"><?php esc_html_e( 'Dashboard', 'stx' ); ?></a>
							<div class="STX-breadcrumb">
								<span class="STX-breadcrumb-icon dashicons dashicons-arrow-right-alt2"></span>
								<a class="STX-h4 STX-active STX-btn-topbar-edit btn-slider-name" data-form-name="slider-name"></a>
							</div>
							<div class="STX-breadcrumb">
								<span class="STX-breadcrumb-icon dashicons dashicons-arrow-right-alt2"></span>
								<a class="STX-h4 STX-active STX-btn-topbar-edit btn-slide-name" data-form-name="slider-name"></a>
							</div>
						</div>
					</div>
				</div>

								<div class="STX-notification-messages">
					<div class="STX-saved-notification-wrapper">
						<div class="STX-saved-notification-content"><?php esc_html_e( 'Slider saved', 'stx' ); ?></div>
					</div>
				</div>
                <div class="STX-header-buttons">
					<div class="STX-previous-btn-wrapper">
						<span class="STX-previous-btn-icon dashicons dashicons-arrow-left-alt2"></span>
						<a id="transition-slider-previous" class="slider-previous-btn btns-dashboard-nav slider-previous" title="Previous Slide"><?php esc_html_e( 'PREVIOUS', 'stx' ); ?>
						</a>
					</div>
					<div class="STX-next-btn-wrapper">
						<span class="STX-next-btn-icon dashicons dashicons-arrow-right-alt2"></span>
						<a id="transition-slider-next" class="slider-next-btn btns-dashboard-nav slider-next" title="Next Slide"><?php esc_html_e( 'NEXT', 'stx' ); ?>
						</a>
					</div>
					<div class="STX-save-btn-wrapper btn-disabled">
						<span class="STX-save-btn-icon dashicons dashicons-open-folder"></span>
						<input type="submit" form="slider-options-form" title="Save" value="<?php esc_html_e( 'SAVE', 'stx' ); ?>" class="save-input-text-disabled slider-save-btn btns-dashboard-nav"/>
					</div>
					<div class="STX-preview-btn-wrapper btn-disabled">
						<span class="STX-preview-btn-icon dashicons dashicons-visibility"></span>
						<a id="transition-slider-preview" class="slider-preview-btn btns-dashboard-nav slider-preview" title="Preview Slider"><?php esc_html_e( 'PREVIEW', 'stx' ); ?>
						</a>
					</div>
					<div class="STX-back-btn-wrapper">
						<span class="STX-back-btn-icon dashicons dashicons-undo"></span>
						<a id="transition-slider-back" class="slider-back-btn btns-dashboard-nav slider-back" title="Back"><?php esc_html_e( 'BACK', 'stx' ); ?>
						</a>
					</div>
                </div>
            </div>

            <div class="media-frame-content STX-modal-frame-content">

                <div tabindex="0" data-id="185" class="attachment-details save-ready">

                    <div class="slider-preview-wrapper attachment-media-view landscape">
                        <div class="layer-list-popup">
                            <div class="layer-list-popup-header">
                                <div class="layer-list-popup-dropdown"></div>
                                <div class="layer-list-popup-title">Layers</div>
                                <div class="layer-list-popup-close"></div>
                            </div>
                            <ul class="layers-wrapper"></ul>
                        </div>

                        <div class="slider-preview-scroll">
                            <div class="slider-preview-area" ondrop="">
                                <div class="video-container"></div>

                                <div class="stx-layers">

                                    <div class="stx-layers-canvas"></div>

                                    <table class="stx-layers-content">
                                        <tr class="row-top">
                                            <td align="left" class="col-left"></td>
                                            <td align="center" class="col-center"></td>
                                            <td align="right" class="col-right"></td>
                                        </tr>
                                        <tr class="row-center">
                                            <td align="left" class="col-left"></td>
                                            <td align="center" class="col-center"></td>
                                            <td align="right" class="col-right"></td>
                                        </tr>
                                        <tr class="row-bottom">
                                            <td align="left" class="col-left"></td>
                                            <td align="center" class="col-center"></td>
                                            <td align="right" class="col-right"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <div class="right-click-menu" style="display: none;">
                                <ul class="menu-options">
                                    <li class="menu-option menu-option-copy">Copy</li>
                                    <li class="menu-option menu-option-paste menu-option-disabled">Paste</li>
                                    <li class="menu-option menu-option-duplicate">Duplicate</li>
                                    <li class="menu-option menu-option-delete">Delete</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="slide-settings-main-menu-wrapper">
                        <div class="slide-settings-main-header">
                            <div class="slide-settings-main-header-left-button"></div>
                            <div class="slide-settings-main-menu-title">
                                Slide Settings
                            </div>
                            <div class="slide-settings-main-header-right-button"></div>
                        </div>


                        <div class="slide-settings-tabs-wrapper">
                            <ul class="slide-settings-tabs">
                                <li class="slide-tab-slide"><a href="#tabs-slide">Slide</a></li>
                                <li class="slide-tab-layer"><a href="#tabs-layer">Layers</a></li>
                            </ul>
                            <div class="slide-settings-tabs-content-wrapper">
                                <div id="tabs-slide" class="settings">
                                    <div class="accordion">
                                        <h3 class="slide-settings-accordion-menu">Background</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title">Choose Image or Video</div>
                                            <input type="hidden" class="STX-element-input-button-left" placeholder="Media path..." id="src" name="src">
                                            <div class="STX-slide-image-preview STX-fullline-element STX-slide-src">
                                                <img class="STX-slide-src-preview">
                                                <video class="STX-slide-src-preview-video" preload="metadata">
                                            </div>
                                        </div>

                                        <h3 class="slide-settings-accordion-menu">Thumbnail</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title">Choose thumbnail image</div>
                                            <input type="hidden" class="STX-element-input-button-left" placeholder="Media path..." id="thumbSrc" name="thumbSrc">
                                            <div class="STX-slide-thumbnail-preview STX-fullline-element STX-slide-thumbSrc"></div>
                                        </div>

                                        <h3 class="slide-settings-accordion-menu">Transition</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title STX-fullline-element">Effect<div class="property-description" title='Effect name'></div></div>
                                            <select class="STX-element-dropdown STX-fullline-element" name="transitionEffect" id="transitionEffect">
                                                <option value="">Default</option>
                                                <option value="slide">Slide</option>
                                                <option value="roll">Roll</option>
                                                <option value="stretch">Stretch</option>
                                                <option value="warp">Warp</option>
                                                <option value="zoom">Zoom</option>
                                                <option value="powerzoom">Power zoom</option>
                                                <option value="crossfade">Crossfade</option>
                                                <option value="flash">Flash</option>
                                                <option value="fade">Fade</option>
                                                <option value="twirl">Twirl</option>
                                                <option value="line">Line</option>
                                            </select>

                                            <div id="setting-direction">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Effect Direction<div class="property-description" title='Transition animation direction'></div></div>
                                                <select class="STX-element-dropdown STX-inline-element-right STX-row-size60" name="direction" id="direction">
                                                </select>
                                            </div>

                                            <div id="setting-easing">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Effect Easing<div class="property-description" title='Transition animation  easing type'></div></div>
                                                <select class="STX-element-dropdown STX-inline-element-right STX-row-size60" name="easing" id="easing">
                                                </select>
                                            </div>

                                            <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Duration<div class="property-description" title='Transition duration in ms'></div></div>
                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input class="STX-element-input-label-left" type="text" id="transitionDuration" name="transitionDuration">
                                                <span class="STX-element-input-label-right input-group-text">ms</span>
                                            </div>

                                            <div id="setting-brightness" >
                                                <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Brightness<div class="property-description" title='Transition brightness (1: default, 0: min, 10: max)'></div></div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                    <input class="STX-element-input-label-left" type="number" min="0" max="10" id="brightness" name="brightness">
                                                </div>

                                            </div>

                                            <div id="setting-distance" >
                                                <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Distance<div class="property-description" title='Transition offset (0: no offset, 5: max)'></div></div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                    <input class="STX-element-input-label-left" type="number" min="0" max="10" id="distance" name="distance">
                                                </div>
                                            </div>

                                            <div id="setting-blur" >
                                                <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Blur<div class="property-description" title='Motion Blur (0: no blur,1: low, 2: medium, 3: high, 5 max)'></div></div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                    <input class="STX-element-input-label-left" type="number" min="0" max="10" id="blur" name="blur">
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="slide-settings-accordion-menu">Advanced</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Full Slide Link</div>
                                            <input type="text" name="url" id="url" class="STX-element-input STX-inline-element-right STX-row-size60">

                                            <input type="checkbox" name="urlTarget" id="urlTarget" aria-label="Open in new window" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                            <div class="STX-element-title STX-inline-element-right STX-row-size90">Open link in new window</div>

                                            <input type="checkbox" name="invertSelectorColor" id="invertSelectorColor" aria-label="Invert menu colors" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                            <div class="STX-element-title STX-inline-element-right STX-row-size90">Invert menu colors</div>
                                        </div>
                                    </div>

                                </div>


                                <div id="tabs-layer">

                                    <button class="STX-elements-item-text add-text" draggable="true">Text Editor</button>
                                    <button class="STX-elements-item-heading add-heading" draggable="true">Heading</button>
                                    <button class="STX-elements-item-image add-image" draggable="true">Image</button>
                                    <button class="STX-elements-item-button add-button" draggable="true">Button</button>
                                    <button class="STX-elements-item-video add-video" draggable="true">Video</button>


                                                                    </div>
                            </div>
                        </div>

                        <div class="element-settings-tabs-wrapper">
                            <ul class="element-settings-tabs">
                                <li class="element-tab-content"><a href="#tabs-content">Content</a></li>
                                <li class="element-tab-style"><a href="#tabs-style">Style</a></li>
                                <li class="element-tab-advanced"><a href="#tabs-advanced">Advanced</a></li>
                            </ul>
                            <div class="element-settings-tabs-content-wrapper">

                                <div id="tabs-content">

                                    <div class="accordion">
                                        <h3 class="slide-settings-accordion-menu">General</h3>
                                        <div class="element-settings slide-settings-accordion-content">
                                            <div class="STX-element-title img-el">Choose image</div>
                                            <div class="STX-element-title video-el">Choose video</div>
                                            <div class="STX-element-image-preview STX-fullline-element img-el"></div>
                                            <video class="STX-element-video-preview video-el" preload="metadata" style="display: inline-block;"></video>
                                            <div class="STX-element-title heading-el">Text</div>
                                            <div class="STX-element-title btn-el">Label</div>
                                            <div class="STX-element-title iframe-el">URL</div>
                                            <textarea id="text-content" name="content" class="STX-element-textarea STX-fullline-element heading-el btn-el text-el">Add text</textarea>
                                            <input type="text" id="src" name="src" class="STX-fullline-element iframe-el">
                                            <div class="STX-element-title STX-inline-element-left btn-el">Link</div>
                                            <input type="text" class="STX-element-input STX-inline-element-left btn-el" name="url">
                                            <input type="checkbox" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox btn-el" name="urlTargetBlank">
                                            <div class="STX-element-title STX-inline-element-right STX-row-size90 btn-el">Open in new tab</div>
                                            <div class="STX-element-title STX-inline-element-right STX-row-size100 heading-el">HTML Tag</div>
                                            <select name="htmlTag" class="STX-element-dropdown STX-inline-element-right STX-row-size40 heading-el">
                                                <option>h1</option>
                                                <option>h2</option>
                                                <option>h3</option>
                                                <option>h4</option>
                                                <option>h5</option>
                                                <option>h6</option>
                                                <option>div</option>
                                                <option>span</option>
                                                <option>p</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="accordion text-el heading-el">
                                        <h3 class="element-settings-accordion-menu">Templates</h3>
                                        <div class="element-settings-accordion-content" style="background: rgba(0,0,0,.1);">
                                            <div class="element-template-wrapper">
                                                <text class="element-template text-template-1">
                                                    <span>Text 1</span>
                                                </text>
                                            </div>
                                            <div class="element-template-wrapper">
                                                <text class="element-template text-template-2">
                                                    <span>Text 2</span>
                                                </text>
                                            </div>
                                            <div class="element-template-wrapper">
                                                <text class="element-template text-template-3">
                                                    <span>Text 3</span>
                                                </text>
                                            </div>
                                            <div class="element-template-wrapper">
                                                <text class="element-template text-template-4">
                                                    <span>Text 4</span>
                                                </text>
                                            </div>
                                            <div class="element-template-wrapper">
                                                <text class="element-template text-template-5">
                                                    <span>Text 5</span>
                                                </text>
                                            </div>

                                                                                    </div>
                                    </div>

                                    <div class="accordion btn-el">
                                            <h3 class="element-settings-accordion-menu">Templates</h3>
                                            <div class="element-settings-accordion-content" style="background: rgba(0,0,0,.1);">

                                                <div class="element-template-wrapper">
                                                    <button class="element-template button-template-1">
                                                        <span>Style 1</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template button-template-2">
                                                        <span>Style 2</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template button-template-3">
                                                        <span>Style 3</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template  button-template-4">
                                                        <span>Style 4</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template  button-template-5">
                                                        <span>Style 5</span>
                                                    </button>
                                                </div>

                                                                                            </div>
                                        </div>

                                </div>

                                <div id="tabs-style">

                                    <div class="accordion">
                                        <h3 class="text-el heading-el btn-el element-settings-accordion-menu">Typography</h3>
                                        <div class="text-el heading-el btn-el element-settings-accordion-content">
                                            <div class="style-font-wrapper">
                                                <ul class="style-settings-tabs">
                                                    <li class="style-tab-font"><a href="#tab-style-font-normal">NORMAL</a></li>
                                                    <li class="style-tab-font"><a href="#tab-style-font-hover">HOVER</a></li>
                                                </ul>
                                                <div class="style-settings-tabs-content-wrapper">

                                                    <div id="tab-style-font-normal" class="element-settings subtab-style">

                                                        <div class="STX-element-title STX-inline-element-left STX-row-size60">Family</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Color</div>

                                                        <select class="googleFontList STX-element-dropdown STX-inline-element-left STX-row-size60" name="fontFamily"></select>
                                                        <input type="text" class="color-picker STX-inline-element-right STX-row-size40" data-alpha="true" name="textColor">


                                                        <div class="STX-element-title STX-inline-element-left STX-row-size30">Size</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Font weight</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size30">Line height</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="fontSize" class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,em,rem,vw">
                                                            </div>
                                                        </div>
                                                        <select name="fontWeight" class="STX-element-dropdown STX-inline-element-right STX-row-size40">
                                                            <option>100</option>
                                                            <option>200</option>
                                                            <option>300</option>
                                                            <option>400</option>
                                                            <option>500</option>
                                                            <option>600</option>
                                                            <option>700</option>
                                                            <option>800</option>
                                                            <option>900</option>
                                                            <option>bold</option>
                                                            <option>bolder</option>
                                                            <option>inherit</option>
                                                            <option>initial</option>
                                                            <option>lighter</option>
                                                            <option>normal</option>
                                                            <option>unset</option>
                                                        </select>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="lineHeight" class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,em">
                                                            </div>
                                                        </div>

                                                        <div class="STX-element-title STX-inline-element-right STX-row-size100">Letter spacing</div>
                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="letterSpacing"class="STX-element-input-label-left">
                                                            <span class="STX-element-input-label-right input-group-text">px</span>
                                                        </div>

                                                        <div class="STX-element-title STX-inline-element-left STX-row-size100">Text align</div>

                                                        <div class="STX-element-select STX-inline-element-left STX-row-size100">
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-left" name="textAlign" value="left">
                                                            <label class="STX-element-select-label STX-text-left" for="STX-element-text-font-normal-textAlign-left"></label>
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-center" name="textAlign" value="center">
                                                            <label class="STX-element-select-label STX-text-center" for="STX-element-text-font-normal-textAlign-center"></label>
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-right" name="textAlign" value="right">
                                                            <label class="STX-element-select-label STX-text-right" for="STX-element-text-font-normal-textAlign-right"></label>
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-justify" name="textAlign" value="justify">
                                                            <label class="STX-element-select-label STX-text-justify" for="STX-element-text-font-normal-textAlign-justify"></label>
                                                        </div>

                                                    </div>

                                                    <div id="tab-style-font-hover" class="element-settings-hover subtab-style">
                                                        <div class="STX-element-title STX-inline-element-left">Color</div>
                                                        <input type="text" class="color-picker STX-inline-element-left STX-row-size40 has-hover" data-alpha="true" name="textColor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Background</h3>
                                        <div class="element-settings-accordion-content">
                                            <div class="style-font-wrapper">
                                                <ul class="style-settings-tabs">
                                                    <li class="style-tab-font"><a href="#tab-style-style-normal">NORMAL</a></li>
                                                    <li class="style-tab-font"><a href="#tab-style-style-hover">HOVER</a></li>
                                                </ul>
                                                <div class="style-settings-tabs-content-wrapper">
                                                    <div id="tab-style-style-normal" class="element-settings subtab-style">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size100">Background color</div>
                                                        <input type="text" class="color-picker STX-inline-element-left STX-row-size100" data-alpha="true" name="backgroundColor">
                                                    </div>

                                                    <div id="tab-style-style-hover" class="element-settings-hover subtab-style ">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size100">Background color</div>
                                                        <div class="STX-inline-element-left STX-row-size100">
                                                            <input type="text" class="color-picker has-hover" data-alpha="true" name="backgroundColor">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Border</h3>
                                        <div class="element-settings-accordion-content">
                                            <div class="style-font-wrapper">
                                                <ul class="style-settings-tabs">
                                                    <li class="style-tab-font"><a href="#tab-style-style-normal">NORMAL</a></li>
                                                    <li class="style-tab-font"><a href="#tab-style-style-hover">HOVER</a></li>
                                                </ul>
                                                <div class="style-settings-tabs-content-wrapper">
                                                    <div id="tab-style-style-normal" class="element-settings subtab-style">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size30">Border</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Border style</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size30">Border color</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" class="STX-element-input-label-left" name="borderWidth">
                                                            <span class="STX-element-input-label-right input-group-text">px</span>
                                                        </div>

                                                        <select class="STX-element-dropdown STX-inline-element-right STX-row-size40" name="borderStyle">
                                                            <option>dotted</option>
                                                            <option>dashed</option>
                                                            <option>solid</option>
                                                            <option>double</option>
                                                            <option>groove</option>
                                                            <option>ridge</option>
                                                            <option>inset</option>
                                                            <option>outset</option>
                                                            <option>none</option>
                                                            <option>hidden</option>
                                                        </select>

                                                        <input type="text" class="color-picker STX-inline-element-right STX-row-size30" data-alpha="true" name="borderColor">

                                                        <div class="STX-element-title STX-inline-element-left">Border radius</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="borderRadius"class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="tab-style-style-hover" class="element-settings-hover subtab-style ">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size30">Border</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Border style</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size30">Border color</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" class="STX-element-input-label-left" name="borderWidth">
                                                            <span class="STX-element-input-label-right input-group-text">px</span>
                                                        </div>

                                                        <select class="STX-element-dropdown STX-inline-element-right STX-row-size40" name="borderStyle">
                                                            <option>dotted</option>
                                                            <option>dashed</option>
                                                            <option>solid</option>
                                                            <option>double</option>
                                                            <option>groove</option>
                                                            <option>ridge</option>
                                                            <option>inset</option>
                                                            <option>outset</option>
                                                            <option>none</option>
                                                            <option>hidden</option>
                                                        </select>

                                                        <input type="text" class="color-picker STX-inline-element-right STX-row-size30 has-hover" data-alpha="true" name="borderColor">

                                                        <div class="STX-element-title STX-inline-element-left">Border radius</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="borderRadius"class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Spacing</h3>
                                        <div class="element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size100">Margin</div>
                                            <ul class="STX-element-dimensions element-settings STX-inline-element-left STX-row-size100">
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginTop">
                                                    <label for="STX-element-dimension-text-style-top-normal" class="STX-element-dimension-label">Top</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginRight">
                                                    <label for="STX-element-dimension-text-style-right-normal" class="STX-element-dimension-label">Right</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginBottom">
                                                    <label for="STX-element-dimension-text-style-bottom-normal" class="STX-element-dimension-label">Bottom</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginLeft">
                                                    <label for="STX-element-dimension-text-style-left-normal" class="STX-element-dimension-label">Left</label>
                                                </li>
                                                <li class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </li>

                                            </ul>


                                            <div class="STX-element-title STX-inline-element-left STX-row-size100">Padding</div>
                                            <ul class="STX-element-dimensions element-settings STX-inline-element-left STX-row-size100">
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingTop">
                                                    <label for="STX-element-dimension-text-style-top-normal" class="STX-element-dimension-label">Top</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingRight">
                                                    <label for="STX-element-dimension-text-style-right-normal" class="STX-element-dimension-label">Right</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingBottom">
                                                    <label for="STX-element-dimension-text-style-bottom-normal" class="STX-element-dimension-label">Bottom</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingLeft">
                                                    <label for="STX-element-dimension-text-style-left-normal" class="STX-element-dimension-label">Left</label>
                                                </li>
                                                <li class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,em,%">
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Position</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size50">Position</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size50">Display</div>

                                            <select name="mode" class="STX-element-dropdown STX-inline-element-left STX-row-size50">
                                                <option value="canvas">absolute</option>
                                                <option value="content">relative</option>
                                            </select>

                                            <select name="display" class="STX-element-dropdown STX-inline-element-left STX-row-size50">
                                                <option>block</option>
                                                <option>inline-block</option>
                                            </select>

                                            <div class="STX-element-title STX-inline-element-left STX-row-size70">Horizontal Align</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Offset</div>
                                            <select name="position.x" class="STX-element-dropdown STX-inline-element-left  STX-row-size70">
                                                <option>left</option>
                                                <option>center</option>
                                                <option>right</option>
                                            </select>
                                            <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                <input name="position.offsetX" type="number" class="STX-element-input-label-left">
                                                <span class="STX-element-input-label-right input-group-text">px</span>
                                            </div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size70">Vertical Align</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Offset</div>
                                            <select name="position.y" class="STX-element-dropdown STX-inline-element-left  STX-row-size70">
                                                <option>top</option>
                                                <option>center</option>
                                                <option>bottom</option>
                                            </select>
                                            <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                <input name="position.offsetY" type="number" class="STX-element-input-label-left">
                                                <span class="STX-element-input-label-right input-group-text">px</span>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Size</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Width</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Min Width</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Max Width</div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size40">
                                                <input type="number" class="STX-element-input-label-left" id="width" name="width">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%,vw">
                                                </div>
                                            </div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="minWidth" name="minWidth">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%,vw">
                                                </div>
                                            </div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="maxWidth" name="maxWidth">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%,vw">
                                                </div>
                                            </div>


                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Height</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Min Height</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Max Height</div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size40">
                                                <input type="number" class="STX-element-input-label-left" id="height" name="height">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </div>
                                            </div>


                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="minHeight" name="minHeight">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </div>
                                            </div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="maxHeight" name="maxHeight">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="tabs-advanced">

                                    <div class="accordion">

                                        <h3 class="element-settings-accordion-menu">Animation</h3>

                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Animation type</div>
                                            <select name="contentAnimationType" class="STX-element-dropdown STX-inline-element-left STX-row-size40 STX-content-animation-type">
                                                <option>typing</option>
                                                <option>animating</option>
                                                <option>none</option>
                                            </select>

                                            <div class="content-animation-type typing">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Speed</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.speed" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Loop</div>
                                                <div class="STX-inline-element-left STX-row-size40">
                                                    <input type="checkbox" name="typingAnimation.loop" id="typingAnimation-loop" aria-label="Loop" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Loop delay</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.loopDelay" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Cursor</div>
                                                <div class="STX-inline-element-left STX-row-size40">
                                                    <input type="checkbox" name="typingAnimation.cursor" id="typingAnimation-cursor" aria-label="Cursor" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Start delay</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.startDelay" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Freeze at</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.freezeAt" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Unfreeze after</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.unfreezeAfter" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                            </div>

                                            <div class="content-animation-type animating">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Enter animation</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Speed</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Delay</div>
                                                <select name="startAnimation.animation" class="STX-element-dropdown STX-inline-element-left STX-row-size40 animateCSS">
                                                    <option value="fadeIn">Fade</option>
                                                    <option value="fadeInDown">Fade Down</option>
                                                    <option value="fadeInDownBig">Fade Down Big</option>
                                                    <option value="fadeInLeft">Fade Beft</option>
                                                    <option value="fadeInLeftBig">Fade Left Big</option>
                                                    <option value="fadeInRight">Fade Right</option>
                                                    <option value="fadeInRightBig">Fade Right Big</option>
                                                    <option value="fadeInUp">Fade Up</option>
                                                    <option value="fadeInUpBig">Fade Up Big</option>
                                                    <option value="flipInX">Flip X</option>
                                                    <option value="flipInY">Flip Y</option>
                                                    <option value="lightSpeedIn">Lightspeed</option>
                                                    <option value="slideInDown">Slide  Down</option>
                                                    <option value="slideInLeft">Slide  Left</option>
                                                    <option value="slideInRight">Slide  Right</option>
                                                    <option value="slideInUp">Slide  Up</option>
                                                    <option value="bounceIn">Bounce</option>
                                                    <option value="bounceInDown">Bounce Down</option>
                                                    <option value="bounceInLeft">Bounce Left</option>
                                                    <option value="bounceInRight">Bounce Right</option>
                                                    <option value="bounceInUp">Bounce Up</option>
                                                    <option value="rotateIn">Rotate</option>
                                                    <option value="rotateInDownLeft">Rotate Down Left</option>
                                                    <option value="rotateInDownRight">Rotate Down Right</option>
                                                    <option value="rotateInUpLeft">Rotate Up Left</option>
                                                    <option value="rotateInUpRight">Rotate Up Right</option>
                                                    <option value="zoomIn">Zoom</option>
                                                    <option value="zoomInDown">Zoom Down</option>
                                                    <option value="zoomInLeft">Zoom Left</option>
                                                    <option value="zoomInRight">Zoom Right</option>
                                                    <option value="zoomInUp">Zoom Up</option>
                                                </select>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="startAnimation.speed"class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="startAnimation.delay"class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>


                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Exit animation</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Speed</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Delay</div>
                                                <select name="endAnimation.animation" class="STX-element-dropdown STX-inline-element-left STX-row-size40">
                                                    <option value="fadeOut">Fade</option>
                                                    <option value="fadeOutDown">Fade Down</option>
                                                    <option value="fadeOutDownBig">Fade Down big</option>
                                                    <option value="fadeOutLeft">Fade Left</option>
                                                    <option value="fadeOutLeftBig">Fade Left big</option>
                                                    <option value="fadeOutRight">Fade Right</option>
                                                    <option value="fadeOutRightBig">Fade Right big</option>
                                                    <option value="fadeOutUp">Fade Up</option>
                                                    <option value="fadeOutUpBig">Fade Up big</option>
                                                    <option value="flipOutX">Flip X</option>
                                                    <option value="flipOutY">Flip Y</option>
                                                    <option value="lightSpeedOut">Lightspeed</option>
                                                    <option value="slideOutDown">Slide Down</option>
                                                    <option value="slideOutLeft">Slide Left</option>
                                                    <option value="slideOutRight">Slide Right</option>
                                                    <option value="slideOutUp">Slide Up</option>
                                                    <option value="bounceOut">Bounce</option>
                                                    <option value="bounceOutDown">Bounce Down</option>
                                                    <option value="bounceOutLeft">Bounce Left</option>
                                                    <option value="bounceOutRight">Bounce Right</option>
                                                    <option value="bounceOutUp">Bounce Up</option>
                                                    <option value="rotateOut">Rotate</option>
                                                    <option value="rotateOutDownLeft">Rotate Down Left</option>
                                                    <option value="rotateOutDownRight">Rotate Down Right</option>
                                                    <option value="rotateOutUpLeft">Rotate Up Left</option>
                                                    <option value="rotateOutUpRight">Rotate Up Right</option>
                                                    <option value="zoomOut">Zoom</option>
                                                    <option value="zoomOutDown">Zoom Down</option>
                                                    <option value="zoomOutLeft">Zoom left</option>
                                                    <option value="zoomOutRight">Zoom Right</option>
                                                    <option value="zoomOutUp">Zoom Up</option>
                                                </select>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="endAnimation.speed" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="endAnimation.delay" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Parallax</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size60">Vertical Parallax<div class="property-description" title='Parallax effect for slide background. Values in range 0 - 1, where 1 is max parallax effect.'></div></div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size40">
                                                <input type="number" min="0" max="1" class="STX-element-input-label-left" id="parallax" name="parallax" style="width: calc(100% - 50px);">
                                                <span class="STX-element-input-label-right input-group-text" style="width: 48px !important;">speed</span>
                                            </div>

                                        </div>


                                        <h3 class="element-settings-accordion-menu">Custom CSS</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <textarea name="customCSS" class="STX-element-textarea STX-fullline-element"></textarea>
                                        </div>

                                        <h3 class="element-settings-accordion-menu img-el video-el">On click</h3>
                                        <div class="element-settings element-settings-accordion-content img-el video-el">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Action</div>
                                            <select name="onClick.type" class="STX-element-dropdown STX-inline-element-left STX-row-size70 STX-content-animation-type">
                                                <option>none</option>
                                                <option value="lightbox">Open in lightbox</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="slide-settings-footer">
                            <button class="btn STX-footer-layer-btn"></button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="media-modal-backdrop" style="display: none;"></div>

<div class="STX-loader-container"><div class="STX-loader"></div></div>


 <?php
    wp_enqueue_media();
	wp_enqueue_editor();

	wp_enqueue_script("transitionslider-typeit");
	wp_enqueue_script("transitionslider-lib-three");
	wp_enqueue_script("transitionslider-lib-swiper");
	wp_enqueue_script("transitionslider-lib-color-pickr");
	wp_enqueue_script("transitionslider-lib-anime-js");
	wp_enqueue_script("transitionslider-lib-tipsy");
	wp_enqueue_script("transitionslider-lib-webfontloader");
	wp_enqueue_script("transitionslider-build");

    wp_enqueue_script('transitionslider-admin');

    wp_enqueue_style( "transitionslider-css");
    wp_enqueue_style( "transitionslider-swiper-css");
    wp_enqueue_style( "transitionslider-pickr-css");
    wp_enqueue_style( "transitionslider-fontawesome-css");

	wp_enqueue_style('transitionslider-edit-slider-css');

    $ajax_nonce = wp_create_nonce( "stx_nonce");

    wp_localize_script( 'transitionslider-admin', 'options', json_encode($sliders[$current_id]) );
    wp_localize_script( 'transitionslider-admin', 'stx_nonce', $ajax_nonce );
