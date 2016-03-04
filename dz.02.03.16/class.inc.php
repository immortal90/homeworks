<title>Сайт новин</title>
<h1><center>Сайт новин</center></h1>
<?php

abstract class Menu
{
    public $name;


}


class TopMenu extends Menu
{
    public function getName()
    {
        echo $this->name;
    }
}

class LeftMenu extends Menu
{
    public function setName()
    {
        echo '</br>' . $this->name . '</br>';
    }
}

$new1 = new TopMenu();
$new1->name = '<center><a href="new1.inc.php">Новина перша </a>';
$new1->getName();
$new2 = new TopMenu();
$new2->name = '<a href="new2.inc.php"> Новина друга </a>';
$new2->getName();
$new3 = new TopMenu();
$new3->name = '<a href="new3.inc.php"> Новина третя</a>';
$new3->getName();
$new4 = new TopMenu();
$new4->name = '<a href="new4.inc.php"> Новина четверта</a></center>';
$new4->getName();
$new11 = new LeftMenu();
$new11->name = '<a href="new1.inc.php">Новина перша</a>';
$new11->setName();
$new22 = new LeftMenu();
$new22->name = '<a href="new2.inc.php">Новина друга</a>';
$new22->setName();
$new33 = new LeftMenu();
$new33->name = '<a href="new3.inc.php">Новина третя</a>';
$new33->setName();
$new44 = new LeftMenu();
$new44->name = '<a href="new4.inc.php">Новина четверта</a>';
$new44->setName();