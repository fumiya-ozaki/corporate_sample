<!DOCTYPE html>
<html lang="ja">
<head><!--headstart-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">                    <!--レスポンシブ-->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">    <!--fontawsome-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />    <!--reset.css-->
  <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet"><!--書き換え-->
  <title>corporate_sample</title>
  <?php wp_head(); ?>
</head><!--headend-->

<body> <!--bodystart-->
  <div id="container">

    <nav id="header"><!--headerstart-->
      <h1><a href="<?php echo home_url(); ?>">"CORPORATE_SAMPLE_SITE"</a></h1>
      <div id="menu">
        <ul>
          <?php wp_nav_menu( array(
            'theme_location'=>'place_global2', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap' => '%3$s',//<ul>を出力しない
          ));?>
        </ul>
      </div>
    </nav><!--headerend-->

    <div class="humb-menu"><!--humbmenustart-->
      <input id="gnav-input" type="checkbox">
      <label for="gnav-input" id="gnav-btn">
        <div i class="fas fa-bars"></div>
      </label>
    
      <div id="gnav-content">
        <!-- タイトルを記載ください -->
        <div class="humb-menu__title">リンク</div>
        <label for="label1">
          <!-- 親要素の名前 -->
          <p>ブログ</p><p>＋</p>
        </label>
        <input type="checkbox" id="label1" class="cssacc" />
        <div class="accshow">
          <!-- 子要素の名前 -->
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>
      
        <label for="label2">
          <p>リリース</p><p>＋</p>
        </label>
        <input type="checkbox" id="label2" class="cssacc" />
        <div class="accshow">
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>

        <label for="label3">
          <p>業務について</p><p>＋</p>
        </label>
        <input type="checkbox" id="label3" class="cssacc" />
        <div class="accshow">
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>
      </div>
    </div><!--humbmenuend-->
