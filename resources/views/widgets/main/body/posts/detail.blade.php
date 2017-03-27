<section id="sp-component-wrapper">
    <div id="sp-component">
        <div id="system-message-container">
        </div>
        <article class="item-page post-341 post hentry status-publish category-tin-tuc ">
            <header class="entry-header">
                <h1 class="entry-title page-header">
                    <a href="{{ $post->slug }}.html">
                        {{ $post->name }}
                    </a>
                </h1>
            </header>
            <section class="entry-content media">
                <h2 class="knc-sapo"><span style="font-size: 12pt;">{!! $post->intro !!}</span></h2>
                <div class="clearfix"><span style="font-size: 12pt;">&nbsp;</span></div>
                <div id="ContentDetail" class="knc-content">
                    {!! $post->content !!}
                </div>
            </section>
            <footer class="entry-meta">
            </footer>
        </article>
    </div>
</section>