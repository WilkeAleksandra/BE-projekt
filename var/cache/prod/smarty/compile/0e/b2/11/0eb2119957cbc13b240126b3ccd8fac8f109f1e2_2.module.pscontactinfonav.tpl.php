<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-24 22:26:02
=======
/* Smarty version 3.1.32, created on 2018-10-25 13:49:21
>>>>>>> dorota
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd0d55a5716f9_05279544',
=======
  'unifunc' => 'content_5bd1adc1401af9_11374075',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1539604014,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd0d55a5716f9_05279544 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd1adc1401af9_11374075 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
?><div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php }?>
  </div>
</div>
<?php }
}
