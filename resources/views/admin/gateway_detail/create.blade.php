@extends('admin.layout.index')

@section('title')
    Gatway
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add New Gateway</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.gateway.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="user_id" class="form-label">Select College<span style="color: red">*</span></label>
                        <select  name="user_id"  id="user_id" class="form-control">
                            <option selected value="">Select College</option>
                            @foreach(App\Models\User::where('role_id',2)->get() as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_name" class="form-label">Merchant Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_name" placeholder="Enter Name" value="MADHUSUDAN LAW UNIVERSITY" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_id" class="form-label">Merchant ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_id" id="merchant_id" value="APIMER" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_sub_id" class="form-label">Merchant Sub ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_sub_id" id="merchant_sub_id" value="BHUMLU" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="encryption_key" class="form-label">Encryption Key<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="encryption_key" id="encryption_key" value="84BA57072F1E39ED568B73729B1A398B" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="encryption_iv" class="form-label">Encryption iv<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="encryption_iv" id="encryption_iv" value="vH6YAokqhPd45z2g" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="sign_key" class="form-label">Sign Key<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="sign_key" id="sign_key" value="vH6YAokqhPd45z2g" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="secret_password_hash" class="form-label">Secret Password Hash<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="secret_password_hash" id="secret_password_hash" value="9C7B13D3C95E56B21C629F8C2D7FB3545AD11779213E7B33FED5C15466C7508D" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="token_generate_url" class="form-label">Token Generate Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="token_generate_url" id="token_generate_url" value="https://www.iobnet.co.in/iobpay/iobpayRESTService/apitokenservice/generatenewtoken/" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="txn_initiation_url" class="form-label">Txn Initiation Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="txn_initiation_url" id="txn_initiation_url" value="https://www.iobnet.co.in/iobpay/apitxninit.do" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="tnx_status_url" class="form-label">Txn Status Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="tnx_status_url" id="tnx_status_url" value="https://www.iobnet.co.in/iobpay/iobpayRESTService/apitxnstatusservice/gettxnstatus/" required>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
