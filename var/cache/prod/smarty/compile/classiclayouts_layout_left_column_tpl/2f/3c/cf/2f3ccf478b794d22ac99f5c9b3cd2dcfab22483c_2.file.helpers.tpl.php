<?php
/* Smarty version 3.1.43, created on 2022-06-16 15:39:35
  from 'C:\wamp64\www\test-boutique\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ab3297c3a579_73372434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3ccf478b794d22ac99f5c9b3cd2dcfab22483c' => 
    array (
      0 => 'C:\\wamp64\\www\\test-boutique\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1655366338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ab3297c3a579_73372434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\test-boutique\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\2f\\3c\\cf\\2f3ccf478b794d22ac99f5c9b3cd2dcfab22483c_2.file.helpers.tpl.php',
    'uid' => '2f3ccf478b794d22ac99f5c9b3cd2dcfab22483c',
    'call_name' => 'smarty_template_function_renderLogo_78971697362ab3297c19ce8_01575468',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_78971697362ab3297c19ce8_01575468 */
if (!function_exists('smarty_template_function_renderLogo_78971697362ab3297c19ce8_01575468')) {
function smarty_template_function_renderLogo_78971697362ab3297c19ce8_01575468(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_78971697362ab3297c19ce8_01575468 */
}
