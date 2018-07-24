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
			<div class="panel panel-info">
			  <div class="panel-heading">Tambah Data Barang
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Barang</label>	
			  			<input type="number" name="jumlah" class="form-control"  required>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kondisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Kondisi Barang</label>	<br>
			  			<input type="radio" name="kondisi" value="Rusak" required>Rusak 
			  			<input type="radio" name="kondisi" value="Bagus" required>Bagus
			  			@if ($errors->has('kondisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kondisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Gambar</label>
                                <input name="foto" type="file" required>
                       </div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection