<?php
/* Smarty version 4.1.0, created on 2022-04-02 10:28:54
  from 'B:\Documents K\xampp\htdocs\php_07_database_cred\app\views\templates\database_records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624809468d7e64_59616072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abb22c5f23b0472503f2d3db1f541ff9787c3bca' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_07_database_cred\\app\\views\\templates\\database_records.tpl',
      1 => 1648888133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624809468d7e64_59616072 (Smarty_Internal_Template $_smarty_tpl) {
?><ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
        <li><b>idwynik</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['idwynik'];?>
 ||| <b>kwota</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['kwota'];?>
zł ||| <b>liczba lat</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['liczba_lat'];?>
 ||| <b>procent</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['procent'];?>
% ||| <b>rata</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['rata'];?>
 zł ||| <b>data</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol><?php }
}
