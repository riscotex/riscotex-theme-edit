<?php
/**
 * Template principal (landing page Riscotex).
 */
get_header();

$reps    = riscotex_repeaters();
$status  = isset( $_GET['enviado'] ) ? sanitize_text_field( wp_unslash( $_GET['enviado'] ) ) : '';
?>

<main id="topo">

	<!-- HERO -->
	<section class="hero">
		<img class="hero__bg" src="<?php echo riscotex_img( 'hero_img', 'kraft-textura.jpg' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'hero_titulo' ) ); ?>">
		<div class="wrap hero__inner">
			<img class="hero__logo" src="<?php echo esc_url( riscotex_asset( 'assets/img/logo-riscotex.png' ) ); ?>" alt="<?php echo esc_attr( riscotex_text( 'marca' ) ); ?>">
			<p class="hero__tagline"><?php riscotex_e( 'hero_tagline' ); ?></p>
			<h1><?php riscotex_e( 'hero_titulo' ); ?></h1>
			<p class="lead"><?php riscotex_e( 'hero_subtitulo' ); ?></p>
			<p class="hero__text"><?php riscotex_e( 'hero_texto' ); ?></p>
			<div class="btns">
				<a class="btn btn--whats" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener"><?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?><?php riscotex_e( 'hero_btn2' ); ?></a>
				<a class="btn btn--ghost-light" href="#contato"><?php riscotex_e( 'hero_btn1' ); ?></a>
			</div>
			<div class="stats">
				<?php for ( $s = 1; $s <= 4; $s++ ) : ?>
					<div class="stat">
						<strong><?php riscotex_e( 'stat' . $s . '_num' ); ?></strong>
						<span><?php riscotex_e( 'stat' . $s . '_label' ); ?></span>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<!-- POR QUE ESCOLHER -->
	<section id="porque" class="section section--alt">
		<div class="wrap">
			<p class="eyebrow"><?php riscotex_e( 'porque_eyebrow' ); ?></p>
			<h2><?php riscotex_e( 'porque_titulo' ); ?></h2>
			<p class="muted lead-sm"><?php riscotex_e( 'porque_texto' ); ?></p>
			<div class="cards">
				<?php foreach ( $reps['porque']['items'] as $i => $item ) : $n = $i + 1; ?>
					<article class="card card--num">
						<span class="num"><?php echo esc_html( str_pad( (string) $n, 2, '0', STR_PAD_LEFT ) ); ?></span>
						<h3><?php echo esc_html( get_theme_mod( 'riscotex_porque_titulo_' . $n, $item[0] ) ); ?></h3>
						<p><?php echo esc_html( get_theme_mod( 'riscotex_porque_texto_' . $n, $item[1] ) ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="ctabar">
				<p><?php riscotex_e( 'porque_cta_texto' ); ?></p>
				<a class="btn btn--whats" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener"><?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?><?php riscotex_e( 'porque_cta_btn' ); ?></a>
			</div>
		</div>
	</section>


	<!-- SOBRE -->
	<section id="sobre" class="section">
		<div class="wrap">
			<p class="eyebrow"><?php riscotex_e( 'sobre_eyebrow' ); ?></p>
			<h2><?php riscotex_e( 'sobre_titulo' ); ?></h2>
			<div class="cols-3 muted">
				<p><?php riscotex_e( 'sobre_texto1' ); ?></p>
				<p><?php riscotex_e( 'sobre_texto2' ); ?></p>
				<p><?php riscotex_e( 'sobre_texto3' ); ?></p>
			</div>
		</div>
	</section>

	<!-- DIFERENCIAIS -->
	<section id="diferenciais" class="section section--alt">
		<div class="wrap">
			<p class="eyebrow"><?php riscotex_e( 'dif_eyebrow' ); ?></p>
			<h2><?php riscotex_e( 'dif_titulo' ); ?></h2>
			<div class="grid-cards">
				<?php foreach ( $reps['dif']['items'] as $i => $item ) : $n = $i + 1; ?>
					<article class="card">
						<h3><?php echo esc_html( get_theme_mod( 'riscotex_dif_titulo_' . $n, $item[0] ) ); ?></h3>
						<p><?php echo esc_html( get_theme_mod( 'riscotex_dif_texto_' . $n, $item[1] ) ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="btns">
				<a class="btn btn--whats" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener"><?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?><?php riscotex_e( 'whatsapp_dif_btn' ); ?></a>
			</div>
		</div>
	</section>

	<!-- PRODUTOS -->
	<section id="produtos" class="section">
		<div class="wrap split">
			<div>
				<p class="eyebrow"><?php riscotex_e( 'prod_eyebrow' ); ?></p>
				<h2><?php riscotex_e( 'prod_titulo' ); ?></h2>
				<img class="img" loading="lazy" src="<?php echo riscotex_img( 'prod_img', 'bobinas.jpg' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'prod_titulo' ) ); ?>">
			</div>
			<div>
				<ul class="list">
					<?php foreach ( $reps['prod']['items'] as $i => $item ) : $n = $i + 1; ?>
						<li>
							<h3><?php echo esc_html( get_theme_mod( 'riscotex_prod_titulo_' . $n, $item[0] ) ); ?></h3>
							<p><?php echo esc_html( get_theme_mod( 'riscotex_prod_texto_' . $n, $item[1] ) ); ?></p>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="btns">
					<a class="btn btn--primary" href="#contato"><?php riscotex_e( 'prod_btn' ); ?></a>
					<a class="btn btn--whats" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener"><?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?>WhatsApp</a>
				</div>
			</div>
		</div>
	</section>

	<!-- PERFURACAO UNIVERSAL -->
	<section id="perfuracao" class="section section--dark">
		<div class="wrap split split--center">
			<div>
				<p class="eyebrow"><?php riscotex_e( 'perf_eyebrow' ); ?></p>
				<h2><?php riscotex_e( 'perf_titulo' ); ?></h2>
				<p class="muted-light"><?php riscotex_e( 'perf_texto' ); ?></p>
				<ul class="checks">
					<?php foreach ( riscotex_beneficios() as $i => $b ) : $n = $i + 1; ?>
						<li><span>&#10004;</span><?php echo esc_html( get_theme_mod( 'riscotex_perf_beneficio_' . $n, $b ) ); ?></li>
					<?php endforeach; ?>
				</ul>
				<a class="btn btn--whats" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener"><?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?><?php riscotex_e( 'perf_btn' ); ?></a>
			</div>
			<img class="img" loading="lazy" src="<?php echo riscotex_img( 'perf_img', 'perfuracao-detalhe.jpg' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'perf_titulo' ) ); ?>">
		</div>
	</section>

	<!-- SEGMENTOS -->
	<section id="segmentos" class="section">
		<div class="wrap">
			<p class="eyebrow"><?php riscotex_e( 'seg_eyebrow' ); ?></p>
			<h2><?php riscotex_e( 'seg_titulo' ); ?></h2>
			<div class="tags">
				<?php foreach ( riscotex_segmentos() as $i => $s ) : $n = $i + 1; ?>
					<span class="tag"><?php echo esc_html( get_theme_mod( 'riscotex_seg_item_' . $n, $s ) ); ?></span>
				<?php endforeach; ?>
			</div>
			<p class="muted seg__text"><?php riscotex_e( 'seg_texto' ); ?></p>
		</div>
	</section>

	<!-- CONTATO -->
	<section id="contato" class="section section--alt">
		<div class="wrap split">
			<div>
				<p class="eyebrow"><?php riscotex_e( 'cta_eyebrow' ); ?></p>
				<h2><?php riscotex_e( 'cta_titulo' ); ?></h2>
				<p class="muted"><?php riscotex_e( 'cta_texto' ); ?></p>
				<ul class="contato">
					<li>&#128205; <?php riscotex_e( 'contato_endereco' ); ?></li>
					<li>&#128231; <a href="mailto:<?php echo esc_attr( riscotex_text( 'contato_email1' ) ); ?>"><?php riscotex_e( 'contato_email1' ); ?></a></li>
					<li>&#128231; <a href="mailto:<?php echo esc_attr( riscotex_text( 'contato_email2' ) ); ?>"><?php riscotex_e( 'contato_email2' ); ?></a></li>
					<li>&#128231; <a href="mailto:<?php echo esc_attr( riscotex_text( 'contato_email3' ) ); ?>"><?php riscotex_e( 'contato_email3' ); ?></a></li>
					<li>&#128222; <?php riscotex_e( 'contato_tel1' ); ?></li>
					<li>&#128222; <?php riscotex_e( 'contato_tel2' ); ?></li>
				</ul>
				<div class="btns">
					<a class="btn btn--whats" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener"><?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?><?php riscotex_e( 'whatsapp_cta1' ); ?></a>
				</div>
			</div>

			<div class="formbox">
				<?php if ( 'ok' === $status ) : ?>
					<p class="alert alert--ok"><?php riscotex_e( 'form_sucesso' ); ?></p>
				<?php elseif ( 'erro' === $status ) : ?>
					<p class="alert alert--erro"><?php riscotex_e( 'form_erro' ); ?></p>
				<?php endif; ?>

				<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="form">
					<input type="hidden" name="action" value="riscotex_form">
					<?php wp_nonce_field( 'riscotex_form', 'riscotex_nonce' ); ?>
					<p class="hp"><label>Não preencha<input type="text" name="site_web" tabindex="-1" autocomplete="off"></label></p>

					<label>Nome*<input type="text" name="nome" required></label>
					<label>Empresa<input type="text" name="empresa"></label>
					<label>Telefone<input type="tel" name="telefone"></label>
					<label>WhatsApp<input type="tel" name="whatsapp"></label>
					<label>E-mail*<input type="email" name="email" required></label>
					<label>Cidade<input type="text" name="cidade"></label>
					<label>Estado<input type="text" name="estado"></label>
					<label>Produto de Interesse<input type="text" name="produto"></label>
					<label>Quantidade Estimada<input type="text" name="quantidade"></label>
					<label class="full">Mensagem<textarea name="mensagem" rows="4"></textarea></label>
					<button class="btn btn--primary full" type="submit"><?php riscotex_e( 'form_btn' ); ?></button>
				</form>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
