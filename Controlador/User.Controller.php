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
				$_SESSION['user']=$dato['Nombre'];
				$_SESSION['tipo']=$dato['Tipo'];
				$smarty->assign('usuario',$_SESSION['user']);
				$smarty->assign('tipo',$_SESSION['tipo']);
				$smarty->display('Master.tpl'); 
			} 
			else 
			{
				# code...
				$smarty->display('Master.tpl'); 
			}


            $smarty=new Smarty();
           // $smarty->caching=true;
            //$smarty->display('Master.tpl'); 
       }
    }
?>