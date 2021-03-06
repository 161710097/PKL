@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-11">
			<div>
			 <section class="content-header">
      			<h1>
        			Dashboard
        		<small>Control panel</small>
      			</h1>
     				<ol class="breadcrumb">
      					 <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
       					 <li class="active">Peminjam</li>
     				 </ol>
    						</section>
    						</div>
    					@if (session()->has('flash_notification.message'))
			<div class="panel-heading-info">
					<div class="alert alert-{{ session()->get('flash_notification.level') }}">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{!! session()->get('flash_notification.message') !!}
					</div>
			</div>
				@endif
			<div class="panel panel-info">
			  <div class="panel-heading">Data Peminjam
			  	<div class="panel-title pull-right"><a href="{{ route('peminjam.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Member</th>
					  <th>Nama Barang</th>
					  <th>Jumlah pinjam</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->User->name }}</td>
				    	<td>{{ $data->barang->nama }}</td>
				    	<td>{{ $data->jumlah_pinjam }}</td>
				    	
				    	
<td>
	<a class="btn btn-warning" href="{{ route('peminjam.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('peminjam.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection