<?php /* Smarty version Smarty-3.1.14, created on 2014-05-05 15:26:09
         compiled from "/opt/lampp/htdocs/loja16/themes/default-bootstrap/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10958966865367c9b10f6494-78284036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8867a069b572dff20d447f05eb107c6fbb136934' => 
    array (
      0 => '/opt/lampp/htdocs/loja16/themes/default-bootstrap/modules/homefeatured/tab.tpl',
      1 => 1399308777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10958966865367c9b10f6494-78284036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5367c9b110d804_74373883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5367c9b110d804_74373883')) {function content_5367c9b110d804_74373883($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/opt/lampp/htdocs/loja16/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>