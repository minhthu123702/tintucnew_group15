--csdl tin tức
CREATE DATABASE tintuc;
USE tintuc;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL COMMENT 
);
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
); 
INSERT INTO users (username, password, role) 
VALUES 
('admin', 'admin123', 1); 
INSERT INTO categories (name) 
VALUES 
('Công nghệ'),
('Kinh tế'),
('Giải trí'),
('Thể thao'),
('Giáo dục');
INSERT INTO news (title, content, image, created_at, category_id) 
VALUES 
('Tin tức công nghệ mới', 'Nội dung tin tức công nghệ...', 'imgs/congnghe.jpg', NOW(), 1),
('Kinh tế vĩ mô trong năm 2024', 'Nội dung về kinh tế...', 'imgs/kinhte.jpg', NOW(), 2),
('Trận đấu thể thao đáng chú ý', 'Nội dung về thể thao...', 'imgs/thethao.jpg', NOW(), 4),
('Môi trường giáo dục năm 2024', 'Nội dung về giáo dục...', 'imgs/giaoduc..jpg', NOW(), 5),
('Cập nhật giải trí cuối tuần', 'Nội dung về giải trí...', 'imgs/giaitri.jpg', NOW(), 3);
