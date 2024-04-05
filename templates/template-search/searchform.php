<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="hidden" name="post_type" value="product"> 
    <input class="header__top--left__search--input" type="text" name="s" id="s" value="Tìm theo điểm đến, hoạt động" onblur="if(this.value=='')this.value='Tìm theo điểm đến, hoạt động'"
    onfocus="if(this.value=='Tìm theo điểm đến, hoạt động')this.value=''" />
    <input type="hidden" value="submit" />
</form>