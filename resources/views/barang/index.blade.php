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
       					 <li class="active">Barang</li>
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
				
			  <div class="panel-heading">Data Barang
			  	<div class="panel-title pull-right">
			  		@role(['admin'])
			  		<a href="{{ route('barang.create') }}">Tambah</a>@endrole
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Barang</th>
					  <th>Jumlah</th>
					  <th>Stock</th>
					  <th>Kondisi Barang</th>
					  <th>Gambar</th>
					  @role(['admin'])
					  <th colspan="2">Action</th>
					  @endrole
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->jumlah }}</p></td>
				    	<td>{{$data->stock}}</td>
				    	<td>{{ $data->kondisi }}</td>
				    	<td><img src="{{ asset('assets/img/foto/'.$data->foto)  }}" style="max-height:125px;max-width:125px;margin-top:7px;"></td>


				    	
<td>
	@role(['admin'])
	<a class="btn btn-warning" href="{{ route('barang.edit',$data->id) }}">Edit</a>
	@endrole
</td>
<td>
	@role(['admin'])
	<form method="post" action="{{ route('barang.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
	@endrole
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