@extends('admin/layouts/master',['title'=>'Blog'])
@section('content')
<div class="header bg-yellow pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home text-dark"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
      <div class="card">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h5 class="h3 mb-0">Blog Post List</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Chart -->
          <div class="table-responsive">
            <table id="tbPengurus" class=" table align-items-center table-flush border-0">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Ringkasan</th>
                  <th>Waktu</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>

              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($posts as $post)

                <tr>
                  <td>{{$no++}}</td>
                  <td>{!! Str::limit($post->ptitle, 100) !!}</td>
                  <td>{{$post->psumm}}</td>
                  <td>{{$post->ptime}}</td>
                  <td class="text-center"><button class="btn btn-sm btn-secondary">Edit</button><button
                      class="btn btn-sm btn-danger">Hapus</button></td>
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

        $('#tbPengurus').DataTable({
           "columnDefs": [
                { responsivePriority: 1, targets: 1 },
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
                    text: 'Write Post',
                    className: "btn btn-md btn-dark",
                    action: function ( e, dt, node, config ) {
                      window.location.href='{{Route("blog-admin.create")}}';
                    }
                },
                // {
                //     extend: 'excel',
                //     text: 'Export to excel',
                //     title: 'Data Semua Pengurus',
                //     className: "btn btn-md btn-info",
                //     filename: 'Export ALL - ' + d,
                //     init: function(dt, node, config) {
                //         $("#filter").on('change', function() {
                //             config.filename = 'Pengurus ' + this.value + ' - ' + d;
                //             config.title = 'Data Pengurus ' + this.value + ' - ' + d;
                //         })
                //     },
                //     exportOptions: {
                //         rows: {
                //             search: 'applied'
                //         },
                //         orthogonal: 'export',
                //         columns: [0, 1, 2]
                //     }
                // },
            ],
            initComplete: function() {
                $('button.dt-button').removeClass('dt-button');
                $('div.dt-buttons').addClass(' pb-3');

               
            }
        });
 
      

    });

</script>

@endsection