<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="京都に特化した結婚式に関わる様々なサービスを提供する「THE KYOTO-KON」。
		結婚式を望むすべての新郎新婦様へ本当に価値のある「1日」を感じていただくためにご提案致します。" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css" />
		<!-- reset css  -->
		<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
		<!-- css -->
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
		<!-- slider css -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" rel="stylesheet"/>
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" rel="stylesheet"/>
		
		<!-- jquery -->
		<?php
			wp_deregister_script('jquery');
			wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
			wp_enqueue_script(
				'slick',
				esc_url( get_theme_file_uri( 'js/slick.js' ) ),
				array( 'jquery' ),
				'1.0'
			);
			wp_enqueue_script(
				'weddingdesk',
				esc_url( get_theme_file_uri( 'js/weddingdesk.js' ) ),
				array('jquery'),
				'1.0'
			);
		?>

		<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri( 'images/favicon.ico' ) ); ?>" />
		
		<?php wp_head(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-QE908PK5E6"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-QE908PK5E6');
		</script>
	</head>

	<body <?php body_class(); ?>>

		<!-- header -->
		<header>
			<!-- header-nav-sp -->
			<nav class="header-nav-sp">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/logo.png') ); ?>" alt="logo" class="sp_header_logo"></a>
				<div class="burger-btn">
					<span class="line1"></span>
					<span class="line2"></span>
					<span class="line3"></span>
				</div>
				<ul>
					<li class="category-name"><a href="https://kyoto-kon.net/">京都婚</a></li>
					<li class="category-name"><a href="https://hana-yomego.net/">自宅婚</a></li>
					<li class="category-name"><a href="https://okinawa-kon.net/">国内リゾート</a></li>
					<li class="category-name"><a href="https://kyomachi-musubi.com/">フォトウェディング</a></li>
					<li class="category-name"><a href="https://kyomachi-musubi.com/machiya">宿泊付京町家フォトウェディング	</a></li>
					<li class="category-name"><a href="<?php echo esc_url( home_url( '/search/' ) ); ?>">診断ページ</a></li>
					<li class="category-name"><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">私たちについて</a></li>
				</ul>
			</nav>
			<!-- fin header-nav-sp -->
			
			<!-- header-pc-wrapper -->
			<nav class="header-nav-pc">
				<div class="header_pc_left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/pc_logo.png') ); ?>" alt="logo" class="pc_header_logo"></a>
					<a href="https://www.instagram.com/thekyotokon/"><img src="<?php echo esc_url(get_theme_file_uri('images/icon_ig.png') ); ?>" alt="instalogo" class="pc_header_icon"></a>
					<a href="https://www.facebook.com/The-Kyoto-Kon-111550803957751/"><img src="<?php echo esc_url(get_theme_file_uri('images/icon_fb.png') ); ?>" alt="facebooklogo" class="pc_header_icon"></a>
				</div>
				<ul class="header_pc_right">
					<li class="category-name"><a href="https://kyoto-kon.net/">京都婚</a></li>
					<li class="category-name"><a href="https://hana-yomego.net/">自宅婚</a></li>
					<li class="category-name"><a href="https://okinawa-kon.net/">国内リゾート</a></li>
					<li class="category-name"><a href="https://kyomachi-musubi.com/">フォトウェディング</a></li>
					<li class="category-name"><a href="https://kyomachi-musubi.com/machiya">宿泊付京町家フォトウェディング	</a></li>
				</ul>
			</nav>
			
			
			<!-- fin header-pc-wrapper -->
			
		</header>