<?php
    class PostView {

        public function showallPost($posts) {
            require_once ("templates/home.php");
        }
        public function formAddPost() {
            require_once ("templates/formaddpost.php");
        }
        public function stafyAddPost($status) {
            
        }
    }
?>