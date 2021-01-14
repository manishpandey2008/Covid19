@extends('covid_common')
@section('main_page')
<div class="dashboard-content-one" style="overflow-y: hidden;">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Contact</h3>
                    <ul>
                        <li>Contact</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->

                <div class="card height-auto" >
                    <div class="card-body" >
                       <form class="new-added-form">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" placeholder="Enter Your Name" class="form-control" required="" name="name" id="name">
                                </div>
                                
                              
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>E-Mail *</label>
                                    <input type="email" placeholder="Enter Your Email " class="form-control" name="email" id="email" required="">
                                </div>
                             
                               
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Phone *</label>
                                    <input type="text" placeholder="Enter Your Phone Number" class="form-control" id="phone" name="phone" required="">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Subject *</label>
                                    <input type="text" placeholder="Enter Your Subject" class="form-control" name="subject" id="subject" required="">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Comments *</label>
                                    <textarea type="text" placeholder="" class="form-control" style="height: 200px;" required="" id="comment" name="comment"></textarea>
                                </div>
                               
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit" id="submit">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection

@section('scripts')


@endsection