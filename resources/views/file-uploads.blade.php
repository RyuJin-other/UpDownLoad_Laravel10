@extends('Layout.main')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 m-auto">
            <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card shadow">
                    @if (Session::has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-dismiss="alert">
                            x
                        </button>
                        {{Session::get('success')}}
                    </div>
                    @elseif (Session::has('failed'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-dismiss="alert">
                            x
                        </button>
                        {{Session::get('failed')}}
                    </div>
                    @endif

                    <div class="card-header">
                        <h4 class="card-tittle font-weight-bold">Multiple File Uploads</h4>
                    </div>
                    <div class="card-body">
                        <label for="file">File(s) <span class="text-denger">*</span></label>
                        <input type="file" name="files[]" multiple
                            class="form-control @error('files') is-invalid @enderror">
                        @error('files')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection