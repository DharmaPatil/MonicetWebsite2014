<p class="_p_article_headline"><?php echo $article->getHeadline() ?></p>
<p class="_p_article_date"><?php echo $article->getUpdatedAt() ?></p>
<p class="_p_article_body"><?php echo nl2br($article->getBody()) ?></p>

<p><?php echo link_to('&laquo; '.__('back_to_news'), '@news_all')?></p>