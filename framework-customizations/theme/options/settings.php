<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'general' => array(
        'type' => 'tab',
        'title' => __('General', 'law'),
        'options' => array(
            'footer_text' => array(
                'type' => 'wp-editor',
                'label' => __('Text in Footer', 'law'),
                'desc' => __('Write text for footer', 'law'),
                'help' => __('Some help...', 'law'),
            ),
            'test_img' => array(
                'type' => 'upload',
                'label' => __('Header Image', 'law'),
                'desc' => __('Header Image', 'law'),
                'help' => __('Some help...', 'law'),
            ),
        ),
    ),
    'colors' => array(
        'type' => 'tab',
        'title' => __('Site colors', 'law'),
        'options' => array(
            'header_color' => array(
                'type' => 'color-picker',
                'value' => '#ffffff',
                'label' => __('Header Color', 'law'),
                'desc' => __('Choose header color', 'law'),
                'help' => __('Some help...', 'law'),
            ),
        ),
    ),
);