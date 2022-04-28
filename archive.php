<?php
/* 
Template Name: arichive
*/
?>

<?php get_header(); ?>


  <main>
  
    <section class="subpage_mv_wrapper">
      <img src="<?php echo esc_url(get_theme_file_uri('images/info/sp_info_mv.jpg') ); ?>" alt="" class="subpage_mv_img">
      <img src="<?php echo esc_url(get_theme_file_uri('images/info/pc_info_mv.jpg') ); ?>" alt="" class="subpage_mv_img_pc">
    </section>

    <section class="subpage_contents_wrapper">
      <div class="page_title page_titlearea">
        <img class="sp_top_title" src="<?php echo esc_url(get_theme_file_uri('images/info/sp_info_title.png') ); ?>" alt="">
        <img class="pc_top_title" src="<?php echo esc_url(get_theme_file_uri('images/info/pc_info_title.png') ); ?>" alt="">
      </div>
    </section>

    <div class="pc_info_wrapper">
      <section class="info_area">

      <?php if( have_posts() ) : while( have_posts() ):  the_post(); ?><!-- ループ開始 -->


          <article class="info_each_wrapper" <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>"><p class="info_title"><?php the_title(); ?></p></a>
      <div class="info_datecat_set">
        <p class="info_date"><?php the_time('Y.n.j');?></p>
        <p class="info_cat"><?php the_category(','); ?></p>
      </div>

      <div class="info_thumb_and_contents">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png') ); ?>" alt="">
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>"><p class="info_text pc_info_excerpt_area"><?php the_excerpt();?></p></a>
      </div>
  </article>

  <?php endwhile; endif; ?><!-- ループ終了 -->



        <!-- ▽ページネーション：開始 -->
        <?php the_posts_pagination(); ?>
        <!-- △ページネーション：終了 -->

       

      </section>

      <section class="info_cat_area">
        <div class="sp_info_cat_list_area pc_info_cat_list_area">
          <p class="info_cat_title">カテゴリー</p>
          <ul class="info_cat_list">
            <div class="cat_list"> 
            <?php
            $categories = get_categories();
            foreach ($categories as $category): ?>

            <li><p>- <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"> 
            <?php echo $category->name; ?></a></p></li>
            <!--ここにサブループを記述-->

            <?php endforeach; ?>
            </div>
          </ul>
        </div>
        <div class="sp_info_cat_all pc_info_cat_all">
          <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><button class="btn viewmore_btn">お知らせ一覧</button></a>
        </div>
      </section>

    </div>

  
  </main>
  <?php get_footer(); ?>

