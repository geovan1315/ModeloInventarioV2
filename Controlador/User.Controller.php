<?php
	class User
    {
	   public function Login()
       {
            $smarty=new Smarty();
            $smarty->caching=true;
            $smarty->display('Prueba.tpl'); 
       }
    }
?>