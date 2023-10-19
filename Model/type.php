<?php
//include_once '../config.php';
class type
{ 
    private  $id;
    private  $nome_type;
  private  $discount;
 
     
    
public function __construct($id,$nome_type,$discount){
    $this->id = $id;
    $this->nome_type = $nome_type;
    $this->discount = $discount;
  
       
   
}

public function getid(){
    return $this->id ;
}
public function getnome_type(){
    return $this->nome_type ;
}
public function getdiscount(){
    return $this->discount ;
}



    
}
?>