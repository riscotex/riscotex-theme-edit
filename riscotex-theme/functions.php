<?php
/**
 * Tema Riscotex - Funções principais.
 * Todos os textos, títulos, parágrafos, links de botões e imagens são
 * 100% editáveis em Aparência > Personalizar > "Conteúdo do Site Riscotex".
 *
 * @package Riscotex
 * @version 2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RISCOTEX_VERSION', '2.1.0' );

/* -------------------------------------------------------------------------
 * Setup do Tema
 * ---------------------------------------------------------------------- */
function riscotex_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 260,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'principal' => __( 'Menu Principal', 'riscotex' ) ) );
}
add_action( 'after_setup_theme', 'riscotex_setup' );

/**
 * URL de asset do tema em formato relativo.
 */
function riscotex_asset( $path ) {
	$url = get_template_directory_uri() . '/' . ltrim( $path, '/' );
	$rel = wp_make_link_relative( $url );
	return $rel ? $rel : $url;
}

function riscotex_assets() {
	// Fontes locais
	wp_enqueue_style( 'riscotex-fonts', riscotex_asset( 'assets/css/fonts.css' ), array(), RISCOTEX_VERSION );
	wp_register_style( 'riscotex-style', false, array(), RISCOTEX_VERSION );
	wp_enqueue_style( 'riscotex-style' );
	$css_file = get_template_directory() . '/assets/css/theme.css';
	if ( file_exists( $css_file ) ) {
		wp_add_inline_style( 'riscotex-style', file_get_contents( $css_file ) );
	} else {
		wp_enqueue_style( 'riscotex-style-file', riscotex_asset( 'assets/css/theme.css' ), array(), RISCOTEX_VERSION );
	}
	wp_enqueue_script( 'riscotex-script', riscotex_asset( 'assets/js/theme.js' ), array(), RISCOTEX_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'riscotex_assets' );

/* -------------------------------------------------------------------------
 * Conteúdo Padrão (Português Brasil com acentuação correta)
 * ---------------------------------------------------------------------- */
function riscotex_defaults() {
	return array(
		// Topo / Hero
		'marca'              => 'RISCOTEX',
		'hero_eyebrow'       => 'Riscotex Papéis',
		'hero_titulo'        => 'Papéis técnicos para corte industrial',
		'hero_subtitulo'     => 'Soluções que impulsionam a eficiência da sua produção',
		'hero_texto'         => 'A Riscotex é especialista no desenvolvimento e fornecimento de papéis técnicos para sistemas automáticos de corte industrial. Com tecnologia própria e foco constante em inovação, oferecemos soluções que contribuem para maior produtividade, precisão e qualidade nos processos produtivos dos setores têxtil, couro, sintéticos, automotivo, estofados e calçadista.',
		'hero_btn1'          => 'Solicitar orçamento',
		'hero_btn1_link'     => '#contato',
		'hero_btn2'          => 'Entrar em contato',
		'hero_btn2_link'     => '#contato',
		'hero_tagline'       => 'Papéis Perfurados',

		// Botão de contato do topo / menu
		'topo_btn'           => 'Entrar em contato',
		'topo_btn_link'      => '#contato',

		// Sobre / Quem somos
		'sobre_eyebrow'      => 'Quem somos',
		'sobre_titulo'       => 'Experiência, tecnologia e compromisso com resultados',
		'sobre_texto1'       => 'A Riscotex Papéis Ltda. iniciou suas atividades em 2017, baseada na experiência adquirida ao longo de anos no setor, com tecnologia própria em perfuração de papéis para sistemas de corte automático de tecidos, couros e sintéticos.',
		'sobre_texto2'       => 'O desafio inicial foi superado com a rápida aceitação do papel microperfurado no mercado. A eficiência da perfuração trouxe vantagens significativas no corte, resultando em qualidade superior no produto final de nossos clientes.',
		'sobre_texto3'       => 'A Riscotex se mantém na vanguarda com o lançamento da perfuração universal, exclusiva e sem igual no mercado, que atende todas as situações de corte com perfeição.',

		// Por que escolher a Riscotex
		'porque_eyebrow'     => 'Por que escolher a Riscotex',
		'porque_titulo'      => 'Papel não é commodity quando o corte é automático',
		'porque_texto'       => 'Cada detalhe da nossa perfuração foi desenvolvido para que sua mesa de corte trabalhe mais rápido, com menos perdas e resultado uniforme em todo o enfesto.',
		'porque_cta_texto'   => 'Quer saber qual papel é o ideal para a sua máquina de corte?',
		'porque_cta_btn'     => 'Falar com um especialista',
		'porque_cta_link'    => '#contato',
		'stat1_num'          => '2017',
		'stat1_label'        => 'Início das atividades',
		'stat2_num'          => '100%',
		'stat2_label'        => 'Tecnologia própria',
		'stat3_num'          => '+8',
		'stat3_label'        => 'Segmentos atendidos',
		'stat4_num'          => '2,5 mm',
		'stat4_label'        => 'Furo da perfuração universal',

		// Diferenciais
		'dif_eyebrow'        => 'Nossos diferenciais',
		'dif_titulo'         => 'Muito além do fornecimento de papel',
		'dif_btn'            => 'Entrar em contato',
		'dif_btn_link'       => '#contato',

		// Destaques de Produtos (Papel Universal e Papel Microperfurado - Nossos Diferenciais)
		'destaque_eyebrow'   => 'Nossos diferenciais',
		'destaque_titulo'    => 'Papel Universal e Papel Microperfurado',
		'destaque_texto'     => 'Duas perfurações desenvolvidas pela Riscotex para garantir vácuo uniforme, estabilidade do enfesto e acabamento superior em qualquer mesa de corte automático.',

		// Destaque 1: Papel Universal (Referência 02 - papel-universal.jpg)
		'destaque1_tag'      => 'Diferencial Exclusivo',
		'destaque1_titulo'   => 'Papel Universal',
		'destaque1_texto'    => 'Perfuração de maior diâmetro e espaçamento calculado, que distribui o vácuo por toda a mesa e atende todos os tipos de corte com um único papel.',
		'destaque1_medida'   => '2,5 mm',
		'destaque1_item1'    => 'Vácuo distribuído em toda a área da mesa',
		'destaque1_item2'    => 'Maior compactação do enfesto',
		'destaque1_item3'    => 'Atende todas as situações de corte com perfeição',
		'destaque1_btn'      => 'Entrar em contato',
		'destaque1_link'     => '#contato',

		// Destaque 2: Papel Microperfurado (Referência 01 - papel-microperfurado.jpg)
		'destaque2_tag'      => 'Diferencial Riscotex',
		'destaque2_titulo'   => 'Papel Microperfurado',
		'destaque2_texto'    => 'Microfuros densos e uniformes, ideais para tecidos leves e enfestos altos, com sucção homogênea e excelente visualização dos riscos.',
		'destaque2_medida'   => 'Microperfurado de alta densidade',
		'destaque2_item1'    => 'Sucção uniforme em toda a superfície',
		'destaque2_item2'    => 'Indicado para tecidos leves e delicados',
		'destaque2_item3'    => 'Excelente leitura do risco impresso',
		'destaque2_btn'      => 'Entrar em contato',
		'destaque2_link'     => '#contato',

		// Produtos Gerais
		'prod_eyebrow'       => 'Nossos produtos',
		'prod_titulo'        => 'Linha completa de papéis técnicos industriais',
		'prod_btn'           => 'Solicitar cotação',
		'prod_btn_link'      => '#contato',

		// Perfuração Universal
		'perf_eyebrow'       => 'Perfuração Universal',
		'perf_titulo'        => 'Uma inovação exclusiva da Riscotex',
		'perf_texto'         => 'Criada para atender diferentes processos de corte industrial, essa solução exclusiva proporciona excelente distribuição do vácuo em toda a área da mesa de corte. O resultado é maior compactação do enfesto, estabilidade operacional superior e melhor qualidade final dos cortes.',
		'perf_btn'           => 'Quero conhecer essa solução',
		'perf_btn_link'      => '#contato',

		// Segmentos
		'seg_eyebrow'        => 'Segmentos atendidos',
		'seg_titulo'         => 'Soluções para diversos setores industriais',
		'seg_texto'          => 'Independentemente do porte da empresa, trabalhamos para oferecer soluções adequadas às necessidades específicas de cada cliente.',

		// Contato & Formulário
		'cta_eyebrow'        => 'Solicite um orçamento',
		'cta_titulo'         => 'Nossa equipe está pronta para atender você',
		'cta_texto'          => 'Informe suas necessidades e receba uma proposta personalizada para sua operação.',
		'form_btn'           => 'Solicitar orçamento',
		'form_email'         => 'contato@riscotex.com.br',
		'form_sucesso'       => 'Obrigado! Recebemos sua solicitação e retornaremos em breve.',
		'form_erro'          => 'Não foi possível enviar sua mensagem. Tente novamente ou escreva para contato@riscotex.com.br.',
		'contato_endereco'   => 'BR 280, 2941 - Rio Negrinho - SC',
		'contato_email1'     => 'contato@riscotex.com.br',
		'contato_email2'     => 'comercial@riscotex.com.br',
		'contato_email3'     => '',
		'contato_tel1'       => '(41) 99619-8555',
		'contato_tel2'       => '(47) 99238-4773',

		// Rótulos do formulário
		'label_nome'         => 'Nome*',
		'label_empresa'      => 'Empresa',
		'label_telefone'     => 'Telefone',
		'label_email'        => 'E-mail*',
		'label_cidade'       => 'Cidade',
		'label_estado'       => 'Estado',
		'label_produto'      => 'Produto de interesse',
		'label_quantidade'   => 'Quantidade estimada',
		'label_mensagem'     => 'Mensagem',

		// Botão flutuante exclusivo de WhatsApp (canto inferior direito)
		'whatsapp_link'      => 'https://wa.me/5541996198555?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%20Riscotex%20e%20gostaria%20de%20um%20or%C3%A7amento.',
		'whatsapp_flutuante' => 'WhatsApp',
		'whatsapp_mostrar'   => 'sim',

		// Rodapé
		'rodape_titulo'      => 'RISCOTEX PAPÉIS',
		'rodape_texto'       => 'Tecnologia, qualidade e inovação em papéis técnicos para corte industrial. Soluções desenvolvidas para aumentar a eficiência produtiva e contribuir para o crescimento da sua empresa.',
		'rodape_copy'        => 'Riscotex Papéis Ltda. - riscotex.com.br',
	);
}

function riscotex_repeaters() {
	return array(
		'dif'    => array(
			'label' => 'Diferencial',
			'items' => array(
				array( 'Tecnologia própria', 'Desenvolvemos processos exclusivos que garantem melhor desempenho e eficiência operacional.' ),
				array( 'Soluções personalizadas', 'Produzimos materiais conforme as necessidades específicas de cada cliente e processo produtivo.' ),
				array( 'Qualidade garantida', 'Mantemos rigorosos padrões de controle para assegurar uniformidade e excelência em todos os produtos.' ),
				array( 'Atendimento especializado', 'Nossa equipe possui conhecimento técnico para orientar e encontrar a melhor solução para cada aplicação.' ),
				array( 'Agilidade e compromisso', 'Atendimento eficiente, produção organizada e entregas dentro dos prazos estabelecidos.' ),
				array( 'Parceria de longo prazo', 'Construímos relacionamentos sólidos baseados em confiança, transparência e resultados.' ),
			),
		),
		'porque' => array(
			'label' => 'Motivo',
			'items' => array(
				array( 'Perfuração universal exclusiva', 'Uma única bobina que atende todos os processos de corte, sem trocas de papel a cada tipo de enfesto.' ),
				array( 'Vácuo estável em toda a mesa', 'A distribuição dos furos evita resvalos e mantém o enfesto firme do início ao fim do corte.' ),
				array( 'Menos perdas, mais produtividade', 'Redução de falhas operacionais, retrabalho e paradas de máquina na sua linha de produção.' ),
				array( 'Especificações sob medida', 'Gramatura, largura e diâmetro produzidos conforme a máquina e o processo de cada cliente.' ),
				array( 'Atendimento técnico de verdade', 'Equipe que conhece corte automático e ajuda a escolher o papel certo para cada aplicação.' ),
				array( 'Entrega no prazo combinado', 'Produção organizada e logística previsível para você nunca parar por falta de papel.' ),
			),
		),
		'prod'   => array(
			'label' => 'Produto',
			'items' => array(
				array( 'Papel Perfuração Universal', 'Tecnologia exclusiva da Riscotex desenvolvida para atender diferentes processos de corte industrial com máxima eficiência. Sua configuração proporciona excelente atuação do vácuo em toda a área da mesa de corte.' ),
				array( 'Papel Microperfurado', 'Desenvolvido para aplicações que exigem desempenho consistente e excelente comportamento durante os processos automatizados de corte.' ),
				array( 'Papel Plotter', 'Utilizado para plotagem e desenvolvimento de riscos industriais. Disponível em diferentes especificações.' ),
				array( 'Papel Separação de Tonalidade', 'Auxilia na organização dos processos produtivos, facilitando a identificação e separação dos materiais.' ),
				array( 'Papel Proteção para Calandra', 'Desenvolvido para proteção eficiente durante operações industriais, preservando os equipamentos.' ),
				array( 'Papel para Transferência de Cor / Sublimação', 'Produzido para aplicações que exigem qualidade e confiabilidade nos processos de transferência de cor.' ),
				array( 'Semi-Kraft', 'Gramaturas disponíveis: 40g, 50g, 60g, 70g e 80g.' ),
			),
		),
	);
}

function riscotex_beneficios() {
	return array(
		'Melhor distribuição do vácuo',
		'Maior estabilidade durante o corte',
		'Excelente visualização dos riscos',
		'Redução de falhas operacionais',
		'Maior produtividade',
		'Melhor acabamento do produto final',
		'Solução exclusiva desenvolvida pela Riscotex',
	);
}

function riscotex_segmentos() {
	return array(
		'Indústria têxtil',
		'Confecções',
		'Couro',
		'Calçadista',
		'Automotivo',
		'Estofados',
		'Materiais sintéticos',
		'Móveis e estofaria',
	);
}

/** Retorna um texto editável (com fallback no padrão). */
function riscotex_text( $key, $default = '' ) {
	$defaults = riscotex_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	$value = get_theme_mod( 'riscotex_' . $key, $default );
	if ( '' === trim( (string) $value ) ) {
		$value = $default;
	}
	return $value;
}

/** Igual a riscotex_text(), mas permite valor vazio (para ocultar botões ou campos). */
function riscotex_raw( $key ) {
	$defaults = riscotex_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return trim( (string) get_theme_mod( 'riscotex_' . $key, $default ) );
}

function riscotex_e( $key, $default = '' ) {
	echo esc_html( riscotex_text( $key, $default ) );
}

/** Retorna a URL de uma imagem editável, com fallback para a imagem do tema. */
function riscotex_img( $key, $fallback_file ) {
	$url = get_theme_mod( 'riscotex_' . $key, '' );
	if ( ! $url ) {
		$url = riscotex_asset( 'assets/img/' . $fallback_file );
	}
	return esc_url( $url );
}

/** Ícone SVG do WhatsApp. */
function riscotex_whats_icon() {
	return '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M17.47 14.38c-.3-.15-1.75-.86-2.02-.96-.27-.1-.47-.15-.67.15-.2.3-.77.96-.94 1.16-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.48-1.75-1.65-2.05-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.67-1.6-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.38-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.22 3.08c.15.2 2.1 3.2 5.07 4.49.71.3 1.26.49 1.69.63.71.22 1.36.19 1.87.12.57-.09 1.75-.72 2-1.41.25-.69.25-1.28.17-1.41-.07-.13-.27-.2-.57-.35M12.05 21.7h-.01a9.6 9.6 0 0 1-4.9-1.34l-.35-.21-3.64.96.97-3.55-.23-.36a9.58 9.58 0 0 1-1.47-5.12c0-5.3 4.32-9.6 9.63-9.6a9.56 9.56 0 0 1 6.8 2.82 9.5 9.5 0 0 1 2.82 6.79c0 5.3-4.32 9.6-9.62 9.6M20.52 3.5A11.86 11.86 0 0 0 12.05 0C5.46 0 .1 5.35.1 11.93c0 2.1.55 4.15 1.6 5.96L0 24l6.26-1.64a11.94 11.94 0 0 0 5.79 1.47h.01c6.58 0 11.94-5.35 11.94-11.93 0-3.19-1.24-6.19-3.48-8.4"/></svg>';
}

/* -------------------------------------------------------------------------
 * Customizer do WordPress - 100% Editável
 * ---------------------------------------------------------------------- */
function riscotex_add_text( $wp_customize, $section, $key, $label, $type = 'text' ) {
	$defaults = riscotex_defaults();
	$wp_customize->add_setting(
		'riscotex_' . $key,
		array(
			'default'           => isset( $defaults[ $key ] ) ? $defaults[ $key ] : '',
			'sanitize_callback' => 'textarea' === $type ? 'wp_kses_post' : 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'riscotex_' . $key,
		array(
			'label'   => $label,
			'section' => $section,
			'type'    => $type,
		)
	);
}

function riscotex_add_image( $wp_customize, $section, $key, $label ) {
	$wp_customize->add_setting(
		'riscotex_' . $key,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'riscotex_' . $key,
			array(
				'label'   => $label,
				'section' => $section,
			)
		)
	);
}

function riscotex_customize_register( $wp_customize ) {
	$panel = 'riscotex_panel';
	$wp_customize->add_panel(
		$panel,
		array(
			'title'    => 'Conteúdo do Site Riscotex',
			'priority' => 5,
		)
	);

	$sections = array(
		'riscotex_hero'     => 'Topo / Banner',
		'riscotex_sobre'    => 'Quem somos',
		'riscotex_porque'   => 'Por que escolher a Riscotex',
		'riscotex_dif'      => 'Diferenciais',
		'riscotex_destaque' => 'Destaques: Universal e Microperfurado',
		'riscotex_prod'     => 'Produtos',
		'riscotex_perf'     => 'Perfuração Universal',
		'riscotex_seg'      => 'Segmentos',
		'riscotex_contato'  => 'Contato e formulário',
		'riscotex_whats'    => 'Botão flutuante de WhatsApp',
		'riscotex_rodape'   => 'Rodapé',
	);

	$i = 10;
	foreach ( $sections as $id => $title ) {
		$wp_customize->add_section(
			$id,
			array(
				'title'    => $title,
				'panel'    => $panel,
				'priority' => $i++,
			)
		);
	}

	// 1. Topo / Banner
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'marca', 'Nome da marca (topo)' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_eyebrow', 'Selo acima do título' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_titulo', 'Título principal (H1)' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_subtitulo', 'Subtítulo' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_texto', 'Parágrafo explicativo', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_tagline', 'Assinatura sob o logo' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_btn1', 'Botão 1 - texto' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_btn1_link', 'Botão 1 - link' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_btn2', 'Botão 2 - texto (vazio para ocultar)' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'hero_btn2_link', 'Botão 2 - link' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'topo_btn', 'Botão do menu - texto (vazio para ocultar)' );
	riscotex_add_text( $wp_customize, 'riscotex_hero', 'topo_btn_link', 'Botão do menu - link' );
	riscotex_add_image( $wp_customize, 'riscotex_hero', 'hero_img', 'Imagem de fundo do topo' );
	riscotex_add_image( $wp_customize, 'riscotex_hero', 'hero_logo', 'Logo exibido no banner' );

	// 2. Sobre / Quem somos
	riscotex_add_text( $wp_customize, 'riscotex_sobre', 'sobre_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_sobre', 'sobre_titulo', 'Título' );
	riscotex_add_text( $wp_customize, 'riscotex_sobre', 'sobre_texto1', 'Parágrafo 1', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_sobre', 'sobre_texto2', 'Parágrafo 2', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_sobre', 'sobre_texto3', 'Parágrafo 3', 'textarea' );

	// 3. Por que escolher
	riscotex_add_text( $wp_customize, 'riscotex_porque', 'porque_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_porque', 'porque_titulo', 'Título' );
	riscotex_add_text( $wp_customize, 'riscotex_porque', 'porque_texto', 'Parágrafo', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_porque', 'porque_cta_texto', 'Chamada final da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_porque', 'porque_cta_btn', 'Botão da seção - texto' );
	riscotex_add_text( $wp_customize, 'riscotex_porque', 'porque_cta_link', 'Botão da seção - link' );
	for ( $s = 1; $s <= 4; $s++ ) {
		riscotex_add_text( $wp_customize, 'riscotex_porque', 'stat' . $s . '_num', "Número $s (destaque estatístico)" );
		riscotex_add_text( $wp_customize, 'riscotex_porque', 'stat' . $s . '_label', "Legenda do número $s" );
	}

	// 4. Diferenciais
	riscotex_add_text( $wp_customize, 'riscotex_dif', 'dif_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_dif', 'dif_titulo', 'Título' );
	riscotex_add_text( $wp_customize, 'riscotex_dif', 'dif_btn', 'Botão da seção - texto (vazio para ocultar)' );
	riscotex_add_text( $wp_customize, 'riscotex_dif', 'dif_btn_link', 'Botão da seção - link' );

	// 5. Destaques: Universal e Microperfurado (Nossos Diferenciais)
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque_titulo', 'Título da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque_texto', 'Parágrafo introdutório', 'textarea' );

	// Destaque 1 - Papel Universal (Referência 02)
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_tag', 'Destaque 1 (Papel Universal) - Selo' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_titulo', 'Destaque 1 - Título' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_texto', 'Destaque 1 - Texto', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_medida', 'Destaque 1 - Medida' );
	for ( $k = 1; $k <= 3; $k++ ) {
		riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_item' . $k, "Destaque 1 - Item de benefício $k" );
	}
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_btn', 'Destaque 1 - Botão (texto)' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque1_link', 'Destaque 1 - Botão (link)' );
	riscotex_add_image( $wp_customize, 'riscotex_destaque', 'destaque1_img', 'Destaque 1 - Imagem (Papel Universal)' );

	// Destaque 2 - Papel Microperfurado (Referência 01)
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_tag', 'Destaque 2 (Microperfurado) - Selo' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_titulo', 'Destaque 2 - Título' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_texto', 'Destaque 2 - Texto', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_medida', 'Destaque 2 - Medida' );
	for ( $k = 1; $k <= 3; $k++ ) {
		riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_item' . $k, "Destaque 2 - Item de benefício $k" );
	}
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_btn', 'Destaque 2 - Botão (texto)' );
	riscotex_add_text( $wp_customize, 'riscotex_destaque', 'destaque2_link', 'Destaque 2 - Botão (link)' );
	riscotex_add_image( $wp_customize, 'riscotex_destaque', 'destaque2_img', 'Destaque 2 - Imagem (Papel Microperfurado)' );

	// 6. Produtos Gerais
	riscotex_add_text( $wp_customize, 'riscotex_prod', 'prod_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_prod', 'prod_titulo', 'Título' );
	riscotex_add_text( $wp_customize, 'riscotex_prod', 'prod_btn', 'Botão - texto' );
	riscotex_add_text( $wp_customize, 'riscotex_prod', 'prod_btn_link', 'Botão - link' );
	riscotex_add_image( $wp_customize, 'riscotex_prod', 'prod_img', 'Imagem dos produtos' );

	// Repetidores (Diferenciais, Motivos, Produtos)
	foreach ( riscotex_repeaters() as $prefix => $data ) {
		$section = 'riscotex_' . $prefix;
		foreach ( $data['items'] as $index => $item ) {
			$n = $index + 1;
			$wp_customize->add_setting(
				'riscotex_' . $prefix . '_titulo_' . $n,
				array(
					'default'           => $item[0],
					'sanitize_callback' => 'sanitize_text_field',
				)
			);
			$wp_customize->add_control(
				'riscotex_' . $prefix . '_titulo_' . $n,
				array(
					'label'   => $data['label'] . " $n - título",
					'section' => $section,
					'type'    => 'text',
				)
			);
			$wp_customize->add_setting(
				'riscotex_' . $prefix . '_texto_' . $n,
				array(
					'default'           => $item[1],
					'sanitize_callback' => 'wp_kses_post',
				)
			);
			$wp_customize->add_control(
				'riscotex_' . $prefix . '_texto_' . $n,
				array(
					'label'   => $data['label'] . " $n - texto",
					'section' => $section,
					'type'    => 'textarea',
				)
			);
		}
	}

	// 7. Perfuração Universal
	riscotex_add_text( $wp_customize, 'riscotex_perf', 'perf_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_perf', 'perf_titulo', 'Título' );
	riscotex_add_text( $wp_customize, 'riscotex_perf', 'perf_texto', 'Parágrafo', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_perf', 'perf_btn', 'Botão - texto' );
	riscotex_add_text( $wp_customize, 'riscotex_perf', 'perf_btn_link', 'Botão - link' );
	riscotex_add_image( $wp_customize, 'riscotex_perf', 'perf_img', 'Imagem da seção' );
	foreach ( riscotex_beneficios() as $index => $b ) {
		$n = $index + 1;
		$wp_customize->add_setting(
			'riscotex_perf_beneficio_' . $n,
			array(
				'default'           => $b,
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'riscotex_perf_beneficio_' . $n,
			array(
				'label'   => "Benefício $n",
				'section' => 'riscotex_perf',
				'type'    => 'text',
			)
		);
	}

	// 8. Segmentos
	riscotex_add_text( $wp_customize, 'riscotex_seg', 'seg_eyebrow', 'Selo da seção' );
	riscotex_add_text( $wp_customize, 'riscotex_seg', 'seg_titulo', 'Título' );
	riscotex_add_text( $wp_customize, 'riscotex_seg', 'seg_texto', 'Parágrafo', 'textarea' );
	foreach ( riscotex_segmentos() as $index => $s ) {
		$n = $index + 1;
		$wp_customize->add_setting(
			'riscotex_seg_item_' . $n,
			array(
				'default'           => $s,
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'riscotex_seg_item_' . $n,
			array(
				'label'   => "Segmento $n",
				'section' => 'riscotex_seg',
				'type'    => 'text',
			)
		);
	}

	// 9. Contato & Formulário
	foreach ( array(
		'cta_eyebrow'      => 'Selo da seção',
		'cta_titulo'       => 'Título',
		'cta_texto'        => 'Parágrafo',
		'form_btn'         => 'Texto do botão do formulário',
		'form_email'       => 'E-mail que recebe o formulário (padrão: contato@riscotex.com.br)',
		'form_sucesso'     => 'Mensagem de sucesso',
		'form_erro'        => 'Mensagem de erro',
		'contato_endereco' => 'Endereço',
		'contato_email1'   => 'E-mail 1',
		'contato_email2'   => 'E-mail 2 (vazio para ocultar)',
		'contato_email3'   => 'E-mail 3 (vazio para ocultar)',
		'contato_tel1'     => 'Telefone 1',
		'contato_tel2'     => 'Telefone 2 (vazio para ocultar)',
		'label_nome'       => 'Rótulo do campo Nome',
		'label_empresa'    => 'Rótulo do campo Empresa',
		'label_telefone'   => 'Rótulo do campo Telefone',
		'label_email'      => 'Rótulo do campo E-mail',
		'label_cidade'     => 'Rótulo do campo Cidade',
		'label_estado'     => 'Rótulo do campo Estado',
		'label_produto'    => 'Rótulo do campo Produto de interesse',
		'label_quantidade' => 'Rótulo do campo Quantidade estimada',
		'label_mensagem'   => 'Rótulo do campo Mensagem',
	) as $key => $label ) {
		riscotex_add_text(
			$wp_customize,
			'riscotex_contato',
			$key,
			$label,
			in_array( $key, array( 'cta_texto', 'form_sucesso', 'form_erro' ), true ) ? 'textarea' : 'text'
		);
	}

	// 10. Botão flutuante de WhatsApp (canto inferior direito)
	riscotex_add_text( $wp_customize, 'riscotex_whats', 'whatsapp_link', 'Link do WhatsApp' );
	riscotex_add_text( $wp_customize, 'riscotex_whats', 'whatsapp_flutuante', 'Texto do botão flutuante' );
	$wp_customize->add_setting(
		'riscotex_whatsapp_mostrar',
		array(
			'default'           => 'sim',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'riscotex_whatsapp_mostrar',
		array(
			'label'   => 'Exibir botão flutuante no canto inferior direito?',
			'section' => 'riscotex_whats',
			'type'    => 'select',
			'choices' => array(
				'sim' => 'Sim',
				'nao' => 'Não',
			),
		)
	);

	// 11. Rodapé
	riscotex_add_text( $wp_customize, 'riscotex_rodape', 'rodape_titulo', 'Título do rodapé' );
	riscotex_add_text( $wp_customize, 'riscotex_rodape', 'rodape_texto', 'Texto do rodapé', 'textarea' );
	riscotex_add_text( $wp_customize, 'riscotex_rodape', 'rodape_copy', 'Linha de copyright' );
	riscotex_add_image( $wp_customize, 'riscotex_rodape', 'rodape_logo', 'Logo do rodapé' );
}
add_action( 'customize_register', 'riscotex_customize_register' );

/* -------------------------------------------------------------------------
 * Processamento do Formulário de Orçamento -> contato@riscotex.com.br
 * ---------------------------------------------------------------------- */
function riscotex_handle_form() {
	$redirect = wp_get_referer() ? wp_get_referer() : home_url( '/' );

	if ( ! isset( $_POST['riscotex_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['riscotex_nonce'] ) ), 'riscotex_form' ) ) {
		wp_safe_redirect( add_query_arg( 'enviado', 'erro', $redirect ) . '#contato' );
		exit;
	}

	// Honeypot anti-spam
	if ( ! empty( $_POST['site_web'] ) ) {
		wp_safe_redirect( add_query_arg( 'enviado', 'ok', $redirect ) . '#contato' );
		exit;
	}

	$campos = array(
		'nome'       => 'Nome',
		'empresa'    => 'Empresa',
		'telefone'   => 'Telefone',
		'email'      => 'E-mail',
		'cidade'     => 'Cidade',
		'estado'     => 'Estado',
		'produto'    => 'Produto de interesse',
		'quantidade' => 'Quantidade estimada',
		'mensagem'   => 'Mensagem',
	);

	$linhas  = array();
	$valores = array();
	foreach ( $campos as $key => $label ) {
		$valor           = isset( $_POST[ $key ] ) ? sanitize_textarea_field( wp_unslash( $_POST[ $key ] ) ) : '';
		$valores[ $key ] = $valor;
		$linhas[]        = $label . ': ' . $valor;
	}

	$email_destino = sanitize_email( riscotex_text( 'form_email', 'contato@riscotex.com.br' ) );
	if ( ! is_email( $email_destino ) ) {
		$email_destino = 'contato@riscotex.com.br';
	}

	$assunto = 'Novo pedido de orçamento - ' . ( $valores['nome'] ? $valores['nome'] : 'Site Riscotex' );
	$corpo   = "Nova solicitação de orçamento enviada pelo site riscotex.com.br:\n\n" . implode( "\n", $linhas );

	$dominio = wp_parse_url( home_url(), PHP_URL_HOST );
	if ( empty( $dominio ) ) {
		$dominio = 'riscotex.com.br';
	}
	$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'From: Site Riscotex <no-reply@' . $dominio . '>' );
	if ( is_email( $valores['email'] ) ) {
		$headers[] = 'Reply-To: ' . $valores['email'];
	}

	$enviado = wp_mail( $email_destino, $assunto, $corpo, $headers );

	wp_safe_redirect( add_query_arg( 'enviado', $enviado ? 'ok' : 'erro', $redirect ) . '#contato' );
	exit;
}
add_action( 'admin_post_nopriv_riscotex_form', 'riscotex_handle_form' );
add_action( 'admin_post_riscotex_form', 'riscotex_handle_form' );

/* Título da página com fallback */
function riscotex_document_title( $parts ) {
	if ( empty( $parts['title'] ) ) {
		$parts['title'] = riscotex_text( 'hero_titulo' );
	}
	if ( empty( $parts['site'] ) ) {
		$parts['site'] = riscotex_text( 'marca' );
	}
	return $parts;
}
add_filter( 'document_title_parts', 'riscotex_document_title' );

