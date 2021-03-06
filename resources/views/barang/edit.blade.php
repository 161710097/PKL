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
			  <div class="panel-heading">Edit Data Barang 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('barang.update',$a->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah</label>	
			  			<input type="number" name="jumlah" class="form-control" value="{{ $a->jumlah }}"  required>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kondisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Kondisi Barang</label>	<br>
			  			<input type="radio" name="kondisi" value="Rusak">Rusak 
			  			<input type="radio" name="kondisi" value="Bagus">Bagus 
			  			@if ($errors->has('kondisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kondisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		 <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                @if (isset($a) && $a->foto)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/img/foto/'.$a->foto) }}" style="max-height:125px;max-width:125px;margin-top:7px; ">
                                    </p>
                                @endif
                                <input name="foto" type="file" value="{{ $a->foto }}">
                            </div>


			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection