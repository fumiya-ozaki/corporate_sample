<?php get_header(); ?>

    <div id="mainVisual">
    </div>

    <div class="topNavi">
      <div class="topNaviColumn">
        <h2>社長メッセージ</h2>
        <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri();?>/images/person_02.jpeg" alt="" /></div>
        <p>御覧いただきありがとうございます。弊社はお客様満足度を最優先いたします。</p>
      </div><!-- /.topNaviColumn -->
      <div class="topNaviColumn">
        <h2>事業内容</h2>
        <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri();?>/images/person_03.jpeg" alt="" /></div>
        <p>当社は主にインターネットのコンテンツ事業を展開しております。</p>
        <div class="topNaviDetail"><a href="<?php home_url(); ?>service">詳しくはこちら</a></div>
      </div><!-- /.topNaviColumn -->
      <div class="topNaviColumn">
        <h2>会社概要</h2>
        <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri();?>/images/person_06.jpeg" alt="" /></div>
        <p>会社概要です。</p>
        <div class="topNaviDetail"><a href="<?php home_url(); ?>company">詳しくはこちら</a></div>
      </div><!-- /.topNaviColumn -->
    </div><!-- /.topNavi -->

    <div class="wrapper">
    <div id="conL">
      <div class="information"><!--informationstart-->
        <h2>INFORMATION</h2>
        <dl>
        <!--loopstart-->
        <?php
          $infoPosts = get_posts('numberposts=4&category=8');
          foreach($infoPosts as $post): 
        ?>

          <div class="contents_box">
            <dt><?php the_time('Y-m-d'); ?></dt>
            <dd>
              <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
            </dd>
          </div>

        <!--loopend-->
        <?php endforeach; ?>

        </dl>
      </div><!--informationend-->
      
      <div class="information"><!--blogstart-->
        <h2>Blog</h2>
        <dl>

          <!--loopstart-->
        <?php
          $infoPosts = get_posts('numberposts=4&category=9');
          foreach($infoPosts as $post): 
        ?>

          <div class="contents_box">
            <dt><?php the_time('Y-m-d'); ?></dt>
            <dd>
              <div class="b_img">
                <img src="<?php echo get_template_directory_uri();?>/images/cat_3.jpeg">
              </div>
              <div class="b_right">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
            </dd>
          </div>

        <!--loopend-->
        <?php endforeach; ?>

          </dl>
        </div><!--blogend-->
        
      <div class="submenu"><!--submenustart-->
        <h3>サービス内容</h3>
        <p>当社のネット事業です。</p>
        <ul>
          <li><a href="<?php home_url(); ?>service#s1">ホームページ制作</a></li>
          <li><a href="<?php home_url(); ?>service">広告代理</a></li>
        </ul>
      </div><!--submenuend-->

      <div class="bnrL"><!--bnrLstart-->
        <ul>
          <li><a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/bnr_l.jpg" alt="" /></a></li>
          <li><a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/bnr_l.jpg" alt="" /></a></li>
          <li><a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/bnr_l.jpg" alt="" /></a></li>
        </ul>
      </div><!--bnrLend-->
      
    </div><!--conLend-->

    <?php get_sidebar(); ?>

  </div><!--wrapperend-->
  
<?php get_footer();