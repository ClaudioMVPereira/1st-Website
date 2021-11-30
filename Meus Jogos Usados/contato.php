<?php 
  <?php 
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensCoagem = $_POST['mensagem'];

  //conexao com Database
  $conn = new mysqli('localhost','root','','Contato');
  if($conn->connect_error){
      die('Conexão Falhou : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into registration(nome, email, mensagem) 
      values (?, ?, ?)");
      $stmt->bind_param("sss", $name, $email, $mensagem);
      $execval = $stmt->execute();
      echo "Obrigado pelo contato, retornaremos assim que possível";
      $stmt->close();
      $conn->close();
  }
?>
