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
          <a href="User.php" class="active">
            <i class="DHIA bx bx-user"></i>
            <span class="links_name1">المستخدمين</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">الاعدادات</span>
          </a>
        </li>
        <li>
          <a href="Produit.php" >
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
      </nav><br><br><br><br>
        <h1> جميع المستخدمين</h1><br>
        <div class="groupe3">
                <div class="partie">
                  <button class="searchBtn"><span><i class='bx bx-search'></i> بحث</span></button> 
                </diV>
                <div class="partie">
                  <label for=""> نوع المستخدم</label><br>
                  <div class="select-groupe1">
                    <select name="Fabrication" >
                      <option name="Fabrication" value="" >اختر أحد الخيارات</option>
                      <option name="Fabrication" value="بائع"> بائع </option>
                      <option name="Fabrication" value="مشتري">مشتري </option>
                    </select>
                  </div>
                </div>
                <div class="partie">
                  <label for=""> تفعيل المستخدم</label><br>
                  <div class="select-groupe1">
                    <select name="Fabrication" >
                      <option name="Fabrication" value="" >اختر أحد الخيارات</option>
                      <option name="Fabrication" value="بائع"> مفعل </option>
                      <option name="Fabrication" value="مشتري"> غير مفعل </option>
                    </select>
                  </div>
                </div>
                <div class="partie">
                              <label for="">   إيميل المستخدم</label><br>
                              <input type="text" placeholder="...  إيميل المنتج" name="Nombre" required>
                </div>

         
              </div>


      <?php
	    require 'PHP/master.php';
      $sql = "SELECT * FROM `utilisateur`;";
      $resultat = $conn->query($sql);
      if ($resultat->num_rows > 0) {
      ?>

        <table >
		  <tr class="title">
            <TD><h4></h4></TD>
            <TD><h4></h4></TD>
            <TD><h4>التفعيل</h4></TD>
            <TD><h4> نوع المستخدم  </h4></TD>
            <TD><h4> كلمة المرور</h4></TD>
            <TD><h4> الإيميل</h4></TD>
            <TD><h4> المتسلسل </h4></TD>
            <TD><h4></h4></TD>
         
		  </tr>
      <?php
			while($row = $resultat->fetch_assoc()) {	
		   ?>
		  <tr >
            <td class="table-active"><?php echo" <a class='btn2' href='PHP/SuppProduit.php?id=".$row['id']." '><span>حذف</span></a> "?></td>
            <td class="table-active"><a class="btn1"><span>تفعيل الحساب</span></a></td>
            <td class="table-active"><?php 
            if($row["activation"]==0)
            {echo"غير مفعل"; }
            else {echo" مفعل"; }
            ?></td>
            <td class="table-active"><?php echo($row["type"]); ?></td>
            <td class="table-active"><?php echo($row["password"]); ?></td>
            <td class="table-active"><?php echo($row["email"]); ?></td>
            <td class="table-active"><?php echo($row["id"]); ?></td>
            <TD><h4><img src="images/profile.jpg"></h4></TD>
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
