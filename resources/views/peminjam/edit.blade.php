@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-11">
			<div class="panel panel-info">
			  <div class="panel-heading">Edit Data Peminjam 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('peminjam.update',$peminjam->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Member</label>	
			  			<select name="user_id" class="form-control">
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}" {{ $selecteduser == $data->id ? 'selected="selected"' : '' }} >{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('user_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('barang_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<select name="barang_id" class="form-control">
			  				@foreach($barang as $data)
			  				<option value="{{ $data->id }}" {{ $selectedbarang == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('barang_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('barang_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_pinjam') ? ' has-error' : '' }}">
			  			<label class="control-label">jumlah_pinjam</label>	
			  			<input type="text" name="jumlah_pinjam" class="form-control" value="{{ $peminjam->jumlah_pinjam }}"  required>
			  			@if ($errors->has('jumlah_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_pinjam') }}</strong>
                            </span>
                        @endif
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