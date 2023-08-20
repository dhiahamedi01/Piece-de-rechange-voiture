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


        <form action="PHP/InsertProduit.php" method="post" enctype="multipart/form-data">
        <h1>إضافة منتج جديد</h1><br>
        <div class="groupe">
          
        </div>
         
            <div class="groupe">
              <div class="partie">
                <label for="">وزن المنتج</label><br>
                <input type="Number" placeholder="...وزن المنتج" name="Poid" required>
              </div>
              <div class="partie">
                <label for="">إسم المنتج</label><br>
                <input type="text" placeholder="...إسم المنتج" name="Nom" required>
              </div>
              <div class="partie">
              <div class="groupe1">
              <div class="file">
                <label for="file" id="fileLabel">
                  <i class="fas fa-plus-circle"></i>&ensp;تحميل صورة المنتج
                </label>
                <input type="file" class="file-input" id="file" accept="image/*" name="my_picture"  onchange="updateFileName(event)" required>
              </div>
              </div>
              </div>
            </div><br>
            
            <div class="groupe">
                <div class="partie">
                  <label for=""> لون المنتج</label><br>
                  <div class="select-groupe1">
                    <select  name="Couleur" >
                      <option name="Couleur"  value="" >اختر أحد الخيارات</option>
                      <option name="Couleur"  value="أحمر">🟥 أحمر </option>
                      <option name="Couleur"  value="أخضر">🟩 أخضر</option>
                      <option name="Couleur"  value="أصفر">🟨 أصفر</option>
                      <option name="Couleur"  value="أزرق">🟦 أزرق</option>
                      <option name="Couleur"  value="أسود">⬛ أسود</option>
                      <option name="Couleur"  value="أبيض">⬜ أبيض</option>
                    </select>
                  </div>
                </div>
                <div class="partie">
                  <label for=""> الصناعة  </label><br>
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
                              <label for=""> عدد المنتجات</label><br>
                              <input type="Number" placeholder="...عدد المنتجات" name="Nombre" required>
                  </div>
              </div><br>
               
            <div class="groupe">
                <div class="partie">
                  <label for=""> تاق  المنتج</label><br>
                  <div class="select-groupe1">
                    <select  name="Tag" >
                    <option value="" >اختر أحد الخيارات</option>
                      <option name="Tag" value="جديد">جديد </option>
                      <option name="Tag" value="خصم">خصم </option>
                      <option name="Tag" value="شائع">شائع</option>
                    </select>
                  </div>
                </div>
                <div class="partie">
                  <label for=""> الجودة   </label><br>
                  <div class="select-groupe1">
                    <select name="Qualite" >
                      <option name="Qualite" value="" >اختر أحد الخيارات</option>
                      <option name="Qualite" value="تجاري"> تجاري  </option>
                      <option name="Qualite" value="وكالة">وكالة  </option>
                      <option name="Qualite" value="اصلي">اصلي</option>
                    </select>
                  </div>
                </div>
                  <div class="partie">
                              <label for=""> سعر المنتج</label><br>
                              <input type="Number" placeholder="...سعر المنتج" name="Prix" required>
                  </div>
                  
              </div><br>
            <style>
  .transparent {
    opacity: 0.5;
  }
</style>

