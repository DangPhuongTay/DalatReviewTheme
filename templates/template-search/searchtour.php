<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="hidden" name="post_type" value="product"> 
    <input class=".tour__banner--search" type="text" name="s" id="s" 
    value="Tìm kiếm tour...." 
    onblur="if(this.value=='')this.value='Tìm kiếm tour....'"
    onfocus="if(this.value=='Tìm kiếm tour....')this.value=''" />
    <input type="hidden" value="submit" />
</form>