<?php
/* Smarty version 3.1.30, created on 2017-06-16 13:36:06
  from "C:\Users\Menouer\Desktop\scorro\opdracht_bovi\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943dec6d2ac12_27928082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a456860b80969f4c84b6117442444a298a21f34' => 
    array (
      0 => 'C:\\Users\\Menouer\\Desktop\\scorro\\opdracht_bovi\\views\\articles.tpl',
      1 => 1497275191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943dec6d2ac12_27928082 (Smarty_Internal_Template $_smarty_tpl) {
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
