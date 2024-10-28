<?php
   session_start(); // inicializar sessões
   include('funcoes.php'); // chamar o ficheiro funções.php
   $conexao = conexao();  // chamar a função de conexao

  // criação de variáveis globais para a definição de sessões
   global $username;
   global $password;

   $username=$_POST['user'];
   $password=$_POST['password'];

  // echo $username;
   //echo $password;

   $querysql="SELECT * FROM administrador WHERE username='$username' AND password='$password'";

  //echo $querysql;

$resultado=mysqli_query($conexao,$querysql); //executa a consulta e coloca o resulta na variável $resultado
  
   if($resultado) //se a variável $resultado existe
     {
         $linhas=mysqli_fetch_assoc($resultado);
          if($linhas!=0) 
   {
     $_SESSION['user']=$username;
     echo"<script> alert(\"Login efetuado com sucesso!\")</script>";

    redireciona("../encomendas","",0);
}
    
   else 
{
echo"<script> alert(\"Username ou password inválidos!\")</script>";

    redireciona("../encomendas","",0);
}
       
}
else
{

    echo"Serviço indisponível, por favor tente mais tarde!";
    redireciona("../encomendas","",0);

} 

?>