@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h2>Profile</h2>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>
    <section class="smart-contract pt-120 pb-40">
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-md-3 pb-40"><!--left col-->
                    <div class="text-center">
                        <img id="avatar-image" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                        <label class="custom-control custom-file-upload" for="upload-avatar"><i class="fa fa-cloud-upload"></i>Upload photo</label>
                        <input id="upload-avatar" type="file" name="upload-doc" class="form-control hidden-this" placeholder="Upload file">
                        <label id="file-name3" class="custom-control d-block"></label>
                        <p class="notification3 alert alert-danger"></p>
                    </div></hr><br>

                    <div class="panel panel-default">
                        <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                        <div class="panel-body"><a href="https://slv.one/">slv.one</a></div>
                    </div>
                </div>
                <!--/col-3-->
                <div class="col-md-9 pb-40">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs profile-head">
                            <li><a data-toggle="tab" href="#personal" class="active show">Personal</a></li>
                            <li><a data-toggle="tab" href="#security">Security</a></li>
                            <li><a data-toggle="tab" href="#ethEmail">Eth email</a></li>
                        </ul>
                    </div>

                    <div class="tab-content info-content">
                        <div class="tab-pane active" id="personal">
                            <form class="form">
                                <div class="form-group col-md-12">
                                    <label class="custom-control" for="full_name">Full name</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full name">
                                </div>

                                <div class="form-group col-md-6 pull-left">
                                    <label class="custom-control" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group col-md-6 pull-right">
                                    <label class="custom-control" for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="custom-control" for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="custom-control" for="id_passport">National ID or Passport Number</label>
                                    <input type="text" name="id_passport" id="id_passport" class="form-control" placeholder="Optional">
                                </div>

                                <div class="form-group col-md-12 uploads-file">
                                    <label class="custom-control">Upload ID Document</label>
                                    <img id="doc1">
                                    <label class="custom-control custom-file-upload" for="upload-doc"><i class="fa fa-cloud-upload"></i>Upload file</label>
                                    <input id="upload-doc" type="file" name="upload-doc" class="form-control hidden-this" placeholder="Upload file">
                                    <label id="file-name1" class="custom-control d-block"></label>
                                    <p class="notification1 alert alert-danger"></p>
                                </div>

                                <div class="form-group col-md-12 uploads-file">
                                    <label class="custom-control" for="upload-photo-id">A selfie holding the identity document (opened, with the photo and ID clearly visible)</label>
                                    <img id="doc2">
                                    <label class="custom-control custom-file-upload" for="upload-photo-id"><i class="fa fa-cloud-upload"></i>Upload file</label>
                                    <input id="upload-photo-id" type="file" name="upload-photo-id" class="form-control hidden-this" placeholder="Upload file">
                                    <label id="file-name2" class="custom-control d-block"></label>
                                    <p class="notification2 alert alert-danger"></p>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-success" type="submit">Save</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="security">
                            <form class="form">
                                <div class="form-group col-md-12">
                                    <label class="custom-control" for="old_password">Old Password</label>
                                    <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password">
                                </div>

                                <div class="form-group col-md-6 pull-left">
                                    <label class="custom-control" for="password">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group col-md-6 pull-right">
                                    <label class="custom-control" for="cf_password">Confirm New Password</label>
                                    <input type="password" name="cf_password" id="cf_password" class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-success" type="submit">Save</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="ethEmail">
                            <form class="form">
                                <div class="form-group col-md-12">
                                    <label class="custom-control" for="eth">Just send your ETH to this address</label>
                                    <input type="text" name="eth" id="eth" class="form-control" placeholder="Just send your ETH to this address">
                                </div>

                                <div class="form-group col-md-12 text-red">
                                    <div>We DO NOT ask your ETH via any emails or social networks</div>
                                    <div>All emails ask you ETH are scam (PHISHING SCAM)</div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-success" type="submit">Send</button>
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--/tab-pane-->
                </div>
                <!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->
    </section>

    <!-- Footer -->
    @include('partials.footer')   

@stop