<?php

    $conecta = new mysqli("127.0.0.1", "root", "", "AQUI COLOCAR O NOME DO BANCO DE VOCÊS");

?>

<?php

  $resultado = $conecta->query("SELECT * FROM NOME TABELA DE VOCÊS");
            
  while($query = $resultado->fetch_assoc()){
    echo "<hr>";
    echo "<p> <b> ". $query["NOME DA COLUNA DA TABELA DE VOCÊS QUE REPRESENTA O NOME"]. "</b> </p>";
    echo "<p> Comentário: </p>";
    echo "<p>". $query["NOME DA COLUNA DE VOCÊS QUE RPRESENTA O COMENTÁRIO"]. "</p>";
              

  }
            


  mysqli_close($conecta);
?>