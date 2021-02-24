import './video.scss';

const { registerBlockType } =   wp.blocks;
const { InspectorControls } =   wp.blockEditor;
const { __ } =   wp.i18n;
const { PanelBody, PanelRow, 
    ToggleControl, 
    __experimentalInputControl, RangeControl,
    SelectControl,
    } =   wp.components;

registerBlockType( 'dashboard/video-control', {
    title: __( 'Video Upload', 'dashboard' ),
    description: __( 'Show Video uploaded by Author', 'dashboard'),
    category: 'common',
    keyword: [ __('video upload'), __('load video') ],
    attributes: {
        original_src: {
            type: 'string',
            default: '',
        },
        format: {
            type: 'string',
            default: 'mp4'
        },
        fallback_format:{
            type: 'string',
            default: 'webm',
        },
        is_controls_set: {
            type: 'boolean',
            default: false,
        },
        is_auto_play_set: {
            type: 'boolean',
            default: false,
        },
        is_muted: {
            type: 'boolean',
            default: false,
        },
        preload: {
          type: 'string',
          default: ''
        },
        width: {
            type: 'number',
            default: 400
        },
        height: {
            type: 'number',
            default: 400
        },
    },
    edit: ( props ) => {
        console.log(props.attributes);
        return [
            <InspectorControls>
                
                <PanelBody title={ __( 'Video Directory ', 'dashboard' ) }>
                    <PanelRow>{__('Storage Location', 'dashboard')}</PanelRow>
                    <__experimentalInputControl
                        value={ props.attributes.original_src }
                        onChange={ ( new_val ) => props.setAttributes( { original_src:new_val }) }
                    />
                </PanelBody>
                    
                <PanelBody title={ __( 'Adjust size', 'dashboard' ) }>
                    <PanelRow>{__('Width & Height', 'dashboard')}</PanelRow>
                    <RangeControl
                        beforeIcon="arrow-left-alt2"
                        afterIcon="arrow-right-alt2"
                        label={ __( 'Width', 'dashboard' ) }
                        min={ 400 }
                        max={ 700 }
                        value={ props.attributes.width }
                        onChange={( new_val ) => {
                            props.setAttributes( { width: new_val } )
                        }} 
                    />
                    <RangeControl
                        beforeIcon="arrow-left-alt2"
                        afterIcon="arrow-right-alt2"
                        label={ __( 'height', 'dashboard' ) }
                        min={ 400 }
                        max={ 700 }
                        value={ props.attributes.height }
                        onChange={( new_val ) => {
                            props.setAttributes( { height: new_val } )
                        }} 
                    />
                </PanelBody>
               
                <PanelBody title={ __( 'Video Controls ', 'dashboard' ) }>
                    <PanelRow>{__('Video Settings', 'dashboard')}</PanelRow>
                    <ToggleControl
                        label="Set Control Attribute"
                        checked={ props.attributes.is_controls_set }
                        onChange={ (new_val) => props.setAttributes( { is_controls_set: new_val } ) }
                    />
                    <ToggleControl
                        label="Set Autoplay"
                        checked={ props.attributes.is_auto_play_set }
                        onChange={ (new_val) => props.setAttributes( { is_auto_play_set: new_val } ) }
                    />
                    <ToggleControl
                        label="Set Mute"
                        checked={ props.attributes.is_muted }
                        onChange={ (new_val) => props.setAttributes( { is_muted: new_val } ) }
                    />
                    <SelectControl 
                        label={__('Preload options', 'dashboard')}
                        help={__('Choose your preload options', 'dashboard')}
                        value={props.attributes.preload}
                        options={[
                            { value: 'none', label: 'none'},
                            { value: 'metadata', label: 'metadata'},
                            { value: 'auto', label: 'auto'},
                            { value: '', label: ''}
                        ]}
                        onChange={ (new_val) => {
                            props.setAttributes({preload: new_val});
                        }}
                    />
                </PanelBody>

                <PanelBody title={ __('Video Format', 'dashboard') }>
                    <PanelRow>{__('Format Options', 'dashboard')}</PanelRow>
                    <SelectControl 
                        label={__('Video format choice', 'dashboard')}
                        help={__('These are the formats allowed', 'dashboard')}
                        value={props.attributes.format}
                        options={[
                            { value: 'mp4', label: 'mp4'},
                            { value: 'm4v', label: 'm4v'},
                            { value: 'webm', label: 'webm'},
                        ]}
                        onChange={ (new_val) => {
                            props.setAttributes({format: new_val});
                        }}
                    />
                    <SelectControl 
                        label={__('Fallback format choice', 'dashboard')}
                        help={__('These are the formats allowed', 'dashboard')}
                        value={props.attributes.fallback_format}
                        options={[
                            { value: 'mp4', label: 'mp4'},
                            { value: 'm4v', label: 'm4v'},
                            { value: 'webm', label: 'webm'},
                        ]}
                        onChange={ (new_val) => {
                            props.setAttributes({fallback_format: new_val});
                        }}
                    />
                </PanelBody>
                
            </InspectorControls>,
            // <div className="video-wrapper">
            //     <video controls={props.attributes.is_controls_set} width={props.attributes.width} height={props.attributes.height}
            //         autoplay={props.attributes.is_auto_play_set} muted={props.attributes.is_muted} preload={props.attributes.preload}
            //         >
            //         <source src={props.attributes.original_src} type={`video/${props.attributes.format}`} />
            //         <source src={props.attributes.original_src} type={`video/${props.attributes.fallback_format}`} />
            //         <p>Your browser doesn't support HTML video. Here is a <a href={""}>link to the video</a> instead.</p>
            //     </video>
            // </div>
            <div className="video-wrapper">
                <video width={props.attributes.width} height={props.attributes.height} preload={props.attributes.preload} id="video" class="screen">
                    <source src={props.attributes.original_src} type={`video/${props.attributes.format}`} />
                    <source src={props.attributes.original_src} type={`video/${props.attributes.fallback_format}`} />
                    <p>Your browser doesn't support HTML video. Here is a <a href={""}>link to the video</a> instead.</p>
                </video>
                    <div class="controls" >
                        <button class="btn" id="play"> <i class="fa fa-play fa-2x"></i></button>
                        <button class="btn" id="stop"> <i class="fa fa-stop fa-2x"></i></button>
                        <input type="range" id="progress"
                            class="progress" min="0"
                            max="100" step="0.1" value="0" />
                        <span class="timestamp" id="timestamp">00:00</span>
                    </div>
            </div>
        ];
    },

    save: ( props ) => {
        return (
            // <div className="video-wrapper">
            //     <video controls={props.attributes.is_controls_set} width={props.attributes.width} height={props.attributes.height}
            //         autoplay={props.attributes.is_auto_play_set} muted={props.attributes.is_muted} preload={props.attributes.preload}
            //         >
            //         <source src={props.attributes.original_src} type={`video/${props.attributes.format}`} />
            //         <source src={props.attributes.original_src} type={`video/${props.attributes.fallback_format}`} />
            //         <p>Your browser doesn't support HTML video. Here is a <a href={""}>link to the video</a> instead.</p>
            //     </video>
            // </div>
            <div className="video-wrapper">
                <video width={props.attributes.width} height={props.attributes.height} preload={props.attributes.preload} id="video" class="screen">
                    <source src={props.attributes.original_src} type={`video/${props.attributes.format}`} />
                    <source src={props.attributes.original_src} type={`video/${props.attributes.fallback_format}`} />
                    <p>Your browser doesn't support HTML video. Here is a <a href={""}>link to the video</a> instead.</p>
                </video>
                <div class="controls" >
                    <button class="btn" id="play"> <i class="fa fa-play fa-2x"></i></button>
                <button class="btn" id="stop"> <i class="fa fa-stop fa-2x"></i></button>
                <input type="range" id="progress"
                    class="progress" min="0"
                    max="100" step="0.1" value="0" />
                    <span class="timestamp" id="timestamp">00:00</span>
                </div>
            </div>
        )
    },

});