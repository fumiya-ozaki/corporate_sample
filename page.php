<?php get_header(); ?>

    <div class="wrapper">
    <div id="conL">
      <h2><?php the_title(); ?></h2>

      <?php if(have_posts()): while(have_posts()): the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>

      <a class="btn" href="contact.html"><button class="btn1">お問い合わせ</button></a>
    </div><!--conLend-->

    <?php get_sidebar(); ?>
    </div>


    <?php get_footer();?>