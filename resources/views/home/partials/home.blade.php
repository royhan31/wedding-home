<section class="static-hero-s6" id="home">
    <div class="static-main-box">
        <div class="container-fluid">
            <div class="static-inner-box">
                <div class="row align-items-center">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="hero-text">
                            <h2 class="wow fadeInUp" data-wow-duration="1200ms"> {{$male ? $male->name : ""}} & {{$female ? $female->name : ""}}</h2>
                            <div class="wow fadeInUp" data-wow-duration="1400ms">
                                <span>We Are Getting Married In</span>
                            </div>
                            <p class="wow fadeInUp" data-wow-duration="1600ms">{{ $data ? $data->wedding_date->isoFormat('dddd, D MMMM Y') : ""}}</p>
                            <!-- start wpo-wedding-date -->
                            <div class="wpo-wedding-date wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wedding-date-wrap">
                                    <div class="clock-grids">
                                        <div id="clock"></div>
                                    </div>
                                </div>
                                <button class="btn mt-5 text-white" style="background: #abbbd4" onclick="saveToCalendar()">Save to Calendar</button>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>