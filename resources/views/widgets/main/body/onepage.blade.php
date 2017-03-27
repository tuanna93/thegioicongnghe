<section id="sp-component-wrapper">
    <div id="sp-component">
        <div id="system-message-container"> </div>
        <article class="item-page post-287 post hentry status-publish category-uncategorised ">
            <header class="entry-header">
                <h1 class="entry-title page-header">
                    <a href="/{{ $namepage->slug }}.html">
                        {{ $namepage->name }}
                    </a>
                </h1>
            </header>
            <section class="entry-content media">
                {!! $namepage->content !!}
            </section>
            <footer class="entry-meta">
                <!--	-->
            </footer>
        </article>
    </div>
</section>