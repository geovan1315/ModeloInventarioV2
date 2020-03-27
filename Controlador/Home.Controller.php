<?php
	class Home 
    {
        //include_once('Framework/Smarty/SmartySetup.php'); 
        public function Inicio()
        {
            $smarty =new Smarty();
            $smarty->caching=true;
            $smarty->display('Master.tpl');
        }
    }
?>