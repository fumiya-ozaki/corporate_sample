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
          <div class="contents_box">
            <dt>2013-08-04</dt>
            <dd>
              <span class="tab tag_gyoumu">業務について</span>
              <a href="<?php home_url(); ?>single">2012年（平成24年）度の採用情報</a>を更新しました。
            </dd>
          </div>
          <div class="contents_box">
            <dt>2013-08-03</dt>
            <dd>
              <span class="tab tag_release">リリース</span>
              <a href="<?php home_url(); ?>single">制作実績のページ</a>を更新しました。
            </dd>
          </div>
          <div class="contents_box">
            <dt>2013-08-02</dt>
            <dd>
              <span class="tab tag_gyoumu">業務について</span>
              <a href="<?php home_url(); ?>single">2012年（平成24年）度の採用情報</a>を更新しました。
            </dd>
          </div>
          <div class="contents_box">
            <dt>2013-08-01</dt>
            <dd>
              <span class="tab tag_release">リリース</span>
              <a href="<?php home_url(); ?>single">制作実績のページ</a>を更新しました。
            </dd>
          </div>
        </dl>
      </div><!--informationend-->
      
      <div class="information"><!--blogstart-->
        <h2>Blog</h2>
        <dl>
          <div class="contents_box">
            <dt>2013-08-04</dt>
            <dd>
              <div class="b_img">
                <img src="<?php echo get_template_directory_uri();?>/images/cat_3.jpeg">
              </div>
              <div class="b_right">
                <a href="<?php home_url(); ?>single">タイトルが入ります。</a>
              </div>
            </dd>
          </div>
          <div class="contents_box">
            <dt>2013-08-04</dt>
            <dd>
              <div class="b_img">
                <img src="<?php echo get_template_directory_uri();?>/images/cat_3.jpeg">
              </div>
              <div class="b_right">
                <a href="<?php home_url(); ?>single">タイトルが入ります。</a>
              </div>
            </dd>
          </div>
          <div class="contents_box">
            <dt>2013-08-04</dt>
            <dd>
              <div class="b_img">
                <img src="<?php echo get_template_directory_uri();?>/images/cat_3.jpeg">
              </div>
              <div class="b_right">
                <a href="<?php home_url(); ?>single">タイトルが入ります。</a>
              </div>
            </dd>
          </div>
          <div class="contents_box">
            <dt>2013-08-04</dt>
            <dd>
              <div class="b_img">
                <img src="<?php echo get_template_directory_uri();?>/images/cat_3.jpeg">
              </div>
              <div class="b_right">
                <a href="<?php home_url(); ?>single">タイトルが入ります。</a>
              </div>
            </dd>
          </div>
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

    <div id="footMenu">
      <ul>
        <li class="home"><a href="<?php home_url(); ?>">ホーム</a></li>
        <li><a href="<?php home_url(); ?>service">事業内容</a></li>
        <li><a href="<?php home_url(); ?>company">会社概要</a></li>
        <li><a href="<?php home_url(); ?>contact">お問い合わせ</a></li>
      </ul>
    </div><!-- /#footerMenu -->

<?php get_footer();