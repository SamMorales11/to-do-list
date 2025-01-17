<?php include 'db.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM tasks WHERE id = $id");
    $task = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $conn->query("UPDATE tasks SET title = '$title', description = '$description', status = '$status' WHERE id = $id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas</title>
</head>
<body>
    <h1>Edit Tugas</h1>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br>
        <label>Deskripsi:</label><br>
        <textarea name="description"><?php echo $task['description']; ?></textarea><br>
        <label>Status:</label><br>
        <select name="status">
            <option value="pending" <?php echo $task['status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
            <option value="completed" <?php echo $task['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
        </select><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
