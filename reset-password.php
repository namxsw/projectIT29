
<?php

include("./config/db.php");

if (isset($_POST['submit-resetpsw'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];

    if (empty($password) || empty($cfpassword)) {

        echo "Empty Fields";
    } else {
        if ($password == $cfpassword) {
            $hashed = md5($password);
            $query = "UPDATE user SET User_Password = '$hashed' WHERE User_Email = '$email' ";
            $res = mysqli_query($conn, $query);

            $query_dlt = "DELETE FROM forgot_password WHERE email = '$email' ";
            $res_dlt = mysqli_query($conn, $query_dlt);

            include "./script/alert.php";
            echo "<script>resetsuccess(); </script> ";

        } else {
            echo "Passwords do not match";
        }
    }
}
?>