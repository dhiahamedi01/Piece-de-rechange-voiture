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
                                <li class="breadcrumb-item active" aria-current="page">قائمة الأمنيات</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>قائمة الأمنيات</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <table class="wishlist">
                        <thead class="wishlist__head">
                            <tr class="wishlist__row">
                                <th class="wishlist__column wishlist__column--image">الصورة</th>
                                <th class="wishlist__column wishlist__column--product">المنتج</th>
                                <th class="wishlist__column wishlist__column--stock">التوفر</th>
                                <th class="wishlist__column wishlist__column--price">السعر</th>
                                <th class="wishlist__column wishlist__column--tocart"></th>
                                <th class="wishlist__column wishlist__column--remove"></th>
                            </tr>
                        </thead>
                        <tbody class="wishlist__body">
                            <tr class="wishlist__row">
                                <td class="wishlist__column wishlist__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="wishlist__column wishlist__column--product">
                                    <a href="" class="wishlist__product-name">قطعة abc</a>
                                </td>
                                <td class="wishlist__column wishlist__column--stock">
                                    <div class="badge badge-success">بالمخزون</div>
                                </td>
                                <td class="wishlist__column wishlist__column--price">343 ريال</td>
                                <td class="wishlist__column wishlist__column--tocart">
                                    <button type="button" class="btn btn-primary btn-sm">اضف إلى السلة</button>
                                </td>
                                <td class="wishlist__column wishlist__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="wishlist__row">
                                <td class="wishlist__column wishlist__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="wishlist__column wishlist__column--product">
                                    <a href="" class="wishlist__product-name">قطعة abc</a>
                                </td>
                                <td class="wishlist__column wishlist__column--stock">
                                    <div class="badge badge-success">بالمخزون</div>
                                </td>
                                <td class="wishlist__column wishlist__column--price">343 ريال</td>
                                <td class="wishlist__column wishlist__column--tocart">
                                    <button type="button" class="btn btn-primary btn-sm">اضف إلى السلة</button>
                                </td>
                                <td class="wishlist__column wishlist__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="wishlist__row">
                                <td class="wishlist__column wishlist__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="wishlist__column wishlist__column--product">
                                    <a href="" class="wishlist__product-name">قطعة abc</a>
                                </td>
                                <td class="wishlist__column wishlist__column--stock">
                                    <div class="badge badge-success">بالمخزون</div>
                                </td>
                                <td class="wishlist__column wishlist__column--price">343 ريال</td>
                                <td class="wishlist__column wishlist__column--tocart">
                                    <button type="button" class="btn btn-primary btn-sm">اضف إلى السلة</button>
                                </td>
                                <td class="wishlist__column wishlist__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="wishlist__row">
                                <td class="wishlist__column wishlist__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="wishlist__column wishlist__column--product">
                                    <a href="" class="wishlist__product-name">قطعة abc</a>
                                </td>
                                <td class="wishlist__column wishlist__column--stock">
                                    <div class="badge badge-success">بالمخزون</div>
                                </td>
                                <td class="wishlist__column wishlist__column--price">343 ريال</td>
                                <td class="wishlist__column wishlist__column--tocart">
                                    <button type="button" class="btn btn-primary btn-sm">اضف إلى السلة</button>
                                </td>
                                <td class="wishlist__column wishlist__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                        <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <?php require"footer.php";  ?>
    </body>
    
    </html>
    