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
       					 <li class="active">Member</li>
     				 </ol>
    						</section>
    						</div>
			<div class="panel panel-info">
			  <div class="panel-heading">Data Member
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Member</th>
					  <th>Email</th>
					  <th>Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->name }}</td>
				    	<td>{{ $data->email }}</td>
				    	
<td>
	<form method="post" action="{{ route('member.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk Menghapus Member ini?')">Delete</button>
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