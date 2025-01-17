<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $conn->query("INSERT INTO tasks (title, description) VALUES ('$title', '$description')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
</head>
<body>
    <h1>Tambah Tugas</h1>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="title" required><br>
        <label>Deskripsi:</label><br>
        <textarea name="description"></textarea><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
