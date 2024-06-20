@extends('frontend.master')
@section('content')
 <!-- Location section -->
 <section>

<div class="l-cation">
    <div class="location-section container-width">
        <div class="our-location">

        <div class="location-text">
            <h1>Our Location</h1>
        </div>
        <div class="location-mapp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.2019443324107!2d104.82783277604223!3d11.537366588661525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fe79c4613ab%3A0x61f7ebd10286e77!2sLABIOCERT%20-%20The%20Confidence%20Solution!5e0!3m2!1sen!2skh!4v1717464295930!5m2!1sen!2skh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="c-section tenzero">
        <div class="contact-container">
            <div class="cont-text"><h1>CONTACT FORM</h1></div>
                <form action="" id="c-Form">
                    <label class="c-name" for="f-Name" >Full Name * <br></label>
                    <input class=" c-text" type="text" name="f-Name" id="f-Name" required>
                    <div class="eror-mes" id="f-NameError">The field is required.</div>

                    <label class="c-name" for="e-Address">Email Address * <br></label>
                    <input  class="c-text" type="email" id="e-Address" name="e-Address" required><br>
                    <div class="eror-mes" id="e-AddressError">The field is required.</div>

                    <label class="c-name" for="subject" >Subject * <br></label>
                    <input  class="c-text" type="text" id="s-text" name="s-text" required> <br>
                    <div class="eror-mes" id="subejectError">The field is required.</div>

                    <label class="c-name" for="y-Name">Your Message * <br></label>
                    <textarea  class="c-text" name="y-Name" id="y-Name" class="y-Name" required></textarea><br>
                    <div class="eror-mes" id="y-NameError">The field is required.</div>
                
                    <button type="submit" class="c-btnsub">Submit</button>
                </form>
                <div id="res-Message" class="hidden">Thank you for your message.It has been sent.</div>
                <div id="alt-Message" class="hidden">One or more fields have an error. Please check and try again.</div>
        </div>
        <div class="c-grid">
                <div class="c-icon o-detail">
                    <div class="tel-grid">
                        <div class="m-icon o-detail">
                            <i class="fa-solid fa-mobile-screen"></i>
                        </div>
                        <div class="cont-tell o-detail">
                            <h5>Telephone & Fax :</h5>
                            <span class="telll">
                                - Tel: <a href="tel:+85517594293" style="text-decoration: none;"> (+855) 17 59 42 93 </a><br>
                                - Fax: <a href="tel:+85523890093" style="text-decoration: none;"> (+855) 23 89 00 93</a>
                            </span>
                        </div>
                    </div>
                    <div class="e-grid">
                        <div class="e-icon o-detail">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="emaill-text o-detail">
                            <h5>Email :</h5>
                            <span class="telll">
                                - <a href="mailto:ncharkriya@labiocert.com" style="text-decoration: none;"> nchakriya@labiocert.com </a> <br> 
                                - <a href="mailto:info@labiocert.com" style="text-decoration: none;"> info@labiocert.com</a></span>
                        </div>
                    </div>
                    <div class="l-grid">
                        <div class="l-icon o-detail">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="locationn-text o-detail">
                            <h5>Address :</h5>
                            <span class="telll">
                                # 138 Bis, Street 110, Sangkat Chom Chao,
                                Khan Por Sen Chey, Phnom Penh, Cambodia
                                <a href="https://maps.app.goo.gl/gZcnic3odNy1yt3bA" style="text-decoration: none;">."View on Google Maps"</a>
                            </span>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    </div>
</div>

</section>
<!-- End of Location section -->
 @endsection