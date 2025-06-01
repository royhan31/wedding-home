 <section class="wpo-blog-section-s3 soft-bg4 section-padding">
            <div class="container">
                <div class="wpo-section-title">
                    <h4 class="poort-text poort-in-right">Lokasi</h4>
                </div>
                <div class="wpo-contact-map">
                    <div class="row">

                        <div class="col col-lg-12 col-md-6 col-12">
                            <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1000ms">
                                 <div class="wpo-blog-img" id="map" style="height: 400px">
                                </div>
                                <div class="wpo-blog-content text-center">
                                    <h2>Lokasi mempelai pria : </h2>
                                    <p>{{$male ? $male->address : ""}}</p>
                                    <a class="btn mt-5 text-white" style="background: #abbbd4; text-align: center;" target="_blank" href="https://www.google.com/maps/search/?api=1&query={{$male ? $male->location : "0,0"}}" >Google Map</a>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col col-lg-12 col-md-6 col-12">
                            <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1000ms">
                                 <div class="wpo-blog-img" id="map2" style="height: 400px">
                                </div>
                                <div class="wpo-blog-content">
                                    <h2 class="text-center">Lokasi mempelai wanita : </h2>
                                      <p class="text-center">{{$female ? $female->address : ""}}</p>
                                </div>
                            </div>
                        </div>
                       
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
@push("script")
  <script src="js/leaflet/leaflet.js"></script>
<script>
    

    var map = L.map('map').setView([{{$male ? $male->location : "0,0"}}], 13);
    var tiles =L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 19,
      subdomains:['mt0']
    }).addTo(map);

    var marker = L.marker([{{$male ? $male->location : "0,0"}}]).addTo(map);

    var map2 = L.map('map2').setView([{{$female ? $female->location : "0,0"}}], 13);
    var tiles2 =L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 19,
      subdomains:['mt0']
    }).addTo(map2);

    var marker2 = L.marker([{{$female ? $female->location : "0,0"}}]).addTo(map2);
    
</script>
@endpush