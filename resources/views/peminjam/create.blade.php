@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-11">
			<div class="panel panel-info">
			  <div class="panel-heading">Tambah Data Peminjam
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <form action="{{ route('peminjam.store') }}" method="post" >
			  		{{ csrf_field() }}
			 <div class="panel-body">
			 		<div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Member</label>	
			  			<select name="user_id" class="form-control">
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
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
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('barang_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('barang_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_pinjam') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Pinjam</label>	
			  			<input type="text" name="jumlah_pinjam" class="form-control"  required>
			  			@if ($errors->has('jumlah_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_pinjam') }}</strong>
                            </span>
                        @endif
                    </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</div>
			  </div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection