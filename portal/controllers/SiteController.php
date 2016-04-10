<?php


class SiteController extends BaseController
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionCategory()
    {
        $categoryName = $_GET['category'];
        $categoryNews = (new NewsModel())->getCategoryNews($categoryName);
        $this->viewContentClass = 'publics';
        $this->render('category', ['categoryNews' => $categoryNews]);
    }

    public function actionAbout()
    {
        $this->render('about');
    }

    public function actionContacts()
    {
        $this->render('contacts');
    }

    public function actionAddComment()
    {
        if (isset($_POST['Comment'])) {
            $comment = new CommentsModel();
            $data = $_POST['Comment'];
            $data['user_id'] = $_SESSION['user_id'];
            $data['creation_time'] = time();
            $comment->save($data);
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
    }
}
