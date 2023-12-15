<?php
// توصيل بقاعدة البيانات
try {
    $db = new PDO('sqlite:users.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
    die();
}
?>
<?php
// توصيل بقاعدة البيانات
$host = "github.com";
$dbname = "mongodb+srv://publicgeneral:publicgeneral@public.a85ijsx.mongodb.net/";
$username = "fhad&RIO";
$password = "FHAD&RIO VIP";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
    die();
}
?>
