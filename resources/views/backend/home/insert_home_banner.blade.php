@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Insert Banner</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<section class="content">

<form action="{{ route('save_home_banner') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <table class="table table-bordered">
        <tr>
            <td width="100">Images PC</td>
            <td><input type="file" name="images_pc" id="images_pc" class="form-control"></td>
        </tr>
        <tr>
            <td width="100">Images MB</td>
            <td><input type="file" name="images_mb" id="images_mb" class="form-control"></td>
        </tr>
        <tr>
            <td width="100">Title EN</td>
            <td><input type="text" name="title_en" id="title_en" class="form-control"  ></td>
        </tr>
        <tr>
            <td width="100">Title TH</td>
            <td><input type="text" name="title_th" id="title_th" class="form-control"  ></td>
        </tr>
        <tr>
            <td width="100">Detail EN</td>
            <td><textarea name="detail_en" id="detail_en" class="form-control"  rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td width="100">Detail TH</td>
            <td><textarea name="detail_th" id="detail_th" class="form-control"  rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td width="100">Link</td>
            <td><input type="text" name="link" id="link" class="form-control"  ></td>
        </tr>
    </table>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
        <a href="{{ url('home_banner')}}"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
    </div>
</form>
  </section>
  @endsection

@section('script')

<script>
    // CKEDITOR.replace('detail_en');
    // function CKupdate() {
    //     for (instance in CKEDITOR.instances)
    //         CKEDITOR.instances[instance].updateElement();
    // }
    // CKEDITOR.replace('detail_th');
    // function CKupdate() {
    //     for (instance in CKEDITOR.instances)
    //         CKEDITOR.instances[instance].updateElement();
    // }
</script>
@endsection
