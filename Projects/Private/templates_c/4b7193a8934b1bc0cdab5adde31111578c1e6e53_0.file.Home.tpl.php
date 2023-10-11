<?php
/* Smarty version 4.3.4, created on 2023-10-11 10:07:09
  from '/var/www/html/View/Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652673cd8316c7_51519910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7193a8934b1bc0cdab5adde31111578c1e6e53' => 
    array (
      0 => '/var/www/html/View/Home.tpl',
      1 => 1697018828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652673cd8316c7_51519910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Smarty =::= <?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>

<table border="1" width="100%">
    <tr style="background:gray;color:white;font-weight:bold;">
        <td>Nom</td>
        <td>Prénom</td>
    </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'k');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['user']->value['nom'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['prenom'];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
