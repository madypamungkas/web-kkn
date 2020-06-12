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
            <li class="active">Persebaran</li>
        </ul>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
  <!-- State saving -->
	<div class="panel panel-flat">
    <div style="padding:20px">
      <div class="col-md-6">
        <form class="" action="{{url('persebaran-pemudik/export/')}}" method="get">
          <input type="hidden" id="xls-rw" name="rw">
          <input type="hidden" id="xls-rt" name="rt">
          <button type="submit" type="button" class="btn bg-primary-400 btn-labeled btn-labeled-left"><b><i class="icon-drawer-in"></i></b>Unduh Rekap</button>
        </form>
      </div>
      
      <table id="table-persebaran" class="table">
  			<thead>
  				<tr>
            <th style="width:5px">No</th>
            <th>Padukuhan</th>
            <th>Jumlah Pemudik</th>
            <th>Aksi</th>
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
var tablePersebaran;
  $(document).ready(function(){
    tablePersebaran = $('#table-persebaran').DataTable({
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
          url: "{{ url('table/data-hasil-monitoring') }}",
          type: "GET",
          data: function (d) {
            d.rw = $('#rw').find(":selected").val(),
            d.rt = $('#rt').find(":selected").val()
          }
      },

      columns: [
          { data: 'DT_RowIndex', name:'DT_RowIndex', visible:true},
          { data: 'padukuhan', name:'padukuhan', visible:true},
          { data: 'jumlah', name:'jumlah', visible:true},
          { data: 'action', name:'action', visible:true},
          { data: '5', defaultContent: "", visible:false},
          { data: '5', defaultContent: "", visible:false}
      ],
    });

    $('#rw').change(function() {
      tablePersebaran.draw(true);
      $('#xls-rw').val($('#rw').find(":selected").val());
    });
    $('#rt').change(function() {
      tablePersebaran.draw(true);
      $('#xls-rt').val($('#rt').find(":selected").val());
    });
    $('#rt').select2();
    $('#rw').select2();
  });

</script>
@endpush
