    <div class="home__search--box home__search--box__mobile">
        <ion-icon name="search-outline"></ion-icon>
        <form action="<?php echo home_url(); ?>" id="search-form"
            method="get">
            <input type="hidden" name="post_type" value="product">
            <input class="home__search--box__input" type="text" name="s" id="s" value="Tìm theo điểm đến, hoạt động"
                onblur="if(this.value=='')this.value='Tìm theo điểm đến, hoạt động'"
                onfocus="if(this.value=='Tìm theo điểm đến, hoạt động')this.value=''" />
            <input type="hidden" value="submit" />
        </form>
    </div>