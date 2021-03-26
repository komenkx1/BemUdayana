@extends('admin/layouts/master',['title'=>'Jurnal'])
@section('content')

<!-- Modal -->
<div class="modal fade" id="DeletemodalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="myModalLabel">Delete Confirmation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="error-text">
          <i class="fa fa-warning modal-icon"></i>
          apakah anda yakin ingin menghapus item ini?
        </p>
      </div>
      <div class="modal-footer">
        <form id="formDelete" action="#" method="post">
          @method('delete')
          @csrf
          <button class="btn btn-default modal-dismiss" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="header bg-yellow pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/"><i class="fas fa-home text-dark"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Jurnal</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--6">
  <div class="row">>
    <div class="col-xl-12">
      @include('admin/layouts/notif')
      <div class="card">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h5 class="h3 mb-0">Jurnal List</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Chart -->
          <div class="table-responsive table">
            <table id="tbPengurus" class=" datatable stripe align-items-center table-flush border-0">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Volume</th>
                  <th>Ringkasan</th>
                  <th>Status</th>
                  <th>Link</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>

              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($jurnals as $jurnal)

                <tr>
                  <td>{{$no++}}</td>
                  <td>{!! Str::limit($jurnal->title, 30) !!}</td>
                  <td>{{$jurnal->volume}}</td>
                  <td>{!! Str::limit($jurnal->ringkasan, 30) !!}</td>
                  <td>{{$jurnal->status}}</td>
                  <td><a href="{{$jurnal->link}}" target="blank">{!! Str::limit($jurnal->link, 30) !!}</a></td>
                  <td class="text-center d-lg-flex justify-content-center">
                    <form class="submit-form{{$jurnal->id}}"
                      action="@if($jurnal->status == 'active') {{ Route('jurnal.nonaktif',['jurnal'=>$jurnal->id]) }} @else {{ Route('jurnal.active',['jurnal'=>$jurnal->id]) }} @endif"
                      method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-sm btn-success mr-2">@if($jurnal->status == 'active')
                        Nonaktif
                        @else Active @endif </button>
                    </form>
                    <button class="btn btn-sm btn-danger trash" data-id="{{$jurnal->id}}"
                      data-nama="{{$jurnal->title}}">Hapus</button>
                    <a href="{{Route('jurnal.edit',['jurnal'=>$jurnal->id])}}" class="btn btn-sm btn-warning">Edit</a>
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

@section('footer')
<script>
  $(document).ready(function() {
    $(document).on('click','.trash', function () { 
     $('#DeletemodalForm').modal('show');
      var id = $(this).data('id');
      var nama = $(this).data('nama');
      $('#formDelete').attr('action', '/admin/jurnal/destroy/' + id);
    });
        $('#tbPengurus').DataTable({
           "bAutoWidth": true,
           "columnDefs": [
                { responsivePriority: 1, targets: 2 },
                { responsivePriority: 2, targets: 4 },
                { orderable: false, targets: 4}
            ],
            bInfo: false,
            responsive: true,
            dom: 'Bfrtip',
            deferRender: true,
            rowReorder: {
                selector: 'td:nth-child(3)'
            },
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            buttons: [
              
                {
                    text: 'Tambah Jurnal',
                    className: "btn btn-md btn-dark",
                    action: function ( e, dt, node, config ) {
                      window.location.href='{{Route("jurnal.create")}}';
                    }
                },
            ],
            initComplete: function() {
                $('button.dt-button').removeClass('dt-button');
                $('div.dt-buttons').addClass(' pb-3');

               
            }
        });
 
      

    });

</script>

@endsection