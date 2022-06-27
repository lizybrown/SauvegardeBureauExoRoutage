<?php

require_once "models/ApiManager.php";
require_once "controllers/ApiController.php";

class ApiController {

    private $apiManager;

    public function __construct() {
        $this->apiManager = new ApiManager();
        $this->apiManager->recupMonster();
    }

 

    
    public function sendJson($data){
        header('Content-type:application/json;charset=utf-8');
        if ($_SERVER['REQUEST_METHOD']==='GET')
        {
            http_response_code(200);
            echo json_encode($data);
            exit;
            // var_dump($_SERVER);
        }
        else
        {
            http_response_code(405);
            echo json_encode(['message'=>'La méthode utilisée n\'est pas autorisée']);
        }

        
    }
    
    public function stockMonster() {

        $tab['monsters'] = [];  

        $tableauMonster = $this->apiManager -> getMonsters();
        foreach ($tableauMonster as $value) {
            if (!array_key_exists($value->getId(), $tab['monsters'])) {
                $tab["monsters"][$value->getId()] = [
                    "monster_id" => $value->getId(),
                    "name" => $value->getName(),
                    "life" => $value->getLife(),
                    "att" => $value->getAtt(),
                    "def" => $value->getDef(),
                    "img" => URL . "public/images/" . $value->getImg(),
                    "score" => $value->getScore(),
                    "role" => $value->getRole()
                ];
            }
        }
        $this->sendJson($tab);
    }

    public function urlById($idM){

        $tabId = $this->apiManager-> getMonsterById($idM);
        if($tabId){
        $tableauId = [
        "monster_id" => $tabId->getId(),
        "name" => $tabId->getName(),
        "life" => $tabId->getLife(),
        "att" => $tabId->getAtt(),
        "def" => $tabId->getDef(),
        "img" => URL . "public/images/" . $tabId->getImg(),
        "score" => $tabId->getScore(),
        "role" => $tabId->getRole()
         ];
        
        }
        $this->sendJson($tableauId);
        // var_dump($tableauId);
    }

/////////////AJOUT SCORE VIA POSTMAN//////////////
    public function ajoutScore(){
        header('Content-type:application/json;charset=utf-8');
        header("Acces-Control-Allow-Method:POST");
        if ($_SERVER['REQUEST_METHOD']==='POST')
        {
            http_response_code(200);
            $contenu=json_decode(file_get_contents("php://input"));
            $this->apiManager->addScore($contenu->name,$contenu->score);
            echo json_encode(['message'=>'Ajout Score réussi!!']);
    }
    else
    {
        http_response_code(405);
        echo json_encode(['message'=>'La méthode utilisée n\'est pas autorisée']);
    }
}


public function supprScore(){
    header('Content-type:application/json;charset=utf-8');
        header("Acces-Control-Allow-Method:DELETE");
        if ($_SERVER['REQUEST_METHOD']==='DELETE')
        {
            http_response_code(204);
            $contenu=json_decode(file_get_contents("php://input"));
            $this->apiManager->deleteScore($contenu->name);
    }
    else
    {
        http_response_code(405);
        echo json_encode(['message'=>'La méthode utilisée n\'est pas autorisée']);
    }
        }
}


// public function deletescore()
//     {
//         header("Content-Type: application/json; charset=UTF-8");
//         header("Access-Control-Allow-Method: DELETE");


// if($_SERVER['REQUEST_METHOD'] === 'DELETE')
// {

//     $contenu = json_decode(file_get_contents("php://input"));
//     $name2 = $this->apiManager->findUser($contenu->name);
//                         if(!empty($contenu))
//                             {
//                                 if($name2)
//                                 {
//                                     $this->apiManager->deleteScores($contenu->name);
//                                     http_response_code(204);
//                                 }else{
//                                     http_response_code(405);
//                                     echo json_encode(['message' => "ce name n'existe pas "]); 
//                                 }
//                             }else{
//                                 http_response_code(405);
//                                 echo json_encode(['message' => 'name est vide']);    
//                     }
//                     }else{
    
//                         http_response_code(405);
//                         echo json_encode(['message' => 'probleme de methode (erreur 405)']);
//                     }
//     }    
?>


