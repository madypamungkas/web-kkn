@extends('layouts.app')
@section('content')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class=""></i> <span class="text-semibold">Persebaran</span></h4>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
            <li><a href="{{route('dashboard.index')}}">Persebaran</a></li>
            <li class="active">Detail</li>
        </ul>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
  <!-- State saving -->
	<div class="panel panel-flat">
    <div style="padding:20px">
      <div class="alert alert-info no-border col-md-12">
        <span class="text-semibold col-md-12">Detail Data</span>
        <div class="col-md-12" style="padding-right:0px;">
          <div class="row">
            <div class="col-md-2">
              Padukuhan
            </div>
            <div class="col-md-10">
              : {{$data->name}}
            </div>
          </div>
        </div>
      </div>
      <h4 class="text-center">Daftar Pemudik</h4>
      <table id="table-monitoring" class="table">
  			<thead>
  				<tr>
            <th>Id</th>
            <th style="width:5px">No</th>
            <th>Tanggal Pulang</th>
            <th>Nama</th>
            <th>RT</th>
            <th>RW</th>
  				</tr>
  			</thead>
  			<tbody>
  			</tbody>
  		</table>
    </div>
	</div>
	<!-- /state saving -->
</div>
<!-- /content area -->
@endsection

@push('after_script')
<script>
var tableMonitoring;
  $(document).ready(function(){
    data = {{$data->id}};
		/* tabel user */
    tableMonitoring = $('#table-monitoring').DataTable({
      processing	: true,
			serverSide	: true,
			stateSave: true,
      language: {
                  search: "_INPUT_",
                  searchPlaceholder: "Cari data",
                  paginate: {
                    previous: "Sebelumnya",
                    next: "Berikutnya"
                  }
                },
      ajax		: {
          url: "{{ url('table/data-hasil-monitoring') }}"+"/"+data,
          type: "GET",
      },

      columns: [
          { data: 'id', name:'id', visible:false},
          { data: 'DT_RowIndex', name:'DT_RowIndex', visible:true},
          { data: 'perantau.tanggal_pulang', name:'perantau.tanggal_pulang', visible:true},
          { data: 'nama', name:'nama', visible:true},
          { data: 'rt', name:'rt', visible:true},
          { data: 'rw', name:'rw', visible:true},
      ],
    });
  });

</script>
@endpush
