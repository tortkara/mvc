<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-09 14:50:03
         compiled from "app/view/pl/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111170897954d7b0ed12a463-88455662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd68e95d710fdab9071436d1778cd122e76e525c' => 
    array (
      0 => 'app/view/pl/home.tpl',
      1 => 1423489800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111170897954d7b0ed12a463-88455662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d7b0ed14f4b3_05165032',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d7b0ed14f4b3_05165032')) {function content_54d7b0ed14f4b3_05165032($_smarty_tpl) {?>
<div class="container">

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div><?php }} ?>
