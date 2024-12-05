<?php
class AdminController {
    public function listNews() {
        $newsModel = new News();
        $newsList = $newsModel->getAllNews();
        include_once './views/admin/news/index.php';
    }

    public function addNews() {
        $newsModel = new News();
        $categories = $newsModel->getCategories();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $image = null;

            if ($_FILES['image']['name']) {
                $targetDir = "uploads/";
                $fileName = basename($_FILES['image']['name']);
                $targetFilePath = $targetDir . $fileName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                    $image = $fileName;
                }
            }

            $newsModel->addNews($title, $content, $image, $category);
            header('Location: index.php');
        }

        include_once './views/admin/news/add.php';
    }

    public function editNews($id) {
        $newsModel = new News();
        $categories = $newsModel->getCategories();
        $news = $newsModel->getNewsById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $image = $news['image'];

            if ($_FILES['image']['name']) {
                $targetDir = "uploads/";
                $fileName = basename($_FILES['image']['name']);
                $targetFilePath = $targetDir . $fileName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                    $image = $fileName;
                }
            }

            $newsModel->updateNews($id, $title, $content, $image, $category);
            header('Location: index.php');
        }

        include_once './views/admin/news/edit.php';
    }

    public function deleteNews($id) {
        $newsModel = new News();
        $newsModel->deleteNews($id);
        header('Location: index.php');
    }
    // Phương thức mới để sắp xếp lại số thứ tự bài viết
    public function reorderNews() {
        $newsModel = new News();
        $newsModel->reorderNews();
}
}

?>