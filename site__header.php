        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="alwaysOnTop">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="index.php">
                                <!-- mobile-logo -->
                                <img src="images/logos/logo.png" width="120px" height="45px">
                                <!-- mobile-logo / end -->
                            </a>
                            
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <form class="search__form" action="">
                                        <input class="search__input" name="search" placeholder="ابحث بالإسم او برقم القطعة" aria-label="Site search" type="text" autocomplete="off">
                                        <button class="search__button search__button--type--submit" type="submit">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                        </button>
                                        <button class="search__button search__button--type--close" type="button">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cross-20"></use>
                                            </svg>
                                        </button>
                                        <div class="search__border"></div>
                                    </form>
                                    <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile d-md-none">
                                        <a href="#" data-open="offcanvas-cart" class="indicator__button">
                                        <span class="indicator__area">
                                         طلب قطعة جديدة
                                        </span>
                                    </a>
                                </div>

                                &nbsp;
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile d-sm-flex d-none">
                                    <a href="wishlist.php" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="indicator indicator--mobile">
                                    <a href="cart.php" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value">3</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->
                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="about-us.php">من نحن</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="contact-us.php">اتصل بنا</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="track-order.php">تتبع طلبك</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="">انضم كـ تاجر</a>
                            </div>

                            <div class="topbar__spring"></div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        حسابي
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar ">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account.php">
                                                        قائمة الأمنيات
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="edit-account.php">
                                                        تحرير الملف الشخصي
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-orders.php">
                                                        طلباتي
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-addresses.php">
                                                        عناويني
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-password.php">
                                                        تغيير كلمة المرور
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-login.php">
                                                        تسجيل الخروج
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                                <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        الثيم: <span class="topbar__item-value">
                                            <?php
                                            if (!empty($_COOKIE["theme"]) && $_COOKIE["theme"] != "default"){
                                                if ($_COOKIE["theme"]== "black"){echo 'اسود';}
                                                elseif ($_COOKIE["theme"]== "green"){echo 'اخضر';}
                                                elseif ($_COOKIE["theme"]== "blue"){echo 'ازرق';}
                                                elseif ($_COOKIE["theme"]== "red"){echo 'احمر';}
                                                echo ''; } else{ echo 'افتراضي';}

                                            ?></span>
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar  menu--with-icons ">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <button type="button" onclick="change_theme(this);" class="menu__item-link" id ="default">
                                                        <div class="menu__item-icon"><img srcset="images/colors/yellow-1.png 1x, images/colors/yellow-1@2x.png 2x" src="images/colors/yellow-1.png" alt=""></div>
                                                        افتراضي
                                                    </button>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <button type="button" onclick="change_theme(this);" class="menu__item-link" id ="black">
                                                        <div class="menu__item-icon"><img srcset="images/colors/black-1.png 1x, images/colors/black-1@2x.png 2x" src="images/colors/black-1.png" alt=""></div>
                                                        اسود
                                                    </button>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <button type="button" onclick="change_theme(this);" class="menu__item-link" id ="blue">
                                                        <div class="menu__item-icon"><img srcset="images/colors/blue-1.png 1x, images/colors/blue-1@2x.png 2x" src="images/colors/blue-1.png" alt=""></div>
                                                        ازرق
                                                    </button>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <button type="button" onclick="change_theme(this);" class="menu__item-link" id ="green">
                                                        <div class="menu__item-icon"><img srcset="images/colors/green-1.png 1x, images/colors/green-1@2x.png 2x" src="images/colors/green-1.png" alt=""></div>
                                                        اخضر
                                                    </button>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <button type="button"onclick="change_theme(this);" class="menu__item-link" id ="red">
                                                        <div class="menu__item-icon"><img srcset="images/colors/red-1.png 1x, images/colors/red-1@2x.png 2x" src="images/colors/red-1.png" alt=""></div>
                                                        احمر
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>

                           
                           

                        </div>
                    </div>
                </div>
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="index.php">
                            <!-- logo -->
                            <img src="images/logos/logo.png" width="196px" height="74px">
                            <!-- logo / end -->
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header ">
                            <div class="search__body">
                                <form class="search__form" action="">
                                    <input class="search__input" name="search" placeholder="ابحث بالإسم او برقم القطعة" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">تواصل معنا واتس أب مباشرة</div>
                        <div class="site-header__phone-number text-right">0570171111</div>
                    </div>
                </div>


                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="alwaysOnTop">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__logo">
                                    <a class="nav-links__item-link" href="index.php">
                                        <!-- logo -->
                                        <i class="fa fa-car" aria-hidden="true"></i>&nbsp; الرئيسية 

                                        <!-- logo / end -->
                                    </a>
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="index.php">
                                                <div class="nav-links__item-body">
                                                    قطع خارجية
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index.php">
                                                                الصدامات، الشبوك والواجهة
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-2.php">
                                                                الشمعات والاصطبات
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                الأبواب، الرفرف والكبوت
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="index.php">
                                                <div class="nav-links__item-body">
                                                    قطع مكانيكية
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index.php">
                                                                المكائن، القيرات وملحقاتها
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-2.php">
                                                                الشكمان
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                نظام الوقود
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                العكس، الدفرنس والرمانات
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                البواجي، الفلاتر والسيور
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                المساعدات، المقصات وعمود التوازن
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                الدركسون وملحقاته
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.php">
                                                                نظام التكييف والتبريد
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>


                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="shop-grid-3-columns-sidebar.php">
                                                <div class="nav-links__item-body">
                                                    الإطارات
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-grid-3-columns-sidebar.php">
                                                                الجنوط
                                                                <svg class="menu__item-arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-list.php">
                                                                الفرامل والأقمشة
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="account-login.php">
                                                <div class="nav-links__item-body">
                                                    الاكسسوارات
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->

                               
                                 



                                <div class="nav-panel__indicators">

                                    <div class="indicator">
                                        
                                           <a href="#" data-open="offcanvas-cart" class="indicator__button">
                                            <span class="indicator__area">
                                                  طلب قطعة جديدة
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator">
                                        <a href="wishlist.php" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#heart-20"></use>
                                                </svg>
                                                <span class="indicator__value">0</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="cart.php" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#cart-20"></use>
                                                </svg>
                                                <span class="indicator__value">3</span>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart dropcart--style--dropdown">
                                                <div class="dropcart__body">
                                                    <div class="dropcart__products-list">
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.php" class="product-image__body">
                                                                    <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.php">اسم القطعة xxxx</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>النوع: تويوتا</li>
                                                                    <li>الفئة: كامري</li>
                                                                    <li>الموديل: 2018</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">2</span> قطعة
                                                                    <span class="dropcart__product-price">699.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.php" class="product-image__body">
                                                                    <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.php">اسم القطعة yyy</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>النوع: لكزس</li>
                                                                    <li>الفئة: es</li>
                                                                    <li>الموديل: 2020</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">1</span> قطعة
                                                                    <span class="dropcart__product-price">93824.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>


                                                    </div>
                                                    <div class="dropcart__totals">
                                                        <table>
                                                            <tr>
                                                                <th>المجموع الفرعي</th>
                                                                <td>100 ريال</td>
                                                            </tr>
                                                            <tr>
                                                                <th>الشحن</th>
                                                                <td>14 ريال</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ضريبة القيمة المضافة</th>
                                                                <td>5 ريال</td>
                                                            </tr>
                                                            <tr>
                                                                <th>المجموع الكلي</th>
                                                                <td>119 ريال</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="dropcart__buttons">
                                                        <a class="btn btn-secondary" href="cart.php">عرض عربة التسوق</a>
                                                        <a class="btn btn-primary" href="checkout.php">اكمال الدفع</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .dropcart / end -->
                                        </div>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="account-login.php" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#person-20"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <div class="account-menu">
                                                <?php 
                                                
                                                if(empty($_SESSION['id'])){
                                                ?>
                                                <form class="account-menu__form">
                                                    <div class="account-menu__form-title">تسجيل الدخول إلى حسابك</div>
                                                    <div class="form-group">
                                                        <label for="header-signin-email" class="sr-only">البريد الإلكتروني</label>
                                                        <input id="header-signin-email" type="email" class="form-control form-control-sm" placeholder="البريد الإلكتروني">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="header-signin-password" class="sr-only">كلمة المرور</label>
                                                        <div class="account-menu__form-forgot">
                                                            <input id="header-signin-password" type="password" class="form-control form-control-sm" placeholder="كلمة المرور">
                                                            <a href="reset-password.php" class="account-menu__form-forgot-link">نسيت كلمة المرور</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group account-menu__form-button">
                                                        <button type="submit" class="btn btn-primary btn-sm">تسجيل الدخول</button>
                                                    </div>
                                                    <div class="account-menu__form-link"><a href="account-login.php">فتح حساب جديد</a></div>
                                                </form><?php }
                                                else {?>
                                                <div class="account-menu__divider"></div>
                                                <a href="account-dashboard.php" class="account-menu__user">
                                                    <div class="account-menu__user-avatar">
                                                        <img src="images/avatars/avatar-3.jpg" alt="">
                                                    </div>
                                                    <div class="account-menu__user-info">
                                                        <div class="account-menu__user-name">يوسف الحربي</div>
                                                        <div class="account-menu__user-email">zzzzzz@hotmail.com</div>
                                                    </div>
                                                </a>
                                                <div class="account-menu__divider"></div>
                                                <ul class="account-menu__links">
                                                    <li><a href="account-profile.php">تحرير الملف الشخصي</a></li>
                                                    <li><a href="account-orders.php">طلباتي</a></li>
                                                    <li><a href="account-addresses.php">عناويني</a></li>
                                                    <li><a href="account-password.php">تغيير كلمة المرور</a></li>
                                                </ul>
                                                <div class="account-menu__divider"></div>
                                                <ul class="account-menu__links">
                                                    <li><a href="account-login.php">تسجيل الخروج</a></li>
                                                </ul>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop site__header / end -->
