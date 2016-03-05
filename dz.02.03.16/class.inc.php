<title>Сайт новин</title>
<h1><center>Сайт новин</center></h1>
<?php

abstract class Menu
{
    public $name;
    public function SetName() {
        echo $this->name;
    }

}


class TopMenu extends Menu
{
}

class LeftMenu extends Menu
{
    public function SetName()
    {
        echo '</br>' . $this->name . '</br>';
    }
}

$new1 = new TopMenu();
$new1->name = '<center><a href="new1.inc.php">Новина перша </a>';
$new1->SetName();
$new2 = new TopMenu();
$new2->name = '<a href="new2.inc.php"> Новина друга </a>';
$new2->SetName();
$new3 = new TopMenu();
$new3->name = '<a href="new3.inc.php"> Новина третя</a>';
$new3->SetName();
$new4 = new TopMenu();
$new4->name = '<a href="new4.inc.php"> Новина четверта</a></center>';
$new4->SetName();
$new11 = new LeftMenu();
$new11->name = '<a href="new1.inc.php">Новина перша</a>';
$new11->SetName();
$new22 = new LeftMenu();
$new22->name = '<a href="new2.inc.php">Новина друга</a>';
$new22->SetName();
$new33 = new LeftMenu();
$new33->name = '<a href="new3.inc.php">Новина третя</a>';
$new33->SetName();
$new44 = new LeftMenu();
$new44->name = '<a href="new4.inc.php">Новина четверта</a>';
$new44->SetName();