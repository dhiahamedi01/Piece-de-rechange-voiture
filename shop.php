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
                                <li class="breadcrumb-item active" aria-current="page">
                                    <div class="page-header__title">
                                        <h1>متجر القطع</h1>
                                    </div>
                                                </li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="shop-layout shop-layout--sidebar--start">
                    <div class="shop-layout__sidebar">
                        <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                            <div class="block-sidebar__backdrop"></div>
                            <div class="block-sidebar__body">
                                <div class="block-sidebar__header">
                                    <div class="block-sidebar__title">عوامل التصفية</div>
                                    <button class="block-sidebar__close" type="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cross-20"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="block-sidebar__item">
                                    <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                        <h4 class="widget-filters__title widget__title">عوامل التصفية</h4>
                                        <div class="widget-filters__list">
                                            <div class="widget-filters__item">
                                                <div class="filter filter--opened" data-collapse-item>
                                                    <button type="button" class="filter__title" data-collapse-trigger>
                                                        الماركات
                                                        <svg class="filter__arrow" width="12px" height="7px">
                                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="filter__body" data-collapse-content>
                                                        <div class="filter__container">
                                                            <div class="filter-list">
                                                                <div class="filter-list__list">
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            تويوتا
                                                                        </span>
                                                                        <span class="filter-list__counter">7</span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" checked>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            لكزس
                                                                        </span>
                                                                        <span class="filter-list__counter">42</span>
                                                                    </label>
                                                                    <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" checked disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            مازدا
                                                                        </span>
                                                                    </label>
                                                                    <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            نيسان
                                                                        </span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            مرسيدس
                                                                        </span>
                                                                        <span class="filter-list__counter">1</span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            تسلا
                                                                        </span>
                                                                        <span class="filter-list__counter">25</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-filters__item">
                                                <div class="filter filter--opened" data-collapse-item>
                                                    <button type="button" class="filter__title" data-collapse-trigger>
                                                        الفئات
                                                        <svg class="filter__arrow" width="12px" height="7px">
                                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="filter__body" data-collapse-content>
                                                        <div class="filter__container">
                                                            <div class="filter-list">
                                                                <div class="filter-list__list">
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            كامري
                                                                        </span>
                                                                        <span class="filter-list__counter">7</span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" checked>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            اوبتما
                                                                        </span>
                                                                        <span class="filter-list__counter">42</span>
                                                                    </label>
                                                                    <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" checked disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            ...
                                                                        </span>
                                                                    </label>
                                                                    <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            ...
                                                                        </span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            ...
                                                                        </span>
                                                                        <span class="filter-list__counter">1</span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            ...
                                                                        </span>
                                                                        <span class="filter-list__counter">25</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-filters__item">
                                                <div class="filter filter--opened" data-collapse-item>
                                                    <button type="button" class="filter__title" data-collapse-trigger>
                                                        الموديلات
                                                        <svg class="filter__arrow" width="12px" height="7px">
                                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="filter__body" data-collapse-content>
                                                        <div class="filter__container">
                                                            <div class="filter-list">
                                                                <div class="filter-list__list">
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            2019
                                                                        </span>
                                                                        <span class="filter-list__counter">7</span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" checked>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            2022
                                                                        </span>
                                                                        <span class="filter-list__counter">42</span>
                                                                    </label>
                                                                    <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" checked disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            2010
                                                                        </span>
                                                                    </label>
                                                                    <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox" disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            2023
                                                                        </span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            2005
                                                                        </span>
                                                                        <span class="filter-list__counter">1</span>
                                                                    </label>
                                                                    <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input" type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon" width="9px" height="7px">
                                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span class="filter-list__title">
                                                                            2011
                                                                        </span>
                                                                        <span class="filter-list__counter">25</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="widget-filters__actions d-flex">
                                            <button class="btn btn-primary btn-sm">حفظ</button>
                                            <button class="btn btn-secondary btn-sm">مسح</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-layout__content">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__options">
                                    <div class="view-options view-options--offcanvas--mobile">
                                        <div class="view-options__filters-button">
                                            <button type="button" class="filters-button">
                                                <svg class="filters-button__icon" width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#filters-16"></use>
                                                </svg>
                                                <span class="filters-button__title">Filters</span>
                                                <span class="filters-button__counter">3</span>
                                            </button>
                                        </div>
                                        <div class="view-options__layout">
                                            <div class="layout-switcher">
                                                <div class="layout-switcher__list">
                                                    <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button  layout-switcher__button--active ">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                        </svg>
                                                    </button>
                                                    <button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button ">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16"></use>
                                                        </svg>
                                                    </button>
                                                    <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button ">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                                    <div class="products-list__body">
                                        <div class="products-list__item">
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
                                                        <a href="product.php">قطعه abc</a>
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
                                                     <span class="text-success">بالمخزون</span>
                                                    </div>
                                                    <div class="product-card__prices">
                                                       3432 ريال
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
                                        <div class="products-list__item">
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
                                                        <a href="product.php">قطعه abc</a>
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
                                                     <span class="text-success">بالمخزون</span>
                                                    </div>
                                                    <div class="product-card__prices">
                                                       3432 ريال
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
                                        <div class="products-list__item">
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
                                                        <a href="product.php">قطعه abc</a>
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
                                                     <span class="text-success">بالمخزون</span>
                                                    </div>
                                                    <div class="product-card__prices">
                                                       3432 ريال
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
                                        <div class="products-list__item">
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
                                                        <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name">
                                                        <a href="product.php">قطعه abc</a>
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
                                                     <span class="text-success">بالمخزون</span>
                                                    </div>
                                                    <div class="product-card__prices">
                                                       3432 ريال
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
                                <div class="products-view__pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                                <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="">2 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item"><a class="page-link" href="">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                                                <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <?php require"footer.php";  ?>
    </body>
    
    </html>
    