<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea - приготування чаю</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action="price.php" method="post">
            <h3>Виберіть об'єм</h3>
            <input type="range" value="50" min="50" max="1000" step="50" oninput="this.nextElementSibling.value = this.value">
            <input name="water" value="50" class="input-for-range" type="text" oninput="this.previousElementSibling.value = this.value">
            <h3>Скільки цукру?</h3>
            <input type="range" value="0" min="0" max="10" step="1" oninput="this.nextElementSibling.value = this.value">
            <input name="sugar" value="0" class="input-for-range" type="text" oninput="this.previousElementSibling.value = this.value">
            <h3>Виберіть міцність чаю</h3>
            <select name="teaStrong">
                <option value="2">Легкий</option>
                <option value="3">Середній</option>
                <option value="6">Міцний</option>
            </select><br>
            <h3>Бажаєте добавити лемончик?!</h3>
            <p><label><input type="radio" name="lemon" value="1" checked>Так (+5грн)</label></p>
            <p><label><input type="radio" name="lemon" value="2">Ні</label></p>
            <h3>Потрібний стаканчик?</h3>
            <p><label><input type="radio" name="cup" value="1" checked>Так (+5грн)</label></p>
            <p><label><input type="radio" name="cup" value="0">Ні, буду пити з рук</label></p>
            <button type="submit">Замовити чай</button>
        </form>
    </div>
</body>
</html>