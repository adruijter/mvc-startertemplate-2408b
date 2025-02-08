<?php

class Smartphones extends BaseController
{

    public function index()
    {
        /**
         * Het $data-array geeft informatie mee aan de view-pagina
         */

        $data = [
            'title' => 'Smartphones!'
        ];

        $this->view('smartphones/index', $data);
    }
}