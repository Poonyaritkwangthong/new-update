<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>programdelete</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>        
        <?php
            include 'connectdb.php';
            $prg_id = $_GET['prg_id'];
            $sql = "delete from product where dpr_id='$prg_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo 'ลบแล้ว';
            }else{
                echo 'ลบไม่ได้';
            }
            mysqli_close($conn);
        ?>
        <a href ="program_list.php">ไปหน้าเเสดงข้อมูล</a>
    </body>
</html>