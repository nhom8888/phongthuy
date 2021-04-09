<?php   
     $action = $_GET["action"];
    
    require_once ("controllers/PostController.php");
    $postController = new PostController();

    if ($action == "list") {
        $postController -> getPost();
    }
    if ($action == "add") {
        $postController -> addPost();
    }
    if ($action == "doAdd") {
        $postController -> doAdd();
    }
    

    
    
   
?>