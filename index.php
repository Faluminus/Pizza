<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="picker">
            <h1 claas="h1">Choose your pizza</h1>
            <form action="pizza.php" method ="post">
                <label for="salami">Salami</label>
                <input type="checkbox" class="kkk" name="salami" id="salami">
                <label for="mozarela">Mozarela</label>
                <input type="checkbox"class="kkk" name="mozarela" id="mozarela">
                <label for="basil">Basil</label>
                <input type="checkbox" class="kkk" name="basil" id="basil">
                <label for="tomato">Tomato</label>
                <input type="checkbox" class="kkk" name="tomato" id="tomato">
                <label for="spinach">Spinach</label>
                <input type="checkbox" class="kkk" name="spinach" id="spinach">
                <label for="ananas">Ananas</label>
                <input type="checkbox" class="kkk" name="ananas" id="ananas">
                <label for="carolina_reaper">Carolina Reaper</label>
                <input type="checkbox" class="kkk" name="carolina_reaper" id="carolina_reaper">
                <label for="marinera_sauce">Marinera Sauce</label>
                <input type="checkbox" class="kkk" name="marinera_sauce" id="marinara_sauce">
                <p class="gap"></p>
                <button class="kkk" id="submit">Submit</input>
            </form>
        </div>
        <div class="pizza_wrap">
            <div class="pizza"></div>
        </div>
    </main>
</body>
</html>