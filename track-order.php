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
                                <li class="breadcrumb-item active" aria-current="page">تتبع الطلبات</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>تتبع الطلبات</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="card flex-grow-1 mb-0 mt-5">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h1>تتبع الطلبات
                                        </h1>
                                    </div>
                                    <p class="mb-4 pt-2">
                                        تتبع مسار شحناتك لحظة بلحظة حتى استلامها.
                                    </p>
                                    <form>
                                        <div class="form-group">
                                            <label for="track-order-id">رقم الطلب</label>
                                            <input id="track-order-id" type="text" class="form-control" placeholder="رقم الطلب">
                                        </div>
                                        <div class="form-group">
                                            <label for="track-email">البريد الإلكتروني</label>
                                            <input id="track-email" type="email" class="form-control" placeholder="البريد الإلكتروني">
                                        </div>
                                        <div class="pt-3">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">تتبع</button>
                                        </div>
                                    </form>
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
    