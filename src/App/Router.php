<?php
// src/Router.php
namespace  App;

class Router {
    private $routes = [];

    // Registra a rota GET
    public function get($route, $callback) {
        $this->routes['GET'][$route] = $callback;
    }

    // Registra a rota POST
    public function post($route, $callback) {
        $this->routes['POST'][$route] = $callback;
    }

    // Processa a requisição
    public function run() {
        // Captura o método da requisição e o parâmetro 'page'
        $method = $_SERVER['REQUEST_METHOD'];
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';  // Default para 'home'

        // Verifica se a rota existe no método
        if (isset($this->routes[$method][$page])) {
            // Chama a função associada à rota
            call_user_func($this->routes[$method][$page]);
        } else {
            echo "Página não encontrada!";
        }
    }
}
