<section id="sp-bottom-wrapper" class=" ">
    <div class="container">
        <div class="row-fluid" id="bottom">
        @if(\App\Helpers\Helpers::get_menu_bottom())
        @foreach(\App\Helpers\Helpers::get_menu_bottom() as $menu)
            <div id="sp-bottom1" class="span3">
                <div class="module ">
                    <div class="mod-wrapper-flat clearfix">
                        <h3 class="header">
                            <span>{{ $menu->name }}</span>
                        </h3>
                        @if(\App\Helpers\Helpers::check_menu($menu->id))
                        <div class="custom">
                            {!! $menu->content !!}
                        </div>
                        @else
                        <ul class="nav">
                            @foreach(\App\Helpers\Helpers::get_menu_bottom_sub($menu->id) as $menu_sub)
                            <li>
                                <a href="/{{ $menu_sub->slug }}.html">{{ $menu_sub->name }}</a>
                            </li>
                            @endforeach
                        @endif
                        </ul>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>