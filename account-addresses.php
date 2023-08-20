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
                                    <a href="account.php">حسابي</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">عناويني</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>عناويني</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">القائمة</h4>
                                <ul>
                                    <li class="account-nav__item   ">
                                        <a href="account.php">ملخص الحساب</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="edit-account.php">تحرير الملف الشخصي</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="requests.php">طلبات التسعير</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-orders.php">مشترياتي</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-order-details.php">تفاصيل الطلب</a>
                                    </li>
                                    <li class="account-nav__item account-nav__item--active">
                                        <a href="account-addresses.php">عناويني</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-edit-address.php">تحرير عنوان</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-password.php">تغيير كلمة المرور</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-login.php">تسجيل الخروج</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="addresses-list">
                                <div class="addresses-list__item card address-card">
                                    <div class="address-card__badge">الإفتراضي</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">يوسف الحربي</div>
                                        <div class="address-card__row">
                                            الروضة<br>
                                            العراق، بغداد<br>
                                            شارع الهفوف
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">رقم الجوال</div>
                                            <div class="address-card__row-content">058937483</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">البريد الإلكتروني</div>
                                            <div class="address-card__row-content">zzzzzz@hotmail.com</div>
                                        </div>
                                        <div class="address-card__footer">
                                            <a href="account-edit-address.php">تحرير</a>&nbsp;&nbsp;
                                            <a href="">حذف</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="addresses-list__divider"></div>
                                <div class="addresses-list__item card address-card">
                                    <div class="address-card__badge">الإفتراضي</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">يوسف الحربي</div>
                                        <div class="address-card__row">
                                            الروضة<br>
                                            بغداد بغداد<br>
                                            شارع المطار
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">رقم الجوال</div>
                                            <div class="address-card__row-content">058937483</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">البريد الإلكتروني</div>
                                            <div class="address-card__row-content">zzzzzz@hotmail.com</div>
                                        </div>
                                        <div class="address-card__footer">
                                            <a href="account-edit-address.php">تحرير</a>&nbsp;&nbsp;
                                            <a href="">حذف</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="addresses-list__divider"></div>
                                <a href="" class="addresses-list__item addresses-list__item--new">
                                    <div class="addresses-list__plus"></div>
                                    <div class="btn btn-secondary btn-sm">اضف عنوان جديد</div>
                                </a>

                                <div class="addresses-list__divider"></div>
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