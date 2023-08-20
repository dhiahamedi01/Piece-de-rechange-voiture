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
          <a href="Produit.php" class="active">
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
        <h1>جميع المنتجات</h1><br>
        <div class="groupe3">
                <div class="partie">
                  <button class="searchBtn"><span><i class='bx bx-search'></i> بحث</span></button> 
                </diV>
                <div class="partie">
                <label for="">فئة السيارة</label><br>
                <div class="select-groupe1">
                  <select id="select3" name="Categorie" >
                    <option name="Categorie"value="" disabled selected>اختر  فئة السيارة</option>
                    <option name="Categorie"value="اقتصادية">اقتصادية</option>
                    <option name="Categorie"value="فاخرة">فاخرة</option>
                    <option name="Categorie"value="رياضية">رياضية</option>
                    <option name="Categorie"value="عائلية">عائلية</option>
                    <option name="Categorie"value="هجينة">هجينة</option>
                    <option name="Categorie"value="كهربائية">كهربائية</option>
                  </select>
                </div>
              </div>
                <div class="partie">
                  <label for=""> نوع السيارة  </label><br>
                  <div class="select-groupe1">
                    <select name="Fabrication" >
                      <option name="Fabrication" value="" >اختر أحد الخيارات</option>
                      <option name="Fabrication" value="صيني"> صيني </option>
                      <option name="Fabrication" value="ياباني">ياباني </option>
                      <option name="Fabrication" value="كوري">كوري</option>
                    </select>
                  </div>
                </div>
                  <div class="partie">
                              <label for="">   إسم المنتج</label><br>
                              <input type="text" placeholder="...  إسم المنتج" name="Nombre" required>
                  </div>

         
              </div>


      <?php
	    require 'PHP/master.php';
      $sql = "SELECT * FROM `produits`;";
      $resultat = $conn->query($sql);
      if ($resultat->num_rows > 0) {
      ?>

        <table >
		  <tr class="title">
            <TD><h4></h4></TD>
            <TD><h4></h4></TD>
            <TD><h4>الحالة</h4></TD>
            <TD><h4> الموديل  </h4></TD>
            <TD><h4> الفئة</h4></TD>
            <TD><h4> النوع</h4></TD>
            <TD><h4> الماركة </h4></TD>
            <TD><h4>تاق</h4></TD>
            <TD><h4> الجودة  </h4></TD>
            <TD><h4> السعر</h4></TD>
            <TD><h4> اللون</h4></TD>
            <TD><h4> الصناعة </h4></TD>
            <TD><h4> العدد</h4></TD>
            <TD><h4> الوزن</h4></TD>
            <TD><h4> الإسم</h4></TD>
            <TD><h4> الصورة</h4></TD>
            <TD><h4> متسلسل</h4></TD>
		  </tr>
      <?php
			while($row = $resultat->fetch_assoc()) {	
		   ?>
		  <tr >
            <td class="table-active"><?php echo" <a class='btn2' href='PHP/SuppProduit.php?id=".$row['ID']." '><span>حذف</span></a> "?></td>
            <td class="table-active"><a class="btn1"><span>التعديل</span></a></td>
            <td class="table-active"><?php echo($row["condition"]); ?></td>
            <td class="table-active"><?php echo($row["Model"]); ?></td>
            <td class="table-active"><?php echo($row["Categorie"]); ?></td>
            <td class="table-active"><?php echo($row["Type"]); ?></td>
            <td class="table-active"><?php echo($row["Marque"]); ?></td>
            <td class="table-active"><?php echo($row["Tag"]); ?></td>
            <td class="table-active"><?php echo($row["Qualite"]); ?></td>
            <td class="table-active"><?php echo($row["Prix"]); ?></td>
            <td class="table-active"><?php echo($row["Couleur"]); ?></td>
            <td class="table-active"><?php echo($row["Fabrication"]); ?></td>
            <td class="table-active"><?php echo($row["Nombre"]); ?></td>
            <td class="table-active"><?php echo($row["Poid"]); ?></td>
            <td class="table-active"><?php echo($row["Nom"]); ?></td>
            <td class="table-active"><?php echo '<img   src="data:image;base64,' . $row['picture'] . '"> '; ?></td>
            <td class="table-active"><?php echo($row["ID"]); ?></td>
		  </tr>	
      <?php
			}
		}
		?>		
		</table><br>
            
           
          



        <br>
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
