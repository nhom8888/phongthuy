<?php
    class PostController {

        public function getPost() {
           require_once ("models/PostModel.php");
           $postModel = new PostModel();
           $posts = $postModel -> getPost();
            
        require_once ("views/postView.php");
            $postView = new PostView();
            $postView -> showallPost($posts);
        }
        public function addPost() {
            require_once ("views/postView.php");
            $postView = new PostView();
            $postView -> formAddPost();
        }
        public function doAdd() {
           $title = $_POST["title"];
           $content = $_POST["content"];
           $img = $_POST["img"];

          $post = array (
              "title"   => $title,
              "content" => $content,
                "img" => $img,
          );
          
          require_once ("models/PostModel.php");
           $postModel = new PostModel();
           $starus = $postModel -> addPost($post);
        }
    }


?>