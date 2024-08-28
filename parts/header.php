<header class="gaard-header mt-80">

<div class="header-image">
    <?php if (get_header_image()) : ?>
        <img src="<?php header_image(); ?>" alt="Header Image">
    <?php endif; ?>
</div>


  <section class="gaard-header-menu">
  <p class="site-title ">
      <a class="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    </p>
     
    <?php 
    the_custom_logo();
    wp_nav_menu([
        "menu" => "Main Menu",
        "container" => "nav",
        "container_class" => "gaard-main-menu",
    ]);
    echo get_search_form();
    ?>

    </section>

</header>