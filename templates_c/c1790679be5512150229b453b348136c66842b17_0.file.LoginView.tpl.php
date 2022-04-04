<?php
/* Smarty version 4.1.0, created on 2022-04-01 11:58:44
  from 'B:\Documents K\xampp\htdocs\php_07_database_cred\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6246ccd4666b85_75327401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1790679be5512150229b453b348136c66842b17' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_07_database_cred\\app\\views\\LoginView.tpl',
      1 => 1648707331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6246ccd4666b85_75327401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15223327766246ccd4656701_13572699', 'footer');
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18474049896246ccd46585d1_14009679', 'wrapper');
?>
     
   
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1243701246246ccd4659832_73490419', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_15223327766246ccd4656701_13572699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15223327766246ccd4656701_13572699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_18474049896246ccd46585d1_14009679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_18474049896246ccd46585d1_14009679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Zaloguj się</h2>   <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1243701246246ccd4659832_73490419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1243701246246ccd4659832_73490419',
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
