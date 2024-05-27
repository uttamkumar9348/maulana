@extends('admin.layout.index')

@section('title')
    Gateway
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Gateway</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.gateway.update',$gateway->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="user_id" class="form-label">Select College<span style="color: red">*</span></label>
                        <select  name="user_id"  id="user_id" class="form-control">
                            <option selected value="">Select College</option>
                            @foreach(App\Models\User::where('role_id',2)->get() as $college)
                            <option {{$gateway->user_id == $college->id ? 'selected' : ''}} value="{{$college->id}}">{{$college->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_name" class="form-label">Merchant Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_name" placeholder="Enter Name" value="{{$gateway->merchant_name}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_id" class="form-label">Merchant ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_id" id="merchant_id" value="{{$gateway->merchant_id}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_sub_id" class="form-label">Merchant Sub ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_sub_id" id="merchant_sub_id" value="{{$gateway->merchant_sub_id}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="encryption_key" class="form-label">Encryption Key<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="encryption_key" id="encryption_key" value="{{$gateway->encryption_key}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="encryption_iv" class="form-label">Encryption iv<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="encryption_iv" id="encryption_iv" value="{{$gateway->encryption_iv}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="sign_key" class="form-label">Sign Key<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="sign_key" id="sign_key" value="{{$gateway->sign_key}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="secret_password_hash" class="form-label">Secret Password Hash<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="secret_password_hash" id="secret_password_hash" value="{{$gateway->secret_password_hash}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="token_generate_url" class="form-label">Token Generate Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="token_generate_url" id="token_generate_url" value="{{$gateway->token_generate_url}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="txn_initiation_url" class="form-label">Txn Initiation Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="txn_initiation_url" id="txn_initiation_url" value="{{$gateway->txn_initiation_url}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="tnx_status_url" class="form-label">Txn Status Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="tnx_status_url" id="tnx_status_url" value="{{$gateway->tnx_status_url}}" required>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update<i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
