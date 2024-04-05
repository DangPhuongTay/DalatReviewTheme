<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="hidden" name="post_type" value="product"> 
    <input class=".home__slider--serchbox__search" type="text" name="s" id="s" value="Tour săn mây" onblur="if(this.value=='')this.value='Tour săn mây'"
    onfocus="if(this.value=='Tour săn mây')this.value=''" />
    <input type="hidden" value="submit" />
</form>