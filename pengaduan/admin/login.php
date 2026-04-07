<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($data) > 0) {
        $_SESSION['login'] = true;
        $_SESSION['role'] = 'admin';
        header("location:dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            width: 350px;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .login-box h3 {
            font-weight: bold;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-login {
            background: linear-gradient(90deg, #00c6ff, #0072ff);
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 10px;
        }

        .btn-login:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }

        .back-btn {
            border-radius: 10px;
        }

        .icon {
            font-size: 40px;
        }
    </style>
</head>
<body>

<div class="login-box text-center">

    <div class="icon mb-2">🔐</div>
    <h3 class="mb-3">Login Admin</h3>

    <?php if (isset($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form method="POST">
        <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

        <button name="login" class="btn btn-login w-100">Masuk</button>
    </form>

    <div class="mt-3">
        <a href="../index.php" class="btn btn-light back-btn w-100">← Kembali ke Home</a>
    </div>

</div>

</body>
</html>