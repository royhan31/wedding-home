
<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset('images/preloader.svg')}}" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
       
        <!-- start of invitation -->
        <section class="wpo-invitation-area section-padding" style="background: url({{ asset('images/slider/invitation-bg.jpg')}}) no-repeat center center;  background-size: cover;">
            <div class="container-fluid">
                <div class="wpo-invitation-wrap">
                    <div class="wpo-invitation-inner-item">
                        <div class="wpo-invitation-inner">
                            <div class="middle-couple-pic wow zoomIn" data-wow-duration="1000ms">
                                <div class="middle-couple-pic-inner">
                                    <img src="{{$data->invitation_image}}" alt="">
                                </div>
                                <div class="couple-flower">
                                    <img src="{{ asset('images/couple/couple-flower.png')}}" alt="">
                                </div>
                            </div>
                            <div class="wpo-invitation-info">
                                <h2 class="wow fadeInUp" data-wow-duration="1000ms"> {{$male ? $male->name : ""}} & {{$female ? $female->name : ""}}</h2>
                                <p class="wow fadeInUp" data-wow-duration="1200ms">{{ $data ? $data->wedding_date : ""}}</p>
                            </div>
                            <div class="wpo-event-text">
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="1600ms"> <a class="" href="/home">Buka Undangan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of invitation slider -->

        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

   @include('partials.script')
</body>

</html>