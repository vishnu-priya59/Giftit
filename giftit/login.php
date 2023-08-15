<?php
// login.php
include 'connect.php';
session_start();
$message = array();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_gift');
    $query = "SELECT * FROM users";
    $selectuser = mysqli_query($conn, $query);
    if (mysqli_num_rows($selectuser) > 0) {
        // $row = mysqli_fetch_rows($selectuser);
        $row = $selectuser->fetch_assoc();
        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];
            header('location: signin.php');
        } else if ($row['user_type'] == '') {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location: index.php');
        } else {
            $message[] = 'Incorrect email or password';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
            margin-left: 45px;
        }

        input[type=email] {
            margin: 10px;
            width: 50vw;
            height: 20px;
            margin-left: 55px;
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
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form">
                <h3>Login Now</h3>
                Email:<input type="email" name="email" placeholder="Enter your email" required><br>
                Password:<input type="password" name="password" placeholder="Enter Password" required><br>
                <input type="submit" name="submit" class="btn" value="Login Now">
                <p>Not a member.. <a href="signup.php">Register Now</a></p>
            </form>
        </div>
    </section>
</body>

</html>