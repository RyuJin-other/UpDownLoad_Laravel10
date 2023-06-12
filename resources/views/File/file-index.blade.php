@extends('Layout.main')
@section('content')
<style>
    h1{
        text-align: center;
    }
</style>
<h1><b>List File</b></h1>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{$file->originame}}
                        </td>

                        <td>
                            <a href="{{ route('files.download', $file->filename) }}">Download</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection