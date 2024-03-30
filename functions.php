<?php

add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style('icon', get_template_directory_uri() . '/assets/fonts/ico.png');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
  wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
  wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');


  wp_enqueue_script('config', get_template_directory_uri() . '/assets/scripts/config.js', array(), 'null', true);
  wp_enqueue_script('processing', get_template_directory_uri() . '/assets/scripts/processing.js', array(), 'null', true);
  wp_enqueue_script('crypto', get_template_directory_uri() . '/assets/scripts/crypto-api.js', array(), 'null', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/scripts/main.js', array(), 'null', true);


  wp_deregister_script('jquery');
  wp_register_script('jquery', 'ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js');
  wp_register_script('cdnjs', 'cdnjs.cloudflare.com/ajax/libs/forge/0.8.2/forge.all.min.js');
  wp_enqueue_script('jquery');

  wp_enqueue_script('promo', get_template_directory_uri() . '/assets/scripts/promo.js', array(), 'null', true);
  wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array('jquery'), 'null', true);
  wp_enqueue_script('send', get_template_directory_uri() . '/assets/js/send.js', array(), 'null', true);
  wp_enqueue_script('jquery-file', get_template_directory_uri() . '/assets/js/jquery.js', array(), 'null', true);
  wp_enqueue_script('yii', get_template_directory_uri() . '/assets/js/yii.js', array(), 'null', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 'null', true);
  wp_enqueue_script('transaction', get_template_directory_uri() . '/assets/js/transaction.js', array(), 'null', true);
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag ');
