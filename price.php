<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
<?php
    $sugar = $_POST["sugar"];
    $cup = $_POST["cup"];
    $teaStrong = $_POST["teaStrong"];
    $water = $_POST["water"];
    $lemon = $_POST["lemon"];
    echo "<h1>Ваше замовлення:</h1>";
    echo "<h3>$water мл чаю</h3>";
    echo "<h3>$sugar ч.л. цукру</h3>";
    echo "<h3>$teaStrong хвилини пекетик чаю у воді на 250мл</h3>";
    $cup = $_POST["cup"];
    if($cup == 1){
        $cupPrice = 5;
        $waterHands = 250;
    }else{
        $waterHands = 50;
        $cupPrice = 0;
    }

?>
    <form action="tea.php" method="post">
        <input type="hidden" name="sugar" value="<?php echo"$sugar"; ?>">
        <input type="hidden" name="water" value="<?php echo"$water"; ?>">
        <input type="hidden" name="lemon" value="<?php echo"$lemon"; ?>">
        <input type="hidden" name="teaStrong" value="<?php echo"$teaStrong"; ?>">
        <input type="hidden" name="cup" value="<?php echo "$cup"; ?>">
        <input type="hidden" name="waterHands" value="<?php echo "$waterHands"; ?>">
        <?php
        if($lemon == "1"){
            $lemonPrice = 5;
        }else if($lemon == "2"){
            $lemonPrice = 0;
        }
        $waterPrice = $water/10;
        $price = $waterPrice+$lemonPrice+$sugar+$cupPrice;
            echo "<p>До сплати: $price грн</p>";
        ?>
        <button type="submit">Зробити чай</button>
        <a href="index.php">Назад</a>
    </form>
</div>
</body>
</html>