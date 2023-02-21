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
        background-color: red;
        text-align: center;
    }

    .result-box {
        background-color: yellow;
    }
</style>

<body>
    <?php 
        // echo $_GET['name'];
    ?>
    <div class="container">
        <h1>Calculator</h1>
        <!-- Create a form for uploading a GLB file -->
        <form action="site.php" method="get">
            <input type="text" placeholder="Enter a number" pattern="[0-9]+" title="Enter numbers only" name="first_number">
            <input type="text" placeholder="Enter a number" pattern="[0-9]+" title="Enter numbers only" name=" second_number">
            <input type="text" placeholder="choose operation" name="op" list="operations">
            <datalist id="operations">
                <option value="add">ADD</option>
                <option value="subtract">SUBTRACT</option>
            </datalist>
            <input type="submit" name="submit">
        </form>
        <div clas="result-box">
            <h1> Result <h1>
            <?php 
                if(isset($_GET["first_number"]) && isset($_GET["second_number"]) && isset($_GET["op"]))
                {
                    // echo $_GET["first_number"];
                    $num1 = $_GET['first_number'];
                    $num2 = $_GET["second_number"];
                    $operation = $_GET['op'];
                    switch($operation){
                        case "add":
                            echo (int)$num1 + (int)$num2;
                            break;
                        case "subtract":
                            echo (int)$num1 - (int)$num2;
                            break;
                    }
            }
            ?>
        </div>
    </div>

</body>

</html>