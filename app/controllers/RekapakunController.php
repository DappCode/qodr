<?php

class RekapakunController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function getAjaxAction()
    {
        $akun = new RefAkun();

        $json_data = $akun->getData();

        die(json_encode($json_data));
    }

}

