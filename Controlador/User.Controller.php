<?php
	class User
    {
	   public function Login()
       {
			$smarty=new Smarty();
			$consulta=new Usuarios();
			$user=$_POST['usuario'];
			$pass=$_POST['pass'];
			$tipo=$_POST['tipo'];

			$resultado=$consulta->BuscarUsuario($user, $pass, $tipo);
			
			if ($resultado->num_rows==1) 
			{
				$lib=new Librerias();
				$dato=$lib->DatosRow($resultado);
				session_start();

				if ($dato['Estado']) 
				{
					$_SESSION['user']=$dato['Nombre'];
					$_SESSION['tipo']=$dato['Tipo'];

					$smarty->assign('e','true');
					$smarty->assign('vista','null');
					$smarty->assign('usuario',$_SESSION['user']);
					$smarty->assign('tipo',$_SESSION['tipo']);
					$smarty->display('Master.tpl'); 
				}
				else 
				{
					$smarty->display('Master.tpl'); 
				}
			} 
			else 
			{
				$smarty->display('Master.tpl'); 
			}
       }
    }
?>