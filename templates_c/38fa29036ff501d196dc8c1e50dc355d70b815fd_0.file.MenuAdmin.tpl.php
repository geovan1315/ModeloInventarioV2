<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-02 06:24:37
  from 'C:\xampp\htdocs\InventarioV2\ModeloInventarioV2\templates\MenuAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e856905d5aa73_44274373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38fa29036ff501d196dc8c1e50dc355d70b815fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioV2\\ModeloInventarioV2\\templates\\MenuAdmin.tpl',
      1 => 1585801459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e856905d5aa73_44274373 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<div class="collection">
		 <a href="?controller=Menu&action=CargarOpcion&opcion=CrearUsuario" class="collection-item">Crear Usuario</a>
		 <a href="#!" class="collection-item">Habilitar / Deshabilitar</a>
		 <a href="#!" class="collection-item">Ver Inventario</a>
		 <a href="#!" class="collection-item">Productos con mas salidas</a>
		 <a href="#!" class="collection-item">Productos con menos salidas</a>
		  <a href="#!" class="collection-item">Productos agotados</a>
  </div>
</div><?php }
}
