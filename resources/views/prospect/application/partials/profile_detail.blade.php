@include('prospect.dashboard.partials.registration')
@include('prospect.dashboard.partials.basic_information')
@include('prospect.dashboard.partials.academic_qualification_update')
@include('prospect.dashboard.partials.documents_uploaded_update')
@if(!Auth::user()->studentPaymentLastest())
<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('prospect.process_payment')}}" class="btn btn-primary text-right">Make Payment</a>
    </div>
</div>
<br>
@endif
<table class="table table-sm table-bordered">
    <thead>
        <tr>
            <th>Payment Status</th>
            <th>Reference ID</th>
            <th>Fees</th>
        </tr>
    </thead>
    <tbody >
   
        <tr>
            <td>{{ Auth::user()->studentPaymentLastest()?Auth::user()->studentPaymentLastest()->status:'' }}</td>
            <td>{{ Auth::user()->studentPaymentLastest()?Auth::user()->studentPaymentLastest()->track_id:'' }}</td>
            <td>10</td>
        </tr>
    </tbody>
</table>