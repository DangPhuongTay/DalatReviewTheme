
<?php
    if(have_posts()){
        while(have_posts()){

            the_post();
            the_category();
            the_title();
            the_content();
        }
    }
?>