<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT</title>

    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&display=swap" rel="stylesheet">  

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
  <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</head>

<body>
<style>
body {
    font-family: 'Athiti', sans-serif;
}
</style>
    <!-- login -->

    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">เข้าสู่ระบบ</h2>
            <form name="form1" method="post" action="login_check.php" enctype="multipart/form-data">
                <div class="space-y-2">
                    <div>
                        <label for="username" class="text-gray-600 mb-2 block">Username</label>
                        <input type="text" name="username"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="Username" required>
                    </div>
                    <div>
                        <label for="password" class="text-gray-600 mb-2 block">Password</label>
                        <input  type="password" name="password"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="***********" required>
                    </div>
                </div>
  
                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-rose-500  border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">เข้าสู่ระบบ</button>
                        <?php
                                    if(isset($_SESSION["Error"])){
                                        echo "<div class='font-bold text-red-700'> ";
                                        echo $_SESSION["Error"] ;
                                        echo "</div>";
                                    }
                                    ?>     

                </div>
            </form>

            <p class="mt-4 text-center text-gray-600">คุณไม่มีบัญชีใช่ไหม? <a href="register.php"
                    class="text-primary">ลงทะเบียน</a></p>
        </div>
    </div>
    <!-- ./login -->
</body>

</html>