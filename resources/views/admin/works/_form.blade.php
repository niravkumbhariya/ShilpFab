@extends('master')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $moduleName }}
            {{-- <small>it all starts here</small> --}}
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">{{ $moduleName }}</a></li>
            <li><a href="#" active>Add</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit {{ $moduleName }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <form action="{{ route('works.update', $work->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <div class="row">

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title: *</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Service Title" value="{{ old('title', $work->title) }}">
                                    <span class="error"> {{ $errors->first('title') }}</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="image">*Image:</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if ($work->image)
                                        <br>
                                        <img src="{{ asset('public/storage/works/' . $work->image) }}" width="80">
                                    @endif
                                    <span class="error"> {{ $errors->first('image') }}</span>
                                </div>
                            </div>

                            <!-- Multiple Image Upload Option (Full Row) -->
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="images">Upload Multiple Images:</label>
                                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                                    <span class="error"> {{ $errors->first('images') }}</span>
                                    <br />
                                    @if (isset($work->images) && $work->images->count() > 0)
                                        <div class="row mt-3" id="image-container">
                                            @foreach ($work->images as $img)
                                                <div
                                                    class="col-md-2 col-4 mb-3 text-center position-relative image-box-{{ $img->id }}">
                                                    <div class="border rounded shadow-sm position-relative">
                                                        <!-- X icon -->
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger delete-image-btn"
                                                            data-id="{{ $img->id }}"
                                                            style="position:absolute; top:-5px; right:5px; z-index:10; padding:0px 6px; font-size:12px;">
                                                            &times;
                                                        </button>
                                                        <img src="{{ asset('public/storage/works/' . $img->image) }}"
                                                            class="img-fluid rounded"
                                                            style="width:100%; height:100px; object-fit:cover;">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="desc">Description: *</label>
                                    <textarea name="desc" id="desc">{{ old('desc', $work->desc) }}</textarea>
                                    <span class="error"> {{ $errors->first('desc') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{ route('works') }}" class="btn btn-sm btn-default">Cancel</a>
                        <input type="submit" value="Update" class="btn btn-sm btn-success">
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- /.content -->
@endsection


@section('script')
    <script>
        $(function() {
            // CSRF token setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                }
            });

            // Delete Image button click
            $('body').on('click', '.delete-image-btn', function() {
                let imageId = $(this).data('id');
                let url = "{{ route('work.image.delete', ':id') }}".replace(':id', imageId);

                if (confirm('Are you sure you want to delete this image?')) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        success: function(response) {
                            if (response.status === 'success') {
                                $('.image-box-' + imageId).fadeOut(300, function() {
                                    $(this).remove();
                                });
                                alert(response
                                    .message); // You can replace alert with Toast/SweetAlert
                            } else {
                                alert('Something went wrong!');
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.responseJSON.message ??
                                'Server error! Please try again.');
                        }
                    });
                }
            });

        });
    </script>
@endsection
