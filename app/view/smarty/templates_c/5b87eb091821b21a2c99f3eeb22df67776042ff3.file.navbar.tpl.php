<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-09 19:54:05
         compiled from "app/view/pl/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144634465854d8bfe5a8e7c7-03657292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b87eb091821b21a2c99f3eeb22df67776042ff3' => 
    array (
      0 => 'app/view/pl/navbar.tpl',
      1 => 1423508043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144634465854d8bfe5a8e7c7-03657292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d8bfe5aa5267_91162654',
  'variables' => 
  array (
    'navbar' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d8bfe5aa5267_91162654')) {function content_54d8bfe5aa5267_91162654($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/mariposa/Desktop/webprojects/asterisk/app/lib/Smarty/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_capitalize')) include '/home/mariposa/Desktop/webprojects/asterisk/app/lib/Smarty/plugins/modifier.capitalize.php';
?><nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="http://127.0.0.1/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['item']->value,"/\.tpl/",'');?>
"><?php echo smarty_modifier_regex_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['item']->value),"/\.Tpl/",'');?>
</a></li>
        <?php } ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php }} ?>
