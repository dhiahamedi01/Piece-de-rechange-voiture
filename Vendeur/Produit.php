<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="Style/style.css" />
    <link rel="stylesheet" href="Style/produit.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
          <a href="index.php" >
            <i class=" bx bx-grid-alt"></i>
            <span class="links_name">الرئيسية</span>
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
          <a href="AddProduit.php" class="active">
            <i class="DHIA bx bx-package"></i>
            <span class="links_name1">المنتجات</span>
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
      </nav><br><br><br><br>
      <div class="globale">
      <a href="ListeProduit.php">
        <div class="card">
        <img src="images/produitListe.png" alt="Image 1">
        <h2>جميع منتجاتي</h2>
      </div>
    </a>
    <a href="AddProduit.php">
      <div class="card">
        <img src="images/Addproduit.png" alt="Image 2">
        <h2>إضافة منتج جديد</h2>
      </div>
     </a>
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
