<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require"head.php";  ?>
<body>
    <!-- site -->
    <div class="site">
        <?php require"site__header.php";  ?>

        <!-- site__body -->
        <div class="site__body">
            <div class="block">
                <div class="container">
                    <div class="not-found">
                        <div class="not-found__404">
                          عذراً
                        </div>
                        <div class="not-found__content">
                            <h1 class="not-found__title">الصفحة غير موجودة</h1>
                            <p class="not-found__text">
                                يبدو أنه لا يمكننا العثور على الصفحة التي تبحث عنها.<br>
                                حاول استخدام البحث.
                            </p>
                            <form class="not-found__search">
                                <input type="text" class="not-found__search-input form-control" placeholder="ابحث ....">
                                <button type="submit" class="not-found__search-button btn btn-primary">بحث</button>
                            </form>
                            <p class="not-found__text">
                                أو اذهب إلى الصفحة الرئيسية للبدء من جديد.
                            </p>
                            <a class="btn btn-secondary btn-sm" href="index.php">اذهب إلى الصفحة الرئيسية</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <?php require"footer.php";  ?>
    </body>
    
    </html>