<?php /* Smarty version 2.6.18, created on 2024-05-14 13:52:54
         compiled from C:%5Cxampp%5Chtdocs%5CAd_Network%5Crevive/lib/templates/admin/form/custom-campaign-remaining-conv.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\xampp\\htdocs\\Ad_Network\\revive/lib/templates/admin/form/custom-campaign-remaining-conv.html', 15, false),)), $this); ?>

<span id="conversions_remaining_span" style="display: none">
    <?php echo OA_Admin_Template::_function_t(array('str' => 'ConversionsRemaining'), $this);?>
:<span id='conversions_remaining_count'><?php echo $this->_tpl_vars['_e']['vars']['conversionsRemaining']; ?>
</span>
</span>