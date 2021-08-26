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
    
       
        <!-- <?php
         $name = 'Perizat';
        echo '<h1>Ciao ' . $name .'!</h1>';
        ?>

    <h1>Ciao <?php echo $name?></h1>;
    <?php
    echo "<h1> Ciao {$name}!</h1>";
    echo   12;
    ?> -->


    <!-- http://localhost:8888/php-badwords/bonus.php?name=michele  -->
    <?php
     $userName =$_GET["name"];
     $userName =ucfirst($userName);

     ?>
     <h1>Ciao <?php echo $userName ?>!</h1> 

     <?php
     $str ='Hello wordl, I am using PHP';
     $str = strtoupper($str);
     echo $str;
     ?>

     <?php
     $toLowerCase= '<h3>HELLO WORDL, I AM USING PHP</h3>';
     $toLowerCase =strtolower($toLowerCase);
     echo $toLowerCase;
     ?>

     <?php
       
       $string ='Esattamente come JavaScript, anche PHP è un tipo di linguaggio Case Sensitive,
       quindi facciamo attenzione a maiuscole<br/>';
       $string=str_ireplace('Quindi', '***', $string);
       echo $string;
        
    //Eliminare gli spazi 'laterali' ad una stringa

    $parola = '  Hello World<br/>';

    $parola = trim($parola);
    echo $parola;
    $length = strlen($parola);
    echo "La stringa ha <b>$length </b> caratteri";
      ?>  
    <?php
    $loremText ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eum voluptatum similique, excepturi maxime nam repellat recusandae ipsa ullam ratione illo porro eveniet molestiae qui quidem velit aut? Reprehenderit, commodi.';
    $parolaDaCercare =$_GET['parola'];
    $result =stripos($loremText, $parolaDaCercare);
    if($result!== false){
      echo "La parola $parolaDaCercare esiste ed è in posizione $result";
    }else{
      echo"La parola $parolaDaCercare non esiste";
    }
    ?>
    </main>
</body>
</html>
