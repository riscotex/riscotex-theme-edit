<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="topbar">
	<div class="wrap topbar__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
				<img class="brand__logo" src="<?php echo esc_url( riscotex_asset( 'assets/img/logo-riscotex.png' ) ); ?>" alt="<?php echo esc_attr( riscotex_text( 'marca' ) ); ?>">
			<?php endif; ?>
		</a>

		<button class="nav-toggle" type="button" aria-label="Abrir menu" aria-expanded="false" aria-controls="riscotex-nav">
			<span></span><span></span><span></span>
		</button>

		<nav class="nav" id="riscotex-nav">
			<?php
			if ( has_nav_menu( 'principal' ) ) {
				wp_nav_menu( array( 'theme_location' => 'principal', 'container' => false, 'menu_class' => 'nav__list' ) );
			} else {
				?>
				<ul class="nav__list">
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#porque">Por que a Riscotex</a></li>
					<li><a href="#diferenciais">Diferenciais</a></li>
					<li><a href="#produtos">Produtos</a></li>
					<li><a href="#perfuracao">Perfuração Universal</a></li>
					<li><a href="#segmentos">Segmentos</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<?php if ( riscotex_raw( 'topo_btn' ) ) : ?>
			<a class="btn btn--primary btn--sm" href="<?php echo esc_url( riscotex_text( 'topo_btn_link' ) ); ?>">
				<?php riscotex_e( 'topo_btn' ); ?>
			</a>
		<?php endif; ?>
	</div>
</header>
