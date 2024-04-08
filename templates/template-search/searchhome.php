<div class="home__slider--searchbox__search">
    <ion-icon name="search"></ion-icon>
<form class="home__slider--searchbox__element" style="width:100%;" action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="hidden" name="post_type" value="product"> 
    <input class="home__slider--searchbox__element--left" style="width:80%;" class="home__slider--searchbox__search--input" type="text" name="s" id="s" value="Tour săn mây" onblur="if(this.value=='')this.value='Tour săn mây'"
    onfocus="if(this.value=='Tour săn mây')this.value=''" />
    <button class="home__slider--searchbox__btn" type="submit" >Khám phá</button>
</form>
</div>
