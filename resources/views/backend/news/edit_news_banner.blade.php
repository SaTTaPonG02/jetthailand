@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit News Banner</h1>
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

          <form action="{{ route('update_news_banner') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-bordered">
              <tr>
                <td width="100">Images</td>
                @if($news_banner->images == '')
                  <td></td>
                @else
                  <td><img src="{{ asset('public/assets/images/news_images/'.$news_banner->images.'') }}" width="200"></td>
                @endif
              </tr>
              <tr>
                <td width="100">File</td>
                <td><input type="file" name="images" id="images" class="form-control"></td>
              </tr>
              <tr>
                <td width="100">Title EN</td>
                <td><textarea name="title_en" id="title_en" class="form-control"  rows="6" cols="50">{!! $news_banner->title_en !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Title TH</td>
                <td><textarea name="title_th" id="title_th" class="form-control"  rows="6" cols="50">{!! $news_banner->title_th !!}</textarea></td>
              </tr>
            </table>
            <input type = "hidden" name="id" id="id" value="{{ $news_banner->id }}">
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</button>
              <a href="{{ route('news_banner') }}"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
            </div>
            </form>
  </section>
  @endsection

@section('script')
<script>
  CKEDITOR.replace('title_en');
function CKupdate() {
    for (instance in CKEDITOR.instances)
    CKEDITOR.instances[instance].updateElement();
}
CKEDITOR.replace('title_th');
function CKupdate() {
    for (instance in CKEDITOR.instances)
    CKEDITOR.instances[instance].updateElement();
}
CKEDITOR.replace('detail_en');
function CKupdate() {
    for (instance in CKEDITOR.instances)
    CKEDITOR.instances[instance].updateElement();
}
CKEDITOR.replace('detail_th');
function CKupdate() {
    for (instance in CKEDITOR.instances)
    CKEDITOR.instances[instance].updateElement();
}

</script>
@endsection