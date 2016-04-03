<?php
/**
 * @var array $categoryNews
 */
?>
<?php foreach($categoryNews as $news) : ?>
    <img src="/assets<?= $news['image'] ?>" alt="<?= $news['ntitle'] ?>">
    <h3><?= $news['ntitle'] ?></h3>
    <font size="-1"><?= $news['ndate'] ?></font>
    <p align="justify"><?= $news['ntext'] ?></p>
<?php endforeach; ?>
