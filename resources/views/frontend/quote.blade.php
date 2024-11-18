@extends('frontend.master')
@section('content')
  <!-- Quote Section -->

@if(Session::has('success'))
 <div class="toaster">
    <span>Quote has sent. &ensp; <i class="fa-solid fa-circle-check"></i></span>
 </div>
@endif
  
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
                            <form action="/quote/sending" method="POST" id="quoteForm" onsubmit="validation(event)" class="form-container">
                                @csrf
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
                                <input  class="in-text" type="tel" id="contactNumber" name="contactNumber" required><br>
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
                <div class="quote-adversting fixed ads-service">
                    <div class="last-new">
                        <span class="lastnew">LASTEST NEWS</span>
                    </div>
                    <div class="lastnew-detail">
                        @if(!empty($collection_lastest))
                            @foreach($collection_lastest as $item)
                                <div class="img-launchnew ">
                                    <a href="/media/page={{$item->id}}" class="img-lastnew"><img src="/assets/uploads/{{$item->image}}"  alt=""></a>
                                    <a href="/media/page={{$item->id}}" class="text-lastnew">{{ Str::limit($item->title, 40) }}</a>
                                </div>
                            @endforeach
                        @endif
            
                        </div>
        </div>
        </div>
                </aside>
                
            </div>
        </div>
 
<script>
        function  validation(event){
        event.preventDefault(); // Prevent the form from submitting by default

        var phone = document.getElementById('contactNumber').value.trim();
        var pattern = /^\+?[0-9]+$/; // Regular expression pattern to allow optional leading '+' followed by digits (0-9)

        if (pattern.test(phone)) {
            // If phone number is valid, you can submit the form
            this.submit(); // Submit the form
        } else {
            alert('Please enter a valid phone number.'); // Show an error message
            // Optionally, you can focus on the input field or perform other actions
        }
    });
</script>

</script>
@endsection 