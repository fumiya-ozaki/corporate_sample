<?php get_header(); ?>

<div class="wrapper"><!--wrapperstart-->
  <div id="conL"><!--conLstart-->

    <?php if (in_category(array('9'))) {?>

      <div class="information"><!--blogstart-->
        <h2><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></h2>
        <!--loopstart-->
        <?php if(have_posts()): while(have_posts()): the_post();?>
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
        <?php endwhile; endif; ?>
      </div><!--blogend-->
    
    <?php } elseif(in_category(array('8'))){ ?>

      <div class="information"><!--releasestart-->
        <h2>リリース</h2>
        <!--loopstart-->
        <?php if(have_posts()): while(have_posts()): the_post();?>
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
        <?php endwhile; endif; ?>
      </div><!--releaseend-->
    
    <?php }else{ ?>

      <div class="information"><!--workstart-->
      <h2>業務について</h2>
      <!--loopstart-->
      <?php if(have_posts()): while(have_posts()): the_post();?>
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
        <?php endwhile; endif; ?>
      </div><!--workend-->

    <?php } ?>
      
    </div><!--conLend-->
<?php get_sidebar(); ?>

  </div><!--wrapperend-->
  
<?php get_footer();