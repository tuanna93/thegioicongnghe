<section id="sp-component-area-wrapper" class=" ">
    <div class="row-fluid" id="component-area">
        <div id="sp-component-area" class="span12">
            <section id="sp-component-wrapper">
                <div id="sp-component">
                    <div id="system-message-container"> </div>
                    <section class="blog ">
                        @foreach($post as $pos)
                        <div class="items-row cols-1 row-0 row-fluid clearfix">
                            <div class="span12">
                                <div class="item column-1">
                                    <article class="post-308 post hentry status-publish category-tin-tuc">
                                        <section class="entry-content media">
                                            <div class="article-text">
                                                <header class="entry-header">
                                                    <h2 class="entry-title">
                                                        <a href="/tin-tuc/{{ $pos->slug }}.html" rel="bookmark" title="{{ $pos->name }}">
                                                            {{ $pos->name }}
                                                        </a>
                                                    </h2>
                                                </header>
                                                <a href="/tin-tuc/{{ $pos->slug }}.htm  l">
                                                    <img src="{{ $pos->image }}" alt="{{ $pos->name }}" width="256" height="138" style=" float:left; margin: 3px; border: 1px solid #cccccc;">
                                                </a>
                                                <div id="ContentDetail" class="knc-content">
                                                   {!! $pos->intro !!}
                                                </div>
                                            </div>
                                        </section>
                                        <footer class="entry-meta"> </footer>
                                    </article>
                                </div>
                                <!-- end item -->
                            </div>
                            <!-- end span -->
                        </div>
                        <!-- end row -->
                        @endforeach
                        {{--<div class="items-more">--}}
                            {{--<section class="items-more">--}}
                                {{--<h3 class="item-title">Các bài khác...</h3>--}}
                                {{--<ul>--}}
                                    {{--<li> <a href="tin-tuc/291-danh-gia-may-nghe-nhac-fiio-m3.html">--}}
                                            {{--Đánh giá máy nghe nhạc Fiio M3: rẻ, nhỏ gọn, chất âm tốt--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</section>--}}
                        {{--</div>--}}
                        <div class="pagination">
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
</section>