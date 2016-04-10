<?php
/**
 * @var $this BaseController
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Джерельце, Блог, Стаття, Психолог, Порада, Діти, Щастя,
        Домопомога " />
    <meta name="description" content="Джерельце, Щаслива сімя, Діти, Психолог" />
    <link href="/assets/style.css" rel="stylesheet" type="text/css"/>
    <title>Джерельце сімейного щастя</title>
</head>
<body>
<div id="container">
    <div id="header"></div>
    <div id="border">
        <div id="main">
            <div id="left">
                <div id="menu">
                    <ul>
                        <li><a href="/site/index">Головна</a></li>
                        <?php $newsModel = new NewsModel(); ?>
                        <?php foreach ($newsModel->getCategories() as $category) : ?>
                            <li><a href="/site/category?category=<?=urlencode($category)?>"><?=$category?></a></li>
                        <?php endforeach; ?>
                        <li><a href="/site/contacts">Контакти</a></li>
                    </ul>
                </div>
                <div id="menubottom">
                    <ul>
                        <li><a href="/site/index">Головна</a></li>
                        <li><a href="/site/about">Про себе</a></li>
                        <li><a href="/site/contacts">Контакти</a></li>
                    </ul>
                </div>
            </div>
            <div id="right">
                <div class="<?= $this->viewContentClass ?>">
                    <?= $this->content; ?>
                </div>
                <div class="product">
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="footer">
        <div id="copyright">
            <div><p><a href="https://vk.com/kopach10">
                        Автор:Ігор Копач</a></p></div>
            <div class="fclear"></div>
            <div><p><a href="https://vk.com/id52121898">
                        Блогер:Надія Сапсай-Стан</a></p></div>
            <div class="fclear"></div>
        </div>
        <div id="payment">Всі права захищені</div>
    </div>
    <div id="footerend"></div>
</div>
</body>
</html>