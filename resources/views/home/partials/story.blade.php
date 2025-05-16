<section class="wpo-story-section section-padding pb-0" id="story">
    <div class="container">
        <div class="wpo-section-title">
            <h4 class="poort-text poort-in-right">Love Story</h4>
        </div>
        <div class="wpo-story-wrap">
            @foreach ( $stories as $story )
            
            
            <div class="wpo-story-item">
                <div class="row">
                    <div class="col col-lg-6 col-12">
                        <div class="wpo-story-img">
                            <img src="{{$story->image}}" alt="">
                        </div>
                    </div>
                    <div class="col col-lg-6 col-12">
                        <div class="wpo-story-content">
                            <div class="pin">
                                <img src="assets/images/story/pin.svg" alt="">
                            </div>
                            <i><img src="assets/images/story/f-shape-1.png" alt=""></i>
                            <h2>{{$story->title}}</h2>
                            <span>{{$story->story_date}}</span>
                            <p>{{$story->description}}</p>
                            <i><img src="assets/images/story/f-shape-2.png" alt=""></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> <!-- end container -->
    <div class="flower-shape-1">
        <div class="flower-sticky">
            <img src="assets/images/story/shape1.png" alt="">
        </div>
    </div>
    <div class="flower-shape-2">
        <div class="flower-sticky">
            <img src="assets/images/story/shape2.png" alt="">
        </div>
    </div>
</section>