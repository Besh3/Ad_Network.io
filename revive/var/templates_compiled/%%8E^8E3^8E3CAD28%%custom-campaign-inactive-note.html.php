<?php /* Smarty version 2.6.18, created on 2024-05-14 13:59:53
         compiled from C:%5Cxampp%5Chtdocs%5CAd_Network%5Crevive/lib/templates/admin/form/custom-campaign-inactive-note.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\xampp\\htdocs\\Ad_Network\\revive/lib/templates/admin/form/custom-campaign-inactive-note.html', 15, false),)), $this); ?>

<div class='errormessage'><img class='errormessage' src='<?php echo $this->_tpl_vars['assetPath']; ?>
/images/info.gif' align='absmiddle'>
    <?php echo OA_Admin_Template::_function_t(array('str' => 'ClientDeactivated'), $this);?>
:
    <ul>
    <?php $_from = $this->_tpl_vars['_e']['vars']['inactiveReason']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reason']):
?>
        <li>- <?php echo $this->_tpl_vars['reason']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>