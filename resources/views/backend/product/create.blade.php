@extends('layouts.admin')
@section('js')
<script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/init/datatables-init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
@endsection
@section('content')
<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table Users</strong>
						<div class="panel-title pull-right"><a href="{{ url()->previous() }}"><i class="fa fa-plus"></i>Back</a>
                 	    </div>
						</div>

			  <div class="panel-body">
			  	<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}
<br>
<br>
                      <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Foto</label>	
			  			<input type="file" name="foto" class=""  required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
					</div>


                       <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('detail') ? ' has-error' : '' }}">
			  			<label class="control-label">detail</label>	
			  			<textarea class="text" name="detail" id="detail" class="form"  required></textarea>
			  			@if ($errors->has('detail'))
                            <span class="help-block">
                                <strong>{{ $errors->first('detail') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('stok') ? ' has-error' : '' }}">
			  			<label class="control-label">Stok</label>	
			  			<input type="text"  name="stok" min="1" max="99" class="form-control" required>
			  			@if ($errors->has('stok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('stok') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select name="kategori_id" class="form-control">
                          
			  				@foreach($kategori as $data)
			  				<option value="{{ $data->id }}">{{ $data->kategori }}</option>
			  				@endforeach
			  			</select>

			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
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