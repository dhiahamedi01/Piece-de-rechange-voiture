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
                                <li class="breadcrumb-item active" aria-current="page">
                                    <div class="page-header__title">
                                        <h1>اتصل بنا</h1>
                                    </div>
                                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="container">
                    <div class="card mb-0">
                        <div class="card-body contact-us">
                            <div class="contact-us__container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                        <h4 class="contact-us__header card-title">عنواننا</h4><br>
                                        <div class="contact-us__address">
                                            <p>
                                                العراق، المملكة العربية بغداد<br>
                                                البريد الإلكتروني: zzzzzz@Hotmail.Com<br>
                                                رقم الجوال: 5873434
                                            </p>
                                            <p>
                                                <strong>اوقات العمل</strong><br>
                                                من الأحد وحتى الخميس ٩ صباحا - ٤ عصرا<br>
                                               الجمعة ٦ المغرب - ١٠ مساء<br>
                                                السبت ٤ مساء - ١٠ مساء
                                            </p>
                                            <p>
                                                <strong>ملاحظة</strong><br>
                                                يمكنك التواصل مع خدمة العملاء على الواتس اب خلال ٢٤ ساعة طوال ايام الإسبوع
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h4 class="contact-us__header card-title">اترك رسالة</h4>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="form-name">اسمك</label>
                                                    <input type="text" id="form-name" class="form-control" placeholder="اسمك">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="form-email">بريدك الإلكتروني</label>
                                                    <input type="email" id="form-email" class="form-control" placeholder="بريدك الإلكتروني">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="form-subject">عنوان الرسالة</label>
                                                <input type="text" id="form-subject" class="form-control" placeholder="عنوان الرسالة">
                                            </div>
                                            <div class="form-group">
                                                <label for="form-message"><h1</h1>الرسالة</label>
                                                <textarea id="form-message" class="form-control" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">ارسال</button>
                                        </form>
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