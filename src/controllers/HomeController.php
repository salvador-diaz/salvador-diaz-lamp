<?php declare(strict_types=1);

require_once "src/View.php";

class HomeController {

    public function index(): string {
       $view = new View("home", ["param1" => "prueba"]); 
       return $view->render();
    }
}
