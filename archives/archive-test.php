     <!-- <banner>
            img
        </banner>
        <listproduct>
            <item>
                Bài 1
            </item>
        </listproduct>
        <footer>
        </footer> -->
<?php  if(have_posts()){  ?>

<?php while(have_posts()){ the_post(  ); ?>

    <?php woocommerce_content(); ?>
<?php  }  ?>

<?php } ?>

