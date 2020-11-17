@extends('teachers.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>TEACHER</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teachers.create') }}"> ADD Teacher</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="http://127.0.0.1:8000/home"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id_guru</th>
            <th>nama_guru</th>
            <th>materi</th>
            <th>status</th>
            <th>upload</th>
            <th>tanggal_upload</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachers as $teacher)
        <tr>
            
            <td>{{ $teacher-> id_guru}}</td>
            <td>{{ $teacher-> nama_guru}}</td>
            <td>{{ $teacher-> materi}}</td>
            <td>{{ $teacher-> status}}</td>
            <td>{{ $teacher-> upload}}</td>
            <td>{{ $teacher-> tanggal_upload}}</td>
            <td>
                <form action="{{ route('teachers.destroy',$teacher->id_guru) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id_guru) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $teachers->links() !!}
      
@endsection