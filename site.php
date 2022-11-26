 
    <?php
        $conecta=new mysqli("127.0.0.1", "root", "","formulario");
        $nome= $_POST["nome"];
        $email= $_POST["email"];
        $comentario= $_POST["comentario"];

        $comando="INSERT into usuario(nome, email, mensagem) VALUES('$nome', '$email', '$comentario')";

        if(mysqli_query($conecta, $comando)){
            echo "Deu certo";
        }else{
            echo"Deu errado";
        }
    ?>
