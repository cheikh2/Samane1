<?php
/* Smarty version 3.1.30, created on 2020-08-03 22:03:59
  from "/var/www/html/Samane1/src/view/moral/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2889cf638bd7_25669585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12652a4001538d98b2d33e751a6670c04d8f3881' => 
    array (
      0 => '/var/www/html/Samane1/src/view/moral/edit.html',
      1 => 1596492236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2889cf638bd7_25669585 (Smarty_Internal_Template $_smarty_tpl) {
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
Moral/liste">Client Moral</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/liste">Comptes</a>
                </li>
            </ul>
        </div>
        <div class="container" style="margin-top:80px;">
            <div class="col-md-7 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des clients moraux</div>
                    <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Ninea</th>
                            <th>RC</th>
                            <th>Raison Sociale</th>
                            <th>Adresse</th>
                            <th>Action</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeMoral']->value, 'moral');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['moral']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['moral']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['moral']->value->getNomEmpl();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['moral']->value->getNinea();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['moral']->value->getRc();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['moral']->value->getRaisonSocial();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['moral']->value->getAdressEmpl();?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Moral/edit/<?php echo $_smarty_tpl->tpl_vars['moral']->value->getId();?>
"><button class="btn btn-primary">Editer</button></a></td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </table>
                </div>
            </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulaire de gestion des clients moraux</div>
                    <div class="panel-body">
                    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Moral/update">

                        <div class="form-group">
                            <label for="">ID</label>
                            <input class="form-control" readonly type="text" name="id"required value="<?php echo $_smarty_tpl->tpl_vars['moral']->value->getId();?>
">
                        </div>

                        <div class="form-group">
                            <label for="">Nom</label>
                            <input class="form-control" type="text" name="nomEmpl"required value="<?php echo $_smarty_tpl->tpl_vars['moral']->value->getNomEmpl();?>
">
                        </div>
                
                        <div class="form-group">
                            <label for="">Ninea</label>
                            <input class="form-control" type="text" name="ninea" required value="<?php echo $_smarty_tpl->tpl_vars['moral']->value->getNinea();?>
">
                        </div>
                
                        <div class="form-group">
                            <label for="">Registre de commerce</label>
                            <input class="form-control" type="text" name="rc" required value="<?php echo $_smarty_tpl->tpl_vars['moral']->value->getRc();?>
">
                        </div>
                
                        <div class="form-group">
                            <label for="">Raison Sociale</label>
                            <input class="form-control" type="text" name="raisonSocial" required value="<?php echo $_smarty_tpl->tpl_vars['moral']->value->getRaisonSocial();?>
">
                        </div>
                
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input class="form-control" type="text" name="adressEmpl" required value="<?php echo $_smarty_tpl->tpl_vars['moral']->value->getAdressEmpl();?>
">
                        </div>
                
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="modifier" value="Modifier">
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annule">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
}
