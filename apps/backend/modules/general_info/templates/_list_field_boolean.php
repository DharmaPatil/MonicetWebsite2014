<?php if ($value): ?>
  <?php echo image_tag('/mfAdministracaoPlugin/images/icons/tick.png', array('alt' => __('Checked', array(), 'sf_admin'), 'title' => __('Checked', array(), 'sf_admin'))) ?>
<?php else: ?>
  <?php echo image_tag('/mfAdministracaoPlugin/images/icons/error.png', array('alt' => __('Checked', array(), 'sf_admin'), 'title' => __('Checked', array(), 'sf_admin'))) ?>
<?php endif; ?>
