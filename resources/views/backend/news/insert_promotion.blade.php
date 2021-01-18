@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Insert Promotion</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<section class="content">

<form action="{{ route('save_promotion') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <table class="table table-bordered">
        <tr>
            <td width="100">Start Date :</td>
            <td><input type="date" name="start_date" id="start_date" format="YYYY-MM-DD"></td>
        </tr>
        <tr>
            <td width="100">End Date :</td>
            <td><input type="date" name="end_date" id="end_date" format="YYYY-MM-DD"></td>
        </tr>
        <tr>
            <td width="100">Images 1</td>
            <td><input type="file" name="images_1" id="images_1" class="form-control"></td>
        </tr>
        <tr>
            <td width="100">Images 2</td>
            <td><input type="file" name="images_2" id="images_2" class="form-control"></td>
        </tr>
        <tr>
            <td width="100">File Download</td>
            <td><input type="file" name="file_download" id="file_download" class="form-control"></td>
        </tr>
        <tr>
            <td width="100">Title EN</td>
            <td><textarea name="title_en" id="title_en" class="form-control" rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td width="100">Title TH</td>
            <td><textarea name="title_th" id="title_th" class="form-control" rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td width="100">Detail EN</td>
            <td><textarea name="detail_en" id="detail_en" class="form-control"  rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td width="100">Detail TH</td>
            <td><textarea name="detail_th" id="detail_th" class="form-control"  rows="6" cols="50"></textarea></td>
        </tr>
    </table>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
        <a href="{{ url('promotion')}}"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
    </div>
</form>
  </section>
  @endsection

@section('script')

<script>
    // CKEDITOR.replace('title_en');
    // function CKupdate() {
    //     for (instance in CKEDITOR.instances)
    //         CKEDITOR.instances[instance].updateElement();
    // }
    // CKEDITOR.replace('title_th');
    // function CKupdate() {
    //     for (instance in CKEDITOR.instances)
    //         CKEDITOR.instances[instance].updateElement();
    // }
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
