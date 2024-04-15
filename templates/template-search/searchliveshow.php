<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <div class="liveshowMoblie__fitter--wrap">
        <div class="liveshowMobile__fitter">
        <div class="liveshowMobile__fitter--input">
        <input type="text" name="s" id="s" value="Tìm theo điểm đến, hoạt động" onblur="if(this.value=='')this.value='Tìm theo điểm đến, hoạt động'"
        onfocus="if(this.value=='Tìm theo điểm đến, hoạt động')this.value=''" />
        <input type="hidden" value="submit" />
        </div>
       <button value="submit" class="liveshowMobile__fitter--btn">
       <div class="liveshowMobile__fitter--icon" value="submit">
            <ion-icon  name="search-outline"></ion-icon>
        </div>
       </button>
        </div>
    </div>
</form>