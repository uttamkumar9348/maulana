@extends('admin.layout.index')
@section('title', $title)
@section('content')

    <!-- Start Content-->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Card ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ __('modal_add') }} {{ $title }}</h5>
                        </div>
                        <div class="card-block pdng">
                            <a href="{{ route($route . '.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>
                                {{ __('btn_back') }}</a>

                            <a href="{{ route($route . '.create') }}" class="btn btn-info"><i class="fas fa-sync-alt"></i>
                                {{ __('btn_refresh') }}</a>
                        </div>

                        <form class="needs-validation" novalidate action="{{ route($route . '.store') }}" method="post"
                            enctype="multipart/form-data">
                            {{-- @dd($route) --}}
                            @csrf
                            <div class="card-block pdng">
                                <div class="row">
                                    <!-- Form Start -->
                                    <div class="form-group col-md-12">
                                        <label for="title">{{ __('field_title') }} <span>*</span></label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            value="{{ old('title') }}" required>

                                        <div class="invalid-feedback">
                                            {{ __('required_field') }} {{ __('field_title') }}
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="attach">{{ __('field_thumbnail') }}:
                                            <span>{{ __('image_size', ['height' => 600, 'width' => 1200]) }}</span></label>
                                        <input type="file" class="form-control" name="attach" id="attach"
                                            value="{{ old('attach') }}">

                                        <div class="invalid-feedback">
                                            {{ __('required_field') }} {{ __('field_thumbnail') }}
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="description">{{ __('field_description') }} <span>*</span></label>
                                        <textarea class="form-control" name="description"  id="Editor">{{ old('description') }}</textarea>

                                        <div class="invalid-feedback">
                                            {{ __('required_field') }} {{ __('field_description') }}
                                        </div>
                                    </div>
                                    <!-- Form End -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                                    {{ __('btn_save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- [ Card ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- End Content-->

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        let editor;

        ClassicEditor
            .create(document.querySelector('#description'))
            .then(createdEditor => {
                editor = createdEditor;
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        document.getElementById('myForm').addEventListener('submit', function(event) {
            // Ensure the editor data is in the textarea before submitting
            document.querySelector('#description').value = editor.getData();
        });
    </script>

@endsection
