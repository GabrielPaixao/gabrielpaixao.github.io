<?php

//Configura paths do sistema
require './routes/Router.php';


//Instacia a classe de rotas
$router = new Router();

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

//Configura rotas
$router
    ->on('GET', '/', function () {
        require './views/login.php';
    })       
	->on('GET', '/login', function () {
        require './views/login.php';
    })     
	->on('POST', '/login', function () {
        require './views/login.php';
    }) 
	 ->on('GET', '/index', function () {
        require './views/index.php';
    }) 
	 ->on('POST', '/index', function () {
        require './views/index.php';
    }) 
	 ->on('GET', '/inicio', function () {
        require './views/inicio.php';
    }) 
	 ->on('POST', '/inicio', function () {
        require './views/inicio.php';
    }) 

    //cadastro imoveis
    ->on('GET', '/cadastro_imoveis', function () {
        require './views/cadastro_imoveis.php';
    }) 
	 ->on('POST', '/cadastro_imoveis', function () {
        require './views/cadastro_imoveis.php';
    }) 
	
	
	

	
	//TESTS
	->on('GET', '/aa', function () {
        return 'aa';
    })
    ->post('/(\w+)/(\w+)/(\w+)', function ($module, $class, $method) {
        var_dump([$module, $class, $method]);
    })
    ->get('/view/(\w+)', function ($view) {
        ob_start();
        require dirname(__DIR__) . "./views\{$view}.php";
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    })
    ->get('/(.*)', function ($uri) {
        echo ($uri);
    });

//executa rotas
echo $router($router->method(), $router->uri());

