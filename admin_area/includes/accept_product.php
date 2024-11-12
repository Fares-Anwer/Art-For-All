<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/Modern-E-Commerce-Store-master/core/init.php');
?>

<?php
// تحقق إذا كان هناك معرف المنتج في الرابط
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // إعداد استعلام SQL لتحديث القيمة status إلى 1
    $sql = "UPDATE products SET status = '1' WHERE product_id = :product_id";
    $stmt = $pdo->prepare($sql);

    // ربط قيمة product_id في الاستعلام
    $stmt->bindParam(":product_id", $product_id);

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        // حفظ رسالة نجاح في الجلسة
        $_SESSION['status_update_msg'] = "Product status has been updated to active (1) successfully!";

        // إعادة توجيه المستخدم إلى الصفحة الرئيسية مع عرض المنتجات
        header('Location: ../index.php?Unapprove_product');
    } else {
        // رسالة خطأ في حال فشل التحديث
        $_SESSION['status_update_msg'] = "Failed to update product status!";
        header('Location: ../index.php?Unapprove_product');
    }
}
?>
