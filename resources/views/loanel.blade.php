<x-loanapp>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Loan Calculator</li>
                    </ol>
                </div>
            </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                       <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                            <h1 class="page-title">Eligibility Check</h1>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                            <div class="row">
                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="btn-action"> <a href="/contact-us" class="btn btn-default">Contact Us</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- content start -->
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="wrapper-content bg-white pinside40">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="bg-light pinside40 outline">
                                    <span>Loan Amount </span>
                                    <strong>
                                        <span class="pull-right" id="la_value">100</span></strong>
                                    <input type="text" data-slider="true" value="100" data-slider-range="100,100000" data-slider-step="100" data-slider-snap="true" id="la">
                                    <hr>
                                    <span>Net Fortnightly Income (Net plus Allowances) </span>
                                    <strong>
                                        <span class="pull-right" id="ni_value">1000</span></strong>
                                    <input type="text" data-slider="true" value="100" data-slider-range="100,100000" data-slider-step="100" data-slider-snap="true" id="ni">
                                    <hr>
                                    <span>No. of Forthnights (Loan Tenure) <strong>
                                        <span class="pull-right"  id="nm_value">3</span> </strong>
                                    </span>
                                    <input type="text" data-slider="true" value="1" data-slider-range="1,78" data-slider-step="1" data-slider-snap="true" id="nm">
                                    <hr>
                                    <span>Interest Rate <strong><span class="pull-right"  id="roi_value">1</span>
                                    </strong>
                                    </span>
                                    <input type="text" data-slider="true" value="1" data-slider-range="1,100" data-slider-step="1" data-slider-snap="true" id="roi">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-light pinside30 outline">
                                            Forthnightly Payment
                                            <h2 id='emi' class="pull-right"></h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-light pinside30 outline">
                                            Total Interest
                                            <h2 id='tbl_int' class="pull-right"></h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-light pinside30 outline"> Payable Amount
                                            <h2 id='tbl_full' class="pull-right"></h2></div>
                                    </div>
                                    <!--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-light pinside30 outline">
                                            Interest Percentage
                                            <h2 id='tbl_int_pge' class="pull-right"></h2>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="loantable" class='table table-striped table-bordered loantable table-responsive'></div>
                        <div>
                            <p class="text-dark">                              
                            <strong>Disclaimer:</strong> <br>
                            The repayment amount displayed by this loan repayment calculator is an estimate based on the details you have entered.
                            It is intended for illustrative purposes only, and the actual repayment amounts may differ.
                            For precise repayment figures, please <a href="/contact-us" class="btn-link">contact us.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content end -->

</x-loanapp>
