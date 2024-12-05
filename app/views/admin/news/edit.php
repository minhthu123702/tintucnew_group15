<style>
form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style cho các label */
form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

/* Style cho các input text và textarea */
form input[type="text"], 
form textarea, 
form select, 
form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Style cho textarea */
form textarea {
    height: 150px;
}

/* Style cho nút submit */
form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    transition: background-color 0.3s;
}

/* Hiệu ứng khi rê chuột lên nút */
form button:hover {
    background-color: #0056b3;
}

/* Style cho hình ảnh hiện tại */
form img {
    width: 100px;
    margin-top: 8px;
}


form div {
    margin-bottom: 20px;
}
</style>
<form method="POST" action="?action=edit&id=<?= $news['id']; ?>" enctype="multipart/form-data">
    <label>Tiêu đề:</label>
    <input type="text" name="title" value="<?= $news['title']; ?>" required>

    <label>Nội dung:</label>
    <textarea name="content" required><?= $news['content']; ?></textarea>

    <label>Danh mục:</label>
    <select name="category" required>
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category['id']; ?>" <?= $category['id'] == $news['category_id'] ? 'selected' : ''; ?>><?= $category['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label>Hình ảnh:</label>
    <input type="file" name="image">
    <?php if ($news['image']): ?>
        <img src="uploads/<?= $news['image']; ?>" alt="Current Image" style="width: 100px;">
    <?php endif; ?>

    <button type="submit">Cập nhật bài viết</button>
</form>
    