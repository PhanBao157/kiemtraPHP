<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="login_process.php" method="POST">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>