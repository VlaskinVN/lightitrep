<?php
require_once 'application/start.php';
    class Controller_main extends Controller
    {

        function action_index()
        {	            
            if (isset($_POST['text']) && !empty($_POST['text'])) {
                $this->model = new Model_Portfolio();
                $this->view = new View();

                // проверка на число, арабсколе или же римское
                if (is_numeric($_POST['text'])) {
                    if ($_POST['text'] >= 4000 || $_POST['text'] <= 0 || $_POST['text'] == 0 || $_POST['text'] == "") { // максимальное введенное арабское число для конвертации
                        $datas = "Введите значение менее 4000 и больше 0!";
                        $this->view->generate('main_view.php', 'template_view.php', $datas);
                    }else{
                        $data = $this->model->number_to_roman($_POST['text']);
                        $this->view->generate('main_view.php', 'template_view.php', $data);
                    }
                }else{
                    $data = $this->model->roman_to_number(strtoupper($_POST['text']));     
                    if ($data === "error"){
                        $datas = "Введено не верное значение";
                        $this->view->generate('main_view.php', 'template_view.php', $datas);
                    } else {                            
                        $this->view->generate('main_view.php', 'template_view.php', $data);
                    }     
                }
            }else{               
                $this->view->generate('main_view.php', 'template_view.php', $datas);
            }            
        }
    }
    