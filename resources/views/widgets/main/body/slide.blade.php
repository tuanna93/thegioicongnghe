<section id="sp-feature1-wrapper" class=" ">
    <div class="row-fluid" id="feature1">
        <div id="sp-slide-show1" class="span12">
            <div class="module ">
                <div class="mod-wrapper clearfix">
                    <div class="mod-content clearfix">
                        <div class="mod-inner clearfix">
                            <!--[if lte IE 7]>
                            <link href="/css/camera_ie.css" rel="stylesheet" type="text/css" />
                            <![endif]-->
                            <!--[if IE 8]>
                            <link href="css/camera_ie8.css" rel="stylesheet" type="text/css" />
                            <![endif]-->
                            <?php
                                $banner = \App\ImageAdv::where('position',1)->get();
                            ?>
                            <!-- debut Slideshow CK -->
                            <div id="camera_wrap_280">
                                @foreach($banner as $banner)
                                <div data-src="/{{ $banner->image }}"></div>
                                @endforeach
                            </div>
                            <div style="clear:both;"></div>
                            <!-- fin Slideshow CK -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </div>
</section>