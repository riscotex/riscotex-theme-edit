TEMA WORDPRESS RISCOTEX - v2.0
================================

COMO INSTALAR (hospedagem Umbler / WordPress)
1. Envie o arquivo riscotex-theme.zip em Aparência > Temas > Adicionar novo > Enviar tema
   (ou faça upload da pasta "riscotex-theme" para /public/wp-content/themes/).
2. Ative o tema em Aparência > Temas.
3. A home já monta toda a landing page automaticamente.

COMO EDITAR TUDO (sem mexer em código)
Aparência > Personalizar > "Conteúdo do Site Riscotex".
Lá estão TODOS os textos, títulos, parágrafos, textos E LINKS dos botões,
rótulos do formulário, itens de diferenciais, produtos, benefícios, segmentos,
dados de contato, rodapé e todas as imagens (topo, logo do topo, produtos,
destaques Papel Universal e Microperfurado, perfuração e logo do rodapé).
Basta digitar e clicar em Publicar.
- Logo do cabeçalho: Personalizar > Identidade do site.
- Menu do topo: Personalizar > Menus (local "Menu Principal").
- Qualquer botão pode ser ocultado: basta apagar o texto dele no Personalizar.

DESTAQUES DA SEÇÃO PRODUTOS
A seção "Produtos" abre com dois cards de destaque:
  1) Papel Universal (foto com a régua, mostrando apenas as medidas)
  2) Papel Microperfurado
Textos, medidas, itens, botões e imagens são editáveis em
Personalizar > Destaques: Universal e Microperfurado.

WHATSAPP
Existe apenas um botão de WhatsApp, flutuante no canto inferior direito.
Link, texto e exibição em Personalizar > Botão flutuante de WhatsApp.
Os demais botões do site são chamadas de ação para o formulário de contato.

FORMULÁRIO DE ORÇAMENTO
Envia para contato@riscotex.com.br (alterável em Personalizar > Contato e formulário).
Possui proteção antispam (nonce + honeypot) e responde com mensagem de sucesso/erro.
Dica Umbler: se os e-mails não chegarem, instale um plugin SMTP (ex.: WP Mail SMTP)
e configure a conta de e-mail do domínio riscotex.com.br - assim o envio fica autenticado.

ESTRUTURA
  style.css            - identificação do tema
  functions.php        - campos do Personalizar + envio do formulário
  header.php / footer.php / index.php - estrutura das seções
  assets/css/theme.css - visual do site
  assets/js/theme.js   - rolagem suave
  assets/img/          - imagens padrão (substituíveis pelo Personalizar)
