@extends('nilais.layout')

@section('content')
<div class="container">
          <div class="container">
              <div class="container">
                <a href="http://127.0.0.1:8000/gurus">Guru</a>
                <a href="http://127.0.0.1:8000/kurikulums">Kurikulum</a>
                <a href="http://127.0.0.1:8000/supervisors">Jadwal Supervisor</a>
                <a href="http://127.0.0.1:8000/nilais">Menilai</a>

                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">Menilai Upload Guru
                    </div>
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
                        <th>Status</th>
                        <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
        @foreach ($nilais as $nilai)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $nilai->nip }}</td>
            <td>{{ $nilai->nama }}</td>
            <td>{{ $nilai->mapel }}</td>
            <td>{{ $nilai->file }}</td>
            <td>{{ $nilai->status}}</td>
            <td>
    
                    <a class="btn btn-primary" href="{{ route('nilais.edit',$nilai->id) }}">Nilai Status</a>
   
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        

        </tr>
        @endforeach
    </table>
  
    {!! $nilais->links() !!}
      
@endsection