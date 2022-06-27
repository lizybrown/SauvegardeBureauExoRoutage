<?php
require_once "models/ArticleClass.php";
require_once "models/ModelClass.php";
require_once "UserManager.php";
class ArticleManager extends Model{
    private $articles; //tableau des articles

    public function addArticle($article){
        $this->articles[] = $article;
    }

    public function getArticles(){
        return $this->articles;
    }

    public function loadingArticles(){
        $sql ="SELECT * FROM article";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $articles = $req->fetchALL(PDO::FETCH_OBJ);
        $userManager = new UserManager;
        foreach($articles as $article){
            $add = new Article($article->id_article,$article->title,$article->content,$article->time,$article->image,$userManager->FindUserByIdDB($article->id_user),$article->resume);
            $this->addArticle($add);
        }
    }
    public function getArticleById($id_article){
        foreach($this->articles as $article){
            if($article->getId_article() == $id_article){
                return $article;
            }
        }
  
    }

    public function deleteArticleByIdDB($id_article){
        $sql = "DELETE FROM article WHERE id_article = :id_article";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":id_article"=>$id_article
        ]);
        if($result){
            $bookToDelete = $this->getArticleById($id_article);
            unset($bookToDelete);
        }
        return "delete complete";
    }

    public function addArticleDB($title,$resume,$image,$content,$idUser){
        $sql = 
        "INSERT INTO article (title,content,resume,image,id_user) VALUES (:title,:content,:resume,:image,:id_user)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":title"=>$title,
            ":resume"=>$resume,
            ":image"=>$image,
            ":content"=>$content,
            ":id_user"=>$idUser
        ]);
        // $req->debugDumpParams();
        // if($result){
        //     $add = new Article($this->getDB()->lastInsertID(),$title,$content,date('d-m-Y H:i:s'),$image,$userId,$resume);
        //     $this->addArticle($add);
        // }
        // exit;
    }
}