<div class="groupe">
<div class="partie">
    <label for="">موديل السيارة</label><br>
    <div class="select-groupe">
      <select id="select4" name="model" disabled class="transparent">
        <option name="model" value="" disabled selected>اختر  موديل السيارة</option>
        <option name="model" value="2021">2010</option>
        <option name="model" value="2022">2011</option>
        <option name="model" value="2023">2012</option>
        <option name="model" value="2024">2013</option>
        <option name="model" value="2025">2014</option>
        <option name="model" value="2021">2015</option>
        <option name="model" value="2022">2016</option>
        <option name="model" value="2023">2017</option>
        <option name="model" value="2024">2018</option>
        <option name="model" value="2025">2019</option>
        <option name="model" value="2025">2020</option>
        <option name="model" value="2025">2021</option>
        <option name="model" value="2025">2022</option>
      </select>
    </div>
  </div>
  <div class="partie">
    <label for="">فئة السيارة</label><br>
    <div class="select-groupe">
      <select id="select3" name="Categorie" disabled class="transparent">
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
    <label for="">  نوع السيارة</label><br>
    <div class="select-groupe">
      <select id="select2" name="Type" disabled class="transparent">
        <option name="Type"value="" disabled selected>اختر  نوع السيارة</option>
        <option name="Type"value="صالون">صالون</option>
        <option name="Type"value="هاتشباك">هاتشباك</option>
        <option name="Type"value="سيارة رياضية">سيارة رياضية</option>
        <option name="Type"value="دفع رباعي">دفع رباعي</option>
        <option name="Type"value="شاحنة">شاحنة</option>
        <option name="Type"value="كروس أوفر">كروس أوفر</option>
        <option name="Type"value="كوبيه">كوبيه</option>
        <option name="Type"value="فان">فان</option>
        <option name="Type"value="ميني فان">ميني فان</option>
        <option name="Type"value="كابريو">كابريو</option>
      </select>
    </div>
  </div>
  <div class="partie">
    <label for="">ماركة السيارة</label><br>
    <div class="select-groupe">
      <select id="select1" name="Marque">
        <option name="Marque" value="" disabled selected>إختر الماركة</option>
        <option name="Marque" value="تويوتا">تويوتا</option>
        <option name="Marque" value="لكزس">لكزس</option>
        <option name="Marque" value="مرسيدس">مرسيدس</option>
        <option name="Marque" value="نيسان">نيسان</option>
        <option name="Marque" value="مازدا">مازدا</option>
        <option name="Marque" value="كيا">كيا</option>
        <option name="Marque" value="تسلا">تسلا</option>
      </select>
    </div>
  </div>
</div>
<div class="groupe">
  <div class="partie2">
  <label for="">وصف المنتج </label><br>
  <textarea id="monTextarea" name="description" rows="6" cols="50"></textarea>
  </div>
</div><br>
<div class="groupe2">
<label class="titre">حالة المنتج </label><br><br>
<div class="gender-option">
    <div class="gender">
        <input type="radio" id="check-male" name="condition" value="جديد" checked />
        <label for="check-male" >جديد </label>
    </div>
    <div class="gender">
        <input type="radio" id="check-female" name="condition" value="مستخدم" />
        <label for="check-female">مستخدم</label>
    </div>
</div>
</div><br>
<div class="groupe">
<button type="submit">تسجيل المنتج</button>
</div><br>
<script>
  const select1 = document.getElementById('select1');
  const select2 = document.getElementById('select2');
  const select3 = document.getElementById('select3');
  const select4 = document.getElementById('select4');

  select1.addEventListener('change', () => {
    select2.disabled = !select1.value;
    select2.classList.toggle('transparent', !select1.value);
    select2.selectedIndex = 0;
    select3.disabled = true;
    select3.classList.add('transparent');
    select3.selectedIndex = 0;
    select4.disabled = true;
    select4.classList.add('transparent');
    select4.selectedIndex = 0;
  });

  select2.addEventListener('change', () => {
    select3.disabled = !select2.value;
    select3.classList.toggle('transparent', !select2.value);
    select3.selectedIndex = 0;
    select4.disabled = true;
    select4.classList.add('transparent');
    select4.selectedIndex = 0;
  });

  select3.addEventListener('change', () => {
    select4.disabled = !select3.value;
    select4.classList.toggle('transparent', !select3.value);
    select4.selectedIndex = 0;
  });
</script>

        </form>
        <br>
    </section>
    <script>
        function updateFileName(event) {
        const fileInput = event.target;
        const fileLabel = document.getElementById('fileLabel');

        if (fileInput.files.length > 0) {
          const fileName = fileInput.files[0].name;
          fileLabel.textContent = "\xa0" + fileName; 
        } else {
          fileLabel.textContent = "\xa0تحميل صورة المنتج"; 
        }
      }



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
