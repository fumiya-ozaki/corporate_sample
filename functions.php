<?php
  function theme_script(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('theme-reset', get_template_directory_uri() . '/css/reset.css', array(),$version );
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.min.css', array(),$version );
  }
  add_action( 'wp_enqueue_scripts' ,'theme_script' );


  //カスタムメニュー
  register_nav_menus( //メニュー機能をオンにする
  array(
    'place_global2' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
    'place_utility' => 'ユーティリティ',
    'place_sidebar' => 'サイドメニュー',
    'place_footer' => 'フッター',
  ));

  //サムネイル機能追加
  add_theme_support('post-thumbnails');
  add_image_size('thumbside', 85, 50, true);


  // 不要な情報の削除
  function theme_remove_head(){
    // Remove emoji DNS prefetch.
    add_filter( 'emoji_svg_url', '__return_false' );
    // Remove emoji script and style remove.
    remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles',     'print_emoji_styles' );
    remove_action( 'admin_print_styles',  'print_emoji_styles' );
    
    // Remove WordPress version information.
    remove_action('wp_head', 'wp_generator' );
  
    // Remove wlwmanifest address.
    remove_action('wp_head', 'wlwmanifest_link');
  
    // Remove EditURI address.
    remove_action('wp_head', 'rsd_link');
  
    // Remove Short Link.
    remove_action('wp_head', 'wp_shortlink_wp_head');
  }
  add_action( 'after_setup_theme','theme_remove_head' );
?>