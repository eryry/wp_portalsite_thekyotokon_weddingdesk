<?php
/* 
Template Name: page-company
*/
?>


<?php get_header(); ?>
  <main>
  
    <section class="subpage_mv_wrapper">
      <img src="<?php echo esc_url(get_theme_file_uri('images/company/sp_company_mv.jpg') ); ?>" alt="" class="subpage_mv_img">
      <img src="<?php echo esc_url(get_theme_file_uri('images/company/pc_company_mv.jpg') ); ?>" alt="" class="subpage_mv_img_pc">
    </section>

    <section class="subpage_contents_wrapper">
      <div class="page_title page_titlearea">
        <img class="sp_top_title" src="<?php echo esc_url(get_theme_file_uri('images/company/sp_company_title.png') ); ?>" alt="">
        <img class="pc_top_title" src="<?php echo esc_url(get_theme_file_uri('images/company/pc_company_title.png') ); ?>" alt="">
      </div>

      <p class="company_text">新郎新婦様にとって結婚式はかけがえのない記念日です。<br>そんな大切なセレモニーをおふたりの気持ちに寄り添ってご提案したいと思い、京都に特化した結婚式関連のサービスを提供する『THE KYOTO-KON』をはじめました。<br>
      おふたりとおふたりに関わる皆様の人生を豊かにするために。</p>

      <div class="campany_images_area">
        <img src="<?php echo esc_url(get_theme_file_uri('images/company/company_barm_img.png') ); ?>" alt="" class="company_barm_img_area"> 
        <img src="<?php echo esc_url(get_theme_file_uri('images/company/company_barm_title.png') ); ?>" alt="" class="company_barm_title_area">
      </div>

      <table class="company_barm">
        <tr>
          <th><p>社名</p></th><td><p>株式会社バーム</p></td>
        </tr>
        <tr>
          <th><p>資本金</p></th><td><p>300万円</p></td>
        </tr>
        <tr>
          <th><p>本社住所</p></th><td><p>〒615-0873 京都市右京区西京極浜ノ町36番地701</p>
          </td>
        </tr>
        <tr>
          <th><p>電話</p></th><td><p>075-874-5708</p></td>
        </tr>
        <tr>
          <th><p>FAX</p></th><td><p>075-320-3640</p></td>
        </tr>
        <tr>
          <th><p>メールアドレス</p></th><td><p>info@weddingdesk.jp</p></td>
        </tr>
        <tr>
          <th><p>代表者</p></th><td><p>野口亜紀</p></td>
        </tr>
      </table>

    </section>
  
  </main>
  <?php get_footer(); ?>

