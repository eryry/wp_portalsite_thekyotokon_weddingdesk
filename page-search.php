<?php
/* 
Template Name: page-search
*/
?>

<?php get_header(); ?>
  <main>
  
    <section class="subpage_mv_wrapper">
      <img src="<?php echo esc_url(get_theme_file_uri('images/search/sp_search_mv.jpg') ); ?>" alt="" class="subpage_mv_img">
      <img src="<?php echo esc_url(get_theme_file_uri('images/search/pc_search_mv.jpg') ); ?>" alt="" class="subpage_mv_img_pc">
    </section>

    <section class="subpage_contents_wrapper subpage_contents_wrapper_search">
      <p>あなたのご希望のスタイル・イメージに合わせて<br class="pc_only_br">
      おすすめを診断いたします</p>
      <div class="page_title page_titlearea">
        <img src="<?php echo esc_url(get_theme_file_uri('images/search/sp_search_title.png') ); ?>" alt="" class="">
      </div>
      <p class="search_choices_click">ご希望に近い項目をクリック！</p>
      <p>☟</p>
      <p>☟</p>
      <div class="choices">
        <a href="#thekyotokon"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice01.png') ); ?>" alt=""></a>
        <a href="#theokinawakon"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice02.png') ); ?>" alt=""></a>
        <a href="#hanayomego"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice03.png') ); ?>" alt=""></a>
        <a href="#hanayomego"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice04.png') ); ?>" alt=""></a>
        <a href="#casha"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice05.png') ); ?>" alt=""></a>
        <a href="#katadomari"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice06.png') ); ?>" alt=""></a>
        <a href="#theokinawakon"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice07.png') ); ?>" alt=""></a>
        <a href="#thekyotokon"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice08.png') ); ?>" alt=""></a>
        <a href="#casha"><img src="<?php echo esc_url(get_theme_file_uri('images/search/choice09.png') ); ?>" alt=""></a>
      </div>
      <p>☟</p>
      <p>☟</p>
      <p>☟</p>
    </section>

    <section class="serch_result_area">

      <div class="bg_white style_area" id="thekyotokon">
        <div class="style_area_top">
          <img class="style_title_img" src="<?php echo esc_url(get_theme_file_uri('images/search/style01.png') ); ?>" alt="">
          <p class="style_catchcopy">京都にある式場でリーズナブルに<br>
          結婚式を挙げるなら</p>
        </div>
        <div class="pc_style_row_area">
          <div class="style_area_right">
            <img class="style_photo_img fadein01" src="<?php echo esc_url(get_theme_file_uri('images/search/style01_img.png') ); ?>" alt="">
          </div>
          <div class="style_area_left">
            <img class="style_name" src="<?php echo esc_url(get_theme_file_uri('images/search/style01_name.png') ); ?>" alt="">
            <p class="style_text">京都の様々なホテル・レストラン・<br>
            ゲストハウスでの結婚式を<br>
            かしこくリーズナブルに！</p>
            <a href="https://kyoto-kon.net/"><button class="style_btn btn_brown">THE KYOTO-KONサイトへ</button></a>
          </div>
        </div>
      </div>

      <div class="bg_beige style_area" id="hanayomego">
        <div class="style_area_top">
          <img class="style_title_img" src="<?php echo esc_url(get_theme_file_uri('images/search/style02.png') ); ?>" alt="">
          <p class="style_catchcopy">大切なあの人に<br class="sp_br">
          晴れ姿を見せに行くなら</p>
        </div>
        <div class="pc_style_row_area">
          <div class="style_area_right">
            <img class="style_photo_img fadein01" src="<?php echo esc_url(get_theme_file_uri('images/search/style02_img.png') ); ?>" alt="">
          </div>
          <div class="style_area_left">
            <img class="style_name" src="<?php echo esc_url(get_theme_file_uri('images/search/style02_name.png') ); ?>" alt="">
            <p class="style_text">京都の様々なホテル・レストラン・<br>
            ゲストハウスでの結婚式を<br>
            かしこくリーズナブルに！</p>
            <a href="https://hana-yomego.net/"><button class="style_btn btn_pink">花yomego サイトへ</button></a>
          </div>
        </div>
      </div>

      <div class="bg_white style_area" id="casha">
        <div class="style_area_top">
          <img class="style_title_img" src="<?php echo esc_url(get_theme_file_uri('images/search/style03.png') ); ?>" alt="">
          <p class="style_catchcopy">お気に入りの１着で<br class="sp_br">
          特別な思い出を残すなら</p>
        </div>
        <div class="pc_style_row_area sp_style_column_area">
          <div class="style_area_right">
            <img class="style_photo_img fadein01" src="<?php echo esc_url(get_theme_file_uri('images/search/style03_img.png') ); ?>" alt="">
          </div>
          <div class="style_area_left">
            <img class="style_name" src="<?php echo esc_url(get_theme_file_uri('images/search/style03_name.png') ); ?>" alt="">
            <p class="style_text">京都らしい町並みや四季折々の<br>
            風景でおふたりだけの<br>
            特別な思い出を写真に残すなら</p>
            <a href="https://kyomachi-musubi.com/plan/"><button class="style_btn btn_brown">プランページ  へ</button></a>
          </div>
        </div>
      </div>

      <div class="bg_beige style_area" id="katadomari">
        <div class="style_area_top">
          <img class="style_title_img" src="<?php echo esc_url(get_theme_file_uri('images/search/style04.png') ); ?>" alt="">
          <p class="style_catchcopy">お2人だけの京町家で<br>
          ちょっと贅沢なお写真を残すなら</p>
        </div>
        <div class="pc_style_row_area">
          <div class="style_area_right">
            <img class="style_photo_img fadein01" src="<?php echo esc_url(get_theme_file_uri('images/search/style04_img.png') ); ?>" alt="">
          </div>
          <div class="style_area_left">
            <img class="style_name" src="<?php echo esc_url(get_theme_file_uri('images/search/style04_name.png') ); ?>" alt="">
            <p class="style_text">2泊3日の京町家宿泊が付いた<br>
            フォトウェディング<br>
            旅行気分でお2人だけの記念日を<br>
            京都で過ごしてみては</p>
            <a href="https://kyomachi-musubi.com/"><button class="style_btn btn_pink">京町結 サイトへ</button></a>
          </div>
        </div>
      </div>

      <div class="bg_white style_area" id="theokinawakon">
        <div class="style_area_top">
          <img class="style_title_img" src="<?php echo esc_url(get_theme_file_uri('images/search/style05.png') ); ?>" alt="">
          <p class="style_catchcopy">豊かな自然に囲まれて<br class="sp_br">
          結婚式を挙げるなら</p>
        </div>
        <div class="pc_style_row_area">
          <div class="style_area_right">
          <img class="style_photo_img fadein01" src="<?php echo esc_url(get_theme_file_uri('images/search/style05_img.png') ); ?>" alt="">
          </div>
          <div class="style_area_left">
            <img class="style_name" src="<?php echo esc_url(get_theme_file_uri('images/search/style05_name.png') ); ?>" alt="">
            <p class="style_text">碧い海・青い空・白い砂浜が広がる<br>
            非日常空間で結婚式や<br>
            フォトウェディングを叶える</p>
            <a href="https://okinawa-kon.net/"><button class="style_btn btn_brown">THE OKINAWA-KONサイトへ</button></a>
          </div>
        </div>
      </div>
        
    </section>
    
  
  </main>
  <?php get_footer(); ?>

