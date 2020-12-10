<html>
    <body>
        <?php
            if(isset($_COOKIE["utente"])){
                header("Location: login.php");
            }  
        ?>

        

        <form action="login.php" method="post">
            utente<input type="text" placeholder="Inserisci nome utente" name="utente">
            password<input type="password" placeholder="Inserisci password" name="pssw">
            <button type="submit">Login</button>
        </form>
    </body>
</html>