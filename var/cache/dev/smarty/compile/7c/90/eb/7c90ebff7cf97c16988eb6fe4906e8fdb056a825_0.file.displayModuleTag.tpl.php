<?php
/* Smarty version 4.3.4, created on 2025-09-04 10:41:46
  from '/var/www/presta/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68b95edad1baa6_31548546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c90ebff7cf97c16988eb6fe4906e8fdb056a825' => 
    array (
      0 => '/var/www/presta/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1756916150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b95edad1baa6_31548546 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
