<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap selectpicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</head>

<body>
<?php
    include "./config/db.php";

    $userid = $_SESSION['User_id'];
    $sqlqry = "SELECT * FROM user WHERE (User_id = '$userid') ";
    $qry = mysqli_query($conn, $sqlqry);
    $row = mysqli_fetch_array($qry);

    $query_usType = "SELECT * FROM user ORDER BY User_id ";
    $result_usType = mysqli_query($conn, $query_usType);
    $query_province = "SELECT * FROM provinces";
    $result_province = mysqli_query($conn, $query_province);

    // require "../backend/add-applicant.php"
    ?>

</body>
<script>

    $('.selectpicker').selectpicker({
        noneResultsText: 'ไม่พบข้อมูล'
    });
    $(function() {
        // element selector
        var provinceObject = $('#province');
        var amphureObject = $('#amphure');
        var districtObject = $('#district');
        var zipObject = $('#zipcode');


        // on change province
        provinceObject.on('change', function() {
            var provinceId = $(this).val();

            amphureObject.empty();
            districtObject.empty();
            zipObject.val('');


            $.get('get_amphure.php?province_id=' + provinceId, function(data) {
                var result = JSON.parse(data);
                $.each(result, function(index, item) {
                    amphureObject.append(
                        $('<option></option>').val(item.id).html(item.amphure_name)
                    );
                });
                $('.selectpicker').selectpicker('refresh');
            });
        });

        // on change amphure
        amphureObject.on('change', function() {
            var amphureId = $(this).val();

            districtObject.empty();
            zipObject.val('');



            $.get('get_district.php?amphure_id=' + amphureId, function(data) {
                var result = JSON.parse(data);
                $.each(result, function(index, item) {
                    districtObject.append(
                        $('<option></option>').val(item.id).html(item.district_name)
                    );
                });
                $('.selectpicker').selectpicker('refresh');
            });
        });

        // on change district

        districtObject.on('change', function() {
            var districtId = $(this).val();

            zipObject.val('');

            $.get('get_zip.php?district_id=' + districtId, function(data) {
                var result = JSON.parse(data);
                $.each(result, function(index, item) {
                    zipObject.val(item.zip_code).html(item.zip_code)
                });
            });
        });
    });
</script>

</html>



