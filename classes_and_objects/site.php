<!DOCTYPE html>
<html>
<meta charset="utf-8">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .container {
        /* background-color: red; */
        border: 1px solid black;
        text-align: center;
    }
</style>

<body>
   <?php
        class Book{
            var $title;
            var $author;
            var $pages;
            function __construct(){
                echo "new book created";
            }
        }
        
        class Movie {
            public $title;
            private $rating;
            function __construct($title,$rating){
                $this->title = $title;
                $this->setRating($rating);
            }
            function getRating(){
                return $this->rating;
            }
            
            function setRating($rating){
                $valid_rating = array("PG-13","R","PG","G");
                for($i=0;$i<count($valid_rating);$i++){
                    if($rating == $valid_rating[$i]){
                        $this->rating = $rating;
                        return;
                    }
                }
                $this->rating = $rating;
                 $this->rating= "---invalid rating---";
            }
        }
        $avatar = new Movie("Avatar","PG");
        echo $avatar->getRating();
   ?>
</body>

</html>