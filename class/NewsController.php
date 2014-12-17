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
}