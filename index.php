<?php

require_once "vendor/autoload.php";

use \Rodolfo\Page;
use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function () {

    $page = new Page();

    $page->setTpl("index");
    //$sql = new Hcode\DB\Sql();

    //$results = $sql->select("SELECT * FROM tb_users");

    //echo json_encode($results);

});

$app->run();
