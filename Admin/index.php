<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="Style/style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">لوحة  التحكم</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="active">
            <i class="DHIA bx bx-grid-alt"></i>
            <span class="links_name1">الرئيسية</span>
          </a>
        </li>
        <li>
            <a href="User.php">
            <i class="bx bx-user"></i>
            <span class="links_name">المستخدمين</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">الاعدادات</span>
          </a>
        </li>
        <li>
          <a href="Produit.php">
            <i class="bx bx-package"></i>
            <span class="links_name">المنتجات</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">الإحصائيات</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-money"></i>
            <span class="links_name">الاموال</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="#">
            <i class="bx bx-log-out"></i>
            <span class="links_name">تسجيل الخروج</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">
            لوحة التحكم</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <img src="images/profile.jpg" alt="" />
          <span class="admin_name"><?php echo('your name');?></span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">إجمالي الطلب</div>
              <div class="number">40,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">ارتفاعًا من أمس</span>
              </div>
            </div>
            <i class="bx bx-cart-alt cart"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">إجمالي المبيعات</div>
              <div class="number">38,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">ارتفاعًا من أمس</span>
              </div>
            </div>
            <i class="bx bxs-cart-add cart two"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">اجمالي الربح</div>
              <div class="number">$12,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">ارتفاعًا من أمس</span>
              </div>
            </div>
            <i class="bx bx-cart cart three"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">إجمالي العائد</div>
              <div class="number">11,086</div>
              <div class="indicator">
                <i class="bx bx-down-arrow-alt down"></i>
                <span class="text">نزولاً من اليوم</span>
              </div>
            </div>
            <i class="bx bxs-cart-download cart four"></i>
          </div>
        </div>

        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">المبيعات الأخيرة</div>
            <div class="sales-details">
            
              <ul class="details">
                <li class="topic">العملاء</li>
                <li><a href="#">Alex Doe</a></li>
                <li><a href="#">David Mart</a></li>
                <li><a href="#">Roe Parter</a></li>
                <li><a href="#">Diana Penty</a></li>
                <li><a href="#">Martin Paw</a></li>
                <li><a href="#">Doe Alex</a></li>
                <li><a href="#">Aiana Lexa</a></li>
       
              </ul>
              <ul class="details">
                <li class="topic">المبيعات </li>
                <li><a href="#">تم التوصيل</a></li>
                <li><a href="#">قيد الانتظار</a></li>
                <li><a href="#">عادت</a></li>
                <li><a href="#">تم التوصيل</a></li>
                <li><a href="#">قيد الانتظار</a></li>
                <li><a href="#">عادت</a></li>
                <li><a href="#">تم التوصيل</a></li>
            
              </ul>
              <ul class="details">
                <li class="topic">المجموع</li>
                <li><a href="#">$204.98</a></li>
                <li><a href="#">$24.55</a></li>
                <li><a href="#">$25.88</a></li>
                <li><a href="#">$170.66</a></li>
                <li><a href="#">$56.56</a></li>
                <li><a href="#">$44.95</a></li>
                <li><a href="#">$67.33</a></li>
              
              </ul>
              <ul class="details">
                <li class="topic">تاريخ</li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
              </ul>
            </div>
            <div class="button">
              <a href="#">See All</a>
            </div>
          </div>
          <div class="top-sales box">
            <div class="title">المنتج الأكثر مبيعًا</div>
            <ul class="top-sales-details">
            <li>
              <a href="#">
                <img src="images/filtre.JPG" alt="">
                <span class="product">فلتر هواء</span>
              </a>
              <span class="price">120 ريال</span>
            </li>
            <li>
              <a href="#">
                <img src="images/batrie.jpg" alt="">
                <span class="product">بطارية سيارة</span>
              </a>
              <span class="price">350 ريال</span>
            </li>
            <li>
              <a href="#">
                <img src="images/ajla.webp" alt="">
                <span class="product">عجلة سيارة</span>
              </a>
              <span class="price">280 ريال</span>
            </li>
            <li>
              <a href="#">
                <img src="images/ajla.webp" alt="">
                <span class="product">عجلة سيارة</span>
              </a>
              <span class="price">280 ريال</span>
            </li>
            <li>
              <a href="#">
                <img src="images/avant.jpg" alt="">
                <span class="product">مساعدات أمامية</span>
              </a>
              <span class="price">220 ريال</span>
            </li>
            <li>
              <a href="#">
                <img src="images/avant.jpg" alt="">
                <span class="product">مساعدات أمامية</span>
              </a>
              <span class="price">220 ريال</span>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
