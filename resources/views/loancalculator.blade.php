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
                            <h1 class="page-title">Loan Calculator</h1>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                            <div class="row">
                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="btn-action"> <a href="/contct-us" class="btn btn-default">Contact Us</a> </div>
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
                                        <span class="pull-right" id="la_value">500</span></strong>
                                    <input type="text" data-slider="true" value="500" data-slider-range="500,10000" data-slider-step="100" data-slider-snap="true" id="la">
                                    <hr>
                                    <span>No. of Forthnight <strong>
                                        <span class="pull-right"  id="nm_value">3</span> </strong>
                                    </span>
                                    <input type="text" data-slider="true" value="1" data-slider-range="3,25" data-slider-step="1" data-slider-snap="true" id="nm">
                                    <hr>
                                    <!--<span>Interest Rate <strong><span class="pull-right"  id="roi_value">90.89</span>
                                    </strong>
                                    </span>
                                    <input type="text" data-slider="true" value="90.89" data-slider-range="90.89,90.89" data-slider-step="0.0" data-slider-snap="true" id="roi"> -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-light pinside30 outline">
                                            Forthnighly Payment
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
                                    </div>--->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="loantable" class='table table-striped table-bordered loantable table-responsive'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content end -->

</x-loanapp>
