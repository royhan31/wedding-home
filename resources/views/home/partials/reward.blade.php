<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12 offset-lg-1">
                <div class="wpo-contact-title">
                    <h2>Titip Hadiah</h2>
                    <p>Doa restu Bapak/Ibu sekalian merupakan karunia yang sangat berarti bagi kami. Dan jika memberi merupakan ungkapan tanda kasih, Bapak/Ibu dapat memberi kado secara cashless. Terima kasih</p>
                </div>
                <div class="office-info">
                    <div class="row">
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    </div>
                                </div>
                                <div class="office-info-text mb-4">
                                    <h2>{{$male ? $male->bank_name : ""}}</h2>
                                    <p>{{$male ? $male->bank_number : ""}}</p>
                                    <p>{{$male ? $male->full_name : ""}}</p>
                                    <button class="btn pull-right text-white" style="background: #abbbd4" onclick="copyToClipboard(this,'test')">Copy</button>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    </div>
                                </div>
                                <div class="office-info-text mb-4">
                                    <h2>{{$female ? $female->bank_name : ""}}</h2>
                                    <p>{{$female ? $female->bank_number : ""}}</p>
                                    <p>{{$female ? $female->full_name : ""}}</p>
                                    <button class="btn pull-right text-white" style="background: #abbbd4" onclick="copyToClipboard(this,'test')">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- end container -->
</section>