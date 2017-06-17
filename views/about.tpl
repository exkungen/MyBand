<div class="page-wrap">




    <section>


        {foreach from=$about_list item=one_about}
            <article>
                {$one_about.id}
                <content> {$one_about.content}  </content>
                <img src="{$one_about.img}"/>
            </article>
        {/foreach}


    </section>


</div>
