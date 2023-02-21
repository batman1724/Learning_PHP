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
        class Human{
            function haveArms(){
                echo"i have arms";
            }
        }
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken<br>";
            }
            function makeSalad(){
                echo "The chef can make salad<br>";
            }
            function makeSpecialDish(){
                "the chef makes bbg ribs<br>";
            }
        }
        class ItalianChef extends Chef{
            
        }
        $chef = new Chef();
        $chef ->makeChicken();
        $italianchef = new Chef();
        $italianchef ->makeChicken();
   ?>
</body>

</html>