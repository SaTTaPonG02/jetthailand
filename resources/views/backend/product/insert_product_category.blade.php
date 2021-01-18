@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Insert Product Category</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<section class="content">

<form action="{{ route('save_product_category') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <table class="table table-bordered">
        <tr>
            <td width="100">Title EN</td>
            <td><input type="text" name="title_en" id="title_en" class="form-control" rows="6" cols="50"></td>
        </tr>
        <tr>
            <td width="100">Title TH</td>
            <td><input type="text" name="title_th" id="title_th" class="form-control" rows="6" cols="50"></td>
        </tr>
    </table>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
        <a href="{{ url('product_category')}}"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
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
