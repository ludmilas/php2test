<?php

class NewsController extends AController {

protected function actionAll()
{
    $Views = new View(view);
    $st = new Newmod();
    $Views->news = $st->News_getAll();


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
        $st = new Newmod();
        $Views->news = $st->News_getAll();


        $html = $Views->display('forma_new.php');

        echo $html;
    }
    protected function actionOunnew()
    {
        $id=$_GET['id'];
        $Views = new View(view);
        $st = new Newmod();
        $Views->oun = $st->Oun_new($id);
        $html = $Views->display('oun_new.php');
        echo $html;
    }
    protected function actionSred()
    {
        $Views = new View(view);
        $st = new Newmod();
        $Views->news = $st->News_getAll();


        $html = $Views->display('redact.php');

        echo $html;
    }

    protected function actionFormared()
    {
        $id=$_GET['id'];
        $Views = new View(view);
        $st = new Newmod();
        $Views->redact = $st->Oun_new($id);
        $html = $Views->display('forma_redact.php');
        echo $html;
    }
    protected function actionAdd()
    {
        if (isset($_POST['title']) and isset($_POST['new'])) {
            $name_new = $_POST['title'];
            $text_new = $_POST['new'];
            $st = new Newmod();
            $r =$st->News_insert($name_new, $text_new);

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
            $s = $st->New_up($id, $name_new, $text_new);

        }
        if ($s === false) {
            echo 'ошибка';
        }
        else
        {

            header('location:index.php?r=news/all');
        }
    }
}