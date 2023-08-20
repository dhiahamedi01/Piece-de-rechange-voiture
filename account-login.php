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
                                <li class="breadcrumb-item active" aria-current="page">تسجيل الدخول</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>تسجيل الدخول</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column">
                            <div class="card flex-grow-1 mb-md-0">
                                <div class="card-body">
                                    <h3 class="card-title">تسجيل الدخول</h3>
                                    <form>
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                        </div>
                                        <div class="form-group">
                                            <label>كلمة المرور</label>
                                            <input type="password" class="form-control" placeholder="كلمة المرور">
                                            <small class="form-text text-muted">
                                                <a href="reset-password.php">نسيت كلمة المرور؟</a>
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <span class="form-check-input input-check">
                                                    <span class="input-check__body">
                                                        <input class="input-check__input" type="checkbox" id="login-remember">
                                                        <span class="input-check__box"></span>
                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <label class="form-check-label" for="login-remember">تذكرني</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">دخول</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column mt-4 mt-md-0">
                            <div class="card flex-grow-1 mb-0">
                                <div class="card-body">
                                    <h3 class="card-title">فتح حساب جديد</h3>
                                    <form>
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                        </div>
                                        <div class="form-group">
                                            <label>كلمة المرور</label>
                                            <input type="password" class="form-control" placeholder="كلمة المرور">
                                        </div>
                                        <div class="form-group">
                                            <label>تأكيد كلمة المرور</label>
                                            <input type="password" class="form-control" placeholder="تأكيد كلمة المرور">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">تسجيل</button>
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