<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <div class="liveshowMoblie__fitter--wrap">
        <div class="liveshowMobile__fitter">
        <div class="liveshowMobile__fitter--input">
        <input type="text" name="s" id="s" value="Tìm vé liveshow" onblur="if(this.value=='')this.value='Tìm vé liveshow'"
        onfocus="if(this.value=='Tìm vé liveshow')this.value=''" />
        <input type="hidden" value="submit" />
        </div>
        <div class="liveshowMobile__fitter--icon">
            <ion-icon name="search-outline"></ion-icon>
        </div>
        </div>
    </div>
</form>