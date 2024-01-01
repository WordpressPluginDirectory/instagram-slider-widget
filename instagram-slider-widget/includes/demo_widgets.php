<?php



$premium = "";
if ( ! WIS_Plugin::app()->is_premium() ) {
	$premium = " PREMIUM";
}
$demo_widgets[] = [
	'title'                => 'Slider normal (for a sidebar)',
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'slider',
	'images_link'          => 'image_link',
	'custom_url'           => '',
	'orderby'              => 'rand',
	'images_number'        => '5',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => 1,
];

$demo_widgets[] = [
	'title'                => 'Thumbmails (for a sidebar)',
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'thumbs',
	'images_link'          => 'image_link',
	'custom_url'           => '',
	'orderby'              => 'date-ASC',
	'images_number'        => '6',
	'columns'              => '2',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => 3,
];

$demo_widgets[] = [
	'title'                => 'Thumbnails without border (for articles and pages without sidebar)',
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'thumbs-no-border',
	'images_link'          => 'image_link',
	'custom_url'           => '',
	'orderby'              => 'date-ASC',
	'images_number'        => '12',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => 5,
];

$demo_widgets[] = [
	'title'                => "Masonry (for articles and pages with sidebar){$premium}",
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'masonry',
	'images_link'          => 'popup',
	'custom_url'           => '',
	'orderby'              => 'rand',
	'images_number'        => '20',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '25',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '205',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => 4,
	'premium'              => true,
];

$demo_widgets[] = [
	'title'                => "Masonry (for articles and pages without sidebar){$premium}",
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'masonry',
	'images_link'          => 'popup',
	'custom_url'           => '',
	'orderby'              => 'rand',
	'images_number'        => '20',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',

	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '220',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => '',
	'premium'              => true,
];

$demo_widgets[] = [
	'title'                => "Highlight (for a sidebar){$premium}",
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'highlight',
	'images_link'          => 'popup',
	'custom_url'           => '',
	'orderby'              => 'rand',
	'images_number'        => '12',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '4',
	'demo'                 => 2,
	'premium'              => true,
];

$demo_widgets[] = [
	'title'                => "Highlight (for articles and pages without sidebar){$premium}",
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'highlight',
	'images_link'          => 'popup',
	'custom_url'           => '',
	'orderby'              => 'date-ASC',
	'images_number'        => '14',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '3',
	'show_feed_header'     => '1',
	'highlight_offset'     => '3',
	'highlight_pattern'    => '8',
	'demo'                 => 6,
	'premium'              => true,
];

$demo_widgets[] = [
	'title'                => "Slick Slider (for articles and pages with sidebar){$premium}",
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'slick_slider',
	'images_link'          => 'popup',
	'custom_url'           => '',
	'orderby'              => 'rand',
	'images_number'        => '20',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '3',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '1',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => '',
	'premium'              => true,
];

$demo_widgets[] = [
	'title'                => "Slick Slider (for articles and pages without sidebar){$premium}",
	'search_for'           => '',
	'username'             => '',
	'account'              => '',
	'account_business'     => '',
	'hashtag'              => '',
	'blocked_users'        => '',
	'blocked_words'        => '',
	'attachment'           => '',
	'template'             => 'slick_slider',
	'images_link'          => 'popup',
	'custom_url'           => '',
	'orderby'              => 'rand',
	'images_number'        => '20',
	'columns'              => '4',
	'refresh_hour'         => '5',
	'image_size'           => 'standard',
	'image_link_rel'       => 'standard',
	'image_link_class'     => 'standard',
	'no_pin'               => 'standard',
	'controls'             => 'prev_next',
	'animation'            => 'slide',
	'caption_words'        => '20',
	'slidespeed'           => '7000',
	'description'          => [
		'0' => 'username',
		'1' => 'time',
		'2' => 'caption',
	],
	'support_author'       => '',
	'gutter'               => '0',
	'masonry_image_width'  => '200',
	'slick_slides_to_show' => '4',
	'slick_sliding_speed' => '5000',
    'enable_control_buttons' => '0',
	'slick_slides_padding' => '1',
	'show_feed_header'     => '1',
	'highlight_offset'     => '1',
	'highlight_pattern'    => '6',
	'demo'                 => '',
	'premium'              => true,
];

return $demo_widgets;
