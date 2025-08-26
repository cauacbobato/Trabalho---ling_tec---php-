
<?php
session_start();
// dados "corretos" do sistema
$usuario_correto="caua";
$senha_correta="0785";
$token_valido="caua0785";

if($_SERVER["REQUEST_METHOD"]=="POST"){
   $usuario=$_POST["usuario"];
   $senha=$_POST["senha"];
   $token=$_POST["token"];

   if(($usuario==$usuario_correto && $senha==$senha_correta) || $token==$token_valido){
     echo "<p style='color:green'>✅ Acesso permitido!</p>";
   }else{
     echo "<p style='color:red'>❌ Acesso negado!</p>";
   }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>cadastro simples</title>
<style>
body{
 background:#f2f2f2;
 font-family:Arial, sans-serif;
}
h2{
color:blue;text-align:center;
}
form {border:5px none;padding:10px;margin:20px auto;width:250px;background:white;}
input{margin:10px;padding:5px;}
button{background:blue;color:white;padding:10px;width:250px;border:none;cursor:pointer;}
</style>
</head>
<body>

<h2>Sistema de Cadastro</h2>

<form method="post">
Usuario:<br>
<input type="text" name="usuario"><br>
Senha:<br>
<input type="password" name="senha"><br>
Token:<br>
<input type="text" name="token"><br>
<button type="submit">Entrar</button>
</form>

</body>
</html>