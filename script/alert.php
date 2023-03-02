  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>.


      <!-- js datatable -->
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

      <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

      <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

      <!-- css dadatable -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">

      <!-- sweetalert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <style>
          @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap');
      </style>
      <style>
          .swal2-popup {
              font-family: 'Mitr', sans-serif !important;
          }
      </style>
  </head>


  <script type="text/javascript">
      function logoutsuccess() {
          Swal.fire({
              title: 'ออกจากระบบสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./index.php"
          });
      }

      function checksuccess() {
          Swal.fire({
              title: 'ตรวจสอบข้อมูลสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./checkapplicant.php"
          });
      }

      function adminsuccess() {
          Swal.fire({
              title: 'เพิ่มผู้ดูแลสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./ad_admin.php"
          });
      }

      function resetsuccess() {
          Swal.fire({
              title: 'รีเซตรหัสสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./signin.php"
          });
      }

      function regissuccess() {
          Swal.fire({
              title: 'สมัครสมาชิกสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./signin.php"
          });
      }


      // error

      function loginerror() {
          Swal.fire({
              title: 'กรุณาตรวจสอบอีกครั้ง',
              text: 'บัญชีผู้ใช้งาน หรือ รหัสผ่านของคุณไม่ถูกต้อง  ',
              icon: 'error',
              showConfirmButton: false,
              timer: 2500
          })
      }

      function adminerror() {
          Swal.fire({
              title: 'เพิ่มไม่สำเร็จ',
              text: 'เกิดข้อผิดพลาดกรุณาลองอีกครั้ง',
              icon: 'error',
              showConfirmButton: false,
              timer: 2500
          })
      }

      function regiserror() {
          Swal.fire({
              title: 'สมัครสมาชิกไม่สำเร็จ',
              text: 'เกิดข้อผิดพลาดกรุณาลองอีกครั้ง',
              icon: 'error',
              showConfirmButton: false,
              timer: 2500
          })
      }

      // warning
      function regiswarn() {
          Swal.fire({
              title: 'กรอกข้อมูลไม่ครบ',
              text: 'กรุณากรอกข้อมูลอีกครั้ง',
              icon: 'warning',
              showConfirmButton: false,
              timer: 2500
          })
      }


      //ยืนยัน
      function regiscom() {
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
              )
          }
      })
    }

      // ตาราง
      $(document).ready(function() {
          $("#myTable").DataTable({
              paging: true,
              scrollCollapse: true,
              "language": {
                  "search": "ค้นหา :",
                  "zeroRecords": "ไม่พบข้อมูลที่ค้นหา",
                  "info": "แสดงผลลัพธ์ _PAGE_ จาก _PAGES_ หน้า",
                  "infoEmpty": "ไม่พบตารางที่ค้นหา",
                  "infoFiltered": "(ค้นหาจากทั้งหมด _MAX_ ตาราง)",
                  "lengthMenu": "แสดง  _MENU_  ตารางต่อหน้า",
                  "paginate": {
                      "previous": "ก่อนหน้า",
                      "next": "หน้าถัดไป",

                  }
              }
          });

      });
  </script>


  </html>