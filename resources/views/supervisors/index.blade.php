@extends('supervisors.layout')

@section('content')
<div class="container">
          <div class="container">
              <div class="container">
                <a href="http://127.0.0.1:8000/gurus">Guru</a>
                <a href="http://127.0.0.1:8000/kurikulums">Kurikulum</a>
                <a href="http://127.0.0.1:8000/supervisors">Supervisor</a>
                <a href="http://127.0.0.1:8000/nilais">Menilai</a>

                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">JADWAL SUPERVISOR
                        
                    </div>
                </div>
                <br>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Supervisor</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
        @foreach ($supervisors as $supervisor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $supervisor->tanggal }}</td>
            <td>{{ $supervisor->nama }}</td>
            
        </tr>
        @endforeach
    </table>
  
    {!! $supervisors->links() !!}
      
@endsection