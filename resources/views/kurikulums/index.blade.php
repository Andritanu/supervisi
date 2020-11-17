@extends('teachers.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>KURIKULUM</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kurikulums.create') }}"> ADD Teacher</a>
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

            <th>nama_guru</th>
            <th>mapel</th>
            <th>tanggal_diperiksa</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kurikulums as $kurikulum)
        <tr>
            
            <td>{{ $kurikulum-> nama_guru}}</td>
            <td>{{ $kurikulum-> mapel}}</td>
            <td>{{ $kurikulum-> tanggal_diperiksa}}</td>
            <td>
                <form action="{{ route('kurikulums.destroy',$kurikulum->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('kurikulums.edit',$kurikulum->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kurikulums->links() !!}
      
@endsection