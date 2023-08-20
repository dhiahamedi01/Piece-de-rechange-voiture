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
                                <li class="breadcrumb-item active" aria-current="page">السلة</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>السلة</h1>
                    </div>
                </div>
            </div>
            <div class="cart block">
                <div class="container">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column cart-table__column--image">الصورة</th>
                                <th class="cart-table__column cart-table__column--product">المنتج</th>
                                <th class="cart-table__column cart-table__column--price">السعر</th>
                                <th class="cart-table__column cart-table__column--quantity">الكمية</th>
                                <th class="cart-table__column cart-table__column--total">المجموع</th>
                                <th class="cart-table__column cart-table__column--remove"></th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">

                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="" class="cart-table__product-name">قطعة acd</a>
                                    <ul class="cart-table__options">
                                        <li>جديدة: الحالة</li>
                                        <li>الصنع: وكالة</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price"  data-title="السعر">5434 ريال</td>
                                <td class="cart-table__column cart-table__column--quantity"  data-title="الكمية">
                                    <div class="input-number">
                                        <input class="form-control input-number__input" type="number" min="1" value="2">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total"  data-title="المجموع">534 ريال</td>
                                <td class="cart-table__column cart-table__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="" class="cart-table__product-name">قطعة acd</a>
                                    <ul class="cart-table__options">
                                        <li>جديدة: الحالة</li>
                                        <li>الصنع: وكالة</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price"  data-title="السعر">5434 ريال</td>
                                <td class="cart-table__column cart-table__column--quantity"  data-title="الكمية">
                                    <div class="input-number">
                                        <input class="form-control input-number__input" type="number" min="1" value="2">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total"  data-title="المجموع">534 ريال</td>
                                <td class="cart-table__column cart-table__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart__actions">
                        <form class="cart__coupon-form">
                            <label for="input-coupon-code" class="sr-only">رمز الكوبون</label>
                            <input type="text" class="form-control" id="input-coupon-code" placeholder="رمز الكوبون">
                            <button type="submit" class="btn btn-primary">تأكيد</button>
                        </form>
                        <div class="cart__buttons">
                                                    <form class="cart__coupon-form">
                            <label for="input-coupon-code" class="sr-only">حدد عنوان الشحن</label>
                                    <select id="checkout-country" class="form-control form-control-select2">
                                        <option>حدد عنوان الشحن</option>
                                        <option>العنوان الاول: المدينة</option>
                                        <option>العنوان الثاني: العراق</option>
                                    </select>                                   
                            <button type="submit" class="btn btn-primary">تحديث السلة</button>
                        </form>


                        </div>
                    </div>
                    <div class="row justify-content-end pt-5">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">المجموع</h3>
                                    <table class="cart__totals">
                                        <thead class="cart__totals-header">
                                            <tr>
                                                <th>المجموع الفرعي</th>
                                                <td>232 ريال</td>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__totals-body">
                                            <tr>
                                                <th>الشحن</th>
                                                <td>
                                                    34 ريال
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ضريبة القيمة المضافة</th>
                                                <td>
                                                    44 ريال
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="cart__totals-footer">
                                            <tr>
                                                <th>المجموع الكلي</th>
                                                <td>4300 ريال</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="checkout.php">اكمال عملية الدفع</a>
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