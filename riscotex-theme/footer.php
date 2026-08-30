<footer class="footer">
	<div class="wrap">
		<img class="footer__logo" src="<?php echo riscotex_img( 'rodape_logo', 'logo-riscotex.png' ); ?>" alt="<?php echo esc_attr( riscotex_text( 'rodape_titulo' ) ); ?>">
		<p class="footer__text"><?php riscotex_e( 'rodape_texto' ); ?></p>
		<?php if ( riscotex_raw( 'rodape_instagram' ) ) : ?>
			<div class="footer__social">
				<a class="footer__social-link" href="<?php echo esc_url( riscotex_text( 'rodape_instagram' ) ); ?>" target="_blank" rel="noopener" aria-label="Siga-nos no Instagram">
					<?php echo riscotex_instagram_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					<span><?php riscotex_e( 'rodape_instagram_label', 'Instagram: @riscotex' ); ?></span>
				</a>
			</div>
		<?php endif; ?>
		<p class="footer__copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php riscotex_e( 'rodape_copy' ); ?></p>
	</div>
</footer>

<?php if ( 'nao' !== riscotex_raw( 'whatsapp_mostrar' ) && riscotex_raw( 'whatsapp_link' ) ) : ?>
	<a class="wa-float" href="<?php echo esc_url( riscotex_text( 'whatsapp_link' ) ); ?>" target="_blank" rel="noopener" aria-label="Falar no WhatsApp">
		<?php echo riscotex_whats_icon(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
		<span><?php riscotex_e( 'whatsapp_flutuante' ); ?></span>
	</a>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
