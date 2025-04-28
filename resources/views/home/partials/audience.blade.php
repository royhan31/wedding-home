<section class="wpo-contact-section-s6 section-padding" id="rsvp">
    <div class="container">
        <div class="contact-wrap">
            <div class="wpo-contact-section-wrapper">
                <div class="wpo-contact-form-area">
                    <div class="wpo-section-title">
                        <h2>Are You Attending?</h2>
                    </div>
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email">
                        </div>
                        <div class="radio-buttons">
                            <p>
                                <input type="radio" id="attend" name="radio-group" checked>
                                <label for="attend">Yes, I will be there</label>
                            </p>
                            <p>
                                <input type="radio" id="not" name="radio-group">
                                <label for="not">Sorry, I can’t come</label>
                            </p>
                        </div>
                        <div>
                            <select name="guest" class="form-control">
                                <option disabled="disabled" selected>Number Of Guests</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="what" id="what"
                                placeholder="What Will You Be Attending">
                        </div>
                        <div>
                            <select name="meal" class="form-control last">
                                <option disabled="disabled" selected>Meal Preferences</option>
                                <option>Chicken Soup</option>
                                <option>Motton Kabab</option>
                                <option>Chicken BBQ</option>
                                <option>Mix Salad</option>
                                <option>Beef Ribs </option>
                            </select>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn">RSVP</button>
                            <div id="c-loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.
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