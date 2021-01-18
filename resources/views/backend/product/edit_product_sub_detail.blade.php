@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit Product Sub Detail</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<section class="content">
    @if(Session::has('success'))
    <div class="alert alert-success" style="text-align: center">{{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
    @endif

          <form action="{{ route('update_product_sub_detail') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-bordered">
              <tr>
                <td width="100">Title EN</td>
                <td><input name="title_en" id="title_en" class="form-control"  value="{{ $product_sub_detail->title_en }}"></td>
              </tr>
              <tr>
                <td width="100">Title TH</td>
                <td><input name="title_th" id="title_th" class="form-control"  value="{{ $product_sub_detail->title_th }}"></td>
              </tr>
              <tr>
                <td width="100">Detail EN</td>
                <td><textarea name="detail_en" id="detail_en" class="form-control"  rows="6" cols="50">{!! $product_sub_detail->detail_en !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Detail TH</td>
                <td><textarea name="detail_th" id="detail_th" class="form-control"  rows="6" cols="50">{!! $product_sub_detail->detail_th !!}</textarea></td>
              </tr>
            </table>
            <input type = "hidden" name="id" id="id" value="{{ $product_sub_detail->id }}">
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</button>
              <a href="{{ url('product_sub_detail/'.$product_sub_detail->sub_pro_det_id.'/'.$product_sub_detail->product_id.'/'.$product_sub_detail->delete_id.'') }}">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
            </div>
            </form>
  </section>
  @endsection

@section('script')
<script>
// CKEDITOR.replace('title_en');
// function CKupdate() {
//     for (instance in CKEDITOR.instances)
//     CKEDITOR.instances[instance].updateElement();
// }
// CKEDITOR.replace('title_th');
// function CKupdate() {
//     for (instance in CKEDITOR.instances)
//     CKEDITOR.instances[instance].updateElement();
// }
// CKEDITOR.replace('detail_th');
// function CKupdate() {
//     for (instance in CKEDITOR.instances)
//     CKEDITOR.instances[instance].updateElement();
// }
// CKEDITOR.replace('detail_en');
// function CKupdate() {
//     for (instance in CKEDITOR.instances)
//     CKEDITOR.instances[instance].updateElement();
// }
</script>
@endsection
