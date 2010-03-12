<h2><?php echo $element->getName(); ?></h2>
<?php if($element->getLogotype()): ?>
    <?php echo image_tag('/uploads/consorcium/'.$element->getLogotype(), 'align=left vspace=10 hspace=10 width="140px" alt_title='.$element->getName()) ?>
<?php endif ?>
<br />
<?php if($element->getLink()): ?>
    <p><a href="<?php echo $element->getLink(); ?>" target="_blank"><?php echo $element->getLink() ?></a></p>
<?php endif ?>
<?php if($element->getDescription()): ?>
    <span class="content"><?php echo $element->getDescription(ESC_RAW); ?></span>
<?php endif ?>