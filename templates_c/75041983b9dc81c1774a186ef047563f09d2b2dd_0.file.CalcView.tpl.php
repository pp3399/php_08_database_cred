<?php
/* Smarty version 4.1.0, created on 2022-04-01 11:58:47
  from 'B:\Documents K\xampp\htdocs\php_07_database_cred\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6246ccd77d3b93_55861568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75041983b9dc81c1774a186ef047563f09d2b2dd' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_07_database_cred\\app\\views\\CalcView.tpl',
      1 => 1648721936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6246ccd77d3b93_55861568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20310045686246ccd77bdd42_55928093', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20899145416246ccd77bf5a8_13487377', 'wrapper');
?>
     

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13147628846246ccd77c07b2_57116537', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_20310045686246ccd77bdd42_55928093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20310045686246ccd77bdd42_55928093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_20899145416246ccd77bf5a8_13487377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_20899145416246ccd77bf5a8_13487377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Kalkulator kredytowy</h2>
    <p>Wylicz ratę kredytu</p> <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_13147628846246ccd77c07b2_57116537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13147628846246ccd77c07b2_57116537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <p> użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
        
        <section>

            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="amount">Kwota</label>
                        <input type="text" name="amt" id="amt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amt;?>
"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="years">Liczba lat</label>
                        <input type="text" name="yrs" id="yrs" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->yrs;?>
"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="rate">Oprocentowanie (w %)</label>
                        <input type="text" name="rt" id="rt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rt;?>
"  />
                    </div>


                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>

                        </ul>
                    </div>
                </div>
            </form>
        </section>

        <section>
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showPage1"  class="button">Ultra TAJNA strona</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="button">Wyloguj się</a></li>
            </ul>


        </section>


        <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <p> </p>

        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
            <div class="res">
                Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł
            </div>
        <?php }?>

    <?php
}
}
/* {/block 'content'} */
}
