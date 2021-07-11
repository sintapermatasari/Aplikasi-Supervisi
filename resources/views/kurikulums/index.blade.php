@extends('kurikulums.layout')
 
@section('content')
        <div class="container">
          <div class="container">
              <div class="container">
                @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
    @endif

        <a href="http://127.0.0.1:8000/gurus">Guru</a>
         <a href="http://127.0.0.1:8000/kurikulums">Kurikulum</a>
         <a href="http://127.0.0.1:8000/supervisors">Supervisor</a>
         <a href="http://127.0.0.1:8000/nilais">Menilai</a>
         
                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">Selamat Datang Kurikulum</h1>
                    <br>
                    <p class="card-text"></p>
                    <br>
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kurikulums.create') }}"> Create New Jadwal supervisor</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <br>
    <br>

        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
        </tr>
                        </thead>
                        <tbody>
                    </tbody>
        @foreach ($kurikulums as $kurikulum)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kurikulum->tanggal }}</td>
            <td>{{ $kurikulum->nama }}</td>
            
        </tr>
        @endforeach
    </table>
  
    {!! $kurikulums->links() !!}
      
@endsection