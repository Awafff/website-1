<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html"); // قم بتوجيه المستخدم إلى صفحة تسجيل الدخول إذا لم يكن مسجل الدخول
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
</head>
<body>

    <h2>مرحبًا <?php echo $_SESSION["username"]; ?> في لوحة التحكم</h2>
    <p>هذه هي الصفحة المحمية.</p>

    <!-- ... المحتوى الإضافي للوحة التحكم ... -->

    <a href="logout.php">تسجيل الخروج</a>

</body>
</html>
<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.html"); // قم بتوجيه المستخدم إلى صفحة تسجيل الدخول إذا لم يكن مسجل الدخول
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>مرحبا بك في موقع ريو وفهد</title>
</head>
<body>

    <h2>مرحبًا <?php echo $_SESSION["username"]; ?> في موقع ريو وفهد</h2>

    <p>هذه هي الصفحة المحمية.</p>

    <!-- ... المحتوى الإضافي للوحة التحكم ... -->

    <a href="logout.php">تسجيل الخروج</a>

</body>
    </html>
