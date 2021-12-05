<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

/*Inclou el fitxer config.php*/
require_once "../src/config.php";

/*Afegim els controladors necessaris per executar tots els requests*/
require_once "../src/controller/portada.php";
require_once "../src/controller/login.php";
require_once "../src/controller/dologin.php";
require_once "../src/controller/logout.php";
require_once "../src/controller/doregistre.php";
require_once "../src/controller/docrearcategoria.php";
require_once "../src/controller/doregistreadmin.php";
require_once "../src/controller/docontacte.php";
require_once "../src/controller/registre.php";
require_once "../src/controller/registreadmin.php";
require_once "../src/controller/article.php";
require_once "../src/controller/blog.php";
require_once "../src/controller/tramit.php";
require_once "../src/controller/contacte.php";
require_once "../src/controller/admin.php";
require_once "../src/controller/llistarusuari.php";
require_once "../src/controller/llistararticle.php";
require_once "../src/controller/llistarcategoria.php";
require_once "../src/controller/crearcategoria.php";
require_once "../src/controller/creararticle.php";
require_once "../src/controller/esborrarusuari.php";
require_once "../src/controller/esborrararticle.php";
require_once "../src/controller/esborrarcategoria.php";
require_once "../src/controller/actualitzararticle.php";
require_once "../src/controller/doactualitzararticle.php";



$contenidor = new \Emeset\Contenidor($config);
$app = new \Emeset\Emeset($contenidor);

$app->ruta("", "ctrlPortada");
$app->ruta("login", "ctrlLogin");

$app->ruta("actualitzararticle", "ctrlActualitzararticle");
$app->ruta("esborrarcategoria", "ctrlEsborrarcategoria");
$app->ruta("esborrararticle", "ctrlEsborrararticle");
$app->ruta("esborrarusuari", "ctrlEsborrarusuari");
$app->ruta("llistarcategoria", "ctrlLlistarcategoria");
$app->ruta("crearcategoria", "ctrlCrearCategoria");
$app->ruta("creararticle", "ctrlCrearArticle");
$app->ruta("llistararticle", "ctrlLlistararticle");
$app->ruta("llistarusuari", "ctrlLlistarusuari");
$app->ruta("dologin", "ctrlDoLogin");
$app->ruta("doregistre", "ctrlDoRegistre");
$app->ruta("docrearcategoria", "ctrlDoCrearCategoria");
$app->ruta("docontacte", "ctrlDoContacte");
$app->ruta("doregistreadmin", "ctrlDoRegistreAdmin");
$app->ruta("docrearcategoria", "ctrlDoCrearCategoria");
$app->ruta("doactualitzararticle", "ctrlDoActualitzarArticle");
$app->ruta("logout", "ctrlLogout");
$app->ruta("registre", "ctrlRegistre");
$app->ruta("registreadmin", "ctrlRegistreAdmin");
$app->ruta("contacte", "ctrlContacte");
$app->ruta("article", "ctrlArticle");
$app->ruta("blog", "ctrlBlog");
$app->ruta("tramit", "ctrlTramit");
$app->ruta("admin", "ctrlAdmin");

$app->executa();