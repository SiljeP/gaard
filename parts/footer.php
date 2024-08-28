<footer class="gaard-footer">
    <section class="gaard-footer-1">
        <?php dynamic_sidebar("footer1"); ?>
    </section>
    <section class="gaard-footer-2">
            <?php dynamic_sidebar("footer2"); ?>
    </section>
    <section class="gaard-footer-3 background-red">
        <?php dynamic_sidebar("footer3"); ?>
    </section>
</footer>

    <?php
    //gør at man har den sorte bar oppe i toppen, hvor man kan gå tilbage til edit.
    wp_footer();    

    ?>