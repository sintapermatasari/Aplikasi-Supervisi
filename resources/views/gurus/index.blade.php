@extends('gurus.layout')

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
         <a href="http://127.0.0.1:8000/supervisors">Jadwal Supervisor</a>
         <a href="http://127.0.0.1:8000/nilais">Menilai</a>
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                
                    <div class="card">
                        <div class="card-body">
                        <h1 class="card-title">Selamat Datang Guru</h1>
                        <br>
                        <p class="card-text"></p>
                        <br>
                        <div class="row">
                        <div class="col-lg-12 margin-tb">
                          <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('gurus.create') }}"> Create New Guru</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                      <br>
                  <br>
                    </div>
                    <br>
                    <br>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>File</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                        </tr>
                        </tbody>

      @foreach ($gurus as $guru)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $guru->nip }}</td>
            <td>{{ $guru->nama }}</td>
            <td>{{ $guru->mapel }}</td>
            <td>{{ $guru->file }}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $gurus->links() !!}
      
@endsection
