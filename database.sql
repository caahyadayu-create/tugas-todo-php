-- Membuat Database
CREATE DATABASE IF NOT EXISTS db_todo;
USE db_todo;

-- Membuat Tabel Tasks
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL
);