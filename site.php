 
    <?php
        $conecta=new mysqli("127.0.0.1", "root", "","basedados");
        $nome= $_POST["nome"];
        $email= $_POST["email"];
        $comentario= $_POST["comentario"];

        $comando="INSERT into dados(nome, email, comentario) VALUES('$nome', '$email', '$comentario')";

        if(mysqli_query($conecta, $comando)){
          Header("location:http://localhost/sitedepoimentos.php");
        }
    ?>
