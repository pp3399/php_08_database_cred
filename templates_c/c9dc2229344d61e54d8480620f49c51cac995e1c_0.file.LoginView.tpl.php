<?php
/* Smarty version 4.1.0, created on 2022-04-04 15:37:05
  from 'B:\Documents K\xampp\htdocs\php_08_database_cred\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624af48112edf7_63559491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9dc2229344d61e54d8480620f49c51cac995e1c' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_08_database_cred\\app\\views\\LoginView.tpl',
      1 => 1648707331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624af48112edf7_63559491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1535612858624af48110be99_62625512', 'footer');
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2046166250624af481117969_89711254', 'wrapper');
?>
     
   
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1751187099624af4811196f9_28780325', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1535612858624af48110be99_62625512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1535612858624af48110be99_62625512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_2046166250624af481117969_89711254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_2046166250624af481117969_89711254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Zaloguj się</h2>   <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1751187099624af4811196f9_28780325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1751187099624af4811196f9_28780325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section>

        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <label for="id_login">Login</label>
                    <input type="text" name="login" id="id_login" placeholder="Login" value="" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <label for="id_pass">Hasło</label>
                    <input type="password" name="pass" id="id_pass" placeholder="Hasło"  />
                </div>



                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>

                    </ul>
                </div>
            </div>
        </form>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
<?php
}
}
/* {/block 'content'} */
}
