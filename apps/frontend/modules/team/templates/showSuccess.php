<h2><?php echo $element->getName(); ?></h2>
<br />
<?php if($element->getPhoto()) echo link_to_if($element->getLink(), image_tag('/uploads/team/tn_' . $element->getPhoto(), 'align=left vspace=10 hspace=10 width="140px" alt_title=' . $element->getName()), $element->getLink(), 'target=_blank') ?>
<!--
<?php if($element->getLink()): ?>
    <br /><br />
    <a href="<?php echo $element->getLink(); ?>"><?php echo $element->getLink(); ?></a>
    <br /><br />
<?php endif ?>
-->
<?php if($element->getAbout()): ?>
    <div class="content"><?php echo $element->getAbout(ESC_RAW); ?></div>
<?php endif ?>