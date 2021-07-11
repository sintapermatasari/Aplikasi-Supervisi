@extends('gurus.layout')
  
@section('content')


<div class="container">
          <div class="container">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Guru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('gurus.index') }}"> Back</a>
        </div>
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
   
<form action="{{ route('gurus.store') }}" method="POST">
    @csrf
    
    <div class="container">
          <div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP:</strong>
                <input type="integer" name="nip" class="form-control" placeholder="NIP">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mata Pelajaran:</strong>
                    <input type="text" name="mapel" class="form-control" placeholder="Mata Pelajaran">
                </div>
            </div>
            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <br>                       
                            <input class="upload" type="file" name="file" />
                        </form>
                    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</div>
   
</form>
@endsection

