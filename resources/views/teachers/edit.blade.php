@extends('teachers.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Teacher</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('teachers.update',$teacher->id_guru) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Guru:</strong>
                <input type="text" name="id_guru" value="{{ $teacher->id_guru }}" class="form-control" placeholder="ID guru">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama guru:</strong>
                    <input type="text" name="nama_guru" value="{{ $teacher->nama_guru }}" class="form-control" placeholder="Nama Guru">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Materi:</strong>
                    <input type="text" name="materi" value="{{ $teacher->materi }}" class="form-control" placeholder="materi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" value="{{ $teacher->status }}">
                    <option value="APPROVED">APPROVED</option>
                    <option value="NOT APPROVED">NOT APPROVED</option>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Upload:</strong>
                    <input type="text" name="upload" value="{{ $teacher->upload }}" class="form-control" placeholder="Upload">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Upload:</strong>
                    <input type="date" name="tanggal_upload" value="{{ $teacher->tanggal_upload }}" class="form-control" placeholder="Tanggal upload">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection