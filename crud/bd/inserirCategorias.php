<?php


require_once(SRC.'crud/bd/conexaoMysql.php');


function inserir($arrayCategorias){
    
     $sql = "insert into tblcategorias
             (
             tipo
             
             )
             
             values
             (
             '".$arrayCategorias['tipo']."'
             
             
             )
     
     
     ";
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao , $sql))
        return true;
    
    else
        return false;
    
}

    
   






?>