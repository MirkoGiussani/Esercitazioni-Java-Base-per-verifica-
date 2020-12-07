<html>
    <body>
            <form method="post">
                <h1>Aggiornamento pulsante</h1>
                <button type="submit" name="b1">Bottone 1</button>
                <button type="submit" name="b2">Bottone 2</button>   
            </form>

            <?php
                if(isset($_POST["b1"])){
                    echo "hai premuto il bottone 1";
                } 
                if(isset($_POST["b2"])){
                    echo "hai premuto il pulsante 2";
                }
            ?>
    </body>
</html>