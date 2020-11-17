@extends('teachers.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" >
                <h2>SUPERVISOR</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="http://127.0.0.1:8000/admin/home "> Back</a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachers as $teacher)
        <tr>
           <td>{{ $teacher-> id_guru}}</td>
            <td>{{ $teacher-> nama_guru}}</td>
            <td>{{ $teacher-> materi}}</td>
            <td>{{ $teacher-> status}}</td>
            <td>{{ $teacher-> upload}}</td>
            
            <td>
                <!-- <form action="{{ route('teachers.destroy',$teacher->id_guru) }}" method="POST"> -->
    
                    
                    <a href="/supervisor/{{$teacher->id_guru}}/edit/" class="btn btn-success"> Periksa</a>
                    @csrf
                  
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $teachers->links() !!}
      
@endsection