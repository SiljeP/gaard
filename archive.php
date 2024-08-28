<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">
<?php
    get_template_part("parts/head");
?>
<body>
    <div class="gaard-wrapper">
     
    <?php
get_template_part("parts/header");
    ?>
 
        <main>
 
        <h1 class="gaard-heading">
            <?php
                single_cat_title();            
            ?>
 
        </h1>
 
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
 
                    $link = get_the_permalink();
                   
                    ?><a href="<?php echo $link ?>">
                    
                    <?php
                    the_post_thumbnail("thumbnail");
                    the_title("<h2 class='gaard-heading'>", "</h2>");
                    ?>
                    </a>
                    <?php
                }   // end while
                }  
                else {
                    echo "Page not found";
                }
?>
    </main>
   
    <?php
get_template_part("parts/footer");
    ?>
 
    </div>
</body>
</html>
