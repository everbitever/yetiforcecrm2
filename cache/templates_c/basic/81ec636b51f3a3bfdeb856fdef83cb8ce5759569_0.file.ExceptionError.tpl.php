<?php
/* Smarty version 4.2.0, created on 2023-11-03 14:08:58
  from 'C:\xampp\htdocs\YetiForceCRM\layouts\basic\modules\Vtiger\Exceptions\ExceptionError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6544fefa6d3200_26410817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ec636b51f3a3bfdeb856fdef83cb8ce5759569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Exceptions\\ExceptionError.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544fefa6d3200_26410817 (Smarty_Internal_Template $_smarty_tpl) {
if ('test' === \App\Config::main('systemMode')) {?>
	<span class="YetiForceError!!!">
		<?php echo $_smarty_tpl->tpl_vars['HEADER_MESSAGE']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['MESSAGE_EXPANDED']->value) {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['message'])) {
echo $_smarty_tpl->tpl_vars['MESSAGE']->value['message'];
}?>
			<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['query'])) {
echo $_smarty_tpl->tpl_vars['MESSAGE']->value['query'];
}?>
			<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['params'])) {?>
				<?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGE']->value['params']);?>

			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['trace'])) {?>
				<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MESSAGE']->value['trace']);?>

			<?php }?>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

		<?php }?>
	</span>
<?php } else { ?>
	<!DOCTYPE html>
	<html><head><title>YetiForceError!!!: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['HEADER_MESSAGE']->value);?>
</title><?php if (!empty($_smarty_tpl->tpl_vars['IS_IE']->value)) {?><meta http-equiv="x-ua-compatible" content="IE=11,edge"><?php }?><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('layouts/basic/styles/Main.css');?>
"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('libraries/@fortawesome/fontawesome-free/css/all.css');?>
"></head><body class="h-auto bg-color-amber-50 overflow-auto"><div class="o-exception-fixed-block container u-white-space-n u-word-break"><div class="card mx-auto mt-3 u-w-fit shadow" role="alert"><div class="card-header d-flex color-red-a200 bg-color-red-50 justify-content-center flex-wrap"><span class="display-4"><i class="fas fa-exclamation-triangle mr-3"></i></span><h3 class="align-items-center card-title d-flex justify-content-center"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['HEADER_MESSAGE']->value);?>
</h3></div><div class="card-body text-black rd-body bg-color-grey-50 js-exception-error"><p class="card-text u-fs-19px"><?php if ($_smarty_tpl->tpl_vars['MESSAGE_EXPANDED']->value) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value['message']);
} else {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value);
}?></p></div><div class="card-footer text-black d-flex flex-wrap flex-sm-nowrap"><a class="btn btn-lg btn-default mr-sm-2 mb-1 mb-sm-0 w-100" role="button" href="javascript:window.history.back();"><i class="fas fa-chevron-left mr-2"></i><?php echo \App\Language::translate('LBL_GO_BACK');?>
</a><a class="btn btn-lg btn-default w-100" role="button" href="index.php"><i class="fas fa-home mr-2"></i><?php echo \App\Language::translate('LBL_MAIN_PAGE');?>
</a></div></div><?php if ($_smarty_tpl->tpl_vars['MESSAGE_EXPANDED']->value) {
if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['query'])) {?><div class="my-5 mx-auto card u-w-fit shadow"><div class="card-header"><h5><?php echo \App\Language::translate('LBL_SQL_QUERY');?>
</h5></div><div class="card-body text-black"><pre class="u-white-space-n u-word-break text-black"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['query'];?>
</pre></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['params'])) {?><div class="my-5 mx-auto card u-w-fit shadow"><div class="card-header"><h5><?php echo \App\Language::translate('LBL_SQL_PARAMS');?>
</h5></div><div class="card-body text-black"><pre class="u-white-space-n u-word-break"><?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGE']->value['params']);?>
</pre></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['trace'])) {?><div class="my-5 mx-auto card u-w-fit shadow"><div class="card-header"><h5><?php echo \App\Language::translate('LBL_BACKTRACE');?>
</h5></div><div class="card-body text-black"><pre class="u-white-space-n u-word-break"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MESSAGE']->value['trace']);?>
</pre></div></div><?php }
}?></div><?php if (\App\Config::debug('DISPLAY_EXCEPTION_BACKTRACE')) {?><div class="my-5 mx-auto card p-3 u-w-fit shadow d-none"><pre class="js-backtrace-content m-0" data-js="html"></pre></div><?php }
echo '<script'; ?>
 type="text/javascript" <?php if (\App\Session::get('CSP_TOKEN')) {?>nonce="<?php echo \App\Session::get('CSP_TOKEN');?>
" <?php }?>>function errorLog() {console.error(document.querySelector('.js-exception-error').textContent);let html = '';let backtrace = document.querySelector('.js-exception-backtrace');let logs = document.querySelector('.js-exception-logs');if (backtrace) {html += backtrace.textContent;backtrace.remove();}if (logs) {html += logs.textContent;logs.remove();}let bc = document.querySelector('.js-backtrace-content');if (html) {bc.textContent = html;bc.parentNode.classList.remove("d-none");}}if (document.readyState === 'loading') {document.addEventListener('DOMContentLoaded', errorLog);} else {errorLog();}<?php echo '</script'; ?>
></body></html>
<?php }
}
}
