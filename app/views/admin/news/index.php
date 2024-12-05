<a href="?action=add">Thêm bài viết mới</a>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

h1, h2 {
    text-align: center;
    color: #444;
}

/* Liên kết */
a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Thêm bài viết mới */
a[href="?action=add"] {
    display: inline-block;
    margin: 20px 0;
    padding: 10px 20px;
    background-color: #28a745;
    color: #fff;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
}

a[href="?action=add"]:hover {
    background-color: #218838;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #007bff;
    color: white;
}

table td {
    background-color: #fff;
}

table tr:hover {
    background-color: #f1f1f1;
}

a.edit-btn, a.delete-btn {
    color: white;
    padding: 5px 10px;
    border-radius: 3px;
    text-decoration: none;
}

a.edit-btn {
    background-color: #ffc107;
}

a.edit-btn:hover {
    background-color: #e0a800;
}

a.delete-btn {
    background-color: #dc3545;
}

a.delete-btn:hover {
    background-color: #c82333;
}
</style>

<table>
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($newsList as $news): ?>
        <tr>
            <td><?= $news['id']; ?></td>
            <td><?= $news['title']; ?></td>
            <td><?= $news['category_name']; ?></td>
            <td>
                <?php if ($news['image']): ?>
                    <img src="uploads/<?= $news['image']; ?>" alt="Image" style="width: 100px;">
                <?php endif; ?>
            </td>
            <td>
                <a href="?action=edit&id=<?= $news['id']; ?>" class="edit-btn">Sửa</a>
                <a href="?action=delete&id=<?= $news['id']; ?>" class="delete-btn" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
