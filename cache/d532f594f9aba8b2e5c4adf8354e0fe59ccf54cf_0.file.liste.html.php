<?php
/* Smarty version 3.1.30, created on 2020-08-03 16:02:11
  from "/var/www/html/Samane1/src/view/physique/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f283503a2cdb8_82688021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd532f594f9aba8b2e5c4adf8354e0fe59ccf54cf' => 
    array (
      0 => '/var/www/html/Samane1/src/view/physique/liste.html',
      1 => 1596470529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f283503a2cdb8_82688021 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Formulaire de gestion des clients moraux</div>
                <div class="panel-body">
            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Physique/insert">

                <div class="col-xs-12">      
                    <div class="col-sm-6 col-xs-12">
                        <label for="">Prenom</label>
                    <input class="form-control" type="text" name="prenom"required />
                      </div>

                    <div class="col-sm-6 col-xs-12">
                        <label for="">Nom</label>
                        <input class="form-control" type="text" name="nom" required />
                    </div>
                </div>

                <div class="col-xs-12">      
                    <div class="col-sm-6 col-xs-12">
                        <label for="">Adresse</label>
                        <input class="form-control" type="text" name="adress" required />
                      </div>

                    <div class="col-sm-6 col-xs-12">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" required />
                    </div>
                </div> 
                
                <div class="col-xs-12">      
                    <div class="col-sm-6 col-xs-12">
                        <label for="">Telephone</label>
                        <input class="form-control" type="text" name="telephone" required />
                      </div>

                    <div class="col-sm-6 col-xs-12">
                        <label for="">Sexe</label>
                        <input class="form-control" type="text" name="sexe" required />
                    </div>
                </div>

                <div class="col-xs-12">      
                    <div class="col-sm-6 col-xs-12">
                        <label for="">Profession</label>
                        <input class="form-control" type="text" name="profession" required />
                      </div>

                    <div class="col-sm-6 col-xs-12">
                        <label for="">CNI</label>
                        <input class="form-control" type="text" name="cni" required />
                    </div>
                </div>
        
                <div class="col-xs-12">      
                    <div class="col-sm-6 col-xs-12">
                        <label for="">Salaire</label>
                        <input class="form-control" type="text" name="salaire" required />
                      </div>

                    <div class="col-sm-6 col-xs-12">
                        <label for="">Employeur</label>
                        <select class="form-control" name="idmoral">
                            <option value="">Veuillez choisir</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeMoral']->value, 'physique');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['physique']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['physique']->value->getId();?>
"><td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getNomEmpl();?>
</td></option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>

                <div class="col-xs-12">  
                    <div class="col-sm-12 col-xs-12">
                        <label></label>
                            <button class="btn btn-success btn-block" type="submit" name="valider" value="Envoyer">Envoyer</button>
                            <button class="btn btn-default btn-block" type="submit" name="annuler" value="Annuler">Annuler</button>
                    </div>
                </div>

              </div>
            </form>
        </div>
    </div>
</div>
        <div class="container" style="margin-top:80px;">
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des clients moraux</div>
                    <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>getEmail</th>
                            <th>Telephone</th>
                            <th>Sexe</th>
                            <th>Profession</th>
                            <th>CNI</th>
                            <th>Salaire</th>
                            <th>Moral</th>
                            <th>Action</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePhysique']->value, 'physique');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['physique']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getPrenom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getAdress();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getEmail();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getTelephone();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getSexe();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getProfession();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getCni();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getSalaire();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['physique']->value->getMoral()->getNomEmpl();?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Physique/edit/<?php echo $_smarty_tpl->tpl_vars['physique']->value->getId();?>
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
    </body>
</html><?php }
}
