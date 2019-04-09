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
								<div class="panel-title pull-right"><a href="{{ route('kategori.create') }}"><i class="fa fa-plus"></i>Tambah</a>
                  				</div>
								</div>
														
                            <div class="card-body">								
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>no</th>
											<th>kategori</th>
											<th colspan="2"><center>action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $nomor = 1; ?>
										@php $no = 1; @endphp
										@foreach ($kategori as $data)
                                        <tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->kategori }}</td>
										<td>
										<a class="btn btn-warning" href="{{ route('kategori.edit',$data->id) }}">Edit</a>
										<td>
										<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger" action="{{ route('kategori.destroy',$data->id) }}">Delete</button>	
																	
										
												
											</form>
											</td>
											</td>
										</tr>
				    				@endforeach	    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection
<!-- <div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <h1>	<center><div class="panel-heading">Data Kategori</center></h1>
			  <div class="panel-title pull-right"><a href="{{ route('kategori.create') }}"><i class="fa fa-plus"></i>Tambah</a>
                  </div>
			  <div class="panel-body">
			  	  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kategori</th>
					  <th colspan="3">Aksi</th>
			  		</tr>
				  	</thead>
				  	<tbody>
						<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($kategori as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kategori }}</td>

					<td>
						<a class="btn btn-warning" href="{{ route('kategori.edit',$data->id) }}">Edit</a>
					</td>
					<td>
						<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
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
</div> -->