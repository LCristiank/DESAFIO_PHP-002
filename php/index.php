<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomização</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php 
    $randNumber = rand(0, 100);
        echo <<< RANDOM
        
            <div class="cont-response">

                <h1> Trabalhando com Randomização </h1>
                <p> Gerando um número aleatório entre 0 e 100 ....</p>
                <p> O número aleatório é <strong>$randNumber</strong> </p>

            <form action="index.php">
                <button type="submit"> Randomizar </button>
            </form>
        
            </div>
        RANDOM;
    ?>


    
</body>
</html>