@extends('default')
@section('content')
<br>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<center><h2 class="fa fa-check-square-o" style="font-size:28px;">Manajemen Tabel Jurusan</h2></center>
		</div>
		<div class="pull-right">
			<a href="{{route('jurusan.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-check-square-o"></i>Tambah Data</a>
		</div>
	</div>
</div>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Jurusan</th>
				<th style="text-align: center;">Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($jurusan as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->jurusan}}</td>
				<td style="text-align: center;">
					<form action="{{ route('jurusan.destroy', $value->id) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<a href="{{ route('jurusan.edit',$value->id) }}" class="btn btn-sm btn-primary">Edit</a>
						<button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus Jurusan {{$value->jurusan}}?')">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<?php echo str_replace('/?', '?', $jurusan->render()); ?>
@endsection
