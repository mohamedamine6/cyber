<?php
/* Smarty version 4.3.4, created on 2025-09-04 10:41:46
  from '/var/www/presta/boadmin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68b95edaf1e052_93030588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41739affe3c66c2b16d530e8fae9da39ef21f58' => 
    array (
      0 => '/var/www/presta/boadmin/themes/new-theme/template/content.tpl',
      1 => 1754316048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b95edaf1e052_93030588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
