<?php
include 'connect.php';
$message = array();
if (isset($_POST['submit-btn'])) {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email'") or die('query failed');
    if (mysqli_num_rows($select_user) > 0) {
        $message[] = 'User already exists.';
    } else {
        if ($password !== $cpassword) {
            $message[] = 'Passwords do not match.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')") or die('query failed');
            $message[] = 'Registered successfully.';
            header('Location: login.php');
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Account</title>
    <style>
        input[type=text] {
            margin: 10px;
            width: 50vw;
            height: 20px;
            margin-left: 40px;
        }

        input[type=password] {
            margin: 10px;
            width: 50vw;
            height: 20px;
            margin-left: 47px;
        }

        input[type=email] {
            margin: 10px;
            width: 50vw;
            height: 20px;
            margin-left: 40px;
        }



        h1 {
            text-align: center;
        }

        html {
            background: url("images/avatar2.jpg");
            background-size: cover;

        }

        .cont {
            background: skyblue;
            height: auto;
            color: white;
            width: max-content;
            padding: 30px;
            margin: auto;
        }
    </style>
</head>

<body>
    <section class="form container">
        <?php
        if (isset($message)) {
            foreach ($message as $msg) {
                echo '
                            <div class="message">
                              <span>' . htmlspecialchars($msg) . '</span>
                              <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                            </div>
                        ';
            }
        }
        ?>
        <div class="cont">
            <form action="" method="post" name="form">
                <h3>Register Now</h3>
                UserName:<input type="text" name="name" placeholder="Enter your name" required><br>
                Email:<input type="email" name="email" placeholder="Enter your email" required><br>
                Password:<input type="password" name="password" placeholder="Enter Password" required><br>
                Confirm Password:<input type="password" name="cpassword" placeholder="Re-enter password" required><br>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="btn" name="submit-btn">Sign Up</button>
                </div>

                <p>Already have an account? <a href="login.php">Login Now</a></p>
            </form>
        </div>
    </section>
</body>

</html>