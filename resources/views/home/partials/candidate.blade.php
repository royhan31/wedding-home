<section class="wpo-couple-section-s2 section-padding pt-0" id="couple">
    <div class="container-fluid">
        <div class="couple-area clearfix">
            <div class="couple-wrap">
                <div class="row gx-5">
                    <div class="col col-lg-5 col-12">
                        <div class="couple-item">
                            <div class="couple-img">
                                <img src="{{$male ? $male->image : ""}}" alt="">
                            </div>
                            <div class="couple-text">
                                <div class="couple-text-inner">
                                    <i><img src="assets/images/couple/groom2.svg" alt=""></i>
                                    <h3>{{$male ? $male->full_name : ""}}</h3>
                                    <p>{{$male ? $male->description : ""}}</p>
                                    <div class="social">
                                        <ul>
                                            <li><a href="{{$male ? $male->facebook_url : ""}}"><i class="ti-facebook"></i></a></li>
                                            <li><a href="{{$male ? $male->instagram_url : ""}}"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="love-shape"><img src="/assets/images/couple/heart-shape.png" alt=""></div>
                    </div>
                    <div class="col col-lg-5 col-12">
                        <div class="couple-item">
                            <div class="couple-img">
                                <img src="{{$female ? $female->full_name : ""}}" alt="">
                            </div>
                            <div class="couple-text">
                                <div class="couple-text-inner">
                                    <i><img src="assets/images/couple/bride2.svg" alt=""></i>
                                    <h3>{{$female ? $female->full_name : ""}}</h3>
                                    <p>{{$female ? $female->description : ""}}</p>
                                    <div class="social">
                                        <ul>
                                            <li><a href="{{$female ? $female->facebook_url : ""}}"><i class="ti-facebook"></i></a></li>
                                            <li><a href="{{$female ? $female->instagram_url : ""}}"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>