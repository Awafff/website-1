<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // افتراضياً، يمكنك استخدام SQLite لتخزين معلومات المستخدمين.
    // يفضل استخدام قاعدة بيانات أكثر أماناً في الإنتاج.
    $username = $_POST["username"];
    $password = $_POST["password"];

    // التحقق من المعلومات. هنا يتم فقط تحقق البسيط.
    if ($username === "user" && $password === "pass") {
        // تم تسجيل الدخول بنجاح.
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // قم بتوجيه المستخدم إلى صفحة محمية بعد تسجيل الدخول.
        exit();
    } else {
        // فشل تسجيل الدخول.
        echo "فشل تسجيل الدخول. المستخدم أو كلمة المرور غير صحيحة.";
    }
}
<? 