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
            the_post();
            ?>
            <!-- //<item>
            // Bài 1
            //</item> -->
            <?php
        }
        ?>
        <!-- // </listproduct>
        // <footer>
        // </footer> -->
        <?php
    }
?>

