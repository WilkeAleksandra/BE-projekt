<?php
/* Smarty version 3.1.32, created on 2018-10-27 19:23:00
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\checkout\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd49ef4a1de75_03634481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5464e5a1c83b72200274af18757589dfd127c428' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\checkout\\_partials\\login-form.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd49ef4a1de75_03634481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19676479675bd49ef4a17d27_08128445', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'form_buttons'} */
class Block_19676479675bd49ef4a17d27_08128445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_19676479675bd49ef4a17d27_08128445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
}
