<?php /* Smarty version 2.6.18, created on 2024-05-14 13:52:54
         compiled from C:%5Cxampp%5Chtdocs%5CAd_Network%5Crevive/lib/templates/admin/form/custom-campaign-type-note.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\xampp\\htdocs\\Ad_Network\\revive/lib/templates/admin/form/custom-campaign-type-note.html', 16, false),)), $this); ?>

<div>
    <div <?php if ($this->_tpl_vars['elem']['vars']['radioId']): ?>id="info-<?php echo $this->_tpl_vars['elem']['vars']['radioId']; ?>
"<?php endif; ?> class="type-desc">
        <?php if ($this->_tpl_vars['elem']['vars']['radioId']): ?><label for="<?php echo $this->_tpl_vars['elem']['vars']['radioId']; ?>
"><?php endif; ?><?php echo OA_Admin_Template::_function_t(array('str' => $this->_tpl_vars['elem']['vars']['infoKey']), $this);?>
<?php if ($this->_tpl_vars['elem']['vars']['radioId']): ?></label><?php endif; ?>
    </div>
</div>