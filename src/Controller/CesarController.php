<?php
namespace Controller;
use ThirtySix\Connexion;
use Model\Nominee;
use Model\User;
use Model\Category;

class CesarController{
  public function gagnantsAction(){
    $winners = Nominee::getWinners($pdo);
    $pdo = Connexion::getInstance();
    $bestplayers = User::getBest($pdo);

    $categories = [];
    foreach ($winners as $winner) {
      $categories[$winner['category_id']] = Category::getById($pdo, $winner['category_id']);
    }
    include "./winners.php";
  }
}