<?php get_header(); ?>

    <div class="wrapper">
    <div id="conL">

<?php if (in_category(array('9'))) {?>
      <div class="information"><!--blogstart-->
        <h2>Blog</h2>
        <dl>

          <!--loopstart-->
<?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="contents_box">
            <dt><?php the_time('Y-m-d'); ?></dt>
            <dd>
              <div class="b_img">
                <?php the_post_thumbnail('thumbside'); ?>
              </div>
              <div class="b_right">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
            </dd>
          </div>

        <!--loopend-->
<?php endwhile; endif; ?>

          </dl>
        </div><!--blogend-->

<?php } elseif(in_category(array('8'))){ ?>
  <div class="information"><!--informationstart-->
        <h2>INFORMATION</h2>
        <dl>
        <!--loopstart-->
<?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="contents_box">
            <dt><?php the_time('Y-m-d'); ?></dt>
            <dd>
              <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
            </dd>
          </div>

        <!--loopend-->
<?php endwhile; endif; ?>
        </dl>
      </div><!--informationend-->

<?php }else{ ?>
  <div class="information"><!--informationstart-->
  <h2>INFORMATION</h2>
        <dl>
        <!--loopstart-->
<?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="contents_box">
            <dt><?php the_time('Y-m-d'); ?></dt>
            <dd>
              <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
            </dd>
          </div>

        <!--loopend-->
<?php endwhile; endif; ?>
        </dl>
      </div><!--informationend-->

<?php } ?>
      
    </div><!--conLend-->
    <?php get_sidebar(); ?>

  </div><!--wrapperend-->
  
<?php get_footer();