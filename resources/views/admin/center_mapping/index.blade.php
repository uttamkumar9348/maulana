@extends('admin.layout.index')

@section('title')
    Add Center
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Basic layout-->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Add Center Mapping</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>District</label>
                        <select id="city_id" class="form-control ">
                            <option value="">Select</option>
                            @foreach(App\Models\City::all() as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="centerMappingContent"></div>
            </div>
        </div>
        <!-- /basic layout -->

        </div>
    </div>
@endsection

@section('scripts')
<script>

    $(document).on('change', '#city_id', function (event) {
        city_id = $(this).val();
        event.preventDefault();
        $.ajax({
            url: '{{url("get_student_profiles_against_cities")}}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            dataType: 'JSON',
            data: {
                'city_id': city_id,
            },
        })
        .done(function (data) {
            $('#centerMappingContent').html(data.html);
        })
    });
    $(document).on('click', '#select-all-btn', function (event) {
        $('.candidateList').prop('checked', true);
        $('#select-all-btn').hide();
        $('#unselect-all-btn').show();
    });
    $(document).on('click', '#unselect-all-btn', function (event) {
        $('.candidateList').prop('checked', false);
        $('#select-all-btn').show();
        $('#unselect-all-btn').hide();
    });
</script>
@endsection
