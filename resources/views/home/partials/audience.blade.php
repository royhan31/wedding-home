<section class="wpo-contact-section-s6 section-padding" id="rsvp">
    <div class="container">
        <div class="contact-wrap">
            <div class="wpo-contact-section-wrapper">
                <div class="wpo-contact-form-area">
                    <div class="wpo-section-title">
                        <h2>Kehadiran</h2>
                    </div>
                    <div id="audience-alert"></div>
                    <form method="post" class="contact-validation-active">
                        <div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                        </div>
                        <div>
                           <textarea class="form-control" name="description" id="description" cols="30" rows="100" placeholder="Ucapan"></textarea>
                        </div>
                        <div class="radio-buttons">
                            <p>
                                <input type="radio" id="attend" name="status" value="1" checked>
                                <label for="attend">Hadir</label>
                            </p>
                            <p>
                                <input type="radio" id="not" name="status" value="0">
                                <label for="not">Tidak bisa hadir</label>
                            </p>
                        </div>
                      
                        <div class="submit-area">
                            <button type="button" onclick="storeData()" class="theme-btn">Kirim</button>
                            <div id="c-loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="shape-1 wow fadeInDown" data-wow-duration="1200ms"><img
                    src="assets/images/rsvp/top-shape.png" alt=""></div>
            <div class="shape-2 wow fadeInUp" data-wow-duration="1200ms"><img
                    src="assets/images/rsvp/bottom-shape.png" alt=""></div>
        </div>
    </div>
    <div class="left-shape-1"><img src="assets/images/rsvp/l-flower1.png" alt=""></div>
    <div class="left-shape-2"><img src="assets/images/rsvp/l-flower2.png" alt=""></div>
</section>

@push("script")
<script>
    function storeData(){
        let token = "{{ csrf_token() }}";
        
        const data = {
            "_token": token,
            "name": $('input[name="name"]').val(),
            "description": $('#description').val(),
            "status": $('input[name="status"]:checked').val(),
        }

         $.ajax({
                url: "{{ route('audience.store') }}",
                method: 'post',
                data: data, // prefer use serialize method
                success:function(data){ 
                    $("#audience-alert").html(`<div id="audience-alert-message" class="alert alert-light text-center wow fadeInUp" role="alert" data-wow-duration="1200ms"> Terima kasih </div>`)
                    setTimeout(
                        function() {
                                var id200 = document.getElementById("audience-alert-message");
                                id200.style.transition = "opacity " + 3 + "s";
                                id200.style.opacity = 0;
                                id200.addEventListener("transitionend", function() {
                                id200.style.display = "none";
                            });
                        }, 4000
                    );
                },
                error: function(xhr, textStatus, error){
                   
                    console.log(xhr.responseJSON);
                }
            });


       
    }
</script>
@endpush