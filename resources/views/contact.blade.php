<x-layout>
<div class="page-header">
    <div class="container">
        <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                       <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                            <h1 class="page-title">Contact Us</h1>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                            <div class="row">
                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="btn-action"> <a href="/products" class="btn btn-default">Loan Products</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="contact-form mb60">
                        <div class=" ">
                            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="mb60  section-title text-center  ">
                                    <!-- section title start-->
                                    <h1>Get in touch</h1>
                                    <p>We would love to hear from you! Contact us today to learn more about our services or to discuss your financial needs. Our team of knowledgeable experts is always available to provide you with the guidance and support you need to make informed decisions about your finances.</p>
                                </div>
                            </div>
                            <form class="contact-us" id="message-us"                          

                            >
                                @csrf
                                <div class=" ">
                                    <!-- Text input-->
                                    <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                            <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="message"> </label>
                                            <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                   
                                    <!-- Button -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" class="btn btn-default" 
                                        hx-post="/contact-message" hx-target="#message-us" hx-swap="outerHTML" hx-trigger="click" hx-indicator="#spinner" hx-validate="true"                                     
                                        >Submit</button>
                                        <span id="spinner" class="spinner-border spinner-border-sm mx-2 htmx-indicator text-info" role="status">
                                            <span class="visually-hidden text-warning">Sending your message, please wait.....</span>
                                        </span> 
                                    </div>                                                                                                     
                                </div>                                
                            </form>
                            <br />
                             
                            </div>
                        </div>
                        <!-- /.section title start-->
                    </div>
                    <div class="contact-us mb60">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb60  section-title">
                                    <!-- section title start-->
                                    <h1>We are here to help you </h1>
                                    <p>Our team of knowledgeable experts is always available to provide you with the guidance and support you need to make informed decisions about your finances. You can reach us by phone, email, or by visiting us. Let us help you achieve your financial goals today!</p>
                                </div>
                                <!-- /.section title start-->
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Office Location</h2>
                                    <p>Mutual Rumana Building, <br> Sec 45, Lot 12 & 13
                                        <br> Waigani Drive, <br> Port Moresby, NCD</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Call us at </h2>
                                    <p>Phone: 3112200
                                    <br>Phone: 3112202
                                    <br>Mobile: 77163656</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Email Address</h2>
                                    <p>enquiry@ifinancepng.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map mb-4" id="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2340.206222656931!2d147.18049304433495!3d-9.444004605076028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6902318f3b22d021%3A0x4fa309b5ea264f2f!2sI-FINANCE%20PNG%20LTD.!5e0!3m2!1sen!2spg!4v1734394512659!5m2!1sen!2spg" width="1040" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content end -->
</x-layout>
