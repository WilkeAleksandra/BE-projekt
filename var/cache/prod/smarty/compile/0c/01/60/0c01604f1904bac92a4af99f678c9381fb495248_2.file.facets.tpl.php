<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:07
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:12
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:15
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\catalog\_partials\facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fb8baf85_21176023',
=======
  'unifunc' => 'content_5bd48a2459d5d0_44629431',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb5fb53843_12918863',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c01604f1904bac92a4af99f678c9381fb495248' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\_partials\\facets.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd1b0fb8baf85_21176023 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a2459d5d0_44629431 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb5fb53843_12918863 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <div id="search_filters">

    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8511201975bd1b0fb7ae9b1_77313070', 'facets_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13327994315bd48a2445cfe3_69393782', 'facets_title');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19995844735bd4bb5fa30c73_91341530', 'facets_title');
>>>>>>> dorota
?>


    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4549857965bd1b0fb7b8539_34550976', 'facets_clearall_button');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21232353875bd48a24469db2_86446428', 'facets_clearall_button');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20378986875bd4bb5fa3cbb2_05841372', 'facets_clearall_button');
>>>>>>> dorota
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
        <section class="facet clearfix">
          <p class="h6 facet-title hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
          <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
          <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div class="title hidden-md-up" data-target="#facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
            <p class="h6 facet-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
            <span class="float-xs-right">
              <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE313;</i>
                <i class="material-icons remove">&#xE316;</i>
              </span>
            </span>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>

            <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16105285385bd1b0fb7fdc37_17798939', 'facet_item_other');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14465848075bd48a244cb368_61506582', 'facet_item_other');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12806212385bd4bb5fa8e0f3_52357536', 'facet_item_other');
>>>>>>> dorota
?>


          <?php } else { ?>

            <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10257448395bd1b0fb86dea9_11037628', 'facet_item_dropdown');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2493940535bd48a245467f5_73283447', 'facet_item_dropdown');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11434437205bd4bb5fb023d8_41354702', 'facet_item_dropdown');
>>>>>>> dorota
?>


          <?php }?>
        </section>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
/* {block 'facets_title'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_8511201975bd1b0fb7ae9b1_77313070 extends Smarty_Internal_Block
=======
class Block_13327994315bd48a2445cfe3_69393782 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_19995844735bd4bb5fa30c73_91341530 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'facets_title' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_8511201975bd1b0fb7ae9b1_77313070',
=======
    0 => 'Block_13327994315bd48a2445cfe3_69393782',
>>>>>>> dorota
=======
    0 => 'Block_19995844735bd4bb5fa30c73_91341530',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
    <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facets_clearall_button'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_4549857965bd1b0fb7b8539_34550976 extends Smarty_Internal_Block
=======
class Block_21232353875bd48a24469db2_86446428 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_20378986875bd4bb5fa3cbb2_05841372 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_4549857965bd1b0fb7b8539_34550976',
=======
    0 => 'Block_21232353875bd48a24469db2_86446428',
>>>>>>> dorota
=======
    0 => 'Block_20378986875bd4bb5fa3cbb2_05841372',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
        <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all">
          <i class="material-icons">&#xE14C;</i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </div>
    <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_16105285385bd1b0fb7fdc37_17798939 extends Smarty_Internal_Block
=======
class Block_14465848075bd48a244cb368_61506582 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_12806212385bd4bb5fa8e0f3_52357536 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_16105285385bd1b0fb7fdc37_17798939',
=======
    0 => 'Block_14465848075bd48a244cb368_61506582',
>>>>>>> dorota
=======
    0 => 'Block_12806212385bd4bb5fa8e0f3_52357536',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                    <li>
                      <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                          <span class="custom-checkbox">
                            <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="checkbox"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                              <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                              <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                              <?php } else { ?>
                              <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                            <?php }?>
                          </span>
                        <?php } else { ?>
                          <span class="custom-radio">
                            <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="radio"
                              name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                          </span>
                        <?php }?>

                        <a
                          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          class="_gray-darker search-link js-search-link"
                          rel="nofollow"
                        >
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                            <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                          <?php }?>
                        </a>
                      </label>
                    </li>
                  <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_10257448395bd1b0fb86dea9_11037628 extends Smarty_Internal_Block
=======
class Block_2493940535bd48a245467f5_73283447 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_11434437205bd4bb5fb023d8_41354702 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_10257448395bd1b0fb86dea9_11037628',
=======
    0 => 'Block_2493940535bd48a245467f5_73283447',
>>>>>>> dorota
=======
    0 => 'Block_11434437205bd4bb5fb023d8_41354702',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                <li>
                  <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                      <span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                          <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                        <?php }?>
                      </span>
                      <i class="material-icons float-xs-right">&#xE5C5;</i>
                    </a>
                    <div class="dropdown-menu">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                          <a
                            rel="nofollow"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            class="select-list"
                          >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                          </a>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </li>
              </ul>
            <?php
}
}
/* {/block 'facet_item_dropdown'} */
}
