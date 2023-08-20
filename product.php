<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require"head.php";  ?>
<body>
    <!-- site -->
    <div class="site">
        <?php require"site__header.php";  ?>

        <!-- site__body -->
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">الرئيسية</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="shop.php">المتجر</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">قطعة abc</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="container">
                    <div class="product product--layout--standard" data-layout="standard">
                        <div class="product__content">
                            <!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured">
                                        <button class="product-gallery__zoom">
                                            <svg width="24px" height="24px">
                                                <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                            </svg>
                                        </button>
                                        <div class="owl-carousel" id="product-image">
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                                <a href="images/products/product-16.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                    <img class="product-image__img" src="images/products/product-16.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                                <a href="images/products/product-16-1.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                    <img class="product-image__img" src="images/products/product-16-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                                <a href="images/products/product-16-2.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                    <img class="product-image__img" src="images/products/product-16-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                                <a href="images/products/product-16-3.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                    <img class="product-image__img" src="images/products/product-16-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                                <a href="images/products/product-16-4.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                    <img class="product-image__img" src="images/products/product-16-4.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__carousel">
                                        <div class="owl-carousel" id="product-carousel">
                                            <a href="images/products/product-16.jpg" class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img product-gallery__carousel-image" src="images/products/product-16.jpg" alt="">
                                                </div>
                                            </a>
                                            <a href="images/products/product-16-1.jpg" class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img product-gallery__carousel-image" src="images/products/product-16-1.jpg" alt="">
                                                </div>
                                            </a>
                                            <a href="images/products/product-16-2.jpg" class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img product-gallery__carousel-image" src="images/products/product-16-2.jpg" alt="">
                                                </div>
                                            </a>
                                            <a href="images/products/product-16-3.jpg" class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img product-gallery__carousel-image" src="images/products/product-16-3.jpg" alt="">
                                                </div>
                                            </a>
                                            <a href="images/products/product-16-4.jpg" class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img product-gallery__carousel-image" src="images/products/product-16-4.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .product__gallery / end -->
                            <!-- .product__info -->
                            <div class="product__info">
                                <div class="product__wishlist-compare">
                                    <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                        </svg>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#compare-16"></use>
                                        </svg>
                                    </button>
                                </div>
                                <h1 class="product__name">قطعة abcdefghijklmn</h1>
                                <div class="product__description">
                                    وصف المنتج بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                </div>
                                <ul class="product__features">
                                    <li>... : ... ...</li>
                                    <li>... : ... ...</li>
                                    <li>... : ... ...</li>
                                    <li>... : ... ...</li>
                                    <li>... : ... ...</li>
                                </ul>
                                <ul class="product__meta">
                                    <li class="product__meta-availability"><span class="text-success">متوفر بالمخزون</span></li>
                                    <li>الماركة: <a href="">....</a></li>
                                    <li>الفئة: <a href="">....</a></li>
                                    <li>الموديل: <a href="">....</a></li>
                                </ul>
                            </div>
                            <!-- .product__info / end -->
                            <!-- .product__sidebar -->
                            <div class="product__sidebar">
                                <div class="product__availability">
                                    التوفر: <span class="text-success">متوفر بالمخزون</span>
                                </div>
                                <div class="product__prices">
                                   131937 ريال
                                </div>
                                <!-- .product__options -->
                                <form class="product__options">
                                    <div class="form-group product__option">
                                        <label class="product__option-label">اللون</label>
                                        <div class="input-radio-color">
                                            <div class="input-radio-color__list">
                                                <label class="input-radio-color__item input-radio-color__item--white" style="color: #fff;" data-toggle="tooltip" title="White">
                                                    <input type="radio" name="color">
                                                    <span></span>
                                                </label>
                                                <label class="input-radio-color__item" style="color: #ffd333;" data-toggle="tooltip" title="Yellow">
                                                    <input type="radio" name="color">
                                                    <span></span>
                                                </label>
                                                <label class="input-radio-color__item" style="color: #ff4040;" data-toggle="tooltip" title="Red">
                                                    <input type="radio" name="color">
                                                    <span></span>
                                                </label>
                                                <label class="input-radio-color__item input-radio-color__item--disabled" style="color: #4080ff;" data-toggle="tooltip" title="Blue">
                                                    <input type="radio" name="color" disabled>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option">
                                        <label class="product__option-label">الصناعة</label>
                                        <div class="input-radio-label">
                                            <div class="input-radio-label__list">
                                                <label>
                                                    <input type="radio" name="material">
                                                    <span>وكالة</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="material">
                                                    <span>اصلي</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="material" disabled>
                                                    <span>تجاري</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option">
                                        <label class="product__option-label" for="product-quantity">العدد</label>
                                        <div class="product__actions">
                                            <div class="product__actions-item">
                                                <div class="input-number product__quantity">
                                                    <input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                                    <div class="input-number__add"></div>
                                                    <div class="input-number__sub"></div>
                                                </div>
                                            </div>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                <button class="btn btn-primary btn-lg">اضافة إلى السلة</button>
                                            </div>
                                            <div class="product__actions-item product__actions-item--wishlist">
                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Wishlist">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- .product__options / end -->
                            </div>
                            <!-- .product__end -->
                            <div class="product__footer">
                                <div class="product__tags tags">
                                    <div class="tags__list">
                                        <a href="">ضمان شهر</a>
                                        <a href="">صناعة كورية</a>
                                        <a href="">شحن مجاني</a>
                                    </div>
                                </div>
                                <div class="product__share-links share-links">
                                    <ul class="share-links__list">
                                        <li class="share-links__item share-links__item--type--like"><a href="">Like</a></li>
                                        <li class="share-links__item share-links__item--type--tweet"><a href="">Tweet</a></li>
                                        <li class="share-links__item share-links__item--type--pin"><a href="">Pin It</a></li>
                                        <li class="share-links__item share-links__item--type--counter"><a href="">4K</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tabs  product-tabs--sticky">
                        <div class="product-tabs__list">
                            <div class="product-tabs__list-body">
                                <div class="product-tabs__list-container container">
                                    <a href="#tab-description" class="product-tabs__item product-tabs__item--active">الوصف</a>
                                    <a href="#tab-specification" class="product-tabs__item">المواصفات</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-tabs__content">
                            <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                                <div class="typography">
                                    <h3>وصف المنتج</h3>
                                    <p>
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                    </p>
                                    <h3>بلا بلا بلا</h3>
                                    <p>
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                    </p>
                                    <p>
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا                                    
                                    </p>
                                </div>
                            </div>
                            <div class="product-tabs__pane" id="tab-specification">
                                <div class="spec">
                                    <h3 class="spec__header">المواصفات</h3>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">عام</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                    </div>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">الابعاد</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">...</div>
                                            <div class="spec__value">... ...</div>
                                        </div>
                                    </div>
                                    <div class="spec__disclaimer">
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                        بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">منتجات اخرى</h3>
                        <div class="block-header__divider"></div>
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
                                               343 ريال
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
                                           343 ريال
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">اضافة إلى السلة</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">اضافة إلى السلة</button>
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
            <!-- .block-products-carousel / end -->
        </div>
        <!-- site__body / end -->
        <?php require"footer.php";  ?>
    </body>
    
    </html>
    