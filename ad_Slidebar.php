<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/ad_Slidebar.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
  <!-- icon -->
  <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <div class="sidebar">
      <div class="logo-details">
        <!-- <i class='bx bxl-c-plus-plus icon'></i> -->
        <img src="./img/bayasitaW.png" alt="" width="50px" height="50px">
        <div class="logo_name " id="btn"><b>สมัครพาร์ทไทม์</b></div>
        <!-- <i class='bx bx-menu' id="btn" ></i> -->
      </div>
      <ul class="nav-list">
        <!-- <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li> -->
        <li>
          <a href="./adminpage.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">แก้ไขหน้าประกาศข่าวสาร</span>
          </a>
          <span class="tooltip">แก้ไขหน้าประกาศข่าวสาร</span>
        </li>
        <li>
          <a href="./checkapplicant.php">
            <i class='bx bx-folder'></i>
            <span class="links_name">ตรวจสอบข้อมูล</span>
          </a>
          <span class="tooltip">ตรวจสอบข้อมูล</span>
        </li>
        <li>
          <a href="./ad_interview.php">
            <i class="fa-regular fa-calendar"></i>
            <span class="links_name">วันสัมภาษณ์</span>
          </a>
          <span class="tooltip">วันสัมภาษณ์</span>
        </li>
        <li>
          <a href="ad_emylist.php">
            <i class="fa-regular fa-address-book"></i>
            <span class="links_name">รายชื่อพนักงาน</span>
          </a>
          <span class="tooltip">รายชื่อพนักงาน</span>
        </li>
        <li>
          <a href="./ad_quiz.php  ">
            <i class="fa-regular fa-file-lines"></i>
            <span class="links_name">แบบทดสอบ</span>
          </a>
          <span class="tooltip">แบบทดสอบ</span>
        </li>
        <li>
          <a href="./ad_admin.php">
            <i class="fa-regular fa-user"></i>
            <span class="links_name">แอดมิน</span>
          </a>
          <span class="tooltip">แอดมิน</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-chat'></i>
            <span class="links_name">แชท</span>
          </a>
          <span class="tooltip">แชท</span>
        </li>
        <li class="profile">
          <div class="profile-details">

            <!--<img src="profile.jpg" alt="profileImg">-->
            <div class="name_job">
              <div class="name"></div>
              <div class="profile_name"><?php echo $_SESSION['name']; ?></div>
            </div>
          </div>
          <a href="./logout.php">
            <i class='bx bx-log-out' id="log_out"></i></a>
        </li>
      </ul>
  </nav>
  </div>


  </table>
  </div>
  <?php
  //check session 
  if (isset($_SESSION['username'])) {
  } else {
    echo "<script>alert('คุณยังไม่ได้เข้าสู่ระบบ กลับไปยังหน้าเข้าสู่ระบบก่อน')</script>";
    echo "<script>window.open('signin.php','_self')</script>";
  }

  ?>
  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    //   sidebar.classList.toggle("open");
    //   menuBtnChange(); //calling the function(optional)
    // });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>
  <!-- <script src="./JS/ad_sildebar.js"></script> -->
</body>

</html>