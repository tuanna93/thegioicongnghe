@if(count(\App\ImageAdv::where('position',2)->get()))
<section id="sp-our-project-wrapper" class=" box-layout4 hidden-phone hidden-tablet">
    <div class="container">
        <div class="row-fluid" id="our-project">
            <div id="sp-our-project" class="span12">
                <div class="module ">
                    <div class="mod-wrapper sp_strong clearfix">
                        <div class="mod-content clearfix">
                            <div class="mod-inner clearfix">
                                <div class="custom">
                                    <?php
                                        $adv_top = \App\ImageAdv::where('position',2)->get();
                                    ?>
                                    <p>
                                        @foreach($adv_top as $adv_top)
                                        <a href="{{ $adv_top->slug }}" rel="alternate"><img src="/{{ $adv_top->image }}" width="{{ $adv_top->width }}" height="{{ $adv_top->height }}"></a>
                                        @endforeach
                                    </p>
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
@endif