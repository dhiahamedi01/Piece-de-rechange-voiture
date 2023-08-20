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
                                <li class="breadcrumb-item active" aria-current="page">تحرير عنوان</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>تحرير عنوان</h1>
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
                                    <li class="account-nav__item ">
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
                                    <li class="account-nav__item ">
                                        <a href="account-addresses.php">عناويني</a>
                                    </li>
                                    <li class="account-nav__item account-nav__item--active">
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
                            <div class="card">
                                <div class="card-header">
                                    <h5>تحرير العنوان</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">الاسم الأول</label>
                                                    <input type="text" class="form-control" id="checkout-first-name" placeholder="الاسم الأول">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-last-name">اسم العائلة</label>
                                                    <input type="text" class="form-control" id="checkout-last-name" placeholder="اسم العائلة">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="checkout-country">المدينة</label>
                                                <select id="checkout-country" class="form-control form-control-select2">
                                                    <option>حدد خيار</option>
                                                    <option>المدينة</option>
                                                    <option>العراق</option>
                                                    <option>مكة</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="checkout-country">الحي</label>
                                                <select id="checkout-country" class="form-control form-control-select2">
                                                    <option>حدد خيار</option>
                                                    <option>الروضة</option>
                                                    <option>الملك فهد</option>
                                                    <option>المطار</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="checkout-street-address">اسم الشارع</label>
                                                <input type="text" class="form-control" id="checkout-street-address" placeholder="اسم الشارع">
                                            </div>
                                            <div class="form-group">
                                                <label for="checkout-address">وصف العنوان. <span class="text-muted">(اختياري)</span></label>
                                                <input type="text" class="form-control" id="checkout-address">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-email">البريد الإلكتروني</label>
                                                    <input type="email" class="form-control" id="checkout-email" placeholder="البريد الإلكتروني">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-phone">رقم الجوال</label>
                                                    <input type="text" class="form-control" id="checkout-phone" placeholder="رقم الجوال">
                                                </div>
                                            </div>
                                            <div class="form-group mt-3 mb-0">
                                                <button class="btn btn-primary">حفظ</button>
                                            </div>
                                        </div>
                                    </div>
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