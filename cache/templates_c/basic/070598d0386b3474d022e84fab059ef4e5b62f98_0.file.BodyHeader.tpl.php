<?php
/* Smarty version 4.2.0, created on 2023-11-03 14:08:58
  from 'C:\xampp\htdocs\YetiForceCRM\layouts\basic\modules\Vtiger\BodyHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6544fefa3c59e0_94028797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070598d0386b3474d022e84fab059ef4e5b62f98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\BodyHeader.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544fefa3c59e0_94028797 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BodyHeader --><?php $_smarty_tpl->_assignInScope('count', 0);?><header class="navbar navbar-expand-md navbar-dark fixed-top px-2 js-header c-header" data-js="height"><div class="o-navbar__left d-inline-flex"><div class="rightHeaderBtnMenu"><div class="quickAction"><a class="btn btn-light c-header__btn ml-0 js-sidebar-btn" role="button" href="#" data-js="click" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bars fa-fw" title="<?php echo \App\Language::translate('LBL_MENU');?>
"></span></a></div></div><?php if (\App\Config::performance('GLOBAL_SEARCH')) {
$_smarty_tpl->_assignInScope('SEARCH_FIELD_MODEL', \App\RecordSearch::getSearchField());?><div class="js-global-search__input o-global-search__input o-global-search__input--desktop input-group input-group-sm d-none d-xl-flex mr-2" data-js="container"><div class="input-group-prepend select2HeaderWidth"><?php $_smarty_tpl->_assignInScope('USER_DEFAULT_MODULE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('default_search_module'));
$_smarty_tpl->_assignInScope('DEFAULT_OVERRIDE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('default_search_override'));
ob_start();
echo array_key_exists($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('SELECTABLE_ACTUAL_MODULE', $_prefixVariable2);
ob_start();
echo array_key_exists($_smarty_tpl->tpl_vars['USER_DEFAULT_MODULE']->value,$_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('SELECTABLE_USER_MODULE', $_prefixVariable3);?><select class="select2 basicSearchModulesList form-control" title="<?php echo \App\Language::translate('LBL_SEARCH_MODULE');?>
" data-dropdown-auto-width="true"><option value="-"><?php echo \App\Language::translate('LBL_ALL_RECORDS');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value, 'fieldObject', false, 'SEARCHABLE_MODULE');
$_smarty_tpl->tpl_vars['fieldObject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value => $_smarty_tpl->tpl_vars['fieldObject']->value) {
$_smarty_tpl->tpl_vars['fieldObject']->do_else = false;
$_smarty_tpl->_assignInScope('SELECTED', '');
if ($_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value === $_smarty_tpl->tpl_vars['USER_DEFAULT_MODULE']->value && ($_smarty_tpl->tpl_vars['DEFAULT_OVERRIDE']->value || !$_smarty_tpl->tpl_vars['SELECTABLE_ACTUAL_MODULE']->value) && $_smarty_tpl->tpl_vars['SELECTABLE_USER_MODULE']->value) {
$_smarty_tpl->_assignInScope('SELECTED', "selected");
} elseif (!$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('default_override') && (isset($_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value)) && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value == $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value !== 'All') {
$_smarty_tpl->_assignInScope('SELECTED', "selected");
}?><option value="<?php echo $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['SELECTED']->value;?>
><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value,$_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><input id="global-search-__value" type="text" class="form-control js-global-search__value o-global-search__value" title="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['SEARCH_FIELD_MODEL']->value->getMaxValue();?>
"placeholder="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
" results="10" data-js="keypress | value | autocomplete" /><div class="input-group-append bg-white rounded-right"><button class="btn btn-outline-dark border-0 h-100 searchIcon" type="button"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button><?php if (App\Config::search('GLOBAL_SEARCH_OPERATOR_SELECT')) {?><div class="btn-group u-remove-dropdown-icon"><a class="btn btn-outline-dark border-bottom-0 border-top-0 dropdown-toggle rounded-0 border-left border-right" id="globalSearchOperator" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-crosshairs fa-fw" title="<?php echo \App\Language::translate('LBL_SPECIAL_OPTIONS');?>
"></span></a><ul class="dropdown-menu js-global-search-operator" aria-labelledby="globalSearchOperator" data-js="click"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\RecordSearch::OPERATORS, 'VALUE', false, 'LABEL');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?><li class="<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('default_search_operator') == $_smarty_tpl->tpl_vars['LABEL']->value) {?>active<?php }?> dropdown-item u-cursor-pointer"href="#" data-operator="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,'Users');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->getRoleDetail()->get('globalsearchadv')) {?><button class="btn btn-outline-dark border-0 h-100 globalSearch" title="<?php echo \App\Language::translate('LBL_ADVANCE_SEARCH');?>
" type="button"><span class="fa fa-th-large fa-fw"></span></button><?php }?></div></div><div class="searchMenu d-xl-none"><div class="searchMenuBtn"><div class="quickAction"><a class="btn btn-light c-header__btn" href="#" role="button" aria-expanded="false" aria-controls="o-search-menu__container"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a></div></div><div class="o-search-menu__container" id="o-search-menu__container"><div class="input-group mb-3"><div class="form-control select2WithButtonWidth"><select class="select2 basicSearchModulesList" title="<?php echo \App\Language::translate('LBL_SEARCH_MODULE');?>
"><option value="-" class="globalSearch_module_All"><?php echo \App\Language::translate('LBL_ALL_RECORDS');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value, 'fieldObject', false, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['fieldObject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value => $_smarty_tpl->tpl_vars['fieldObject']->value) {
$_smarty_tpl->tpl_vars['fieldObject']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value)) && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_NAME']->value && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value !== 'All') {?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->getRoleDetail()->get('globalsearchadv')) {?><div class="input-group-append"><button class="btn btn-light globalSearch" title="<?php echo \App\Language::translate('LBL_ADVANCE_SEARCH');?>
" type="button"><span class="fas fa-th-large"></span></button></div><?php }?></div><div class="input-group mb-3 js-global-search__input o-global-search__input" data-js="container"><input id="global-search-__value--mobile" maxlength="<?php echo $_smarty_tpl->tpl_vars['SEARCH_FIELD_MODEL']->value->getMaxValue();?>
" type="text"class="form-control js-global-search__value o-global-search__value"title="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
"placeholder="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
" results="10" data-js="keypress | value | autocomplete" /><div class="input-group-append"><button class="btn btn-light searchIcon" type="button"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button></div></div><div class="searchMenuBtn"><a class="btn btn-light c-header__btn float-right" href="#" role="button" aria-expanded="false" aria-controls="o-search-menu__container"><span class="fas fa-times fa-fw" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"></span><span><?php echo \App\Language::translate('LBL_CLOSE');?>
</span></a></div></div></div><?php }
$_smarty_tpl->_assignInScope('VERIFY', \App\YetiForce\Shop::verify());
if ($_smarty_tpl->tpl_vars['VERIFY']->value) {?><a class="d-flex align-items-center text-warning mr-2 js-popover-tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['VERIFY']->value;?>
" aria-label="<?php echo \App\Language::translate('LBL_YETIFORCE_SHOP');?>
"<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?> href="index.php?module=YetiForce&parent=Settings&view=Shop" <?php } else { ?> href="#" <?php }?>><span class="yfi yfi-shop-alert fa-2x"></span></a><?php }
if (!\App\YetiForce\Register::verify(true)) {
if (\App\Security\AdminAccess::isPermitted('Companies')) {
ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', "<a href='index.php?module=Companies&parent=Settings&view=List&displayModal=online'>".$_prefixVariable4."</a>");
} else {
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
}?><a class="d-flex align-items-center text-center text-warning p-0 text-danger js-popover-tooltip c-header__btn" role="button" data-content="<?php echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['INFO_REGISTRATION_ERROR']->value);?>
"title="<?php echo \App\Purifier::encodeHtml('<span class="yfi yfi-yeti-register-alert mr-1"></span>');
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"<?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?>href="index.php?parent=Settings&module=Companies&view=List&displayModal=online"<?php } else { ?>href="#"<?php }?>><span class="yfi yfi-yeti-register-alert fa-2x"></span></a><?php }?></div><?php if (!empty(\Config\Main::$headerAlertMessage)) {?><div class="alert <?php if (empty(\Config\Main::$headerAlertType)) {?>alert-danger<?php } else {
echo \Config\Main::$headerAlertType;
}?> m-auto mb-0 px-3 py-1 text-center u-font-size-19px text-nowrap js-popover-tooltip" role="alert" data-content="<?php echo \Config\Main::$headerAlertMessage;?>
"><i class="<?php if (empty(\Config\Main::$headerAlertIcon)) {?>fas fa-exclamation-triangle<?php } else {
echo \Config\Main::$headerAlertIcon;
}?>"></i><span class="font-weight-bold mx-3 d-lg-inline-block d-none"><?php echo \Config\Main::$headerAlertMessage;?>
</span><i class="<?php if (empty(\Config\Main::$headerAlertIcon)) {?>fas fa-exclamation-triangle<?php } else {
echo \Config\Main::$headerAlertIcon;
}?> d-lg-inline-block d-none"></i></div><?php }?><div class="o-navbar__right ml-auto d-inline-flex flex-sm-nowrap"><?php if (\App\Mail::checkMailClient() && !Settings_ModuleManager_Library_Model::checkLibrary('roundcube')) {
$_smarty_tpl->_assignInScope('CONFIG', Settings_Mail_Config_Model::getConfig('mailIcon'));
if ($_smarty_tpl->tpl_vars['CONFIG']->value['showMailIcon'] == 'true') {
$_smarty_tpl->_assignInScope('AUTOLOGINUSERS', OSSMail_Autologin_Model::getAutologinUsers());
if (count($_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value) > 0) {
$_smarty_tpl->_assignInScope('MAIN_MAIL', OSSMail_Module_Model::getDefaultMailAccount($_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value));?><div class="c-header__btn__container bg-white rounded js-header__btn--mail" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['showNumberUnreadEmails'] == 'true') {?>data-numberunreademails="true" data-interval="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['timeCheckingMail'];?>
" <?php }?>><?php if (count($_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value) == 1) {?><a class="c-header__btn btn btn-outline-dark border-0 h-100" title="<?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['username'];?>
" href="index.php?module=OSSMail&view=Index"><div class="d-none d-xxl-block"><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['username'])) {
echo $_smarty_tpl->tpl_vars['ITEM']->value['username'];
}?><span class="mail_user_name"><?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['username'];?>
</span><span data-id="<?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['rcuser_id'];?>
" class="noMails"></span></div><div class="d-xxl-none"><span class="fas fa-inbox fa-fw" title="<?php echo \App\Language::translate('LBL_EMAIL');?>
"></span><span data-id="<?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['rcuser_id'];?>
" class="noMails"></span></div></a><?php } else { ?><div class="d-none d-xxl-block"><select id="mail-select" class="form-control-sm" title="<?php echo \App\Language::translate('LBL_SEARCH_MODULE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value['active']) {?>selected<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-nomail="" class="noMails"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['username'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="o-action-menu__item d-xxl-none dropdown"><a class="c-header__btn btn btn-outline-dark border-0 dropdown-toggle" id="show-mail-list" data-toggle="dropdown" data-boundary="window" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="fas fa-inbox fa-fw" title="<?php echo \App\Language::translate('LBL_EMAIL');?>
"></span></a><ul class="dropdown-menu js-mail-list" aria-labelledby="show-mail-list" role="list" data-js="click"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><li value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-nomail="" class="dropdown-item js-mail-link px-2" data-js="click"><div class="d-flex w-100"><span class="mr-2"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['username'];?>
</span><span data-id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" class="noMails ml-auto"></span></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?></div><?php }
}
}
if (\App\Privilege::isPermitted('Chat')) {?><div class="ml-2 quasar-reset"><div id="ChatModalVue"></div></div><?php }?><nav class="actionMenu" aria-label="<?php echo \App\Language::translate("QUICK_ACCESS_MENU");?>
"><a class="btn btn-light c-header__btn ml-2 c-header__btn--mobile js-quick-action-btn" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-action-menu__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><div class="o-action-menu__container d-flex flex-md-nowrap flex-column flex-md-row" id="o-action-menu__container"><?php if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value === 'Settings') {?><div class="o-action-menu__item ml-md-2"><a class="btn btn-light c-header__btn d-block col-sm col-12" title="<?php echo \App\Language::translate('LBL_YETIFORCE_DOCUMENTATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" role="button" href="https://doc.yetiforce.com" target="_blank" rel="noreferrer noopener"><span class="mdi mdi-book-open-page-variant"></span><span class="c-header__label--sm-down ml-1"><?php echo \App\Language::translate('LBL_YETIFORCE_DOCUMENTATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></div><div class=" o-action-menu__item ml-md-2"><a class="btn btn-light c-header__btn d-block" title="<?php echo \App\Language::translate('LBL_YETIFORCE_ASSISTANCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" role="button" href="index.php?module=YetiForce&parent=Settings&view=Shop&category=Support" target="_blank"><span class="far fa-life-ring fa-fw"></span><span class="c-header__label--sm-down ml-1"><?php echo \App\Language::translate('LBL_YETIFORCE_ASSISTANCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></div><div class="o-action-menu__item ml-md-2"><a class="btn btn-light c-header__btn d-block" title="<?php echo \App\Language::translate('LBL_YETIFORCE_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" role="button" href="https://github.com/YetiForceCompany/YetiForceCRM/issues" target="_blank" rel="noreferrer noopener"><span class="fas fa-bug fa-fw"></span><span class="c-header__label--sm-down ml-1"><?php echo \App\Language::translate('LBL_YETIFORCE_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></div><div class="o-action-menu__item ml-md-2"><a class="btn btn-light c-header__btn d-block js-show-modal" title="YetiForceCRM" role="button" data-url="index.php?module=AppComponents&view=YetiForceDetailModal" data-js="click"><span class="fas fa-info-circle fa-fw"></span><span class="c-header__label--sm-down ml-1">YetiForceCRM</span></a></div><?php }
$_smarty_tpl->_assignInScope('QUICKCREATE_MODULES_PARENT', \App\Module::getQuickCreateModules(true,true));
if (\App\Config::main('isActiveRecordTemplate')) {
$_smarty_tpl->_assignInScope('LIST_TEMPLATES', \App\RecordAddsTemplates::getTemplatesList());
if (count($_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value) > 1) {?><div class="o-action-menu__item"><div class="dropdown"><a class="c-header__btn ml-2 btn btn-light btn js-popover-tooltip dropdownMenu" id="recordAddsTemplate" data-js="popover" data-toggle="dropdown" data-boundary="window" data-content="<?php echo \App\Language::translate('LBL_BATCH_ADDING_RECORDS');?>
"href="#" role="button"><span class="mdi mdi-plus-box-multiple" title="<?php echo \App\Language::translate('LBL_BATCH_ADDING_RECORDS');?>
"></span></a><div class="dropdown-menu p-0 u-max-w-sm-100 u-min-w-300px" aria-labelledby="recordAddsTemplate" role="list"><div class="container-fluid d-block p-2 u-max-w-xsm-100 px-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value, 'TEMPLATE_VALUE');
$_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->value) {
$_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->do_else = false;
?><div class="row"><div class="col-12 u-bg-light-darken"><a class="showModal text-decoration-none u-fs-sm text-secondary  d-block" data-url="index.php?module=Users&view=RecordAddsTemplates&recordAddsType=<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->value->name;?>
"data-js="popover" data-toggle="modal"data-placement="bottom" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->value->label);?>
"href="#"><span class="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->value->icon;?>
"></span><span class="ml-2"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE_VALUE']->value->label);?>
</span></a></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 showModal btn-light btn js-popover-tooltip" role="button" data-url="index.php?module=Users&view=RecordAddsTemplates&recordAddsType=<?php echo $_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value[0]->name;?>
"data-js="popover" data-toggle="modal"data-placement="bottom" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value[0]->label);?>
"href="#"><span class="<?php echo $_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value[0]->icon;?>
"></span><span class="c-header__label--sm-down ml-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['LIST_TEMPLATES']->value[0]->label;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span></a></div><?php }
}
if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_MODULES_PARENT']->value)) {?><div class="o-action-menu__item commonActionsContainer"><a class="c-header__btn ml-2 btn-light btn js-popover-tooltip dropdownMenu" role="button" data-js="popover" data-toggle="modal" data-target="#quickCreateModules" data-placement="bottom" data-content="<?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
"href="#"><span class="fas fa-plus fa-fw" title="<?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
"></span><span class="c-header__label--sm-down"> <?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
</span></a></div><?php }
if (!$_smarty_tpl->tpl_vars['IS_IE']->value && \App\Privilege::isPermitted('KnowledgeBase')) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn-light btn js-popover-tooltip js-knowledge-base-modal" role="button" data-js="popover|modal" data-content="<?php echo \App\Language::translate('BTN_KNOWLEDGE_BASE','KnowledgeBase');?>
"href="#"><span class="yfm-KnowledgeBase" title="<?php echo \App\Language::translate('BTN_KNOWLEDGE_BASE','KnowledgeBase');?>
"></span><span class="c-header__label--sm-down"> <?php echo \App\Language::translate('BTN_KNOWLEDGE_BASE','KnowledgeBase');?>
</span></a><div id="KnowledgeBaseModal"></div></div><?php }
if (\App\Privilege::isPermitted('Notification','DetailView')) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn-light btn isBadge text-nowrap notificationsNotice js-popover-tooltip <?php if (App\Config::module('Notification','AUTO_REFRESH_REMINDERS')) {?>autoRefreshing<?php }?>"role="button" data-js="popover"data-content="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
" href="#"><span class="fas fa-bell fa-fw" title="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
"> </span><span class="badge badge-dark d-none mr-1">0</span><span class="c-header__label--sm-down"> <?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
</span></a></div><?php }
if ($_smarty_tpl->tpl_vars['REMINDER_ACTIVE']->value) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn-light btn isBadge text-nowrap remindersNotice js-popover-tooltip <?php if (App\Config::module('Calendar','AUTO_REFRESH_REMINDERS')) {?>autoRefreshing<?php }?>"data-js="popover" role="button" data-content="<?php echo \App\Language::translate('LBL_REMINDER');?>
"href="#"><span class="fas fa-calendar fa-fw" title="<?php echo \App\Language::translate('LBL_REMINDER');?>
"></span><span class="badge badge-danger d-none mr-1">0</span><span class="c-header__label--sm-down"><?php echo \App\Language::translate('LBL_REMINDER');?>
</span></a></div><?php }
if (App\Config::performance('BROWSING_HISTORY_WORKING')) {?><div class="o-action-menu__item"><div class="dropdown"><a class="c-header__btn ml-2 btn btn-light btn js-popover-tooltip dropdownMenu" id="showHistoryBtn" data-js="popover" data-toggle="dropdown" data-boundary="window" data-content="<?php echo \App\Language::translate('LBL_PAGES_HISTORY');?>
" href="#" role="button"><span class="fas fa-history fa-fw" title="<?php echo \App\Language::translate('LBL_PAGES_HISTORY');?>
"></span><span class="c-header__label--sm-down"><?php echo \App\Language::translate('LBL_PAGES_HISTORY');?>
</span></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BrowsingHistory.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_HEADER_LINKS']->value, 'obj', false, 'index');
$_smarty_tpl->tpl_vars['obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->do_else = false;
if ($_smarty_tpl->tpl_vars['obj']->value->linktype == 'HEADERLINK') {
$_smarty_tpl->_assignInScope('HREF', '#');
$_smarty_tpl->_assignInScope('ICON_PATH', $_smarty_tpl->tpl_vars['obj']->value->getIconPath());
$_smarty_tpl->_assignInScope('LINK', $_smarty_tpl->tpl_vars['obj']->value->convertToNativeLink());
$_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['obj']->value->getHeaderIcon());
$_smarty_tpl->_assignInScope('TITLE', $_smarty_tpl->tpl_vars['obj']->value->getLabel());
$_smarty_tpl->_assignInScope('CHILD_LINKS', $_smarty_tpl->tpl_vars['obj']->value->getChildLinks());
if (!empty($_smarty_tpl->tpl_vars['LINK']->value)) {
$_smarty_tpl->_assignInScope('HREF', $_smarty_tpl->tpl_vars['LINK']->value);
}?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn js-popover-tooltip <?php if ($_smarty_tpl->tpl_vars['obj']->value->getClassName() && strrpos($_smarty_tpl->tpl_vars['obj']->value->getClassName(),"btn-") !== false) {
echo $_smarty_tpl->tpl_vars['obj']->value->getClassName();
} else { ?>btn-light <?php echo $_smarty_tpl->tpl_vars['obj']->value->getClassName();
}?> <?php if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?>dropdownMenu<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['HREF']->value;?>
" data-placement="bottom"role="button" data-js="popover" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['obj']->value->linkdata)) && $_smarty_tpl->tpl_vars['obj']->value->linkdata && is_array($_smarty_tpl->tpl_vars['obj']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
"></span><span class="c-header__label--sm-down"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['ICON_PATH']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['ICON_PATH']->value;?>
" alt="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
" /><?php }?></a><?php if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHILD_LINKS']->value, 'obj', false, 'index');
$_smarty_tpl->tpl_vars['obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->do_else = false;
if ($_smarty_tpl->tpl_vars['obj']->value->getLabel() == NULL) {?><li class="dropdown-divider"></li><?php } else {
$_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['obj']->value->getId());
$_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['obj']->value->getUrl());
$_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['obj']->value->getLabel());
$_smarty_tpl->_assignInScope('onclick', '');
if (stripos($_smarty_tpl->tpl_vars['obj']->value->getUrl(),'javascript:') === 0) {
$_smarty_tpl->_assignInScope('onclick', ("onclick=").($_smarty_tpl->tpl_vars['href']->value));
$_smarty_tpl->_assignInScope('href', "javascript:;");
}?><li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" target="<?php echo $_smarty_tpl->tpl_vars['obj']->value->target;?>
" <?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
id="menubar_item_right_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['label']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['obj']->value->linkdata && is_array($_smarty_tpl->tpl_vars['obj']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['label']->value);?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="o-action-menu__item"><div class="dropdown"><a class="c-header__btn ml-2 btn dropdown-toggle js-popover-tooltip dropdownMenu <?php if ($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getId() != App\User::getCurrentUserRealId()) {?>btn-info<?php } else { ?>btn-light<?php }?>"id="showUserQuickMenuBtn" data-js="popover" data-toggle="dropdown" data-boundary="window"data-content="<?php echo \App\Language::translate('LBL_MY_PREFERENCES');?>
" href="#" role="button"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getName();?>
" class="c-user-avatar-small"><span class="c-header__label--sm-down ml-2"><?php echo \App\Language::translate('LBL_MY_PREFERENCES');?>
</span><?php } else { ?><span class="fas fa-user fa-fw" title="<?php echo \App\Language::translate('LBL_MY_PREFERENCES');?>
"></span><span class="c-header__label--sm-down"><?php echo \App\Language::translate('LBL_MY_PREFERENCES');?>
</span><?php }?></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('UserQuickMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></nav></div></header><?php if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_MODULES_PARENT']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('QuickCreateModal.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><!-- /tpl-Base-BodyHeader -->
<?php }
}
