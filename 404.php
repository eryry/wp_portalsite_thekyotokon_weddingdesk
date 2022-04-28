<?php get_header(); ?>
  <main>
  
    <section class="subpage_mv_wrapper">
      <img src="<?php echo esc_url(get_theme_file_uri('images/sp_404.jpg') ); ?>" alt="" class="subpage_mv_img">
      <img src="<?php echo esc_url(get_theme_file_uri('images/pc_404.jpgg') ); ?>" alt="" class="subpage_mv_img_pc">
    </section>

    <section class="subpage_contents_wrapper">

      <div class="page_title page_titlearea">
        <h2>error</h2>
        
			  <h2 class="error_msg">404 Not Found（ページが見つかりませんでした）</h2>
			  <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
			  <p class="error_url">URL ：<span></span></p>
			  <br>
			  <p><a class="error_link" href="<?php echo esc_url( home_url( '/' ) ); ?>">- THE KYOTO-KON トップページへ -</a></p>
      </div>
      </section>
    
  
  </main>
  <?php get_footer(); ?>

