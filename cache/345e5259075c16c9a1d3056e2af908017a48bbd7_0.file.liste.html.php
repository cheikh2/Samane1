<?php
/* Smarty version 3.1.30, created on 2020-08-03 23:18:45
  from "/var/www/html/Samane1/src/view/compte/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f289b55b71977_78877595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345e5259075c16c9a1d3056e2af908017a48bbd7' => 
    array (
      0 => '/var/www/html/Samane1/src/view/compte/liste.html',
      1 => 1596496596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f289b55b71977_78877595 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="container" style="margin-top:80px;">
            <div class="col-md-9 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des clients moraux</div>
                    <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>NumAgence</th>
                            <th>NumCompte</th>
                            <th>Rib</th>
                            <th>Montant</th>
                            <th>Date de creation</th>
                            <th>Debut Bloc</th>
                            <th>Fin Bloc</th>
                            <th>Moral</th>
                            <th>Physique</th>
                            <th>Action</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeCompte']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumAgence();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumCompte();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getRib();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getMontant();?>
</td>
                            <td><?php echo date_format($_smarty_tpl->tpl_vars['compte']->value->getCreatedAt(),'Ymd H: i: s');?>
 </td>
                            <td><?php echo date_format($_smarty_tpl->tpl_vars['compte']->value->getDateDebut(),'Y/m/d');?>
 </td>
                            <td><?php echo date_format($_smarty_tpl->tpl_vars['compte']->value->getDateFin(),'Y/m/d');?>
 </td>  
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getMoral()->getNomEmpl();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getPhysique()->getPrenom();?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/edit/<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
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
                    <div class="panel-heading">Formulaire de gestion des comptes</div>
                    <div class="panel-body">
                    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/insert">

                        <div class="form-group">
                            <label for="">Numero Agence</label>
                            <input class="form-control" type="text" name="numAgence"required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Numero Compte</label>
                            <input class="form-control" type="text" name="numCompte" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Cle Rib</label>
                            <input class="form-control" type="text" name="rib" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Montant</label>
                            <input class="form-control" type="text" name="montant" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Debut blocage</label>
                            <input class="form-control" type="date" name="dateDebut" required>
                        </div>

                        <div class="form-group">
                            <label for="">Fin blocage</label>
                            <input class="form-control" type="date" name="dateFin" required>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <label for="">Employeur</label>
                            <select class="form-control" name="idmoral">
                                <option value="">Veuillez choisir</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeMoral']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
"><td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNomEmpl();?>
</td></option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <label for="">Employeur</label>
                            <select class="form-control" name="idphysique">
                                <option value="">Veuillez choisir</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePhysique']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
"><td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNom();?>
</td></option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="valider" value="Envoyer">
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
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
