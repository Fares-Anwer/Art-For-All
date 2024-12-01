<?php require_once 'header.php'; ?>

<?php
// تحقق إذا كان هناك معرف المنتج في الرابط
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // إعداد استعلام SQL لتحديث القيمة status إلى 1
    $sql = "UPDATE tblcomments SET status = 1 WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // ربط قيمة product_id في الاستعلام
    $stmt->bindParam(":id", $id);

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        // حفظ رسالة نجاح في الجلسة
        $_SESSION['status_update_msg'] = "comment status has been updated to active (1) successfully!";

        // إعادة توجيه المستخدم إلى الصفحة الرئيسية مع عرض المنتجات
        header('Location: ../index.php?unapprove-comment');
    } else {
        // رسالة خطأ في حال فشل التحديث
        $_SESSION['status_update_msg'] = "Failed to update comment status!";
        header('Location: ../index.php?unapprove-comment');
    }
}
?>
