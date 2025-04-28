
<!DOCTYPE html>
<html lang="en">

@include('home.partials.head')


<body>
    
    <!-- start page-wrapper -->
    <div class="page-wrap scrollspy-example" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
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
        <!-- Start header -->
       @include('home.partials.menu')
        <!-- end of header -->

        <!-- start of hero -->
        @include("home.partials.home")
        <!-- end of hero-->

        <!-- start couple-section -->
        @include("home.partials.candidate")
        <!-- end couple-section -->

        <!-- start wpo-event-section -->
        @include("home.partials.schedule")
        <!-- end wpo-event-section -->

        <!-- start wpo-story-section -->
        @include("home.partials.story")
        <!-- end story-section -->

         <!-- start wpo-story-section -->
         @include("home.partials.reward")
         <!-- end story-section -->

        <!-- start of wpo-contact-section -->
        @include("home.partials.audience")
        <!-- end of wpo-contact-section -->

        <!-- start of wpo-site-footer-section -->
        @include("home.partials.footer")
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-plugin-collection.js')}}"></script>
    <script src="{{ asset('assets/js/gsap-active.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('assets/js/script.js')}}"></script>

    <script>
         if ($("#clock").length) {
            $('#clock').countdown('{{$data ? $data->wedding_date : ""}}', function (event) {
                var $this = $(this).html(event.strftime(''
                    + '<div class="box"><div><div class="time">%D</div> <span>Hari</span> </div></div>'
                    + '<div class="box"><div><div class="time">%H</div> <span>Jam</span> </div></div>'
                    + '<div class="box"><div><div class="time">%M</div> <span>Menit</span> </div></div>'
                    + '<div class="box"><div><div class="time">%S</div> <span>Detik</span> </div></div>'));
            });
        }

        $(document).ready(function() {
            // $("#my_audio").get(0).play();
        });

        function saveToCalendar() {
            var event = "";
            var month = '04';
            var date = '27';
            var th  = '2025';
            var link = 'https://calendar.google.com/calendar/u/0/r/eventedit?text='+event+'&dates='+th+month+date+'T080000/'+th+month+date+'T090000';
            window.open(link, '_blank');
        }
    </script>
</body>

</html>