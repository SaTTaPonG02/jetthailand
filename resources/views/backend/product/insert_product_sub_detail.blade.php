@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Insert Sub Product Detail</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<section class="content">
<form action="{{ route('save_product_sub_detail') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <table class="table table-bordered">
        <tr>
          <td width="100">Title EN</td>
          <td><input type="text" name="title_en" id="title_en" class="form-control"></td>
        </tr>
        <tr>
          <td width="100">Title TH</td>
          <td><input type="text" name="title_th" id="title_th" class="form-control"></td>
        </tr>
        <tr>
          <td width="100">Detail EN</td>
          <td><textarea name="detail_en" id="detail_en" class="form-control" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
            <td width="100">Detail TH</td>
            <td><textarea name="detail_th" id="detail_th" class="form-control" rows="5" cols="50"></textarea></td>
        </tr>
    </table>
    <input type="hidden" name="id" id="id" value="{{ $id }}">
    <input type="hidden" name="product_id" id="product_id" value="{{ $product_id }}">
    <input type="hidden" name="delete_id" id="delete_id" value="{{ $delete_id }}">
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
        <a href="{{ url('product_sub_detail/'.$id.'/'.$product_id.'/'.$delete_id.'') }}"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
    </div>
</form>
</section>
@endsection

@section('script')
@endsection
