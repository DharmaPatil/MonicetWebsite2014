<?php use_helper('I18N')?>

<div id="sf_admin_container">
  <h1>Pesquisa de fotografias por processar</h1>

  <?php include_partial('prMain/flashes') ?>

  <div id="sf_admin_header"><?php //print_r($argumentos ) ?></div>
  <div id="sf_admin_content">
    <div class="sf_admin_form">
      <form method="post" action="<?php echo url_for('@pr_pendent_photos_list') ?>" enctype="multipart/form-data">

        <fieldset id="sf_fieldset_none">
          <div class="sf_admin_form_row sf_admin_text">
            <?php echo $form['date_from']->renderError() ?>
            <div>
              <?php echo $form['date_from']->renderLabel() ?>
              <?php echo $form['date_from']->render() ?>
            </div>
          </div>
          <div class="sf_admin_form_row sf_admin_text">
            <?php echo $form['date_to']->renderError() ?>
            <div>
              <?php echo $form['date_to']->renderLabel() ?>
              <?php echo $form['date_to']->render() ?>
            </div>
          </div>
          <div class="sf_admin_form_row sf_admin_text">
            <?php echo $form['photographer']->renderError() ?>
            <div>
              <?php echo $form['photographer']->renderLabel() ?>
              <?php echo $form['photographer']->render() ?>
            </div>
          </div>
        </fieldset>
        <ul class="sf_admin_actions">
          <li class="sf_admin_action_back"><a href="<?php echo url_for('@recognition_of_cetaceans_app') ?>">Painel de controlo</a></li>
          <li class="sf_admin_action_new"><?php echo link_to('Adicionar mais fotografias', '@pr_add_photos_bulk') ?></li>
          <li class="sf_admin_action_save"><input type="submit" value="Pesquisar" /></li>
          <?php if( count($invalidPhotos) ): ?>
            <li class="sf_admin_action_delete"><?php echo link_to('Apagar ficheiros inválidos', 'pr_pendent_invalid_photos_delete', array(), array( 'method' => 'post', 'confirm' => 'Tem a certeza que pretende remover os ficheiros inválidos?')) ?></li>
          <?php endif; ?>
        </ul>
      </form>
    </div>
  </div>
</div>

<?php if( count($invalidPhotos) ): ?>
  <br/>
  <?php if( count($invalidPhotos) ): ?>
    <h1><?php echo format_number_choice('[1] Existe 1 Resultado inválido.|(1,+Inf] Existem %num% resultados inválidos', array('%num%' => count($invalidPhotos)), count($invalidPhotos), 'messages')?></h1>
  <?php endif; ?>
  <div id="sf_admin_container">
    <?php if( count($invalidPhotos) ): ?>
      <div class="sf_admin_list" id="sf_admin_content">
        <table cellspacing="0">
          <thead>
            <tr>
              <th width="300">Fotografia</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach( $invalidPhotos as $file ): ?>
              <tr class="sf_admin_row <?php echo fmod($cont, 2)? 'odd': 'even' ?>">
                <td style="text-align: left;"><?php echo $file ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>

<?php if(isset($resultados)): ?>
  <br/>
  <?php if( count($resultados) ): ?>
    <h1><?php echo format_number_choice('[1] 1 Resultado|(1,+Inf] %num% Resultados', array('%num%' => count($resultados)), count($resultados), 'messages')?></h1>
  <?php endif; ?>
  <div id="sf_admin_container">
    <?php if( count($resultados) ): ?>
      <div class="sf_admin_list" id="sf_admin_content">
        <table cellspacing="0">
          <thead>
            <tr>
              <th width="300">
                <?php echo image_tag('/mfAdministracaoPlugin/images/icons/'.$sort.'.png', array('alt' => __($sort, array(), 'sf_admin'), 'title' => __($sort, array(), 'sf_admin'))) ?>
                <?php $ph = $sf_request->getParameterHolder()->get('find_pendent_photos') ?>
                <?php echo link_to('Fotografia', '@pr_pendent_photos_list?find_pendent_photos[photographer]='.$ph['photographer'].'&find_pendent_photos[date_from]='.$ph['date_from'].'&find_pendent_photos[date_to]='.$ph['date_to'].'&sort='.($sort == 'asc' ? 'desc' : 'asc'), array(), array('method' => 'post')) ?>
              </th>
              <th>Acções</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach( $resultados as $file ): ?>
            <tr class="sf_admin_row <?php echo fmod($cont, 2)? 'odd': 'even' ?>">
              <td style="text-align: left;"><?php echo $file ?></td>
              <td>
                <ul class="sf_admin_td_actions">
                  <li class="sf_admin_action_show"><?php echo link_to('Ver fotografia', '/uploads/pr_repo/'.$file, array('target' => '_blank') ) ?></li>
                  <li class="sf_admin_action_delete"><?php echo link_to('Apagar', 'pr_pendent_photo_delete', array('filename' => substr($file, 0, -4), 'extension' =>substr($file, -3)), array('method' => 'post', 'confirm' => 'Tem a certeza que pretende remover definitivamente o ficheiro "'.$file.'"?')) ?></li>
                </ul>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <div class="error">Não foram encontrados resultados com os critérios fornecidos</div>
    <?php endif; ?>
  </div>
<?php endif; ?>