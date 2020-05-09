<?php get_header(); ?>

<div class="wrapper"><!--wrapperstart-->
  <div id="conL"><!--conLstart-->

    <?php if (in_category(array('blog'))) {?>

      <section class="information"><!--blogstart-->
        <h2><?php the_archive_title(); ?></h2>
        <!--loopstart-->
        <?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="contents_box">
            <ol>
              <li>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' )); ?></time>
                <span class="b_img">
                  <?php the_post_thumbnail('thumbside'); ?>
                </span>
                <span class="b_right">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </span>
              </li>
            </ol>
          </div>
        <!--loopend-->
        <?php endwhile; endif; ?>
      </section><!--blogend-->
    
    <?php } elseif(in_category(array('release'))){ ?>

      <section class="information"><!--releasestart-->
        <h2><?php the_archive_title(); ?></h2>
        <!--loopstart-->
        <?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="contents_box">
            <ol>
              <li>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' )); ?></time>
                <span>
                  <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>　を更新しました。
                </span>
              </li>
            </ol>
          </div>
        <!--loopend-->
        <?php endwhile; endif; ?>
      </section><!--releaseend-->
    
    <?php }else{ ?>

      <section class="information"><!--workstart-->
      <h2><?php the_archive_title(); ?></h2>
      <!--loopstart-->
      <?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="contents_box">
            <ol>
              <li>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' )); ?></time>
                <span>
                  <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>　を更新しました。
                </span>
              </li>
            </ol>
          </div>
    
        <!--loopend-->
        <?php endwhile; endif; ?>
      </section><!--workend-->

    <?php } ?>
  </div><!--conLend-->
<?php get_sidebar(); ?>

  </div><!--wrapperend-->
  
<?php get_footer();