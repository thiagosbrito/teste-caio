<?php
//Autoload
$loader = require 'vendor/autoload.php';

//Instanciando objeto
$app = new \Slim\Slim(array(
    'templates.path' => 'templates'
));

//Listando todas
$app->get('/contatos/', function() use ($app){
	(new \controllers\Contatos($app))->lista();
});

//get pessoa
$app->get('/contatos/:id', function($id) use ($app){
	(new \controllers\Contatos($app))->get($id);
});

//nova pessoa
$app->post('/contatos/', function() use ($app){
	(new \controllers\Contatos($app))->nova();
});

//edita pessoa
$app->put('/contatos/:id', function($id) use ($app){
	(new \controllers\Contatos($app))->editar($id);
});

//apaga pessoa
$app->delete('/contatos/:id', function($id) use ($app){
	(new \controllers\Contatos($app))->excluir($id);
});

//Rodando aplicação
$app->run();
?>
