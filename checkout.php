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
                                <li class="breadcrumb-item active" aria-current="page">الدفع</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>الدفع</h1>
                    </div>
                </div>
            </div>
            <div class="checkout block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="alert alert-lg alert-primary">ملاحظة: .... .... .... .... ...</div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mt-4 mt-lg-0">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h3 class="card-title">تفاصيل الفاتورة</h3>
                                    <table class="checkout__totals">
                                        <thead class="checkout__totals-header">
                                            <tr>
                                                <th>المنتج</th>
                                                <th>المجموع</th>
                                            </tr>
                                        </thead>
                                        <tbody class="checkout__totals-products">
                                            <tr>
                                                <td>قطعة avfvfbv</td>
                                                <td>774 ريال</td>
                                            </tr>
                                            <tr>
                                                <td>قطعة avwbv</td>
                                                <td>33 ريال</td>
                                            </tr>
                                            <tr>
                                                <td>قطعة avaaabv</td>
                                                <td>120 ريال</td>
                                            </tr>
                                        </tbody>
                                        <tbody class="checkout__totals-subtotals">
                                            <tr>
                                                <th>المجموع الفرعي</th>
                                                <td>1240 ريال</td>
                                            </tr>
                                            <tr>
                                                <th>الشحن</th>
                                                <td>34 ريال</td>
                                            </tr>
                                            <tr>
                                                <th>ضريبة القيمة المضافة</th>
                                                <td>344 ريال</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="checkout__totals-footer">
                                            <tr>
                                                <th>المجموع الكلي</th>
                                                <td>434 ريال</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mt-4 mt-lg-0">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h3 class="card-title">طريقة الدفع</h3>
                                    <div class="payment-methods">
                                        <ul class="payment-methods__list">
                                            <li class="payment-methods__item payment-methods__item--active">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio" checked>
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="payment-methods__item-title">تحويل بنكي</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
حول وارسل الايصال ... ... ... ... ... ... ... ... ...
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="payment-methods__item-title">دفع إلكتروني</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                       ... ... ... ... ... ...
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="payment-methods__item-title">الدفع عند الاستلام</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                       غير مدعوم في مدينتك
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="checkout__agree form-group">
                                        <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input" type="checkbox" id="checkout-terms">
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px" height="7px">
                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                            <label class="form-check-label" for="checkout-terms">
                                                اطلعت على <a target="_blank" href="terms-and-conditions.php">الأحكام والشروط</a> واوفق عليها.
                                            </label>
                                        </div>
                                    </div>
                                    <a href = "order-success.php" class="btn btn-primary btn-xl btn-block">استمرار</a>
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