<?php  if(have_posts()){  ?>

<?php while(have_posts()){ the_post(  ); ?>

    <?php woocommerce_content(); ?>
<?php  }  ?>

<?php } ?>
