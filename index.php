<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require"head.php";  ?>
<body>
    <!-- site -->
    <div class="site">
        <?php require"site__header.php";  ?>
        <!-- site__body -->
        <div class="site__body">
            <!-- .block-finder -->
            <div class="block-finder block-finder--layout--full block">
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-finder__body" style="background-image: url('images/finder/finder.jpg');">
                                    <div class="block-finder__header">
                                        <div class="block-finder__title">ابحث عن قطع غيار لسيارتك</div>
                                        <div class="block-finder__subtitle">جنط: أكبر سوق إلكتروني متخصص بـ قطع غيار السيارات ببغداد                                        </div>
                                    </div>
                                    <div class="block-finder__form">
                                        <div class="block-finder__form-item">
                                            <select class="block-finder__select">
                                                <option value="none">اختر الماركة</option>
                                                <option>تويوتا</option>
                                                <option>لكزس</option>
                                                <option>مرسيدس</option>
                                                <option>نيسان</option>
                                                <option>مازدا</option>
                                                <option>كيا</option>
                                                <option>تسلا</option>
                                            </select>
                                        </div>
                                        <div class="block-finder__form-item">
                                            <select class="block-finder__select" disabled>
                                                <option value="none">اختر نوع السيارة</option>
                                                <option>نوع 1</option>
                                                <option>نوع 2</option>
                                                <option>نوع 3</option>
                                                <option>نوع 4</option>
                                                <option>نوع 5</option>
                                                <option>نوع 6</option>
                                                <option>نوع 7</option>
                                                <option>نوع 8</option>
                                            </select>
                                        </div>
                                        <div class="block-finder__form-item">
                                            <select class="block-finder__select" disabled>
                                                <option value="none">اختر الفئة</option>
                                                <option>فئة 1</option>
                                                <option>فئة 2</option>
                                                <option>فئة 3</option>
                                                <option>فئة 4</option>
                                                <option>فئة 5</option>
                                                <option>فئة 6</option>
                                                <option>فئة 7</option>
                                                <option>فئة 8</option>
                                            </select>
                                        </div>
                                        <div class="block-finder__form-item">
                                            <select class="block-finder__select" disabled>
                                                <option value="none">اختر الموديل</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>

                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    <a href = "shop.php"class="block-finder__button btn btn-primary" >تصفح المتجر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- .block-finder / end -->
            <!-- .block-features -->
            <div class="block block-features block-features--layout--classic">
                <div class="container">
                    <div class="block-features__list">
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">شحن سريع لأي مكان</div>
                                <div class="block-features__subtitle">لجميع المدن والمحافظات</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">دعم العملاء 24/7</div>
                                <div class="block-features__subtitle">على مدار الساعة طوال الأيام</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">100% آمن</div>
                                <div class="block-features__subtitle">مدفوعات سهلة و آمن</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <svg width="48px" height="48px">
                                    <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                                </svg>
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">عروض مميزة</div>
                                <div class="block-features__subtitle">خصومات تصل إلى 70%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-features / end -->
                                    <!-- .block-products-carousel -->
                                    <div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
                                        <div class="container">
                                            <div class="block-header">
                                                <h3 class="block-header__title">منتجات جديدة</h3>
                                                <div class="block-header__divider"></div>
                                                <ul class="block-header__groups-list">
                                                    <li><button type="button" class="block-header__group  block-header__group--active ">الكل</button></li>
                                                    <li><button type="button" class="block-header__group ">قطع خارجية</button></li>
                                                    <li><button type="button" class="block-header__group ">قطع مكانيكية</button></li>
                                                    <li><button type="button" class="block-header__group ">الإطارات</button></li>
                                                            </ul>
                                                <div class="block-header__arrows-list">
                                                    <button class="block-header__arrow block-header__arrow--left" type="button">
                                                        <svg width="7px" height="11px">
                                                            <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                                        </svg>
                                                    </button>
                                                    <button class="block-header__arrow block-header__arrow--right" type="button">
                                                        <svg width="7px" height="11px">
                                                            <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-products-carousel__slider">
                                                <div class="block-products-carousel__preloader"></div>
                                                <div class="owl-carousel">
                                                    <!-- <div class="block-products-carousel__column"> -->
                                                        <div class="block-products-carousel__cell">
                                                            <div class="product-card product-card--hidden-actions ">
                                                                <button class="product-card__quickview" type="button">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                                    </svg>
                                                                    <span class="fake-svg-icon"></span>
                                                                </button>
                                                                <div class="product-card__badges-list">
                                                                    <div class="product-card__badge product-card__badge--new">جديد</div>
                                                                </div>
                                                                <div class="product-card__image product-image">
                                                                    <a href="product.php" class="product-image__body">
                                                                        <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="product-card__info">
                                                                    <div class="product-card__name">
                                                                        <a href="product.php">اسم القطعة xxx yyy zzz</a>
                                                                    </div>
                                                                    <ul class="product-card__features-list">
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-card__actions">
                                                                    <div class="product-card__availability">
                                                                        التوفر: <span class="text-success">بالمخزون</span>
                                                                    </div>
                                                                    <div class="product-card__prices">
                                                                        322 ريال
                                                                    </div>
                                                                    <div class="product-card__buttons">
                                                                        <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                                            <svg width="16px" height="16px">
                                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                            </svg>
                                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                                        </button>
                                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                                            <svg width="16px" height="16px">
                                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                                            </svg>
                                                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-products-carousel__cell">
                                                            <div class="product-card product-card--hidden-actions ">
                                                                <button class="product-card__quickview" type="button">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                                    </svg>
                                                                    <span class="fake-svg-icon"></span>
                                                                </button>
                                                                <div class="product-card__badges-list">
                                                                    <div class="product-card__badge product-card__badge--hot">خصم</div>
                                                                </div>
                                                                <div class="product-card__image product-image">
                                                                    <a href="product.php" class="product-image__body">
                                                                        <img class="product-image__img" src="images/products/product-2.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="product-card__info">
                                                                    <div class="product-card__name">
                                                                        <a href="product.php">اسم القطعة abc </a>
                                                                    </div>
                                                                    <ul class="product-card__features-list">
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-card__actions">
                                                                    <div class="product-card__availability">
                                                                        التوفر: <span class="text-success">بالمخزون</span>
                                                                    </div>
                                                                    <div class="product-card__prices">
                                                                       2323 ريال
                                                                    </div>
                                                                    <div class="product-card__buttons">
                                                                        <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                                            <svg width="16px" height="16px">
                                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                            </svg>
                                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                                        </button>
                                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                                            <svg width="16px" height="16px">
                                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                                            </svg>
                                                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-products-carousel__cell">
                                                            <div class="product-card product-card--hidden-actions ">
                                                                <button class="product-card__quickview" type="button">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                                    </svg>
                                                                    <span class="fake-svg-icon"></span>
                                                                </button>
                                                                <div class="product-card__badges-list">
                                                                    <div class="product-card__badge product-card__badge--sale">مُباع</div>
                                                                </div>
                                                                <div class="product-card__image product-image">
                                                                    <a href="product.php" class="product-image__body">
                                                                        <img class="product-image__img" src="images/products/product-2.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="product-card__info">
                                                                    <div class="product-card__name">
                                                                        <a href="product.php">اسم القطعة abc </a>
                                                                    </div>
                                                                    <ul class="product-card__features-list">
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                        <li>... : ... ...</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-card__actions">
                                                                    <div class="product-card__availability">
                                                                        التوفر: <span class="text-success">مُباع</span>
                                                                    </div>
                                                                    <div class="product-card__prices">
                                                                       2323 ريال
                                                                    </div>
                                                                    <div class="product-card__buttons">
                                                                        <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                                            <svg width="16px" height="16px">
                                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                            </svg>
                                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                                        </button>
                                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                                            <svg width="16px" height="16px">
                                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                                            </svg>
                                                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                    <!-- </div> -->
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .block-products-carousel / end -->            
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">منتجات شائعة</h3>
                        <div class="block-header__divider"></div>
                        <ul class="block-header__groups-list">
                            <li><button type="button" class="block-header__group  block-header__group--active ">الكل</button></li>
                            <li><button type="button" class="block-header__group ">قطع خارجية</button></li>
                            <li><button type="button" class="block-header__group ">قطع مكانيكية</button></li>
                            <li><button type="button" class="block-header__group ">الإطارات</button></li>
                        </ul>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">جديد</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="product.php" class="product-image__body">
                                                <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="product.php">قطعة abc</a>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">
                                                التوفر: <span class="text-success">بالمخزون</span>
                                            </div>
                                            <div class="product-card__prices">
                                                449 ريال
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                </button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">شائع</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="product.php" class="product-image__body">
                                                <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="product.php">قطعة abc</a>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">
                                                التوفر: <span class="text-success">بالمخزون</span>
                                            </div>
                                            <div class="product-card__prices">
                                                449 ريال
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                </button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <div class="product-card__image product-image">
                                            <a href="product.php" class="product-image__body">
                                                <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="product.php">قطعة abc</a>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">
                                                التوفر: <span class="text-success">بالمخزون</span>
                                            </div>
                                            <div class="product-card__prices">
                                                449 ريال
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                </button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">خصم</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="product.php" class="product-image__body">
                                                <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="product.php">قطعة abc</a>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                                <li>... : ... ...</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">
                                                التوفر: <span class="text-success">بالمخزون</span>
                                            </div>
                                            <div class="product-card__prices">
                                                449 ريال
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضف إلى السلة</button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                </button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-products-carousel / end -->
            
            <!-- .block-banner / end -->
            <!-- .block-products -->
            <!-- .block-categories -->
            <div class="block block--highlighted block-categories block-categories--layout--compact">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">ماركات شائعة</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-categories__list">
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-1.jpg" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="">تسلا</a>
                                    </div>
                                    <div class="category-card__all">
                                        <a href="">عرض الكل</a>
                                    </div>
                                    <div class="category-card__products">
                                        24 منتج
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-2.jpg" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="">لكزس</a>
                                    </div>
                                    <div class="category-card__all">
                                        <a href="">عرض الكل</a>
                                    </div>
                                    <div class="category-card__products">
                                        134 منتج
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-4.jpg" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="">تويوتا</a>
                                    </div>
                                    <div class="category-card__all">
                                        <a href="">عرض الكل</a>
                                    </div>
                                    <div class="category-card__products">
                                        34 منتج
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-3.jpg" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="">كيا</a>
                                    </div>
                                    <div class="category-card__all">
                                        <a href="">عرض الكل</a>
                                    </div>
                                    <div class="category-card__products">
                                        83 منتج
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-5.jpg" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="">مازدا</a>
                                    </div>
                                    <div class="category-card__all">
                                        <a href="">عرض الكل</a>
                                    </div>
                                    <div class="category-card__products">
                                        32 منتج
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href=""><img src="images/categories/category-6.jpg" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="">نيسان</a>
                                    </div>
                                    <div class="category-card__all">
                                        <a href="">عرض الكل</a>
                                    </div>
                                    <div class="category-card__products">
                                        87 منتج
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-categories / end -->
            <!-- .block-products-carousel -->


            <div class="block block-brands">
                <div class="container">
                    <div class="block-brands__slider">
                        <div class="owl-carousel">
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-1.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-2.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-3.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-4.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-5.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-6.png" alt=""></a>
                            </div>
                            <div class="block-brands__item">
                                <a href=""><img src="images/logos/logo-7.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-brands / end -->
            <!-- .block-product-columns -->

        </div>
        <!-- site__body / end -->
        <?php require"footer.php";  ?>
</body>

</html>