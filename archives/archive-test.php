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
<?php
    if(have_posts()){
        ?>
        <!-- // <banner>
        //   img
        // </banner>
        // <listproduct> -->
        <?php
        while(have_posts()){
        ?>
            <!-- //<item>
            // Bài 1
            //</item> -->
        <?php
            the_post();
        }

        // </listproduct>
         // <listproduct>
        while(have_posts()){
            //<item>
            // Bài 2
            //</item>
            the_post();
        }
        // </listproduct>
        // <footer>
        // </footer>
    }
?>

