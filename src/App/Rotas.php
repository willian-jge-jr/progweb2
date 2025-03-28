<?php 

namespace App;
use App\Router;

class Rotas{

    protected Router $rotas;

    public function __construct(Router $router)
    {
        $this->rotas = $router;
    }

}
?>