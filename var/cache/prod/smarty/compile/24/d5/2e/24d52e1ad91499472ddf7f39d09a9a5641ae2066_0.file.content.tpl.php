<?php
/* Smarty version 3.1.32, created on 2018-10-29 22:28:32
  from 'C:\wamp64\www\BE-projekt\admin866htnwy5\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd77b808b1f39_19398978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d52e1ad91499472ddf7f39d09a9a5641ae2066' => 
    array (
      0 => 'C:\\wamp64\\www\\BE-projekt\\admin866htnwy5\\themes\\new-theme\\template\\content.tpl',
      1 => 1540463672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd77b808b1f39_19398978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}