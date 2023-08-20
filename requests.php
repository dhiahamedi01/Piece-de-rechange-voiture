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
                                <li class="breadcrumb-item active" aria-current="page">طلبات التسعير</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>طلبات التسعير</h1>
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
                                    <li class="account-nav__item">
                                        <a href="edit-account.php">تحرير الملف الشخصي</a>
                                    </li>
                                    <li class="account-nav__item account-nav__item--active">
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
                           <div class="col-12 mb-3">
                            <div class="alert alert-lg alert-primary">
                                <b>ملاحظة: </b> عملية تسعير الطلبات تستغرق 24 ساعة كحد أقصى، يرجى التحلي بالصبر وسنقوم بتنبيهكم عند الإنتهاء من التسعير.
                                </div>
                        </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5>طلبات التسعير</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>القطعة</th>
                                                    <!--<th>التوافقية</th>-->
                                                    <th>الحالة</th>
                                                    <th>إجراء</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
<ul class="dropcart__product-options">
    
                            <li>قطعة dskd</li>
                            <li>جيب FJ  GX - 2024</li>
 </ul></td>
                                                    <td>تم التسعير</td>
                                                    <td>
                                            <a class="btn btn-xs btn-primary" href="#"  data-toggle="collapse" data-target="#collapseme">العروض</a>
                                                </td>
                                                </tr>
                                                    <tr id="collapseme" class="collapse out">
<td> <ul class="dropcart__product-options">
                                                    <li><b>الحالة:</b> مستعملة</li>
                                                    <li><b>الصنع:</b> وكالة</li>
 </ul></td>

                                                    <td>493 ريال</td>
                                                    <td><a href="#" class="btn btn-xs btn-secondary">اضف إلى السلة</a></td>
                                                </tr>
                                                </tr>
                                                    <tr id="collapseme" class="collapse out">
<td> <ul class="dropcart__product-options">
                                                    <li><b>الحالة:</b> جديدة</li>
                                                    <li><b>الصنع:</b> تجارية</li>
 </ul></td>
                                                    <td>200 ريال</td>
                                                    <td><a href="#" class="btn btn-xs btn-secondary">اضف إلى السلة</a></td>
                                                </tr>

                                                <tr>
<td> <ul class="dropcart__product-options">
                            <li>قطعة aaa</li>
                            <li>لكزس es350 - 2022</li>
 </ul></td>

                                                    <td>قيد التنفيذ</td>
                                                    <td>
                                            <a class="btn btn-xs btn-danger" href="#">إلغاء التسعير</a>

                                                    </td>
                                                </tr>


                                                <tr>
<td> <ul class="dropcart__product-options">
                                                    <li>قطعة bbb</li>
                                                    <li>جيب لاندكروزر GX - 2009</li>
 </ul></td>

                                                    <td>تم التسعير</td>
                                                    <td>
                                            <a class="btn btn-xs btn-primary" href="cart.php"  data-toggle="collapse" data-target="#collapseme2">العروض</a>
                                                </td>
                                                </tr>
                                                    <tr id="collapseme2" class="collapse out">
<td> <ul class="dropcart__product-options">
                                                    <li><b>الحالة:</b> جديدة</li>
                                                    <li><b>الصنع:</b> وكالة</li>
 </ul></td>
                                                    <td>400 ريال</td>
                                                    <td><a href="#" class="btn btn-xs btn-secondary">اضف إلى السلة</a></td>
                                                </tr>


                                                <tr>
<td> <ul class="dropcart__product-options">
                                                    <li>قطعة ccc</li>
                                                    <li>جيلي - سيدان MG - 2023</li>
 </ul></td>
                                                    <td>ملغى</td>
                                                    <td>ملغى</td>
                                                </tr>

                                            </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-footer">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                                <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="">2 <span class="sr-only">(هذه الصفحة)</span></a></li>
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