<div class="page-wrap">







    {foreach from=$articles_list item=one_article}
        <article>
        <h1>{$one_article.title} </h1>
            <p>{$one_article.content}</p>
          <img src="{$one_article.image}"/>
        </article>
    {/foreach}



</div>
