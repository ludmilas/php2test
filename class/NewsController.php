<?php

class NewsController extends AController {

protected function actionAll()
{
    $Views = new View(view);
   // $st = new Newmod();

    $Views->news = Newmod::findAll();


    $html = $Views->display('index.php');
    echo $html;
}

    protected function actionFadd()
    {
        $Views = new View(view);
        $html = $Views->display('forma_insert.php');

        echo $html;
    }
    protected function actionSoun()
    {
        $Views = new View(view);
        //$st = new Newmod();
        $Views->news = Newmod::findAll();


        $html = $Views->display('forma_new.php');

        echo $html;
    }
    protected function actionOunnew()
    {
        $id=$_GET['id'];
        $Views = new View(view);
        //$st = new Newmod();
        $Views->oun = Newmod::findByPk($id);
        $html = $Views->display('oun_new.php');
        echo $html;
    }
    protected function actionSred()
    {
        $Views = new View(view);
        //$st = new Newmod();
        $Views->news = Newmod::findAll();

        $html = $Views->display('redact.php');

        echo $html;
    }

    protected function actionFormared()
    {
        $id=$_GET['id'];
        $Views = new View(view);
        //$st = new Newmod();
        $Views->redact = Newmod::findByPk($id);
        $html = $Views->display('forma_redact.php');
        echo $html;
    }
    protected function actionAdd()
    {
        if (isset($_POST['title']) and isset($_POST['new'])) {
            $name_new = $_POST['title'];
            $text_new = $_POST['new'];
            $st = new Newmod();
            $st->title = $name_new;
            $st->text = $text_new;
            $r = $st->save();

        }
        if ($r === false) {
            echo 'ошибка';
        }
        else
        {

            header('location:index.php?r=news/all');
        }
    }

    protected function actionRednew()
    {
        $id=$_GET['id'];
        if (isset($_POST['title']) and isset($_POST['text'])) {
            $name_new = $_POST['title'];
            $text_new = $_POST['text'];
            $st = new Newmod();
            $st->id = $id;
            $st->title = $name_new;
            $st->text = $text_new;
            $s = $st->save();

        }
        if ($s === false) {
            echo 'ошибка';
        }
        else
        {

            header('location:index.php?r=news/all');
        }
    }
    protected function actionSdel()
    {
        $Views = new View(view);
        //$st = new Newmod();
        $Views->news = Newmod::findAll();

        $html = $Views->display('delete.php');

        echo $html;
    }
    protected function actionOundel()
    {
$id=$_GET['id'];
$Views = new View(view);
//$st = new Newmod();
$Views->del = Newmod::findByPk($id);
$html = $Views->display('oun_del.php');
echo $html;
}
    protected function actionDelnew()
    {
        $id=$_GET['id'];
       $d = Newmod::delete($id);

        if ($d === false) {
            echo 'ошибка';
        }
        else
        {

            header('location:index.php?r=news/all');
        }
    }
}