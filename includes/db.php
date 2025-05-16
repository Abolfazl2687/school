<?php

if (!defined('BASE_PATH')) {
    die('دسترسی مستقیم به این فایل مجاز نیست.');
}

function get_db_connection() {
    static $pdo = null;

    if ($pdo === null) {

        $host = 'localhost';
        $dbname = 'amrollahi_school';
        $user = 'root';  
        $password = '';  

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $pdo = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {

            $error_message = 'خطا در اتصال به پایگاه داده: ' . $e->getMessage();
            error_log($error_message);
            die($error_message);
        }
    }

    return $pdo;
}

function db_query($sql, $params = []) {
    try {
        $pdo = get_db_connection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {

        $error_message = 'خطا در اجرای دستور SQL: ' . $e->getMessage();
        $error_message .= "\nSQL: " . $sql;
        $error_message .= "\nParameters: " . print_r($params, true);

        error_log($error_message);

        die($error_message);
    }
}

function db_fetch_one($sql, $params = []) {
    $stmt = db_query($sql, $params);
    return $stmt->fetch();
}

function db_fetch_all($sql, $params = []) {
    $stmt = db_query($sql, $params);
    return $stmt->fetchAll();
}

function db_insert($table, $data) {
    try {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

        error_log("SQL Query: " . $sql);
        error_log("Data: " . print_r($data, true));

        $pdo = get_db_connection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array_values($data));

        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        $error_message = 'خطا در درج داده: ' . $e->getMessage();
        $error_message .= "\nSQL: INSERT INTO $table";
        $error_message .= "\nData: " . print_r($data, true);

        error_log($error_message);
        throw new Exception($error_message);
    }
}

function db_update($table, $data, $where, $where_params = []) {
    $set = implode(' = ?, ', array_keys($data)) . ' = ?';

    $sql = "UPDATE $table SET $set WHERE $where";

    $params = array_merge(array_values($data), $where_params);

    $stmt = db_query($sql, $params);
    return $stmt->rowCount();
}

function db_table_exists($table_name) {
    try {
        $pdo = get_db_connection();

        $stmt = $pdo->query("SHOW TABLES LIKE '$table_name'");
        return $stmt->rowCount() > 0;
    } catch (PDOException $e) {
        error_log('خطا در بررسی وجود جدول: ' . $e->getMessage());
        return false;
    }
}

function db_create_students_table() {
    if (!db_table_exists('students')) {
        $sql = "CREATE TABLE students (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            father_name VARCHAR(100) NOT NULL,
            national_code VARCHAR(10) NOT NULL,
            birth_date VARCHAR(20) NOT NULL,
            previous_school VARCHAR(200) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            parent_phone VARCHAR(20) NOT NULL,
            address TEXT NOT NULL,
            email VARCHAR(100),
            field VARCHAR(50) NOT NULL,
            grade VARCHAR(20) NOT NULL,
            math_grade VARCHAR(20) NOT NULL,
            science_grade VARCHAR(20) NOT NULL,
            discipline_grade VARCHAR(20) NOT NULL,
            additional_info TEXT,
            register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status VARCHAR(20) DEFAULT 'pending',
            UNIQUE KEY (national_code)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

        $pdo = get_db_connection();
        $pdo->exec($sql);

        $pdo->exec("CREATE INDEX idx_students_status ON students(status)");
    }
}

db_create_students_table();