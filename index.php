<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badword</title>
</head>
<body>
    <h1>censuriamo parole non gradite</h1>

    <?php 
          $censura = $_GET['parola'];
          $paragrafo = 'Oggi sono uscito ed ho trovato  la mia macchina rigata su una fiancata !! Chi sarà stato ?? Sicuramente uno scemo, quello scemo ha osato rigato la mia macchina !! odio questo scemo';
        //   uso il metodo str_replace per censurare la parolaccia;

          $paragrafo = str_replace($censura,'****',$paragrafo);

          echo $paragrafo;

        //   ora con il metodo strlen misuro la lunghezza dei caratteri;

         
    ?>

    <h4><?php  echo "il mio paragrafo ha esattamente "." ". strlen($paragrafo)." "."caratteri"; ?></h4>

</body>
</html>