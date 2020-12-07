<html>
    <body>
        <?php
            $password = "ciao";

            if ($_POST["pssw"] == $password){
                echo "Benvenuto " . $_POST["nome"];
            }else{
                echo "password non corretta";
            }
        ?>
        <br/>
        <a href="form.php">login</a>
    </body>
</html>