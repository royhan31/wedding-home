<section class="wpo-event-section section-padding pt-0" id="event">
    <div class="container">
        <div class="wpo-section-title">
            <h2 class="poort-text poort-in-right">Our Wedding Programs</h2>
        </div>
        <div class="wpo-event-main">
            <div class="event-description">
                {{-- <p>Monday, 12 Apr. 2024, 2.00 PM – 11.00 PM</p> --}}
            </div>
            <div class="wpo-event-wrap">
                <div class="wpo-event-inner">
                    @foreach ($schedule as $value )
                    <div class="wpo-event-item">
                        <div class="wpo-event-text">
                            <i><img src="{{$value->icon}}" alt=""></i>
                            <span>{{$value->title}}</span>
                        </div>
                        <div class="wpo-event-time">
                            <h4>{{$value->subtitle}}</h4>
                            <i class="fa fa-heart"></i>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="line"></div>
                </div>
                <div class="shape-1"><img src="assets/images/event/shape-1.png" alt=""></div>
                <div class="shape-2"><img src="assets/images/event/shape-1.png" alt=""></div>
                <div class="shape-3"><img src="assets/images/event/shape-2.png" alt=""></div>
            </div>
        </div>

    </div> <!-- end container -->
</section>