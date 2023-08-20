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
                                <li class="breadcrumb-item active" aria-current="page">ملخص الحساب</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>ملخص الحساب</h1>
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
                                    <li class="account-nav__item  account-nav__item--active ">
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
                            <div class="dashboard">
                                <div class="dashboard__profile card profile-card">
                                    <div class="card-body profile-card__body">
                                        <div class="profile-card__avatar">
                                            <img src="images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="profile-card__name">يوسف الحربي</div>
                                        <div class="profile-card__email">zzzzzz@hotmail.com</div>
                                        <div class="profile-card__edit">
                                            <a href="account-profile.php" class="btn btn-secondary btn-sm">تحرير الملف الشخصي</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard__address card address-card address-card--featured">
                                    <div class="address-card__badge">العنوان الإفتراضي</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">يوسف الحربي</div>
                                        <div class="address-card__row">
                                            حي الروضة<br>
                                            العراق، المملكة العربية بغداد<br>
                                            شارع الهفوف
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">رقم الجوال</div>
                                            <div class="address-card__row-content">05513398273872</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">البريد الإلكتروني</div>
                                            <div class="address-card__row-content">zzzzzz@hotmail.com</div>
                                        </div>
                                        <div class="address-card__footer">
                                            <a href="edit-address.php">تحرير العنوان</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard__orders card">
                                    <div class="card-header">
                                        <h5>اخر الطلبات</h5>
                                    </div>
                                    <div class="card-divider"></div>
                                    <div class="card-table">
                                        <div class="table-responsive-sm">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>الطلب</th>
                                                        <th>التاريخ</th>
                                                        <th>الحالة</th>
                                                        <th>المجموع</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">#8132</a></td>
                                                        <td>02 April, 2019</td>
                                                        <td>قيد التنفيذ</td>
                                                        <td>98374 ريال</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">#812232</a></td>
                                                        <td>02 April, 2009</td>
                                                        <td>ملغى</td>
                                                        <td>34 ريال</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">#2987</a></td>
                                                        <td>02 April, 2022</td>
                                                        <td>تم الشحن</td>
                                                        <td>100 ريال</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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