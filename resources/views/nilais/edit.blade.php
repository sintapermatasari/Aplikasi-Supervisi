@extends('nilais.layout')
   
@section('content')
<div class="container">
          <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Merubah Status</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nilais.index') }}"> Back</a>
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
  
    <form action="{{ route('nilais.update',$nilai->id) }}" method="POST">
        @csrf
        @method('PUT')
   <div class="container">
          <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select type="text" name="status" value="{{ $nilai->status }}" class="form-control" placeholder="Status">
                        <option></option>
                        <option value="Diterima">Diterima</option>
                        <option value="Ditolak">Ditolak</option>
                    </select>
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
