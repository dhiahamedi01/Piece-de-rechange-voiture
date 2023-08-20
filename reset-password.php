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
                                <li class="breadcrumb-item active" aria-current="page">استعادة كلمة المرور</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>استعادة كلمة المرور</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <div class="card flex-grow-1 mb-md-0">
                                <div class="card-body">
                                    <h3 class="card-title">استعادة كلمة المرور</h3>
                                    <form>
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">ارسال</button>
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