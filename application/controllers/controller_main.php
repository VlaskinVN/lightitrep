<?php
require_once 'application/start.php';
    class Controller_main extends Controller
    {

        function action_index()
        {	            
            if (isset($_POST['text']) && !empty($_POST['text'])) {
                $this->model = new Model_Portfolio();
                $this->view = new View();
                
                $data = $this->model->number_to_roman($_POST['text']);
            }
            
            $this->view->generate('main_view.php', 'template_view.php', $data);
        }
    }
    