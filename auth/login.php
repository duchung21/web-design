<?php
global $conn;
include_once "../demo/config.php"

?>

<?php
//    if(isset($_SESSION['username'])){
//        header("location: ".APPURL ." ");
//    }
    if(isset($_POST['submit'])){
        if(empty($_POST['email']) or empty($_POST['password'])){
            echo "<script>alert('one or more inputs are empty');</script>";
        } else {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $login = $conn->query("SELECT * FROM users WHERE email = '$email'");
            $login->execute();

            if ($login->rowCount() > 0) {
                $user = $login->fetch();
                if ($password === $user['password']) {
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['id'] = $user['id'];
                    header("location: http://localhost/Web-disign-lab1/curd");
                } else {
                    echo "<script>alert('email or password are wrong');</script>";
                }
            } else {
                echo "<script>alert('email  are wrong');</script>";

            }
        }}

    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-control mt-5" method="post" action="login.php">
                    <h4 class="text-center mt-3"> Login </h4>
                    <div class="">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="">
                            <input name="email" type="email"  class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="">
                            <input name="password" type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">login</button>
                    <a href="register.php">Create an account</a>
                </form>
            </div>
        </div>

