<?php include 'db.php' ; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM tasks WHERE id = $id");
    header("Location: index.php");
}
?>