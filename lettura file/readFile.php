<html>
    <body>
        <?php
            echo "<h2> Lettura file</h2>" . "</br>";
            $file = fopen("file.txt", "r");

            if(isset($file)){
                while(!feof($file)){    //leggo fino alla fine del file
                    $line = fgets($file);
                    $utente = substr($line, 0, strpos($line,":"));
                    $pssw = substr($line, strpos($line, ":") + 1, strlen($line));
                    echo "utente_" . $utente . "</br>";
                    echo "password_" . $pssw . "</br>";
                }
            } else{
                echo "file non esiste";
            }
        ?>
    </body>
</html>