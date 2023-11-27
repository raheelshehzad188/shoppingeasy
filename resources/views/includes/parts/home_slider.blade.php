<!-- Main Slider Start -->
<div class="home-slider">
    <div class="main-slider">
        @foreach ($Slider as $key => $slide)
            <div class="main-slider-item"><img src="{{asset('')}}public/img/slider/{{$slide->slider_image}}" alt="Slider Image" /></div>
        @endforeach
    </div>
</div>
<!-- Main Slider End -->