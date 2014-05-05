<?php /* Smarty version Smarty-3.1.14, created on 2014-05-05 15:15:01
         compiled from "/opt/lampp/htdocs/loja16/admin2976/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12416522025367c715e30429-01032985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae64a063cc691d2974b519e12b3f445db81b94b' => 
    array (
      0 => '/opt/lampp/htdocs/loja16/admin2976/themes/default/template/content.tpl',
      1 => 1399308777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12416522025367c715e30429-01032985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5367c715e42459_03086937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5367c715e42459_03086937')) {function content_5367c715e42459_03086937($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>