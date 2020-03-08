@extends('default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Jurusan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jurusan.index') }}"> Back</a>
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
  
    <form action="{{ route('jurusan.update',$jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
		 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    <input type="text" name="id" value="{{ $jurusan->id }}" class="form-control" placeholder="Id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jurusan:</strong>
                    <input type="text" name="jurusan" value="{{ $jurusan->jurusan }}" class="form-control" placeholder="Jurusan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection