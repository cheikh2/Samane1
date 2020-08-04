<?php
/* Smarty version 3.1.30, created on 2020-08-03 16:02:55
  from "/var/www/html/Samane1/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f28352f1070a4_11095952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e5d1e8c7623ebb1cd7ebea97878cd8c2b154fc' => 
    array (
      0 => '/var/www/html/Samane1/src/view/welcome/index.html',
      1 => 1596470571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f28352f1070a4_11095952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css">
    </head>
    <body onload="load_design()">
        <div class="nav navbar navbar-inverse navbar-fixed-top">
            <ul class="nav navbar-nav">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Physique/liste">Client Physique</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Physique/add">Ajouter Physique</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Moral/liste">Client Moral</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/liste">Comptes</a>
                </li>
            </ul>
        </div>
       
    </body>
</html>
<?php }
}
