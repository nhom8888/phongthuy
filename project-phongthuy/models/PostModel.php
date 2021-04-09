<?php
    class PostModel {

        public function getPost() {
          $con = mysqli_connect ("localhost" ,"root" ,"","phongthuyviet");
          mysqli_set_charset($con ,"utf8");
           if (mysqli_connect_errno()) {
               echo "ketnoiloi";
           } 
          $result = $con -> query("SELECT * FROM phongthuyviet_post");
          $posts = array();

          if($result -> num_rows > 0) {
              while($post = mysqli_fetch_aSsoc( $result)) {
                  $posts[] = $post;
              }
          }

          return $posts;
        }

        public function addPost($post) {

            $con = mysqli_connect ("localhost" ,"root" ,"","phongthuyviet");
             mysqli_set_charset($con ,"utf8");

           if (mysqli_connect_errno()) {
               echo "ketnoiloi";
        }
       $sql = "INSERT INTO `phongthuyviet_post` (`id`, `title`, `content`, `img`) 
       VALUES (NULL, '". $_POST["title"] ."', '". $_POST["content"] ."', '". $_POST["img"] ."');";
        
        $rs = $con -> query ($sql);
        return $rs;
    }
}
?>