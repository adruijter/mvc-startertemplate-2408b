<?php

class Smartphones extends BaseController
{
    private $smartphoneModel;

    public function __construct()
    {
        $this->smartphoneModel = $this->model('SmartphonesModel');
    }

    public function index()
    {
        /**
         * Het $data-array geeft informatie mee aan de view-pagina
         */
        $results = $this->smartphoneModel->getAllSmartphones();

        $data = [
            'title' => 'Smartphones!',
            'smartphones' => $results
        ];

        $this->view('smartphones/index', $data);
    }
}