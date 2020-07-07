<h1 align="center">
  Blog WP
</h1>

<h4 align="center">
  🚀 WordPress based theme
</h4>

<p align="center">
  <a href="#rocket-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-project">Project</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-how-to-contribute">How to contribute</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#memo-licença">License</a>
</p>

<br>

## :rocket: Technologies

This project was developed with the following technologies:

- [Wordpress](https://wordpress.org/)
- [Bootstrap 4](https://getbootstrap.com/)

## 💻 Project

This is a project that serves as a guide for themes using wordpress in conjunction with bootstrap and other plugins, and serves as a basis for guiding styles and good practices to be used.


### Structure

```
  📂 /
  ❘  📂 assets/
  ❘  ❘  📂 css/
  ❘  ❘  📂 fonts/
  ❘  ❘  📂 images/
  ❘  ❘  📂 includes/
  ❘  ❘  📂 js/
  ❘  📃 achive.php
  ❘  📃 category.php
  ❘  📃 footer.php
  ❘  📃 functions.php
  ❘  📃 header.php
  ❘  📃 index.php
  ❘  📃 page.php
  ❘  📃 single.php
  ❘  📃 snippets.php
  ❘  📃 styles.css
  ❘  📃 tag.php
  ❘  📃 scripts.js
```

- **📁 assets/:** Bootstrap components and other external libraries.
- **📃 functions.php:** File that gets the functions and settings of wordpress widgets and menu.
- **📃 page.php:** File for the layout of registered pages.
- **📃 single.php:** Layout of registered posts.
- **📃 snippets.php:** List of commands used in function.php.

* The file names are mostly self-explanatory.

## 🤔 How to contribute

- Fork this repository;
- Create a branch with your feature: `git checkout -b my-feature`;
- Commit your changes: `git commit -m 'feat: my new feature'`;
- Push to your branch: `git push origin my-feature`.

After the merge of your pull request is done, you can delete your branch.

## :memo: License

This project is under the GNU GENERAL PUBLIC license. See the [LICENSE] file (LICENSE.md) for more details.

---

## References

[WordPress: creating a Theme](https://www.youtube.com/watch?v=h1JmDwJZu3Q&index=5&list=PL9iRXc4XHkhU9EoKB6THSrN6h8dtodqZp)

[WordPress: Theme using wordpress](https://www.youtube.com/watch?v=8YyvwUhED20&list=PL9iRXc4XHkhWDhBt9-QuBHV4SALkGezab&index=10)


<!-- 
## Steps ##
[Serviços no Tema e Utilizando Plugin Advanced Custom Fields (ACF)]
- Colocar serviços no theme
- Colocar icons do proprio das sugestoes do bootstrap
- Colocar 'registro custom post type no functions (para toda e qualquer configuração no theme)' -> para criar uma aba no painel do WP
- Instalar ACF e adiciona um 'campo personalizado' e fazer configuração no seu novo grupo de campo 
- Serviços configurar e no icones tem que colocar somente o codigo do icone

## Segurança ##
- Para remover editor de códigos do WordPress insira o código abaixo em seu arquivo wp-config.php
  - define('DISALLOW_FILE_EDIT', true);
- manter supre o theme ou plugins atualizados
- plugins de segurança
- a cada mes um BACKUP
-->
