<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<div class="main-wraper">
		<header class="header header-main">
			<div class="container-fluid full-container">
				<section class="sec-nav">
					<?php
					if (get_custom_logo()) {
						the_custom_logo();
					} else {
						echo bloginfo('name');
					}
					?>
					<nav class="df-jsb main-navbar">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'menu_class' => 'main-menu',
						));
						?>
						<a href="#" class="callvack-btn btn btn_grad">Заказать звонок</a>
					</nav>
					<a href="#" class="header__menu-btn-mob">
						<span></span>
					</a>
				</section>
			</div>
			<!-- container-fluid full-container -->
			<section class="sec-header">
				<div class="sec-header__col">
					<a href="#" class="lex_link-work"></a>
					<h1 class="sec-header-title">Биржа юридических услуг <i class="lex-title_line"></i></h1>
					<h2 class="sec-header__suptitle">Есть проблема? <br> Мы ее <br> решим!</h2>
					<h3 class="sec-header__text">Вы сами выбираете исполнителя и стоимость <br> оказываемой услуги</h3>
					<div class="lex-control">
						<div class="lex-control__item"><span class="lex-control__item-text lex-control__item-text_01">Lex гарантирует <br> Качественно</span></div>
						<div class="lex-control__item lex-control__item_bg-g"><span class="lex-control__item-text lex-control__item-text_02">Lex проверяет <br> Надежно</span></div>
						<div class="lex-control__item"><span class="lex-control__item-text lex-control__item-text_03">Lex контролирует <br> Оперативно</span></div>
					</div>
					<!-- lex-control -->
				</div>
			</section>
		</header>
		<!-- header -->
		<section class="content-wrapper">