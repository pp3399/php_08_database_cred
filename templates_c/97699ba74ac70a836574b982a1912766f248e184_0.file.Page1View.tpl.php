<?php
/* Smarty version 4.1.0, created on 2022-04-01 17:13:24
  from 'B:\Documents K\xampp\htdocs\php_07_database_cred\app\views\Page1View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62471694b93f16_96527426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97699ba74ac70a836574b982a1912766f248e184' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_07_database_cred\\app\\views\\Page1View.tpl',
      1 => 1648826003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:database_records.tpl' => 1,
  ),
),false)) {
function content_62471694b93f16_96527426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162951268062471694b6bad9_24171613', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39268501362471694b6d645_23779873', 'wrapper');
?>
     

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114436583962471694b6e816_26162896', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_162951268062471694b6bad9_24171613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_162951268062471694b6bad9_24171613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_39268501362471694b6d645_23779873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_39268501362471694b6d645_23779873',
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
class Block_114436583962471694b6e816_26162896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114436583962471694b6e816_26162896',
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
