<?php




function conexaoMysql()
{
    $server = 'localhost' ;
    $user = 'root';
    $password = 'bcd127' ;
    $database = 'dbjogos';
    
    
    
    if($conexao = mysqli_connect($server, $user , $password, $database))
     return    $conexao;
       
        
    else {
      
     
          return false;
    }
    
}


   













?>