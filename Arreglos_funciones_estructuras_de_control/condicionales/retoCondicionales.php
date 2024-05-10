<h1>¿ Puedo retirar mis donaciones de twitch ?</h1>
<p>Solo puedes retirar de twitch  si cuentas con mas de 100 usd</p>

<form action="retoCondicionales.php" method="post">
    <label for="dinero">Cuanto dinero tienes en tu cuenta de twitch</label>
    <input type="number" name="dinero" id="dinero">
    <button name="submit">Enviar</button>
</form>

<?php 
    if(isset($_POST['submit'])){

        $dineroActual = $_POST['dinero'];
        
        if($dineroActual > 100){
            echo "puedes retirar el dinero";
            
        }else{
            echo "todavia no puedes retirar el dinero";
        }
    }
?>