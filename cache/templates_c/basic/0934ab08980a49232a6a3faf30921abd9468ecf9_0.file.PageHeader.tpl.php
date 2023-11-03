<?php
/* Smarty version 4.2.0, created on 2023-11-03 14:08:33
  from 'C:\xampp\htdocs\YetiForceCRM\layouts\basic\modules\Vtiger\PageHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6544fee13ea867_54133478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0934ab08980a49232a6a3faf30921abd9468ecf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\PageHeader.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544fee13ea867_54133478 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['HTMLLANG']->value;?>
" class="o-view-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['VIEW']->value, 'UTF-8');?>
"><head><title><?php echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;?>
</title><link REL="SHORTCUT ICON" HREF="<?php echo \App\Layout::getImagePath('favicon.ico');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['IS_IE']->value)) {?><meta http-equiv="x-ua-compatible" content="IE=11,edge"><?php }?><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta name="robots" content="noindex,nofollow" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STYLES']->value, 'cssModel', false, 'index');
$_smarty_tpl->tpl_vars['cssModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cssModel']->value) {
$_smarty_tpl->tpl_vars['cssModel']->do_else = false;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getHref();?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('HEAD_LOCKS', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getHeadLocks());
if ($_smarty_tpl->tpl_vars['HEAD_LOCKS']->value) {
echo '<script'; ?>
 type="text/javascript" <?php if ($_smarty_tpl->tpl_vars['NONCE']->value) {?>nonce="<?php echo $_smarty_tpl->tpl_vars['NONCE']->value;?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['HEAD_LOCKS']->value;
echo '</script'; ?>
><?php }
echo '<script'; ?>
 type="text/javascript" <?php if ($_smarty_tpl->tpl_vars['NONCE']->value) {?>nonce="<?php echo $_smarty_tpl->tpl_vars['NONCE']->value;?>
" <?php }?>>var CONFIG = <?php echo \App\Config::getJsEnv();?>
;var LANG = <?php echo \App\Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
;<?php echo '</script'; ?>
><?php if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->loadScripts();
}?></head><body class="<?php if (!empty($_smarty_tpl->tpl_vars['SHOW_FOOTER_BAR']->value)) {?> <?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>user-info--active <?php }?> <?php } else { ?> footer-non--active <?php }?> <?php if (\App\YetiForce\Shop::check('YetiForceDisableBranding')) {?>limited-footer--active<?php }?>" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" data-view="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" data-skinpath="<?php echo $_smarty_tpl->tpl_vars['SKIN_PATH']->value;?>
" data-layoutpath="<?php echo $_smarty_tpl->tpl_vars['LAYOUT_PATH']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getBodyLocks();?>
><div id="configuration"><input type="hidden" id="currencyGroupingPattern" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_pattern');?>
" /><input type="hidden" id="truncateTrailingZeros" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('truncate_trailing_zeros');?>
" /><input type="hidden" id="gsAutocomplete" value="<?php echo App\Config::search('GLOBAL_SEARCH_AUTOCOMPLETE');?>
" /><input type="hidden" id="gsMinLength" value="<?php echo App\Config::search('GLOBAL_SEARCH_AUTOCOMPLETE_MIN_LENGTH');?>
" /><input type="hidden" id="gsAmountResponse" value="<?php echo App\Config::search('GLOBAL_SEARCH_AUTOCOMPLETE_LIMIT');?>
" /><input type="hidden" id="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" id="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
" /><input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><input type="hidden" id="sounds" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(App\Config::sounds()));?>
" /><input type="hidden" id="intervalForNotificationNumberCheck" value="<?php echo App\Config::performance('INTERVAL_FOR_NOTIFICATION_NUMBER_CHECK');?>
" /></div><div id="page"><?php if ($_smarty_tpl->tpl_vars['SHOW_BODY_HEADER']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Body.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
