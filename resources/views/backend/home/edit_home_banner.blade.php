@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit Banner</h1>
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

          <form action="{{ route('update_home_banner') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-bordered">
              <tr>
                <td width="100">Images PC</td>
                @if($home_banner->images_pc == '')
                  <td></td>
                @else
                  <td><img src="{{ asset('public/assets/images/home_images/'.$home_banner->images_pc.'') }}" width="200"></td>
                @endif
              </tr>
              <tr>
                <td width="100">File</td>
                <td><input type="file" name="images_pc" id="images_pc" class="form-control"></td>
              </tr>
              <tr>
                <td width="100">Images MB </td>
                @if($home_banner->images_mb == '')
                  <td></td>
                @else
                  <td><img src="{{ asset('public/assets/images/home_images/'.$home_banner->images_mb.'') }}" width="200"></td>
                @endif
              </tr>
              <tr>
                <td width="100">File</td>
                <td><input type="file" name="images_mb" id="images_mb" class="form-control"></td>
              </tr>
              <tr>
                <td width="100">Title EN</td>
                <td><input type="text" name="title_en" id="title_en" class="form-control"  value="{{ $home_banner->title_en }}"></td>
              </tr>
              <tr>
                <td width="100">Title TH</td>
                <td><input type="text" name="title_th" id="title_th" class="form-control"  value="{{ $home_banner->title_th }}"></td>
              </tr>
              <tr>
                <td width="100">Detail EN</td>
                <td><textarea name="detail_en" id="detail_en" class="form-control"  rows="6" cols="50">{!! $home_banner->detail_en !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Detail TH</td>
                <td><textarea name="detail_th" id="detail_th" class="form-control"  rows="6" cols="50">{!! $home_banner->detail_th !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Link</td>
                <td><input type="text" name="link" id="link" class="form-control"  value="{{ $home_banner->link }}"></td>
              </tr>
            </table>
            <input type = "hidden" name="id" id="id" value="{{ $home_banner->id }}">
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</button>
              <a href="{{ route('home_banner') }}"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
            </div>
            </form>
  </section>
  @endsection

@section('script')
<script>
// CKEDITOR.replace('detail_en');
// function CKupdate() {
//     for (instance in CKEDITOR.instances)
//     CKEDITOR.instances[instance].updateElement();
// }
// CKEDITOR.replace('detail_th');
// function CKupdate() {
//     for (instance in CKEDITOR.instances)
//     CKEDITOR.instances[instance].updateElement();
// }

</script>
@endsection
