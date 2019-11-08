 <form>
     <input type="text" name="nome">
     <input type="date" name="nascimento">
     <input type="submit" value="enviar">

 </form>
 <?php

    // $key esta pegando o nome dos campos do form
    // $value esta pegando o valor digitado pelo usuario no campo.

    if (isset($_GET)) {
        foreach ($_GET as $key => $value) {
            echo "nome do campo : " . $key;
            echo "Valor do campo: " . $value;
            echo "<hr>";
        }
    }




    ?>