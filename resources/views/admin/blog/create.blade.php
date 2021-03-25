@extends('admin/layouts/master',['title'=>'Write Post'])
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
              <h5 class="h3 mb-0">Tulis Postingan Blog</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{Route('blog-admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <div class="form-input mt-2">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" placeholder="Masukan Judul" name="ptitle" required>
              </div>
              <div class="form-input mt-2">
                <label for="Ringkasan">Ringkasan</label>
                <input type="text" class="form-control" placeholder="Masukan Ringkasan" name="psumm" required>
              </div>
              <div class="form-input mt-2">
                <label for="Thumbnail">Thumbnail</label>
                <input type="file" class="form-control" placeholder="Masukan File" required>
              </div>
              <div class="form-input mt-2">
                <label for="Content">Content</label>
                <textarea class="form-control ckeditor" id="editor1" name="pbody" aria-describedby="bodyHelp"
                  placeholder="Tulis content"></textarea>
              </div>
            </div>
            <button class="btn btn-dark float-right " type="submit">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection