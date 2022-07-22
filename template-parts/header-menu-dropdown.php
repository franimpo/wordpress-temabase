<nav id="site-navigation" class="main-navigation">
    <?php wp_nav_menu(array(  
  'menu' => 'Main Navigation', 
  'container_class' => 'nombretema-main-menu', 
  'walker' => new tutsocean_CSS_Menu_Walker()
)); ?>
</nav>