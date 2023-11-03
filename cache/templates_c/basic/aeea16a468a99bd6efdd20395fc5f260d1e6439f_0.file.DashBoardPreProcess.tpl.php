<?php
/* Smarty version 4.2.0, created on 2023-11-03 14:08:55
  from 'C:\xampp\htdocs\YetiForceCRM\layouts\basic\modules\Home\dashboards\DashBoardPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6544fef7bacd41_74130209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeea16a468a99bd6efdd20395fc5f260d1e6439f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\YetiForceCRM\\layouts\\basic\\modules\\Home\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544fef7bacd41_74130209 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Home-dashboards-DashBoardPreProcess --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><div class="contentsDiv mx-md-0 dashboardContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?><div class="dashboardViewContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardPreProcessAjax.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Home-dashboards-DashBoardPreProcess -->
<?php }
}
