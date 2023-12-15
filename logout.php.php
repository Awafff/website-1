<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html"); // توجيه المستخدم إلى صفحة تسجيل الدخول بعد تسجيل الخروج
exit();
?>