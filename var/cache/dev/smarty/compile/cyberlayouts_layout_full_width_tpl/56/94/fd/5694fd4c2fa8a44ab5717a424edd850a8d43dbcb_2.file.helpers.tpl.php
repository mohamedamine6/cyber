<?php
/* Smarty version 4.3.4, created on 2025-09-04 10:41:47
  from '/var/www/presta/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68b95edbac6b62_85892432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5694fd4c2fa8a44ab5717a424edd850a8d43dbcb' => 
    array (
      0 => '/var/www/presta/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b95edbac6b62_85892432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/presta/var/cache/dev/smarty/compile/cyberlayouts_layout_full_width_tpl/56/94/fd/5694fd4c2fa8a44ab5717a424edd850a8d43dbcb_2.file.helpers.tpl.php',
    'uid' => '5694fd4c2fa8a44ab5717a424edd850a8d43dbcb',
    'call_name' => 'smarty_template_function_renderLogo_168480047368b95edbab5125_08912119',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_168480047368b95edbab5125_08912119 */
if (!function_exists('smarty_template_function_renderLogo_168480047368b95edbab5125_08912119')) {
function smarty_template_function_renderLogo_168480047368b95edbab5125_08912119(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_168480047368b95edbab5125_08912119 */
}
