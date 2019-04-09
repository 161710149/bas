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
                                <strong class="card-title">Data Table Order</strong>
								<div class="panel-title pull-right">
                  				</div>
								</div>
														
                            <div class="card-body">								
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>no</th>
											<th>Product</th>
                                            <th>Pengguna</th>
                                            <th>Jumlah Pesanan</th>
                                            <th>Total</th>
                                            <th>Status</th>
											<th colspan="2"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										@php 
										$no = 1; 
                                        @endphp

										@foreach($orders as $data)
                                        <tr>
										<td>{{ $no++ }}</td>
                                        <td>{{ $data->Product->nama }}</td>
                                        <td>{{ $data->Pengguna->nama }}</td>
										<td>
										<a class="btn btn-warning" href="{{ route('order.edit',$data->id) }}">Edit</a>
										<td>
										<form method="post" action="{{ route('order.destroy',$data->id) }}">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger" action="{{ route('order.destroy',$data->id) }}">Delete</button>	
																	
										
												
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
 