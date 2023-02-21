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
    <div class="container">
        <form action="input_from_checkbox.php" method="post">
            enter: <input type="text" name="values">
            <input type="submit">   
        </form>     
        <?php
            $number=0;
            $number_array=array(1,2,3);
            if(isset($_POST['values'])){
                $number_array[$number] = $_POST['values'];
                $number++;
            }
            for($i=0; $i<sizeof($number_array);$i++){
                echo $number_array[$i];
            }
        ?>
    </div>
</body>

</html>