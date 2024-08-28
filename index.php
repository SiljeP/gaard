<?php get_template_part("parts/head") ?>
<body>

<div class="gaard-wrapper">
    <?php get_template_part("parts/header") ?>
<main class="gaard-main">
         <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 

                the_title("<h1 class='gaard-heading'>", "</h1>");
                the_content();

                //var_dump(the_post());
                
            } // end while
        } else{
            echo "Page not found";
        }
        ?>


</main>
    <?php get_template_part("parts/footer") ?>


</div>

   
</body>
</html>