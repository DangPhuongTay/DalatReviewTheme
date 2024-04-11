<form method="get" name="form" action="<?php echo home_url();?>/<?php echo request();?>" >
                            <div>
                                <button class="hotel__left--star" value="ASC"  name="price"  onChange="this.form.submit();">Thấp tới cao</button>       
                                <button class="hotel__left--star" value="DESC"  name="price"  onChange="this.form.submit();">Cao đến thấp</button>
                              
                                
                            </div>

                        </form>
                        <form method="get" name="form" action="<?php echo home_url();?>/<?php echo request();?>" >
                            <div>
                                <button class="hotel__left--star" value="5000000"  name="pricehight"  onChange="this.form.submit();">Trên 5.000.000</button>
                        
                                
                            </div>

                        </form>
                        <form method="get" name="form" action="<?php echo home_url();?>/<?php echo request();?>" >
                            <div>
                                <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input class="range__input" value="200000" min="200000" name="minprice" max="5000000" step="100000" type="range" >
                                <input class="range__input"  value="5000000" min="200000" name="maxprice" max="5000000" step="100000" type="range">
                            </section>
                            <input class="range__submit" type="submit" onChange="this.form.submit();">
                            </div>

                        </form>