<?php
/* Smarty version 4.1.0, created on 2022-04-04 15:37:16
  from 'B:\Documents K\xampp\htdocs\php_08_database_cred\app\views\Page1View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624af48c840914_10763019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8df810b2feaf88e8dbb9c6d7c59630542b14dc5' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_08_database_cred\\app\\views\\Page1View.tpl',
      1 => 1648826003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:database_records.tpl' => 1,
  ),
),false)) {
function content_624af48c840914_10763019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300434519624af48c821b61_51396745', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294717358624af48c825738_54100376', 'wrapper');
?>
     

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1360749895624af48c827609_03559905', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_300434519624af48c821b61_51396745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_300434519624af48c821b61_51396745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_1294717358624af48c825738_54100376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_1294717358624af48c825738_54100376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Inna strona</h2>
    <p>Witam na kolejnej stronie</p> <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1360749895624af48c827609_03559905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1360749895624af48c827609_03559905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <p> użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
        <section>

            <div class="row">
                <div class="col-6 col-12-medium">
                    <h4>Lista rzeczy, które możesz zrobić:</h4>
                    <ul>
                        <li>Zamknąć przeglądarkę</li>
                        <li>Wrócić do poprzedniej strony</li>
                        <li>Wylogować się</li>
                    </ul>
                </div>
            </div>    

            <div class="row">
                <h2> SŁODKI KOTEK DLA ADMINA </h2>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/cuteCat.jpg" alt="cuteCat"/>
            </div>
            <p> </p>
        </section>


        <section>
            <div class="row">
                <h3> WYNIKI Z BAZY DANYCH: </h3>
                    <?php $_smarty_tpl->_subTemplateRender('file:database_records.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
    </section>




        <section>
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute"  class="button">Powrót do kalkulatora</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="button primary">Wyloguj się</a></li>
            </ul>
        </section>

    <?php
}
}
/* {/block 'content'} */
}
