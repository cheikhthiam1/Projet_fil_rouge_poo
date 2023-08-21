<?php

use App\Controller\CategorieController;

require_once "../core/Router.php";

// require('../core/Router.php');

Router::route('/categorie',[CategorieController::class,'index']);

// Router::route("/categorie_add", [CategorieController::class, 'create']);
// Router::route("/store-categorie", [CategorieController::class, 'store']);
// Router::route("/article", [ArticleConfectionController::class, 'index']);
// Router::route("/article_add", [ArticleConfectionController::class, 'create']);
// Router::route("/store-article", [ArticleConfectionController::class, 'store']);
// Router::route("/appro", [ApproController::class, 'index']);
// Router::route("/update-paiement-appro", [ApproController::class, 'updatePaiement']);
// Router::route("/filterall", [ApproController::class, 'show_all_appro']);
// Router::route("/appro-add", [ApproController::class, 'create']);
// Router::route("/store-appro", [ApproController::class, 'store']);
// Router::route("/articlevente-add", [ArticleVenteController::class, 'create']);
// Router::route("/articlevente-getData", [ArticleVenteController::class, 'index']);