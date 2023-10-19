<?php

class event
{ 
    private  $id_evnt;
    private  $nom_event;
  private  $type_event;
   private  $date;
     private  $image;

     
    
public function __construct($id_evnt,$nom_event,$type_event,$date,$image){
    $this->id_evnt =$id_evnt;
    $this->nom_event = $nom_event;
    $this->type_event = $type_event;
     $this->date = $date;
         $this->image = $image;

       
   
}

public function getid_evnt(){
    return $this->id_evnt ;
}
public function getnom_event(){
    return $this->nom_event ;
}
public function gettype_event(){
    return $this->type_event ;
}
public function getdate(){
    return $this->date ;
}
public function getimage(){
    return $this->image ;
}


    
}
?>