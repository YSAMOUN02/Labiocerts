@extends('frontend.master')
@section('content')
  <!-- Quote Section -->
  <section> 
        <div class="getquote-section tenzero container-width">
            <div class="grid-quote ">
                <div class="quote-form scrollable">
                    <div class="quote-title">
                        <h3>We're here to help you improve your business continually</h3>
                        <p>
                            In search of excellence and competitive advantage, there is need to continually improve 
                            the business. We believe that quality control is a fundamental part of improvement circle.
                            Therefore, we understand your need for a friendly, responsive, reliable and complete testing service to verify the 
                            conformity of your products. 
                        </p>
                    </div>
                    <div class="c-container">
                        <div class="getquote-text"><h1>GET A QUOTE</h1></div>
                            <form action="" id="quoteForm" class="form-container">
                                <label class="la-name" for="fullName" >Full Name * <br></label>
                                <input class="in-text" type="text" name="fullName" id="fullName" required>
                                <div class="error-message" id="fullNameError">The field is required.</div>
                            
                                <label class="la-name" for="companyName">Company Name * <br></label>
                                <input  class="in-text" type="text" name="companyName" id="companyName" required>
                                <div class="error-message" id="companyName">The field is required</div>
                            
                                <label class="la-name" for="industrySelector">Company Industry Selector * <br></label>
                                <select  class="in-text" name="industrySelector" id="industrySelector" class="industrySelector" required>
                                    <option value="">Select an option</option>
                                    <option value="Pharmaceutical">Pharmaceutical</option>
                                    <option value="Food and Feed Testing">Food and Feed Testing</option>
                                    <option value="Water and Wastewater Testing">Water and Wastewater Testing</option>
                                </select> <br>
                                <div class="error-message" id="industrySelectorError">The field is required.</div>
                            
                                <label class="la-name" for="contactNumber">ContactNumber *<br></label>
                                <input  class="in-text" type="text" id="contactNumber" name="contactNumber" required><br>
                                <div class="error-message" id="contactNumberError">The fied is required.</div>
                            
                                <label class="la-name" for="emailAddress">Email Address * <br></label>
                                <input  class="in-text" type="email" id="emailAddress" name="emailAddress" required><br>
                                <div class="error-message" id="emailAddressError">The field is required.</div>
                            
                                <label class="la-name" for="inquiry">Inquiry <br></label>
                                <textarea  class="in-text" name="inquiry" id="inquiry" class="inquiry" required></textarea><br>
                                <div class="error-message" id="inquiryError">The field is required.</div>
                            
                                <button type="submit" class="btn-sub">Submit</button>
                            </form>
                        <div id="responseMessage" class="hidden">Thank you for your message.It has been sent.</div>
                        <div id="alertMessage" class="hidden">One or more fields have an error. Please check and try again.</div>
                        
                        <div class="button-container">
                            <div class="share-dropdown">
                                <button class="share-button"><i class="fa-solid share-link fa-share-nodes fa-sm"
                                        style="color: #0e0c0c;"></i>Share</button>
                                <div class="dropdown-content">
                                    <a href="#" id="share-copy">Copy link</a>
                                </div>
                            </div>
                            <div class="face-btn"> 
                                <button class="facebook-button">
                                    <a href="#" id="share-facebook">
                                        <i class="fa-brands share-face fa-facebook-f"style="color: #ffffff;"></i>
                                        Facebook
                                    </a>
                                </button>
                            </div>
                            <div class="print-btn">
                                <button class="print-button" onclick="window.print()">
                                    <i class="fa-solid share-print fa-print"style="color: #ffffff;"></i>
                                    Print 
                                </button>
                            </div>
                            
                        </div>
                        <div class="block-row">
                            <div class="previous-side">
                                <span class="pre-art">Previous article</span> <br>
                                <a href="/media/newyear">New year and double birthday</a>
                            </div>
                            <div class="next-side">
                                <span class="next-art">Next article</span> 
                                <a href="/service/watertesting">Water and Wastewater Testing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <aside>
                <div class="quote-adversting fixed ads-service">
            <div class="last-new">
                <span class="lastnew">LASTEST NEWS</span>
            </div>
            <div class="lastnew-detail">
                <div class="img-khmernew ">
                    <a href="Eventone.html" class="img-lastnew"><img src="{{('/assets/image/allimg1.jpg')}}" alt=""></a>
                    <a href="Eventone.html" class="text-lastnew">New year and double birthday</a>
                </div>
                <div class="img-launchnew ">
                    <a href="Eventtwo.html" class="img-lastnew"><img src="{{('/assets/image/allimg2.jpg')}}" alt=""></a>
                    <a href="Eventtwo.html" class="text-lastnew">Launch of KEM</a>
                </div>
                <div class="img-kinal ">
                    <a href="Eventthree.html" class="img-lastnew"><img src="{{('/assets/image/allimg3.jpg')}}" alt=""></a>
                    <a href="Eventthree.html" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                </div>
            </div>
        </div>
                </aside>
                
            </div>
        </div>
</section>
    <!-- End of Quote Section -->

@endsection 