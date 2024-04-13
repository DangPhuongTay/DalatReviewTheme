    <form class="tour__banner--search" action="<?php echo home_url(); ?>" id="search-form" method="get">
        <div class="tour__banner--search__icon">
            <button class="tour__banner--search__iicon" type="submit"><ion-icon
                    name="search-outline"></ion-icon></button>
        </div>
        <div class="tour__banner--search__input">
            <input type="hidden" name="post_type" value="product">
            <input class="tour__banner--search__input--content" type="text" name="s" id="s" value="Tìm kiếm tour...."
                onblur="if(this.value=='')this.value='Tìm kiếm tour....'"
                onfocus="if(this.value=='Tìm kiếm tour....')this.value=''" />
            <input type="hidden" value="submit" />
        </div>
    </form>