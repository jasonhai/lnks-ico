@extends('layouts.frontend')

@section('title', 'Profile page')

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
            <!-- <div class="row"> -->
                <div class="col-md-5 pb-40">
                    <div class="text-center">
                        <label class="custom-control" for="eth"><h3>Just send your ETH to this address</h3></label>
                        <input type="text" name="eth_token" id="eth" class="form-control" readonly="true" placeholder="Just send your ETH to this address" value="<?= $user->eth_token ?>">
                    </div></hr>

                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-size: 14px; color: red">
                            We DO NOT ask your ETH via any emails or social networks. <br>
                            All emails ask you ETH are scam (PHISHING SCAM).
                        </div>
                    </div>
                </div>
                <!--/col-3-->
                <div class="col-md-7 pb-40">
                    <!-- <div class="content"> -->
                        <form method="post" class="form" action="{{ route('users.update-profile') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h3 style="padding-left: 15px">Your Informations</h3>

                            <div class="form-group col-md-12">
                                <label class="custom-control" for="email">Your Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= $user->email ?>">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="custom-control" for="password">New Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="custom-control" for="cf_password">Confirm New Password</label>
                                <input type="password" name="password_confirmation" id="cf_password" class="form-control" placeholder="Confirm Password">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="custom-control" for="slvtoken">SLV tokens</label>
                                <input type="text" name="slv_token" value="<?= $user->slv_token ?>" id="slvtoken" class="form-control" placeholder="Your SLV tokens will be sent here (ERC20 Compatible)">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="custom-control" for="id_passport">National ID or Passport Number</label>
                                <input type="text" name="national_id_number" id="id_passport" class="form-control" placeholder="Optional" value="<?= $user->national_id_number ?>">
                            </div>

                            <div class="form-group col-md-12 pull-left uploads-file">
                                <label class="custom-control">Upload ID Document</label>
                                <img id="doc1" src="<?= asset('uploads/national_id_file/'.$user->national_id_file) ?>">
                                <label class="custom-control custom-file-upload" for="upload-doc"><i class="fa fa-cloud-upload"></i>Upload file</label>
                                <input id="upload-doc" type="file" name="national_id_file" class="form-control hidden-this" placeholder="Upload file">
                                <label id="file-name1" class="custom-control d-block"></label>
                                <p class="notification1 alert alert-danger"></p>
                            </div>

                            <div class="form-group col-md-12 pull-right uploads-file">
                                <label class="custom-control" for="upload-photo-id">A selfie holding the identity document (opened, with the photo and ID clearly visible)</label>
                                <img id="doc2" src="<?= asset('uploads/selfie_file/'.$user->selfie_file) ?>">
                                <label class="custom-control custom-file-upload" for="upload-photo-id"><i class="fa fa-cloud-upload"></i>Upload file</label>
                                <input id="upload-photo-id" type="file" name="selfie_file" class="form-control hidden-this" placeholder="Upload file">
                                <label id="file-name2" class="custom-control d-block"></label>
                                <p class="notification2 alert alert-danger"></p>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    <!-- </div> -->
                </div>
                <!--/tab-content-->
            <!-- </div> -->
        </div><!--/row-->
    </section>

    <!-- Footer -->
    @include('partials.footer')   

@stop