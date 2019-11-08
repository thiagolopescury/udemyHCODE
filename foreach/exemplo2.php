 <form>
     <input type="text" name="nome">
     <input type="date" name="nascimento">
     <input type="submit" value="enviar">

 </form>
 <?php

    if (isset($_GET)) {
        foreach ($_GET as $key => $value) {
            echo "nome do campo : " . $key;
            echo "Valor do campo: " . $value;
            echo "<hr>";
        }
    }




    ?>