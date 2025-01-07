<div class="footer section-space100">
        <!-- footer -->
        <div class="container ">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="images/logo_white_bg.png" alt="iFinance" style="height: 5.5rem; width:5.5rem;"> </div>
                    <!-- /.Footer Logo -->
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <h4 class="newsletter-title">Signup Our Newsletter</h4>
                    </div>
                    
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12" id="replace-form">
                        <div class="newsletter-form" >
                            <!-- Newsletter Form -->
                            <form>
                                @csrf
                                <div class="input-group">
                                    <input type="email" class="form-control" id="newsletter" name="email" placeholder="Write E-Mail Address" required>
                                    <span class="input-group-btn">
                           <button class="btn btn-default bg-orange-300" type="submit"
                            hx-post="/newsletter-signup" hx-target="#replace-form" hx-swap="outerHTML" hx-trigger="click" hx-indicator="#spinner-signup" hx-validate="true"
                            >Signup</button>               
                           </span> </div>
                          <div id="spinner-signup" class="spinner-border spinner-border-sm htmx-indicator" role="status">
                           <span class="visually-hidden text-warning">Signing up, please wait........</span>
                           </div>
                                <!-- /input-group -->
                            </form>
                        </div>
                        <!-- /.Newsletter Form -->
                    </div>
                </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
            <hr class="dark-line">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p>WORKING HOURS <br> Monday to Friday: 8am - 5pm | Saturday: 8am - 12pm</p>                        
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>Mutual Rumana Building, <br>Sec 405, Lot 12 & 13,
                                  <br>  Port Moresby, NCD </p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>3112200/3112202<br>
                                <span><i class="icon-letter icon-1x"></i></span>enquiry@ifinancepng.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="/products">Lending Services</a></li>
                            <li><a href="/">Career</a></li>                           
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="/products">Apply Now</a></li>
                            <li><a href="/loan-calculator">Loan Calculator</a></li>
                            <li><a href="/loan-eligibility">Loan Eligibilty Calculator</a></li>

                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="https://www.linkedin.com/company/i-finance-png/"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="https://www.linkedin.com/company/i-finance-png"><i class="fa fa-linkedin"></i>Linked In</a></li>
                            <li><a href="https://maps.app.goo.gl/RoioD87nJKb62fnq9"><i class="fa fa-google-plus"></i>Google Map</a></li>                           
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <p>&#169; iFinance PNG LTD  | Degined by <a href="https://www.nextgenpng.net" target="_blank">Nextgen Technology</a></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <p>Terms of use | Privacy Policy</p>

                </div>
            </div>
        </div>
    </div>
