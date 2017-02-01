## Slick Slider For WordPress

* Add Slick Slider in a WordPress Plugin
* Use with ACF Pro and ACF Widgets

## Présentation 

[Slick - Slider](http://kenwheeler.github.io/slick/) est une extension jQuery créée par [Ken Wheeler](http://kenwheeler.github.io/) pour réaliser des Sliders sur mesure. De nombreuses démonstrations et options sont données sur le site officiel. 


## Structure requise par Slick Slider

Voici la structure complète donnée dans le site de Slick.

```
<html>
  <head>
  <title>My Now Amazing Webpage</title>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  </head>
  <body>

  <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        setting-name: setting-value
      });
    });
  </script>

  </body>
</html>
                
```
<span></span>

Voici ce qu'il faut retenir dans les étapes que je vais développer dans ce tutoriel:

* Les fichiers CSS seront ajoutés avec les fonction `wp_enqueue_scripts`
* La structure HTML (ici avec *your-class)* sera ajouté dans mon modèle pour le Widget
* C'est une boucle sur la galerie ACF qui appelera toutes les images
* Les fichiers JS seront ajoutés avec les fonction `wp_enqueue_scripts`
* La balise script sera ajouté avant la balise body avec le hook `wp_footer`