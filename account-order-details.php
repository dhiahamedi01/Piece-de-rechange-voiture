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
                                <li class="breadcrumb-item active" aria-current="page">تفاصيل الطلب</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>تفاصيل الطلب</h1>
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
                                    <li class="account-nav__item  ">
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
                                    <li class="account-nav__item account-nav__item--active">
                                        <a href="account-order-details.php">تفاصيل الطلب</a>
                                    </li>
                                    <li class="account-nav__item ">
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
                            <div class="card">
                                <div class="order-header">
                                    <div class="order-header__actions">
                                        <a href="account-orders.php" class="btn btn-xs btn-secondary">رجوع للطلبات</a>
                                    </div>
                                    <h5 class="order-header__title">الطلب #3857</h5>
                                    <div class="order-header__subtitle">
                                        تم الطلب في <mark class="order-header__date">19 October, 2020</mark>
                                        حالة الطلب: <mark class="order-header__status">قيد التنفيذ</mark>.
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>المنتج</th>
                                                    <th>المجموع</th>
                                                </tr>
                                            </thead>
                                            <tbody class="card-table__body card-table__body--merge-rows">
                                                <tr>
                                                    <td>اسم القطعة abc</td>
                                                    <td>77 ريال</td>
                                                </tr>
                                                <tr>
                                                    <td>اسم القطعة abc</td>
                                                    <td>33 ريال</td>
                                                </tr>
                                                <tr>
                                                    <td>اسم القطعة abc</td>
                                                    <td>100 ريال</td>
                                                </tr>
                                            </tbody>
                                            <tbody class="card-table__body card-table__body--merge-rows">
                                                <tr>
                                                    <th>المجموع الفرعي</th>
                                                    <td>982 ريال</td>
                                                </tr>
                                                <tr>
                                                    <th>الشحن</th>
                                                    <td>100 ريال</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>المجموع الكلي</th>
                                                    <td>2198 ريال</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 no-gutters mx-n2">
                                <div class="col-sm-6 col-12 px-2">
                                    <div class="card address-card address-card--featured">
                                        <div class="address-card__body">
                                            <div class="address-card__badge address-card__badge--muted">عنوان الشحن</div>
                                            <div class="address-card__name">يوسف الحربي</div>
                                            <div class="address-card__row">
                                                الروضة<br>
                                                العراق، المملكة العربية بغداد<br>
                                                شارع الهفوف
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">رقم الجوال</div>
                                                <div class="address-card__row-content">055823823242</div>
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">البريد الإلكتروني</div>
                                                <div class="address-card__row-content">zzzzzz@hotmail.com</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
                                    <div class="card address-card address-card--featured">
                                        <div class="address-card__body">
                                            <div class="address-card__badge address-card__badge--muted">وسيلة الدفع</div>
                                            <div class="address-card__name">دفع إلكتروني</div>
                                            <div class="address-card__row">
                                                حالة الدفع: مرفوضة<br>
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