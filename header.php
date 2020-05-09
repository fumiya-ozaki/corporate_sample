<!DOCTYPE html>
<html lang="ja">
<head><!--headstart-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">                    <!--レスポンシブ-->
  <?php wp_head(); ?><!--headerfookpoint-->
</head><!--headend-->

<body <?php body_class(); ?>><!--bodystart-->
<?php wp_body_open(); ?> <!--bodyfookpoint-->
<div id="container">
  
  <header id="header"><!--headerstart-->
  <h1><a href="<?php echo home_url(); ?>">"CORPORATE_SAMPLE_SITE"</a></h1>
  <!--headerのwordpress化-->
  <!--↓存在チェック-->
  <?php
        if ( has_nav_menu( 'place_global2' ) ) {
          wp_nav_menu( array(
            'theme_location'=>'place_global2', //メニュー名place_global2
            'container'     =>'nav', 
            'container_id'  =>'menu'
          ));
        }?>
    </header><!--headerend-->
    
    <nav class="humb-menu"><!--humbmenustart-->
    <input id="gnav-input" type="checkbox">
    <label for="gnav-input" id="gnav-btn">
      <span class="fas fa-bars"></span>
    </label>
    
    <div id="gnav-content">
      <!-- タイトルを記載ください -->
      <div class="humb-menu__title">リンク</div>
      
        <label for="label"><p>会社概要</p></label>
        
        <label for="label"><p>事業内容</p></label>

        <label for="label2"><p>リリース</p><p>＋</p></label>
        <input type="checkbox" id="label2" class="cssacc" />
        <div class="accshow">
          <?php
            $infoPosts = get_posts('numberposts=3&category=8');
            foreach($infoPosts as $post): 
          ?>
            <ol>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m月d日'); ?></time>
              <span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </span>
            </ol>
          <?php endforeach; ?>
        </div>
          
        <label for="label3"><p>業務について</p><p>＋</p></label>
        <input type="checkbox" id="label3" class="cssacc" />
        <div class="accshow">
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>
          
        <label for="label"><p>お問い合わせ</p></label>
        <label for="label1"><p>ブログ</p><p>＋</p></label>
        <input type="checkbox" id="label1" class="cssacc" />
        <div class="accshow">
          <!--loopstart-->
          <?php
            $infoPosts = get_posts('numberposts=3&category=9');
            foreach($infoPosts as $post): 
              ?>
            <ol>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m月d日'); ?></time>
              <span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </span>
            </ol>
            <!--loopend-->
            <?php endforeach; ?>
          </div>
        </div>

      </nav><!--humbmenuend-->
