<?php
/* Smarty version 4.1.0, created on 2022-04-04 15:37:05
  from 'B:\Documents K\xampp\htdocs\php_08_database_cred\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624af4811839e0_07921898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b409eb3d5b950b56e6f5009bc9d45501cd3865' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_08_database_cred\\app\\views\\templates\\main.tpl',
      1 => 1648707625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624af4811839e0_07921898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
        Solid State by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/style.css">

            <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>


          


    </head>


    <body class="is-preload">
        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <h1>SuperKalkulator</h1>
            </header>



            <!-- Wrapper -->
            <section id="wrapper">
                <header>
                    <div class="inner">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2133441496624af48117cf34_75890396', 'wrapper');
?>
                  
                    </div>
                </header>

                <!-- Content -->
                <div class="wrapper" style="margin: 0em">
                    <div class="inner">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1999379729624af48117fbc2_32252128', 'content');
?>

                    </div>
                </div>

            </section>

            <!-- Footer -->
            <section id="footer">
                <div class="inner">


                    <ul class="copyright">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8247897624af481181a87_22331210', 'footer');
?>


                    </ul>
                </div>
            </section>

        </div>


    </body>
</html><?php }
/* {block 'wrapper'} */
class Block_2133441496624af48117cf34_75890396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_2133441496624af48117cf34_75890396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1999379729624af48117fbc2_32252128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1999379729624af48117fbc2_32252128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_8247897624af481181a87_22331210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8247897624af481181a87_22331210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
