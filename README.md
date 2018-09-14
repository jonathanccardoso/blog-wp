# Blog - WP
Theme WordPress. No other frameworks.

## Steps ##
Baixar wordpress na maquina local.
Baixar aquivos js e css no projeto(/assets).
Configurar functions.php
No functions roda as funções e scripts do theme

[Menu e slider dinamicos]
- O carousel foi usado um "plugin" chamado 'wp_bootstrap_navwalker.php' e colocado no /assets/includes. 
- Configurando no header e no functions (toda config de plugins e afins) 
- [https://github.com/wp-bootstrap/wp-bootstrap-navwalker] - menu e slider automatizado pelo painel WP

[Serviços no Tema e Utilizando Plugin Advanced Custom Fields (ACF)]
- Colocar serviços no theme
- Colocar icons do proprio das sugestoes do bootstrap
- Colocar 'registro custom post type no functions (para toda e qualquer configuração no theme)' -> para criar uma aba no painel do WP
- Instalar ACF e adiciona um 'campo personalizado' e fazer configuração no seu novo grupo de campo 
- Serviços configurar e no icones tem que colocar somente o codigo do icone

[Sobre, Blog e Footer no Tema]
- A administração do 'sobre' e os blogs no painel WP
- Usa o sidebar no functions
- O snippets serve somente de cola para o functions!
- Instalar o formidable forms e cria o 'formulario' no painel WP (com campo de email) e fazer a personalização com ajuda do inspecionador
- Uma pagina Sobre para o campo Sobre
- O footer puxa o widgets com nome 'Sidebar footer' adicionado campo texto

[Dev pagina interna padrão do theme]
- Salvar imagens do site
- Chamada da função -> wp_custom_breadcrumbs();

## Segurança ##
- Para remover editor de códigos do WordPress insira o código abaixo em seu arquivo wp-config.php
  - define('DISALLOW_FILE_EDIT', true);
- manter supre o theme ou plugins atualizados
- plugins de segurança
- a cada mes um BACKUP

## SEO ##
- Utilizar o google webmasstrs
- plugins de SEO


## References ##
Watch series
https://www.youtube.com/watch?v=8YyvwUhED20&list=PL9iRXc4XHkhWDhBt9-QuBHV4SALkGezab&index=10
Watch video configuration
https://www.youtube.com/watch?v=h1JmDwJZu3Q&index=5&list=PL9iRXc4XHkhU9EoKB6THSrN6h8dtodqZp
