<?php
	class Menu
	{
		public Function CargarOpcion()
		{
			$smarty=new Smarty();
			session_start();
			
			$_SESSION['opcion']=$_GET['opcion'];
			
			$smarty->assign('e','true');
			$smarty->assign('vista',$_SESSION['opcion']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('Master.tpl'); 
			
		}
	}
?>