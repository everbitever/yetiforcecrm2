<?php
/* Smarty version 4.2.0, created on 2023-11-03 14:08:33
  from 'C:\xampp\htdocs\YetiForceCRM\layouts\basic\modules\Users\Login.Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6544fee1684245_32258031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7d2e9772f45fdde108dd11ac970fb9eee660d22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\YetiForceCRM\\layouts\\basic\\modules\\Users\\Login.Default.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544fee1684245_32258031 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Login.Default --><?php $_smarty_tpl->_assignInScope('MODULE', 'Users');?><div class="container"><div id="login-area" class="login-area"><div class="login-space"></div><div class="logo mb-3"><img class="logo__img" title="Logo" class="logo" alt="Logo" src="<?php echo \App\Layout::getPublicUrl('layouts/resources/Logo/logo');?>
"></div><?php if (!empty(\Config\Main::$loginPageAlertMessage)) {?><div class="alert <?php if (empty(\Config\Main::$loginPageAlertType)) {?>alert-danger<?php } else {
echo \Config\Main::$loginPageAlertType;
}?> mb-3 px-3 py-1 text-center" role="alert"><i class="<?php if (empty(\Config\Main::$loginPageAlertIcon)) {?>fas fa-exclamation-triangle<?php } else {
echo \Config\Main::$loginPageAlertIcon;
}?>"></i><span class="font-weight-bold mx-2"><?php echo \Config\Main::$loginPageAlertMessage;?>
</span><i class="<?php if (empty(\Config\Main::$loginPageAlertIcon)) {?>fas fa-exclamation-triangle<?php } else {
echo \Config\Main::$loginPageAlertIcon;
}?>"></i></div><?php }?><div class="" id="loginDiv"><?php if (!$_smarty_tpl->tpl_vars['IS_BLOCKED_IP']->value) {?><form class="login-form row" action="index.php?module=Users&action=Login" method="POST"<?php if (!App\Config::security('LOGIN_PAGE_REMEMBER_CREDENTIALS')) {?>autocomplete="off" <?php }?>><div class='fieldContainer mx-0 form-row col-md-12'><div class='mx-0 col-sm-10'><label for="username" class="sr-only"><?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group first-group"><input name="username" type="text" id="username" class="form-control form-control-lg" placeholder="<?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (\App\Config::main('systemMode') === 'demo') {?>value="demo" <?php }?>required="" <?php if (!App\Config::security('LOGIN_PAGE_REMEMBER_CREDENTIALS')) {?>autocomplete="off" <?php }?>><div class="input-group-append"><div class="input-group-text"><i class="fas fa-user"></i></div></div></div><label for="password" class="sr-only"><?php echo \App\Language::translate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group <?php if ($_smarty_tpl->tpl_vars['LANGUAGE_SELECTION']->value || $_smarty_tpl->tpl_vars['LAYOUT_SELECTION']->value) {?>first-group <?php }?>"><input name="password" type="password" class="form-control form-control-lg" title="<?php echo \App\Language::translate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="password"<?php if (\App\Config::main('systemMode') === 'demo') {?>value="demo" <?php }?> <?php if (!App\Config::security('LOGIN_PAGE_REMEMBER_CREDENTIALS')) {?>autocomplete="off" <?php }?>placeholder="<?php echo \App\Language::translate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><div class="input-group-append"><div class="input-group-text"><i class="fas fa-briefcase"></i></div></div></div><?php $_smarty_tpl->_assignInScope('COUNTERFIELDS', 2);
if ($_smarty_tpl->tpl_vars['LANGUAGE_SELECTION']->value) {
$_smarty_tpl->_assignInScope('COUNTERFIELDS', $_smarty_tpl->tpl_vars['COUNTERFIELDS']->value+1);
$_smarty_tpl->_assignInScope('DEFAULT_LANGUAGE', App\Config::main('default_language'));?><div class="input-group input-group-lg form-group mb-0 <?php if ($_smarty_tpl->tpl_vars['LAYOUT_SELECTION']->value) {?>first-group <?php }?>"><select name="loginLanguage" class="form-control-lg form-control" title="<?php echo \App\Language::translate('LBL_CHOOSE_LANGUAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Language::getAll(), 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['KEY']->value == $_smarty_tpl->tpl_vars['DEFAULT_LANGUAGE']->value) {?> selected <?php }?> value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><div class="input-group-text"><i class="fas fa-language"></i></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['LAYOUT_SELECTION']->value) {
$_smarty_tpl->_assignInScope('COUNTERFIELDS', $_smarty_tpl->tpl_vars['COUNTERFIELDS']->value+1);?><div class="form-group mb-0"><select name="layout" class="form-control-lg form-control" title="<?php echo \App\Language::translate('LBL_SELECT_LAYOUT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Layout::getAllLayouts(), 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?></div><div class="col-sm-2"><button type="submit" class="btn btn-lg btn-primary btn-block heightButtonPhone heightDiv_<?php echo $_smarty_tpl->tpl_vars['COUNTERFIELDS']->value;?>
" title="<?php echo \App\Language::translate('LBL_SIGN_IN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><strong><span class="fas fa-chevron-right"></span></strong></button></div></div><input name="fingerprint" type="hidden" id="fingerPrint" value=""></form><?php if (App\Config::security('RESET_LOGIN_PASSWORD') && App\Mail::getDefaultSmtp()) {?><div class="form-group"><div class=""><a href="#" id="forgotpass"><?php echo \App\Language::translate('ForgotPassword',$_smarty_tpl->tpl_vars['MODULE']->value);?>
?</a></div></div><?php }
}?><div class="form-group col-12 p-0"><?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value)) {?><div class="alert <?php if ($_smarty_tpl->tpl_vars['MESSAGE_TYPE']->value === 'success') {?>alert-success<?php } elseif ($_smarty_tpl->tpl_vars['MESSAGE_TYPE']->value === 'error') {?>alert-danger<?php } else { ?>alert-warning<?php }?>"><p><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['IS_BLOCKED_IP']->value) {?><div class="alert alert-danger form-row"><div class="col-md-12 d-flex justify-content-center"><span class="fas fa-minus-circle fontSizeIcon"></span></div><div class="col-md-12"><p><?php echo \App\Language::translate('LBL_IP_IS_BLOCKED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div></div><?php }?></div></div><?php if (App\Config::security('RESET_LOGIN_PASSWORD') && App\Mail::getDefaultSmtp()) {?><div class="d-none" id="forgotPasswordDiv"><form class="forgot-form row js-forgot-password" data-js="container"><div class="fieldContainer mx-0 form-row col-md-12"><div class="login-form mx-0 form-row col-sm-12"><label for="emailId" class="sr-only"><?php echo \App\Language::translate('LBL_EMAIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group mb-1 js-email-content" data-js="container"><div class="input-group-prepend"><div class="input-group-text"><i class="fas fa-envelope"></i></div></div><input type="text" class="form-control form-control-lg" id="emailId" name="email" placeholder="<?php echo \App\Language::translate('LBL_EMAIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" required=""></div><button type="submit" id="retrievePassword" class="btn btn-lg btn-primary btn-block py-2 u-fs-19px" title="Retrieve Password"><i class="fas fa-exchange-alt mr-2"></i><?php echo \App\Language::translate('BTN_RESET_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></form><div class="alert d-none js-alert-password mt-2" role="alert"><span class="js-alert-text" data-js="container"></span></div><div class="login-text form-group"><a href="#" id="backButton"><?php echo \App\Language::translate('LBL_TO_CRM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div><?php }?></div></div></body></html><!-- /tpl-Users-Login.Default -->
<?php }
}
