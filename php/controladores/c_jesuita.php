<?php
    require '../modelos/m_jesuita.php';
    require '../vista/v_jesuita.php';

    class Jesuita{

        private $model;
        private $view;
        

        public function __construct() {
            $this->model = new ModelJesuita();
            $this->view = new ViewJesuita();
        }


    }