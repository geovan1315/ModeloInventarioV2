<?php
	Class Usuarios
	{
		public function BuscarUsuario($user, $pass, $tipo)
		{
			$usuario = new Conexion();
			$query="SELECT * FROM `usuarios` WHERE `Nombre`='$user' AND `Password`='$pass' AND `Tipo`='$tipo';";

			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>