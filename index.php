<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    
        <?php
             $myParagraph = '<p>Esattamente come JavaScript, anche PHP è un tipo di linguaggio Case Sensitive,
             quindi facciamo attenzione a maiuscole e minuscole nei nomi delle variabili e delle funzioni.
             Se abbiamo un nome composto possiamo scegliere uno dei due stili: underscore $mia_variabile oppure camelCase $miaVariabile
             Attenzione: spazi e - non sono ammessi!!!</p><br/>';
             
            echo $myParagraph;
            $length = strlen($myParagraph);
            echo "La lunghezza ha <b>{$length} </b>caratteri<br/>";
            $wordToSearch = $_GET['word'];
            $myParagraph = str_replace($wordToSearch, '***', $myParagraph);
            echo $myParagraph;
            $length2 = strlen($myParagraph);
            echo "La lunghezza ha <b>{$length2} </b>caratteri<br/>";
            
        ?>

        <?php
        $phrase = '<h1>Se abbiamo un nome composto possiamo scegliere uno dei due stili: underscore $mia_varia </h1>';
        echo "$phrase";
        $lunghezza = strlen($phrase);
        echo"La lunghezza è $lunghezza";
        $phrase = str_ireplace('abbiamo', '***', $phrase);
        echo $phrase;
        $length3 =strlen($phrase);
        echo "La lunghezza $length3";
        ?>
    
    </main>
</body>
</html>
