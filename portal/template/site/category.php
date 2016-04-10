<?php
/**
 * @var array $categoryNews
 */
?>

<?php foreach ($categoryNews as $news) : ?>
    <img src="/assets<?= $news['image'] ?>" alt="<?= $news['ntitle'] ?>">
    <h3><?= $news['ntitle'] ?></h3>
    <font size="-1"><?= $news['ndate'] ?></font>
    <p align="justify"><?= $news['ntext'] ?></p>
    <br>
    <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) : ?>
        <form method="post" id="form2" action="/site/addComment">
            Текст<input name="Comment[text]" type="text"/>
            </br>
            <input type="hidden" name="Comment[news_id]" value="<?= $news['news_id']; ?>">
            <p><input type="submit" /></p>
        </form>
    <?php else : ?>
        <i>Щоб залишити коментар необхідно <a href="/user/login">увійти</a></i>
    <?php endif; ?>
    <br>
    <?php if (!empty($news['comments'])) : ?>
        <hr>
        <h4>Коментарі :</h4>
        <br>
        <?php foreach ($news['comments'] as $comment) : ?>
            <i>Користувач: <?= $comment['user']['user_login'] ?></i>
            <p><?= $comment['text']?></p>
            <i>Додано: <i><?= date('H:i d.m.Y', $comment['creation_time']); ?></i></i>
            <br>
            <br>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endforeach; ?>

