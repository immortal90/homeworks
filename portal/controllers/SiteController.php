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
}