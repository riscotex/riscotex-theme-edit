TEMA WORDPRESS RISCOTEX - v1.0
================================

COMO INSTALAR (hospedagem Umbler / WordPress)
1. Faca upload da pasta "riscotex-theme" para: /public/wp-content/themes/
   (ou envie o arquivo riscotex-theme.zip em Aparencia > Temas > Adicionar novo > Enviar tema)
2. Ative o tema em Aparencia > Temas.
3. Crie uma pagina qualquer OU deixe a home padrao - o tema ja monta toda a landing page.

COMO EDITAR TUDO (sem mexer em codigo)
Aparencia > Personalizar > "Conteudo do Site Riscotex".
Ali estao todos os titulos, paragrafos, textos de botoes, itens de diferenciais,
produtos, beneficios, segmentos, dados de contato, rodape e as 3 imagens
(topo, produtos, perfuracao universal). Basta digitar e clicar em Publicar.
O logo pode ser trocado em Personalizar > Identidade do site.
O menu do topo pode ser trocado em Personalizar > Menus (local "Menu Principal").

FORMULARIO DE ORCAMENTO
Envia para vanessa@riscotex.com.br (alteravel em Personalizar > Contato e Formulario).
Possui protecao anti-spam (nonce + honeypot) e responde com mensagem de sucesso/erro.
Dica Umbler: se os e-mails nao chegarem, instale um plugin SMTP (ex.: WP Mail SMTP)
e configure a conta de e-mail do dominio riscotex.com.br - assim o envio fica autenticado.

ESTRUTURA
  style.css            - identificacao do tema
  functions.php        - campos do Personalizar + envio do formulario
  header.php / footer.php / index.php - estrutura das secoes
  assets/css/theme.css - visual do site
  assets/js/theme.js   - rolagem suave
  assets/img/          - imagens padrao (substituiveis pelo Personalizar)
