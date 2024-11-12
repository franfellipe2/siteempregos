<!DOCTYPE html>
<!DOCTYPE html>
<?php
include './config.php';
$post_enviado = $_SERVER["REQUEST_METHOD"] == "POST";
$erro = "";
$success = "";
if($post_enviado){
    $conn = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
    if($conn->connect_error){
        $erro = "<p style='color: RED'>Ecco ao conectar com o banco de dados: ".$conn->connect_errno."</p>"; 
    }else{
         $email = $_POST['email'];         
         $senha = $_POST['senha'];
         $erro_msg = "";
         if(empty($email) || empty($senha)){
            $erro_msg .= empty($email)? "Email não informado\n" : "";
            $erro_msg .= empty($senha)? "Senha não informada\n" : "";            
            $erro =  "<p style='color: RED'>".$erro_msg."</p>"; 
         }else{
             $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
             $tipo = TIPO_USUARIO_CANDIDATO;            
             $sql = "INSERT INTO usuarios (email, senha, tipo) VALUES ('$email', '$senhaHash', '$tipo')";  
             try{
                if($conn->query($sql) === TRUE){
                    $success =  "<p style='color: GREEN'>Candidato cadastrado com sucesso</p>"; 
                }
             } catch (mysqli_sql_exception $e){
                  $erro =  "<p style='color: RED'>Erro: ".$e->getMessage()."</p>";
             }            
         }              
    }   
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Candidato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <h2>Cadastro Candidato</h2>
         <?php 
         echo $erro;        
         echo $success;
         ?>        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>