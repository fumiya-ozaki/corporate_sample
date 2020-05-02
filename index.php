<?php get_header(); ?>

    <div id="mainVisual">
    </div>

    <main class="topNavi"><!-- topNAvistart -->
      <div class="topNaviColumn">
        <h2>社長メッセージ</h2>
        <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri();?>/images/person_02.jpeg" alt=""></div>
        <p>御覧いただきありがとうございます。弊社はお客様満足度を最優先いたします。</p>
      </div>
      <div class="topNaviColumn">
        <h2>事業内容</h2>
        <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri();?>/images/person_03.jpeg" alt=""></div>
        <p>当社は主にインターネットのコンテンツ事業を展開しております。</p>
        <div class="topNaviDetail"><a href="<?php home_url(); ?>service">詳しくはこちら</a></div>
      </div>
      <div class="topNaviColumn">
        <h2>会社概要</h2>
        <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri();?>/images/person_06.jpeg" alt=""></div>
        <p>会社概要です。</p>
        <div class="topNaviDetail"><a href="<?php home_url(); ?>company">詳しくはこちら</a></div>
      </div>
    </main><!-- topNAviend -->

    <section class="wrapper"><!-- wrapperstart -->
    <div id="conL"><!-- conLstart -->
      <div class="information"><!--informationstart-->
        <h2>INFORMATION</h2>
        <!--loopstart-->
        <?php
          $infoPosts = get_posts('numberposts=4&category=8');
          foreach($infoPosts as $post): 
        ?>

          <div class="contents_box">
            <ol>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
              <span>
                <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>　を更新しました。
              </span>
            </ol>
          </div>

        <!--loopend-->
        <?php endforeach; ?>

      </div><!--informationend-->
      
      <div class="information"><!--blogstart-->
        <h2>Blog</h2>
        <!--loopstart-->
        <?php
          $infoPosts = get_posts('numberposts=4&category=9');
          foreach($infoPosts as $post): 
        ?>

          <div class="contents_box">
            <ol>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
              <span class="b_img">
                <?php the_post_thumbnail('thumbside'); ?>
              </span>
              <span class="b_right">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </span>
            </ol>
          </div>

        <!--loopend-->
        <?php endforeach; ?>
      </div><!--blogend-->

      <div class="bnrL"><!--bnrLstart-->
        <ul>
          <li><a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/bnr_l.jpg" alt="" /></a></li>
          <li><a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/bnr_l.jpg" alt="" /></a></li>
          <li><a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/bnr_l.jpg" alt="" /></a></li>
        </ul>
      </div><!--bnrLend-->
      
    </div><!--conLend-->

    <?php get_sidebar(); ?>

  </section><!--wrapperend-->
  
<?php get_footer();