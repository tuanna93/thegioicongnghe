<section id="sp-main-menu-wrapper" class=" hidden-phone">
    <div class="container">
        <div class="row-fluid" id="main-menu">
            <div id="sp-menu" class="span10">
                <div id="sp-main-menu" class="visible-desktop">
                    <ul class="sp-menu level-0">
                        <?php
                            $menu = \App\Menu::where('parent_id',0)->where('position',1)->where('status',1)->get();
                        ?>
                        @foreach($menu as $menu_1)

                        <li class="menu-item {{ App\Helpers\Helpers::check_menu($menu_1->id,'parent')}}">
                            <a href="/{{ $menu_1->slug }}.html" class="menu-item {{ \App\Helpers\Helpers::check_menu($menu_1->id)}}">
                                <span class="menu">
                                    <span class="menu-title">{{ $menu_1->name }}</span>
                                </span>
                            </a>
                            @if(\App\Helpers\Helpers::check_menu($menu_1->id,'parent'))
                            <div class="sp-submenu sub-level" style="top: 44px; left: 0px;">
                                <div class="sp-submenu-wrap" style="margin-top: 0px; margin-left: 0px;">
                                    <div class="sp-submenu-inner clearfix" style="width: 300px;">
                                        <div class="megacol col1" style="width: 300px;">
                                            <ul class="sp-menu level-1">
                                                <li class="menu-item sp-menu-group">
                                                    <div class="sp-menu-group">
                                                        <div class="sp-menu-group-content">
                                                            <div class="module ">
                                                                <div class="mod-wrapper-menu clearfix">
                                                                    <div class="cmenu_jshopping_block">
                                                                        <div id="vina-cmenu-vertical-jshopping201" class="vina-cmenu-vertical-jshopping">
                                                                            <ul class="level0">
                                                                                <?php
                                                                                    $menu2 = \App\Menu::where('parent_id',$menu_1->id)->get();
                                                                                ?>
                                                                                @foreach($menu2 as $menu_2)
                                                                                <li class="menu-item {{ \App\Helpers\Helpers::check_menu($menu_2->id,'has_sub')}}">
                                                                                    <a href="{{ \App\Helpers\Helpers::check_type_menu($menu_1->slug) }}/{{ $menu_2->slug }}.html" title="{{ $menu_2->name }}"> <span class="catTitle ">{{ $menu_2->name }}</span> </a>
                                                                                    @if(\App\Helpers\Helpers::check_menu($menu_2->id))
                                                                                    <ul class="sub-menu"><?php
                                                                                        $menu3 = \App\Menu::where('parent_id',$menu_2->id)->get();
                                                                                        ?>
                                                                                        @foreach($menu3 as $menu_3)
                                                                                        <li class="menu-item">
                                                                                            <a href="{{ \App\Helpers\Helpers::check_type_menu($menu_1->slug) }}/{{ $menu_3->slug }}.html" title="{{ $menu_3->name }}"> <span class="catTitle ">{{ $menu_3->name }}</span> </a>
                                                                                        </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                    @endif
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="hidden-desktop btn btn-primary vina-menu" data-toggle="offcanvas" style=""><i class="icon-align-justify"></i>
                </button>
            </div>
            <div id="sp-phone" class="span2">
                <div class="module  custom_call_us">
                    <div class="mod-wrapper clearfix">
                        <div class="mod-content clearfix">
                            <div class="mod-inner clearfix">
                                <div class="custom custom_call_us">
                                    <div class="tell-phone"><span style="color: #ffffff;"><strong>HOTLINE: <a style="color: #ffffff;" href="tel:{{ \App\Helpers\Helpers::page_get_option('hotline') }}">{{ \App\Helpers\Helpers::page_get_option('hotline') }}</a></strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </div>
    </div>
</section>