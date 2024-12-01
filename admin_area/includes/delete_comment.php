<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/Art-For-All/core/init.php'); ?>


<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tblcomments WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    if ($stmt->execute()) {
        $_SESSION['delete_product_msg'] = "Comment has been Deleted Successfully";
        header('Location: ../index.php?manage_comment');
    }
}
?>

