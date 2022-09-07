<?php
/* Smarty version 3.1.39, created on 2022-09-07 17:16:53
  from 'C:\xampp\htdocs\tp_n6\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6318b5e5159d05_48797830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4aff2e858e7f33bbbab674dc693c5d1f6d1ab1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_n6\\templates\\index.tpl',
      1 => 1628217169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318b5e5159d05_48797830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tp_n6\\smarty\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div>
<h1>Personajes de la Serie Rick & Morty,<br>Ficha Técnica:</h1> 
</div>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personajes']->value, 'personaje');
$_smarty_tpl->tpl_vars['personaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personaje']->value) {
$_smarty_tpl->tpl_vars['personaje']->do_else = false;
?>
          <article class="tamaño">
           <div class="imagen" >
            <?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['personaje']->value->image),$_smarty_tpl);?>

            </div>
            <div class="detalle">
            <ul>
             <li>ID: <?php echo $_smarty_tpl->tpl_vars['personaje']->value->id;?>
</li>
              <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['personaje']->value->name;?>
</li>
             <li>Status: <?php echo $_smarty_tpl->tpl_vars['personaje']->value->status;?>
</li>
              <li>Species: <?php echo $_smarty_tpl->tpl_vars['personaje']->value->species;?>
</li>
              <li>Gender: <?php echo $_smarty_tpl->tpl_vars['personaje']->value->gender;?>
</li>
            </ul>
           </div>
          </article>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</div>
</body>
</html><?php }
}
