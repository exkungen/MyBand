<?php
/* Smarty version 3.1.30, created on 2017-06-12 08:19:12
  from "C:\Users\menou\Desktop\1map\school\p1.4\bap\opdracht_bovi\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593e4e80205400_76099420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7bf09adfd1fad75ea6f4b1ebcdaaac8934960df' => 
    array (
      0 => 'C:\\Users\\menou\\Desktop\\1map\\school\\p1.4\\bap\\opdracht_bovi\\views\\about.tpl',
      1 => 1497255134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593e4e80205400_76099420 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-wrap">
<content class="wrap">



    <section>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'one_about');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_about']->value) {
?>
            <article>
                <?php echo $_smarty_tpl->tpl_vars['one_about']->value['id'];?>

                <content> <?php echo $_smarty_tpl->tpl_vars['one_about']->value['content'];?>
  </content>
                <img src="<?php echo $_smarty_tpl->tpl_vars['one_about']->value['img'];?>
"/>
            </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    </section>

</content>
</div>
<?php }
}
