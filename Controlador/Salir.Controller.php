<?php
	class Salir
	{
		public function CerrarSesion()
		{
			$smarty=new Smarty();
			session_start();
			session_destroy();
			session_unset();
			$smarty->display('Master.tpl');
		}
	}
?>