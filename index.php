<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Todo List</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding: 50px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 350px; }
        input { padding: 8px; width: 70%; }
        button { padding: 8px; cursor: pointer; background: #28a745; color: white; border: none; }
        ul { list-style: none; padding: 0; margin-top: 20px; }
        li { background: #eee; margin-bottom: 5px; padding: 10px; display: flex; justify-content: space-between; }
        .del { color: red; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Tugas Tim</h2>
        <form action="proses.php" method="POST">
            <input type="text" name="task" placeholder="Tambah tugas baru..." required>
            <button type="submit" name="add">Tambah</button>
        </form>
        <ul>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");
            while($row = mysqli_fetch_assoc($query)) {
                echo "<li>" . $row['task_name'] . " <a class='del' href='proses.php?delete=" . $row['id'] . "'>X</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>