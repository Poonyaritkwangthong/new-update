<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>adminadd</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>adminadd</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $firstname = $_GET['f_name'];
                        $lastname = $_GET['l_name'];
                        $username = $_GET['user_name'];
                        $password = $_GET['password'];
                        $phonenumber = $_GET['phone_number'];
                        $sql = "insert into users (f_name,l_name,user_name,password,phone_number) values ('$firstname',' $lastname',' $username',' $password',' $phonenumber')";
                        include 'connectdb.php';
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ $username เรียบร้อยแล้ว<br>";
                        echo '<a href="admin_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="user_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="f_name" class="col-md-2 col-lg-2 control-label">กรุณากรอกชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="f_name" id="f_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="l_name" class="col-md-2 col-lg-2 control-label">กรุณากรอกนามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="l_name" id="l_namee" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="user_name" class="col-md-2 col-lg-2 control-label">กรุณากรอกusername</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="user_name" id="user_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-2 col-lg-2 control-label">กรุณากรอกpassword</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="password" id="password" class="form-control">
                            </div>    
                        <div class="form-group">
                            <label for="phone_number" class="col-md-2 col-lg-2 control-label">กรุณากรอกเบอร์โทรศัพท์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="phone_number" id="phone_number" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div>
                    </form>
                <?php
                    }
                ?>
                </div>    
            </div>
        </div>    
    </body>
</html>