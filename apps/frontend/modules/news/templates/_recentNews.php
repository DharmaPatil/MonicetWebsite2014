<ul id="_ul_recent_news">
    <?php foreach($recent_articles as $article): ?>
    <li><?php echo link_to($article->getId(), 'news/show?article=' . $article->getId()); ?></li>
    <?php endforeach ?>
</ul>

<p id="_p_see_all_news"><?php echo link_to(__('see all') . '&raquo', 'news/all'); ?></p>