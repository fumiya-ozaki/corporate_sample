<?php get_header(); ?>

  <div class="wrapper"><!--wrapperstart-->
    <div id="conL">
      <!--固定ページのループ処理-->
      <?php if(have_posts()): while(have_posts()): the_post();?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>

      <!--ページの条件分岐-->
      <?php if (!is_page(array('contact'))) :?><!--contactページではない場合-->
        <a class="btn" href="<?php echo home_url('/contact'); ?>"><button class="btn1">お問い合わせ</button></a>
      <?php endif; ?>

    </div><!--conLend-->

<?php get_sidebar(); ?>
  </div><!--wrapperend-->
<?php get_footer();?>