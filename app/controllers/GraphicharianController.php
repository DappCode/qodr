<?php

use Phalcon\Mvc\view;

class GraphicharianController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->pick("graphicHarian/index");
    }

    public function getGraphicAction()
    {
        $data = new ViewPemasukanPerhari();
        $json_data = $data->getDataGraphicPerhari();
        die(json_encode($json_data));
    }
}

