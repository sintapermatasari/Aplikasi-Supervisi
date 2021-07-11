@extends('kurikulums.layout')
   
@section('content')
<div class="container">
          <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jadwal Supervisor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kurikulums.index') }}"> Back</a>
            </div>
        </div>
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
  
    <form action="{{ route('kurikulums.update',$kurikulum->id) }}" method="POST">
        @csrf
        @method('PUT')
   <div class="container">
          <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <input type="date" name="tanggal" value="{{ $kurikulum->tanggal }}" class="form-control" placeholder="Tanggal">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $kurikulum->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
        </div>
    </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
