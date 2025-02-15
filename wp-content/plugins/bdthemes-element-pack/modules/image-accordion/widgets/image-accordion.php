<?php
namespace ElementPack\Modules\ImageAccordion\Widgets;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Css_Filter;
use Elementor\Icons_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Image_Accordion extends Widget_Base {

	public function get_name() {
		return 'bdt-image-accordion';
	}

	public function get_title() {
		return BDTEP . esc_html__( 'Image Accordion', 'bdthemes-element-pack' );
	}

	public function get_icon() {
		return 'bdt-wi-image-accordion bdt-new';
	}

	public function get_categories() {
		return [ 'element-pack' ];
	}

	public function get_keywords() {
		return [ 'fancy', 'effects', 'image', 'accordion', 'hover', 'slideshow', 'slider', 'box', 'animated boxs' ];
	}

	public function is_reload_preview_required() {
		return false;
	}

	public function get_style_depends() {
		return [ 'ep-image-accordion' ];
	}

	public function get_script_depends() {
		return [ 'ep-image-accordion' ];
	}

	public function get_custom_help_url() {
		return 'https://youtu.be/jQWU4kxXJpM';
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'section_accordion_item',
			[
				'label' => __( 'Image Accordion', 'bdthemes-element-pack' ),
			]
		);

		$this->add_control(
			'image_accordion_items',
			[
				'type'    => Controls_Manager::REPEATER,
				'default' => [
					[
						'image_accordion_sub_title'   => __( 'This is a label', 'bdthemes-element-pack' ),
						'image_accordion_title'   	  => __( 'Image Accordion One', 'bdthemes-element-pack' ),
						'image_accordion_text' 	  => __( 'Lorem ipsum dolor sit amet consect voluptate repell endus kilo gram magni illo ea animi.', 'bdthemes-element-pack' ),
						'slide_image' => ['url' => BDTEP_ASSETS_URL . 'images/slide/item-1.jpg']
					],
					[
						'image_accordion_sub_title'   => __( 'This is a label', 'bdthemes-element-pack' ),
						'image_accordion_title'   => __( 'Image Accordion Two', 'bdthemes-element-pack' ),
						'image_accordion_text' => __( 'Lorem ipsum dolor sit amet consect voluptate repell endus kilo gram magni illo ea animi.', 'bdthemes-element-pack' ),
						'slide_image' => ['url' => BDTEP_ASSETS_URL . 'images/slide/item-2.jpg']
					],
					[
						'image_accordion_sub_title'   => __( 'This is a label', 'bdthemes-element-pack' ),
						'image_accordion_title'   => __( 'Image Accordion Three', 'bdthemes-element-pack' ),
						'image_accordion_text' => __( 'Lorem ipsum dolor sit amet consect voluptate repell endus kilo gram magni illo ea animi.', 'bdthemes-element-pack' ),
						'slide_image' => ['url' => BDTEP_ASSETS_URL . 'images/slide/item-3.jpg']
					],
					[
						'image_accordion_sub_title'   => __( 'This is a label', 'bdthemes-element-pack' ),
						'image_accordion_title'   => __( 'Image Accordion Four', 'bdthemes-element-pack' ),
						'image_accordion_text' => __( 'Lorem ipsum dolor sit amet consect voluptate repell endus kilo gram magni illo ea animi.', 'bdthemes-element-pack' ),
						'slide_image' => ['url' => BDTEP_ASSETS_URL . 'images/slide/item-4.jpg']
					],
					// [
					// 	'image_accordion_sub_title'   => __( 'This is a label', 'bdthemes-element-pack' ),
					// 	'image_accordion_title'   => __( 'Image Accordion Five', 'bdthemes-element-pack' ),
					// 	'image_accordion_text' => __( 'Lorem ipsum dolor sit amet consect voluptate repell endus kilo gram magni illo ea animi.', 'bdthemes-element-pack' ),
					// 	'slide_image' => ['url' => BDTEP_ASSETS_URL . 'images/slide/item-5.jpg']
					// ],
					// [
					// 	'image_accordion_sub_title'   => __( 'This is a label', 'bdthemes-element-pack' ),
					// 	'image_accordion_title'   => __( 'Image Accordion Six', 'bdthemes-element-pack' ),
					// 	'image_accordion_text' => __( 'Lorem ipsum dolor sit amet consect voluptate repell endus kilo gram magni illo ea animi.', 'bdthemes-element-pack' ),
					// 	'slide_image' => ['url' => BDTEP_ASSETS_URL . 'images/slide/item-6.jpg']
					// ],
				],
				'fields' => [

					[
						'name'        => 'image_accordion_title',
						'label'       => __( 'Title', 'bdthemes-element-pack' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => __( 'Tab Title' , 'bdthemes-element-pack' ),
						'label_block' => true,
					],

					[
						'name'          => 'title_link',
						'label'         => esc_html__( 'Title Link', 'bdthemes-element-pack' ),
						'type'          => Controls_Manager::URL,
						'default'       => ['url' => ''],
						'show_external' => false,
						'dynamic'       => [ 'active' => true ],
						'condition'     => [
							'image_accordion_title!' => ''
						]
					],

					[
						'name'        => 'image_accordion_sub_title',
						'label'       => __( 'Sub Title', 'bdthemes-element-pack' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'label_block' => true,
					],
					
					[
						'name'       => 'image_accordion_text',
						'type'       => Controls_Manager::WYSIWYG,
						'dynamic'    => [ 'active' => true ],
						'default'    => __( 'Box Content', 'bdthemes-element-pack' ),
					],

					[
						'name'        => 'image_accordion_button',
						'label'       => esc_html__( 'Button Text', 'bdthemes-element-pack' ),
						'type'        => Controls_Manager::TEXT,
						'default'     => esc_html__( 'Read More' , 'bdthemes-element-pack' ),
						'label_block' => true,
						'dynamic'     => [ 'active' => true ],
					],
					
					[
						'name'          => 'button_link',
						'label'         => esc_html__( 'Button Link', 'bdthemes-element-pack' ),
						'type'          => Controls_Manager::URL,
						'default'       => ['url' => '#'],
						'show_external' => false,
						'dynamic'       => [ 'active' => true ],
						'condition'     => [
							'image_accordion_button!' => ''
						]
					],

					[
						'name'    => 'slide_image',
						'label'   => esc_html__( 'Background Image', 'bdthemes-element-pack' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
						'default' => [
							'url' => BDTEP_ASSETS_URL . 'images/slide/item-'.rand(1,4).'.jpg',
						],
					],

				],
				'title_field' => '{{{ image_accordion_title }}}',
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name'         => 'thumbnail_size',
				'label'        => esc_html__( 'Image Size', 'bdthemes-element-pack' ),
				'exclude'      => [ 'custom' ],
				'default'      => 'full',
				'prefix_class' => 'bdt-image-accordion--thumbnail-size-',
			]
		);

		$this->add_control(
            'image_accordion_event',
            [
                'label'   => __('Select Event', 'bdthemes-element-pack'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'mouseover',
                'options' => [
                    'click'     => __('Click', 'bdthemes-element-pack'),
                    'mouseover' => __('Hover', 'bdthemes-element-pack'),
                ],
            ]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_layout_hover_box',
			[
				'label' => esc_html__( 'Additional Settings', 'bdthemes-element-pack' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_responsive_control(
			'image_accordion_min_height',
			[
				'label' => esc_html__('Height', 'bdthemes-prime-slider'),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 100,
						'max' => 1200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_accordion_width',
			[
				'label' => esc_html__('Content Width', 'bdthemes-prime-slider'),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 100,
						'max' => 1200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-item .bdt-image-accordion-content' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'items_content_align',
			[
				'label'   => __( 'Alignment', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'bdthemes-element-pack' ),
						'icon'  => 'fas fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'bdthemes-element-pack' ),
						'icon'  => 'fas fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'bdthemes-element-pack' ),
						'icon'  => 'fas fa-align-right',
					],
					'justify' => [
						'title' => __( 'Justified', 'bdthemes-element-pack' ),
						'icon'  => 'fas fa-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-item' => 'text-align: {{VALUE}};',
				],
			]
		);


		$this->add_control(
			'show_title',
			[
				'label'   => esc_html__( 'Show Title', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_sub_title',
			[
				'label'   => esc_html__( 'Show Sub Title', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_text',
			[
				'label'   => esc_html__( 'Show Text', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_button',
			[
				'label'   => esc_html__( 'Show Button', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'title_tags',
			[
				'label'   => __( 'Title HTML Tag', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1'   => 'H1',
					'h2'   => 'H2',
					'h3'   => 'H3',
					'h4'   => 'H4',
					'h5'   => 'H5',
					'h6'   => 'H6',
					'div'  => 'div',
					'span' => 'span',
					'p'    => 'p',
				],
				'condition' => [
					'show_title' => 'yes'
				]
			]
		);

		$this->add_control(
			'hr',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'hide_on_mobile_title',
			[
				'label'   => esc_html__( 'Title Hide on Mobile', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'condition' => [
					'show_title' => 'yes'
				]
			]
		);

		$this->add_control(
			'hide_on_mobile_sub_title',
			[
				'label'   => esc_html__( 'Sub Title Hide on Mobile', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'condition' => [
					'show_sub_title' => 'yes'
				]
			]
		);

		$this->add_control(
			'hide_on_mobile_text',
			[
				'label'   => esc_html__( 'Text Hide on Mobile', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'condition' => [
					'show_text' => 'yes'
				]
			]
		);

		$this->add_control(
			'hide_on_mobile_button',
			[
				'label'   => esc_html__( 'Button Hide on Mobile', 'bdthemes-element-pack' ),
				'type'    => Controls_Manager::SWITCHER,
				'condition' => [
					'show_button' => 'yes'
				]
			]
		);

		$this->end_controls_section();

		//Style
		$this->start_controls_section(
			'section_image_accordion_style',
			[
				'label' => __( 'Image Accordion', 'bdthemes-element-pack' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'image_accordion_overlay_color',
			[
				'label'     => __( 'Overlay Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-item:before'  => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'tabs_content_padding',
			[
				'label'      => __( 'Content Padding', 'bdthemes-element-pack' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'image_accordion_divider_heading',
			[
				'label'     => __( 'Divider', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'image_accordion_divider_color',
			[
				'label'     => __( 'Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-item:after'  => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_accordion_divider_width',
			[
				'label' => esc_html__('Width', 'bdthemes-prime-slider'),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-item:after' => 'width: {{SIZE}}{{UNIT}}; right: calc(-{{SIZE}}{{UNIT}} / 2);',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_title',
			[
				'label'     => esc_html__( 'Title', 'bdthemes-element-pack' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_title' => [ 'yes' ],
				],
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => esc_html__( 'Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'title_spacing',
			[
				'label'     => esc_html__( 'Spacing', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-title' => 'padding-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => esc_html__( 'Typography', 'bdthemes-element-pack' ),
				'selector' => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-title',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_sub_title',
			[
				'label'     => esc_html__( 'Subtitle', 'bdthemes-element-pack' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_sub_title' => [ 'yes' ],
				],
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label'     => esc_html__( 'Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-sub-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'sub_title_spacing',
			[
				'label'     => esc_html__( 'Spacing', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-sub-title' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'sub_title_typography',
				'label'    => esc_html__( 'Typography', 'bdthemes-element-pack' ),
				'selector' => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-sub-title',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_description',
			[
				'label'     => esc_html__( 'Description', 'bdthemes-element-pack' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_text' => [ 'yes' ],
				],
			]
		);

		$this->add_control(
			'description_color',
			[
				'label'     => esc_html__( 'Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'description_spacing',
			[
				'label'     => esc_html__( 'Spacing', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-text' => 'padding-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'description_typography',
				'label'    => esc_html__( 'Typography', 'bdthemes-element-pack' ),
				'selector' => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-text',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_button',
			[
				'label'     => esc_html__( 'Button', 'bdthemes-element-pack' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_button' => 'yes',
				],
			]
		);

		$this->start_controls_tabs( 'tabs_button_style' );

		$this->start_controls_tab(
			'tab_button_normal',
			[
				'label' => esc_html__( 'Normal', 'bdthemes-element-pack' ),
			]
		);

		$this->add_control(
			'button_text_color',
			[
				'label'     => esc_html__( 'Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'button_background',
				'selector'  => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a',
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'button_box_shadow',
				'selector' => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'        => 'button_border',
				'label'       => esc_html__( 'Border', 'bdthemes-element-pack' ),
				'selector'    => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a',
				'separator'   => 'before',
			]
		);

		$this->add_control(
			'button_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'bdthemes-element-pack' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'border_radius_advanced_show!' => 'yes',
				],
			]
		);

		$this->add_control(
			'border_radius_advanced_show',
			[
				'label' => __( 'Advanced Radius', 'bdthemes-element-pack' ),
				'type'  => Controls_Manager::SWITCHER,
			]
		);

		$this->add_control(
			'border_radius_advanced',
			[
				'label'       => esc_html__('Radius', 'bdthemes-element-pack'),
				'description' => sprintf(__('For example: <b>%1s</b> or Go <a href="%2s" target="_blank">this link</a> and copy and paste the radius value.', 'bdthemes-element-pack'), '30% 70% 82% 18% / 46% 62% 38% 54%', 'https://9elements.github.io/fancy-border-radius/'),
				'type'        => Controls_Manager::TEXT,
				'size_units'  => [ 'px', '%' ],
				'separator'   => 'after',
				'default'     => '30% 70% 82% 18% / 46% 62% 38% 54%',
				'selectors'   => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a'     => 'border-radius: {{VALUE}}; overflow: hidden;',
				],
				'condition' => [
					'border_radius_advanced_show' => 'yes',
				],
			]
		);

		$this->add_control(
			'button_padding',
			[
				'label'      => esc_html__( 'Padding', 'bdthemes-element-pack' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'button_typography',
				'label'     => esc_html__( 'Typography', 'bdthemes-element-pack' ),
				'selector'  => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_button_hover',
			[
				'label' => esc_html__( 'Hover', 'bdthemes-element-pack' ),
			]
		);

		$this->add_control(
			'button_hover_color',
			[
				'label'     => esc_html__( 'Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a:hover'  => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'button_hover_background',
				'selector'  => '{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a:hover',
			]
		);

		$this->add_control(
			'button_hover_border_color',
			[
				'label'     => esc_html__( 'Border Color', 'bdthemes-element-pack' ),
				'type'      => Controls_Manager::COLOR,
				'condition' => [
					'button_border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bdt-image-accordion .bdt-image-accordion-content .bdt-image-accordion-button a:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	public function render() {
		$settings = $this->get_settings_for_display();
		$id       = $this->get_id();

		if ($settings['image_accordion_event']) {
			$imageAccordionEvent = $settings['image_accordion_event'];
		} else {
			$imageAccordionEvent = false;
		}

		$this->add_render_attribute(
			[
				'image-accordion' => [
					'id' => 'bdt-image-accordion-' . $this->get_id(),
					'class' => 'bdt-image-accordion',
					'data-settings' => [
						wp_json_encode(array_filter([
					        'tabs_id' => 'bdt-image-accordion-' . $this->get_id(),
							'mouse_event' => $imageAccordionEvent,
						]))
					]
				]
			]
		);

		?>

		<div <?php echo ( $this->get_render_attribute_string( 'image-accordion' ) ); ?>>
			<?php foreach ( $settings['image_accordion_items'] as $index => $item ) : 
				
                $slide_image = Group_Control_Image_Size::get_attachment_image_src( $item['slide_image']['id'], 'thumbnail_size', $settings);
                if ( ! $slide_image ) {
                    $slide_image = $item['slide_image']['url'];
                }

				$this->add_render_attribute( 'image-accordion-item', 'class', 'bdt-image-accordion-item', true );
				$this->add_render_attribute( 'bdt-image-accordion-title', 'class', 'bdt-image-accordion-title', true );
				$this->add_render_attribute( 'bdt-image-accordion-sub-title', 'class', 'bdt-image-accordion-sub-title', true );
				$this->add_render_attribute( 'bdt-image-accordion-text', 'class', 'bdt-image-accordion-text', true );
				$this->add_render_attribute( 'bdt-image-accordion-button', 'class', 'bdt-image-accordion-button', true );

				if ( 'yes' == $settings['hide_on_mobile_title'] ) {
					$this->add_render_attribute( 'bdt-image-accordion-title', 'class', 'bdt-image-accordion-title bdt-visible@s', true );
				}
				if ( 'yes' == $settings['hide_on_mobile_sub_title'] ) {
					$this->add_render_attribute( 'bdt-image-accordion-sub-title', 'class', 'bdt-image-accordion-sub-title bdt-visible@s', true );
				}
				if ( 'yes' == $settings['hide_on_mobile_text'] ) {
					$this->add_render_attribute( 'bdt-image-accordion-text', 'class', 'bdt-image-accordion-text bdt-visible@s', true );
				}
				if ( 'yes' == $settings['hide_on_mobile_button'] ) {
					$this->add_render_attribute( 'bdt-image-accordion-button', 'class', 'bdt-image-accordion-button bdt-visible@s', true );
				}

				?>

				<div   <?php echo ( $this->get_render_attribute_string( 'image-accordion-item' ) ); ?> style="background-image: url('<?php echo esc_url( $slide_image); ?>');">

					<div class="bdt-image-accordion-content">
						<?php if ( $item['image_accordion_sub_title'] && ( 'yes' == $settings['show_sub_title'] ) ) : ?>
							<div <?php echo $this->get_render_attribute_string('bdt-image-accordion-sub-title'); ?>>
								<?php echo wp_kses( $item['image_accordion_sub_title'], element_pack_allow_tags('title') ); ?>
							</div>
						<?php endif; ?>
	
						<?php if ( $item['image_accordion_title'] && ( 'yes' == $settings['show_title'] ) ) : ?>
							<?php if ( '' !== $item['title_link']['url'] ) : ?>
								<a href="<?php echo esc_url( $item['title_link']['url'] ); ?>">
							<?php endif; ?>
								<<?php echo esc_html($settings['title_tags']); ?> <?php echo $this->get_render_attribute_string('bdt-image-accordion-title'); ?>>
									<?php echo wp_kses( $item['image_accordion_title'], element_pack_allow_tags('title') ); ?>
								</<?php echo esc_html($settings['title_tags']); ?>>
							<?php if ( '' !== $item['title_link']['url'] ) : ?>
								</a>
							<?php endif; ?>
						<?php endif; ?>
	
						<?php if ( $item['image_accordion_text'] && ( 'yes' == $settings['show_text'] ) ) : ?>
							<div <?php echo $this->get_render_attribute_string('bdt-image-accordion-text'); ?>>
								<?php echo $this->parse_text_editor( $item['image_accordion_text'] ); ?>
							</div>
						<?php endif; ?>
	
						<?php if ($item['image_accordion_button'] && ( 'yes' == $settings['show_button'] )) : ?>
							<div <?php echo $this->get_render_attribute_string('bdt-image-accordion-button'); ?>>
								<?php if ( '' !== $item['button_link']['url'] ) : ?>
									<a href="<?php echo esc_url( $item['button_link']['url'] ); ?>">
								<?php endif; ?>
									<?php echo wp_kses_post($item['image_accordion_button']); ?>
								<?php if ( '' !== $item['button_link']['url'] ) : ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

				</div>

			<?php endforeach; ?>
		</div>

		<?php 
	}
 
}