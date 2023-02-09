
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>adminedit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p></p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>adminedit</h4>    
                <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $firstname    = $_GET['f_name'];
                        $lastname = $_GET['l_name'];
                        $username = $_GET['user_name'];
                        $password = $_GET['password'];
                        $phonenumber = $_GET['phone_number'];
                        $pr_id = $_GET['phone_number'];
                        $sql        = "update users set f_name='$firstname',l_name=' $lastname',user_name=' $username',password=' $password' where phone_number=' $phonenumber'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ  $firstname  เรียบร้อยแล้ว<br>";
                        echo '<a href="draw_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                        $fpr_id = $_REQUEST['pr_id'];
                        $sql =  "SELECT * FROM users where pr_id='$fpr_id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $ffirstname = $row['f_name'];
                        $flastname = $row['l_name'];
                        $fusername = $row['user_name'];
                        $fpassword = $row['password'];
                        $fphonenumber = $row['phone_number'];
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    <form class="form-horizontal" role="form" name="admin_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <input type="hidden" name="pr_id" id="pr_id" value="<?php echo "$fpr_id";?>">
                        <div class="form-group">
                            <label for="f_name" class="col-md-2 col-lg-2 control-label">เเก้ไขชื่อรูป</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="f_name" id="f_name" class="form-control" value="<?php echo "$ffirstname";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="l_name" class="col-md-2 col-lg-2 control-label">เเก้ไรประเภท</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="l_name" id="l_name" class="form-control" value="<?php echo "$flastname";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="user_name" class="col-md-2 col-lg-2 control-label">เเก้ไขรูป</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo "$fusername";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-2 col-lg-2 control-label">เเก้ไขรายละเอียด</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="password" id="password" class="form-control" value="<?php echo "$fpassword";?>">
                            </div>    
                        <div class="form-group">
                            <label for="phone_number" class="col-md-2 col-lg-2 control-label">เเก้ไขรายละเอียด</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?php echo "$fphonenumber";?>">
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
            <div class="row">
                <a href ="admin_list.php">ไปหน้าเเสดงข้อมูล</a>
            </div>
        </div>    
    </body>
</html>