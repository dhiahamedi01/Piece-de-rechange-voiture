<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require"head.php";  ?>
<body>
    <!-- site -->
    <div class="site">
        <?php require"site__header.php";  ?>

        <!-- site__body -->
        <div class="site__body">
            <div class="block order-success">
                <div class="container">
                    <div class="order-success__body">
                        <div class="order-success__header">
                            <svg class="order-success__icon" width="100" height="100">
                                <use xlink:href="images/sprite.svg#check-100"></use>
                            </svg>
                            <h1 class="order-success__title">شكرا لك</h1>
                            <div class="order-success__subtitle">لقد تم استلام طلبك بنجاح</div>
                            <div class="order-success__actions">
                                <a href="" class="btn btn-xs btn-secondary">الرجوع للرئيسية</a>
                            </div>
                        </div>
                        <div class="order-success__meta">
                            <ul class="order-success__meta-list">
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">رقم الطلب:</span>
                                    <span class="order-success__meta-value">#3487</span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">تم في:</span>
                                    <span class="order-success__meta-value">October 19, 2020</span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">المجموع:</span>
                                    <span class="order-success__meta-value">$5,882.00</span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">طريقة الدفع:</span>
                                    <span class="order-success__meta-value">تحويل بنكي</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="order-list">
                                <table>
                                    <thead class="order-list__header">
                                        <tr>
                                            <th class="order-list__column-label" colspan="2">المنتج</th>
                                            <th class="order-list__column-quantity">الكمية</th>
                                            <th class="order-list__column-total">المجموع</th>
                                        </tr>
                                    </thead>
                                    <tbody class="order-list__products">
                                        <tr>
                                            <td class="order-list__column-image">
                                                <div class="product-image">
                                                    <a href="" class="product-image__body">
                                                        <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="order-list__column-product">
                                                <a href="">قطعة adf</a>
                                                <div class="order-list__options">
                                                    <ul class="order-list__options-list">
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">الحالة:</span>
                                                            <span class="order-list__options-value">جديدة</span>
                                                        </li>
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">الصنع:</span>
                                                            <span class="order-list__options-value">وكالة</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="order-list__column-quantity" data-title="Qty:">2</td>
                                            <td class="order-list__column-total">334 ريال</td>
                                        </tr>
                                        <tr>
                                            <td class="order-list__column-image">
                                                <div class="product-image">
                                                    <a href="" class="product-image__body">
                                                        <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="order-list__column-product">
                                                <a href="">قطعة adf</a>
                                                <div class="order-list__options">
                                                    <ul class="order-list__options-list">
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">الحالة:</span>
                                                            <span class="order-list__options-value">مستعملة</span>
                                                        </li>
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">الصنع:</span>
                                                            <span class="order-list__options-value">وكالة</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="order-list__column-quantity" data-title="Qty:">2</td>
                                            <td class="order-list__column-total">334 ريال</td>
                                        </tr>

                                    </tbody>
                                    <tbody class="order-list__subtotals">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">المجموع الفرعي</th>
                                            <td class="order-list__column-total">3392 ريال</td>
                                        </tr>
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">الشحن</th>
                                            <td class="order-list__column-total">300 ريال</td>
                                        </tr>
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">ضريبة القيمة المضافة</th>
                                            <td class="order-list__column-total">44 ريال</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="order-list__footer">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">المجموع الكلي</th>
                                            <td class="order-list__column-total">7400 ريال</td>
                                        </tr>
                                    </tfoot>
                                </table>
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