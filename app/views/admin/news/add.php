<style>
    /* Style chung cho form */
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

/* Style cho các input text, textarea, select và input file */
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
    background-color: #28a745;
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
    background-color: #218838;
}

</style>
<form method="POST" action="?action=add" enctype="multipart/form-data">
    <label>Tiêu đề:</label>
    <input type="text" name="title" required>

    <label>Nội dung:</label>
    <textarea name="content" required></textarea>

    <label>Danh mục:</label>
    <select name="category" required>
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label>Hình ảnh:</label>
    <input type="file" name="image">

    <button type="submit">Thêm bài viết</button>
</form>
