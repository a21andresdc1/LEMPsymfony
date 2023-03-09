<?php
/* Smarty version 4.2.1, created on 2023-03-09 18:49:15
  from '/var/www/html/prestashop/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640a1c1b1f7e42_55246690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21382260f9113319fe8f8e83502de73276aba2a' => 
    array (
      0 => '/var/www/html/prestashop/prestashop/themes/classic/templates/page.tpl',
      1 => 1671894450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640a1c1b1f7e42_55246690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121511857640a1c1b1f4833_99977882', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2122437086640a1c1b1f50f6_67856257 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_699261872640a1c1b1f4c41_64766399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122437086640a1c1b1f50f6_67856257', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_285863905640a1c1b1f6366_92092692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1071095997640a1c1b1f68c4_06370275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2009488308640a1c1b1f5f02_20579929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285863905640a1c1b1f6366_92092692', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1071095997640a1c1b1f68c4_06370275', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_409420532640a1c1b1f7437_86156147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_244066158640a1c1b1f70d3_89575886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_409420532640a1c1b1f7437_86156147', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_121511857640a1c1b1f4833_99977882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_121511857640a1c1b1f4833_99977882',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_699261872640a1c1b1f4c41_64766399',
  ),
  'page_title' => 
  array (
    0 => 'Block_2122437086640a1c1b1f50f6_67856257',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2009488308640a1c1b1f5f02_20579929',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_285863905640a1c1b1f6366_92092692',
  ),
  'page_content' => 
  array (
    0 => 'Block_1071095997640a1c1b1f68c4_06370275',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_244066158640a1c1b1f70d3_89575886',
  ),
  'page_footer' => 
  array (
    0 => 'Block_409420532640a1c1b1f7437_86156147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_699261872640a1c1b1f4c41_64766399', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2009488308640a1c1b1f5f02_20579929', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_244066158640a1c1b1f70d3_89575886', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
