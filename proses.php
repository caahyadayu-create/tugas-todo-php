<?php
include 'config.php';

// Jika tombol Tambah diklik
if (isset($_POST['add'])) {
    $task = $_POST['task'];
    mysqli_query($conn, "INSERT INTO tasks (task_name) VALUES ('$task')");
    header("Location: index.php");
}

// Jika tombol Hapus (X) diklik
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM tasks WHERE id=$id");
    header("Location: index.php");
}
?>