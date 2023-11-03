<?php
/* Smarty version 4.2.0, created on 2023-11-03 14:08:58
  from 'C:\xampp\htdocs\YetiForceCRM\layouts\basic\modules\Vtiger\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6544fefa2d4264_41094034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a3e65f7c31a23b6c5e2b713eff098d3401c569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Menu.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544fefa2d4264_41094034 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="tpl-Menu js-menu__content c-menu__content" id="submenu-0" data-js="container" aria-label="<?php echo \App\Language::translate("LBL_MAIN_MENU");?>
" data-js="keydown | focus"><ul class="nav flex-column modulesList"><?php $_smarty_tpl->_assignInScope('PRIVILEGESMODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());
$_smarty_tpl->_assignInScope('TABINDEX', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENUS']->value, 'MENU', false, 'KEY');
$_smarty_tpl->tpl_vars['MENU']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['MENU']->value) {
$_smarty_tpl->tpl_vars['MENU']->do_else = false;
$_smarty_tpl->_assignInScope('MENU_MODULE', 'Menu');
if ((isset($_smarty_tpl->tpl_vars['MENU']->value['moduleName']))) {
$_smarty_tpl->_assignInScope('MENU_MODULE', $_smarty_tpl->tpl_vars['MENU']->value['moduleName']);
}
$_smarty_tpl->_assignInScope('HASCHILDS', (isset($_smarty_tpl->tpl_vars['MENU']->value['childs'])) && count($_smarty_tpl->tpl_vars['MENU']->value['childs']) != 0);
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value || $_smarty_tpl->tpl_vars['MENU']->value['type'] != 'Label') {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath((('menu/').($_smarty_tpl->tpl_vars['MENU']->value['type'])).('.tpl'),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></nav>
<?php }
}
