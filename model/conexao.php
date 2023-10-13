<?php

    function conectar(){

    $sth = mysqli_connect('localhost','root', '', 'jquery_tutorial');
    
	if(!$sth){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $sth ;
    }
    

    


}
