<?php foreach ($pager->getResults() as $article): ?>
	<p class="_p_article_headline"><?php echo link_to($article->getHeadline(), 'news', $article) ?></p>
	<p class="_p_article_date"><?php echo $article->getPublishDate(); ?></p>
	<div class="content _p_article_body" style="display:block; min-height: 115px;">
	  <?php if($article->getImage()): ?>
	    <?php echo image_tag('/uploads/news/tn_'.$article->getImage(), 'align=left vspace=5 hspace=5 alt_title=' . $article->getHeadline()) ?>
	  <?php endif ?>
	  <?php $string=$article->getBody(ESC_RAW);if(strlen($string)<=300){echo $string;}else{$string=wordwrap($string,300);echo substr($string,0,strpos($string,"\n"));} ?> ... <strong><?php echo link_to(__('read more ') . ' &raquo;', 'news', $article) ?></strong>
	  <br /><br />
	</div><br />
<?php endforeach ?>

<?php if ($pager->haveToPaginate()): ?>
  <p class="_p_news_pages_navigation">
  <?php echo link_to('&laquo; ' . __('first'), 'news/all?page=' . $pager->getFirstPage()) ?>&nbsp;&nbsp;&nbsp;
  <?php echo link_to('&lt;', 'news/all?page='.$pager->getPreviousPage()) ?>&nbsp;
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'news/all?page=' . $page) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?> | <?php endif ?>
  <?php endforeach ?>
  &nbsp;<?php echo link_to('&gt;', 'news/all?page='.$pager->getNextPage()) ?>&nbsp;&nbsp;&nbsp;
  <?php echo link_to(__('last') . ' &raquo;', 'news/all?page='.$pager->getLastPage()) ?>
  </p>
<?php endif ?>
