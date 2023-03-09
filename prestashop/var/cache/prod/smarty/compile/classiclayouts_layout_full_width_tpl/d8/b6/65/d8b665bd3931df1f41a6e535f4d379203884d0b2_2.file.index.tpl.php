<?php
/* Smarty version 4.2.1, created on 2023-03-09 18:49:15
  from '/var/www/html/prestashop/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640a1c1b1ed1e3_67606497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b665bd3931df1f41a6e535f4d379203884d0b2' => 
    array (
      0 => '/var/www/html/prestashop/prestashop/themes/classic/templates/index.tpl',
      1 => 1671894450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640a1c1b1ed1e3_67606497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_580740707640a1c1b1eaca7_62054230', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_650269906640a1c1b1eb429_82501517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_350223428640a1c1b1ec068_67459174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2132248228640a1c1b1ebcc4_29266024 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_350223428640a1c1b1ec068_67459174', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_580740707640a1c1b1eaca7_62054230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_580740707640a1c1b1eaca7_62054230',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_650269906640a1c1b1eb429_82501517',
  ),
  'page_content' => 
  array (
    0 => 'Block_2132248228640a1c1b1ebcc4_29266024',
  ),
  'hook_home' => 
  array (
    0 => 'Block_350223428640a1c1b1ec068_67459174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_650269906640a1c1b1eb429_82501517', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2132248228640a1c1b1ebcc4_29266024', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
