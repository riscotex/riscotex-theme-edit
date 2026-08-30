<?php
/**
 * Template principal (landing page Riscotex).
 */
get_header();

$reps   = riscotex_repeaters();
$status = isset( $_GET['enviado'] ) ? sanitize_text_field( wp_unslash( $_GET['enviado'] ) ) : '';
?>

<main id="topo">

	<!-- HERO -->
	<section class="hero">
		<img class="hero__bg" src="<?php echo riscotex_img( 'hero_img', 'kraft-textura.jpg' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'hero_titulo' ) ); ?>">
		<div class="wrap hero__inner">
			<img class="hero__logo" src="<?php echo riscotex_img( 'hero_logo', 'logo-riscotex.png' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'marca' ) ); ?>">
			<p class="hero__tagline"><?php riscotex_e( 'hero_tagline' ); ?></p>
			<h1><?php riscotex_e( 'hero_titulo' ); ?></h1>
			<p class="lead"><?php riscotex_e( 'hero_subtitulo' ); ?></p>
			<p class="hero__text"><?php riscotex_e( 'hero_texto' ); ?></p>
			<div class="btns">
				<?php if ( riscotex_raw( 'hero_btn1' ) ) : ?>
					<a class="btn btn--primary" href="<?php echo esc_url( riscotex_text( 'hero_btn1_link' ) ); ?>"><?php riscotex_e( 'hero_btn1' ); ?></a>
				<?php endif; ?>
				<?php if ( riscotex_raw( 'hero_btn2' ) ) : ?>
					<a class="btn btn--ghost-light" href="<?php echo esc_url( riscotex_text( 'hero_btn2_link' ) ); ?>"><?php riscotex_e( 'hero_btn2' ); ?></a>
				<?php endif; ?>
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
				<?php if ( riscotex_raw( 'porque_cta_btn' ) ) : ?>
					<a class="btn btn--primary" href="<?php echo esc_url( riscotex_text( 'porque_cta_link' ) ); ?>"><?php riscotex_e( 'porque_cta_btn' ); ?></a>
				<?php endif; ?>
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
			<?php if ( riscotex_raw( 'dif_btn' ) ) : ?>
				<div class="btns">
					<a class="btn btn--primary" href="<?php echo esc_url( riscotex_text( 'dif_btn_link' ) ); ?>"><?php riscotex_e( 'dif_btn' ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<!-- PRODUTOS -->
	<section id="produtos" class="section">
		<div class="wrap">

			<!-- DESTAQUES: PAPEL UNIVERSAL + MICROPERFURADO -->
			<p class="eyebrow"><?php riscotex_e( 'destaque_eyebrow' ); ?></p>
			<h2><?php riscotex_e( 'destaque_titulo' ); ?></h2>
			<p class="muted lead-sm"><?php riscotex_e( 'destaque_texto' ); ?></p>

			<div class="destaques">
				<?php
				$destaques = array(
					1 => 'papel-universal.jpg',
					2 => 'papel-microperfurado.jpg',
				);
				foreach ( $destaques as $d => $fallback ) :
					?>
					<article class="destaque">
						<div class="destaque__media">
							<img loading="lazy" src="<?php echo riscotex_img( 'destaque' . $d . '_img', $fallback ); ?>" alt="<?php echo esc_attr( riscotex_text( 'destaque' . $d . '_titulo' ) ); ?>">
							<?php if ( riscotex_raw( 'destaque' . $d . '_medida' ) ) : ?>
								<span class="destaque__medida"><?php riscotex_e( 'destaque' . $d . '_medida' ); ?></span>
							<?php endif; ?>
						</div>
						<div class="destaque__body">
							<?php if ( riscotex_raw( 'destaque' . $d . '_tag' ) ) : ?>
								<span class="destaque__tag"><?php riscotex_e( 'destaque' . $d . '_tag' ); ?></span>
							<?php endif; ?>
							<h3><?php riscotex_e( 'destaque' . $d . '_titulo' ); ?></h3>
							<p><?php riscotex_e( 'destaque' . $d . '_texto' ); ?></p>
							<ul class="checks checks--dark">
								<?php for ( $k = 1; $k <= 3; $k++ ) : ?>
									<?php if ( riscotex_raw( 'destaque' . $d . '_item' . $k ) ) : ?>
										<li><span>&#10004;</span><?php riscotex_e( 'destaque' . $d . '_item' . $k ); ?></li>
									<?php endif; ?>
								<?php endfor; ?>
							</ul>
							<?php if ( riscotex_raw( 'destaque' . $d . '_btn' ) ) : ?>
								<a class="btn btn--primary" href="<?php echo esc_url( riscotex_text( 'destaque' . $d . '_link' ) ); ?>"><?php riscotex_e( 'destaque' . $d . '_btn' ); ?></a>
							<?php endif; ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="split split--top">
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
					<?php if ( riscotex_raw( 'prod_btn' ) ) : ?>
						<div class="btns">
							<a class="btn btn--primary" href="<?php echo esc_url( riscotex_text( 'prod_btn_link' ) ); ?>"><?php riscotex_e( 'prod_btn' ); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- PERFURAÇÃO UNIVERSAL -->
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
				<?php if ( riscotex_raw( 'perf_btn' ) ) : ?>
					<a class="btn btn--primary" href="<?php echo esc_url( riscotex_text( 'perf_btn_link' ) ); ?>"><?php riscotex_e( 'perf_btn' ); ?></a>
				<?php endif; ?>
			</div>
			<img class="img" loading="lazy" src="<?php echo riscotex_img( 'perf_img', 'perfuracao-universal.jpg' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'perf_titulo' ) ); ?>">
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
					<?php if ( riscotex_raw( 'contato_endereco' ) ) : ?>
						<li>&#128205; <?php riscotex_e( 'contato_endereco' ); ?></li>
					<?php endif; ?>
					<?php for ( $e = 1; $e <= 3; $e++ ) : ?>
						<?php $mail = riscotex_raw( 'contato_email' . $e ); ?>
						<?php if ( $mail ) : ?>
							<li>&#128231; <a href="mailto:<?php echo esc_attr( $mail ); ?>"><?php echo esc_html( $mail ); ?></a></li>
						<?php endif; ?>
					<?php endfor; ?>
					<?php for ( $t = 1; $t <= 2; $t++ ) : ?>
						<?php $tel = riscotex_raw( 'contato_tel' . $t ); ?>
						<?php if ( $tel ) : ?>
							<li>&#128222; <?php echo esc_html( $tel ); ?></li>
						<?php endif; ?>
					<?php endfor; ?>
				</ul>
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

					<label><?php riscotex_e( 'label_nome' ); ?><input type="text" name="nome" required></label>
					<label><?php riscotex_e( 'label_empresa' ); ?><input type="text" name="empresa"></label>
					<label><?php riscotex_e( 'label_telefone' ); ?><input type="tel" name="telefone"></label>
					<label><?php riscotex_e( 'label_email' ); ?><input type="email" name="email" required></label>
					<label><?php riscotex_e( 'label_cidade' ); ?><input type="text" name="cidade"></label>
					<label><?php riscotex_e( 'label_estado' ); ?><input type="text" name="estado"></label>
					<label><?php riscotex_e( 'label_produto' ); ?><input type="text" name="produto"></label>
					<label><?php riscotex_e( 'label_quantidade' ); ?><input type="text" name="quantidade"></label>
					<label class="full"><?php riscotex_e( 'label_mensagem' ); ?><textarea name="mensagem" rows="4"></textarea></label>
					<button class="btn btn--primary full" type="submit"><?php riscotex_e( 'form_btn' ); ?></button>
				</form>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
