<?php get_header(); ?>

  <div class="wrapper">
    <div id="conL">

    <!--loopstart-->
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_time( get_option( 'date_format' )); ?></p> <!--管理画面から取得-->
      <!--loopcontent-->
      <?php the_content(); ?>
    <!--loopend-->
    <?php endwhile; endif; ?>
    <a class="btn" href="<?php echo home_url('/contact'); ?>"><button class="btn1">お問い合わせ</button></a>

    </div><!--conLend-->
    <?php get_sidebar(); ?>
  </div><!--wrapperend-->

<?php get_footer();