<?php
/* Smarty version 3.1.39, created on 2021-08-04 04:05:59
  from 'C:\xampp\htdocs\php_avanzado\tp_n6\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6109f607733196_66758092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffefdeb24b84020b51f24d15670ca7041692e58d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_avanzado\\tp_n6\\index.tpl',
      1 => 1628042757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6109f607733196_66758092 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <table border="1">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayPersonajeCompleto']->value, 'datos');
$_smarty_tpl->tpl_vars['datos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['name'];?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    
</body>
</html><?php }
}
