<?php
class News {
    private $db;
    
    public function __construct() {
        // Kết nối tới cơ sở dữ liệu MySQL với PDO
        $this->db = new PDO('mysql:host=localhost;dbname=tlunews', 'root', '123456789');
    }

    // Phương thức để lấy tất cả các bài viết từ bảng news cùng với tên danh mục
    public function getAllNews() {
        $query = "SELECT news.*, categories.name as category_name FROM news JOIN categories ON news.category_id = categories.id";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Phương thức để lấy thông tin bài viết theo ID
    public function getNewsById($id) {
        $query = "SELECT * FROM news WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Phương thức để thêm một bài viết mới vào cơ sở dữ liệu
    public function addNews($title, $content, $image, $category_id) {
        $query = "INSERT INTO news (title, content, image, created_at, category_id) VALUES (:title, :content, :image, NOW(), :category_id)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
    }

    // Phương thức để cập nhật một bài viết theo ID
    public function updateNews($id, $title, $content, $image, $category_id) {
        $query = "UPDATE news SET title = :title, content = :content, image = :image, category_id = :category_id WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
    }

    // Phương thức để xóa một bài viết theo ID
    public function deleteNews($id) {
        $query = "DELETE FROM news WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function reorderNews() {
        // Thiết lập biến tạm @rank để làm số thứ tự
        $sql = "SET @rank = 0";
        $this->db->exec($sql);

        // Cập nhật lại ID theo thứ tự
        $sql = "UPDATE news SET id = (@rank := @rank + 1)";
        $this->db->exec($sql);
    }

    // Phương thức để lấy tất cả các danh mục từ bảng categories
    public function getCategories() {
        $query = "SELECT * FROM categories";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
