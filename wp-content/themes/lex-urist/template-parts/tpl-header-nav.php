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
			<a href="#callback-modal" class="callback-btn btn btn_grad" data-toggle="modal" data-target="#callback-modal">Заказать звонок</a>
		</nav>
		<a href="#" class="header__menu-btn-mob">
			<span></span>
		</a>
	</section>
</div>
<!-- container-fluid full-container -->