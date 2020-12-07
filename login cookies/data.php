<html>
    <body>
        <?php
            $password = "ciao";
            if (isset($_COOKIE["user"])){
                echo "Benvenuto " . $_COOKIE["user"] . "</br>";
            }else{
                if($_POST["pssw"] == $password){
                    setcookie("user", $_POST["utente"], time() + (60*60));
                    echo "Benvenuto " . $_POST["utente"];
                }else{
                    echo "password errata";
                }
            }
        ?>
    </body>
</html>