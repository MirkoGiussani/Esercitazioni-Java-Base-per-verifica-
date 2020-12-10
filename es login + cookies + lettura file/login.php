<html>
    <body>
        <?php
            $file = fopen("credenziali.txt", "r");
            if(isset($file)){
                while(!feof($file)){
                    $line = fgets($file);
                    $nomeUtente = substr($line, 0, strpos($line, ":"));
                    $nomePssw = substr($line, strpos($line, ":") + 1, strlen($line));
                }
            }else{
                echo "il file non esiste";
            }

            $password = "ciao";

            if(isset($_COOKIE["utente"])){
                echo "Benvenuto " . $_COOKIE["utente"];
                echo "</br>";
            }else if ($_POST["pssw"] == $nomePssw && $_POST["utente"] == $nomeUtente){
                echo "Benvenuto " . $_POST["utente"];
                setcookie("utente", $_POST["utente"], time() + (60*60));
                echo "</br>";
            }else{
                echo "password errata";
            }
        ?>
    </body>
</html>