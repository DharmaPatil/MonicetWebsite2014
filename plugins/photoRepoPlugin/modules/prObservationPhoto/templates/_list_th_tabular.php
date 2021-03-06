<?php 
  $template = $sf_request->getParameter('template', null);
  $template_query_string = ($template == 'catalog')? 'template=catalog&': '';
?>

<?php slot('sf_admin.current_header') ?>
<th width="185" class="sf_admin_text sf_admin_list_th_code">
  <?php if ('code' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Code', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=code&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Code', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=code&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_boolean sf_admin_list_th_is_best">
  <?php if ('is_best' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Is best', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=is_best&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Is best', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=is_best&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th width="120" class="sf_admin_foreignkey sf_admin_list_th_individual_id">
  <?php if ('individual_id' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Individual', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=individual_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Individual', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=individual_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th width="150" class="sf_admin_foreignkey sf_admin_list_th_specie_id">
  <?php if ('specie_id' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Specie', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=specie_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Specie', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=specie_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th width="35" class="sf_admin_text sf_admin_list_th_island">
  <?php if ('island' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Island', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=island&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Island', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=island&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th width="40" class="sf_admin_foreignkey sf_admin_list_th_company_id">
  <?php if ('company_id' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Company', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=company_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Company', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=company_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th width="100" class="sf_admin_text sf_admin_list_th_status">
  <?php if ('status' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Status', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=status&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Status', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=status&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_notes">
  <?php if ('notes' == $sort[0]): ?>
    <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php echo link_to(__('Notes', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=notes&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Notes', array(), 'observation_photo'), '@pr_observation_photo', array('query_string' => $template_query_string.'sort=notes&sort_type=desc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>