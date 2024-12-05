<?php
include_once 'config.php';

class DBConnection {
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;
    public function __construct() {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->dbname = DB_NAME;

        try {
    
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->conn = null;
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
$db = new DBConnection();
$conn = $db->getConnection();
if ($conn) {
    echo "Kết nối cơ sở dữ liệu thành công!";
} else {
    echo "Kết nối thất bại!";
}
?>