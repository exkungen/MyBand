<?php
/* Smarty version 3.1.30, created on 2017-06-12 13:46:37
  from "C:\Users\menou\Desktop\1map\school\p1.4\bap\opdracht_bovi\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593e9b3d1e5f53_77974381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a787e30a17a7abfd682579de111c97dd64956c' => 
    array (
      0 => 'C:\\Users\\menou\\Desktop\\1map\\school\\p1.4\\bap\\opdracht_bovi\\views\\articles.tpl',
      1 => 1497275191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593e9b3d1e5f53_77974381 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-wrap">







    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>
        <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['one_article']->value['title'];?>
 </h1>
            <p><?php echo $_smarty_tpl->tpl_vars['one_article']->value['content'];?>
</p>
          <img src="<?php echo $_smarty_tpl->tpl_vars['one_article']->value['image'];?>
"/>
        </article>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




</div>
<?php }
}
