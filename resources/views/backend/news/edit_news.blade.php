@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit News</h1>
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

          <form action="{{ route('update_news') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="table table-bordered">
              <tr>
                <td width="100">Date :</td>
                <td><input type="date" name="datetime" id="datetime" format="YYYY-MM-DD" value="{{ date($news->datetime) }}"></td>
              </tr>
              <tr>
                <td width="100">Images 1</td>
                @if($news->images_1 == '')
                  <td></td>
                @else
                  <td><img src="{{ asset('public/assets/images/news_images/'.$news->images_1.'') }}" width="200"></td>
                @endif
              </tr>
              <tr>
                <td width="100">File</td>
                  <td><input type="file" name="images_1" id="images_1" class="form-control"></td>
              </tr>
              <tr>
                <td width="100">Images 2</td>
                @if($news->images_2 == '')
                  <td></td>
                @else
                  <td><img src="{{ asset('public/assets/images/news_images/'.$news->images_2.'') }}" width="200"></td>
                @endif
              </tr>
              <tr>
                <td width="100">File Download</td>
                @if($news->file_download == '')
                  <td></td>
                @else
                  <td>{{$news->file_download }}</td>
                @endif
              </tr>
              <tr>
                <td width="100">File</td>
                <td><input type="file" name="file_download" id="file_download" class="form-control"></td>
              </tr>
              <tr>
                <td width="100">Title EN</td>
                <td><textarea name="title_en" id="title_en" class="form-control"  rows="6" cols="50">{!! $news->title_en !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Title TH</td>
                <td><textarea name="title_th" id="title_th" class="form-control"  rows="6" cols="50">{!! $news->title_th !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Detail EN</td>
                <td><textarea name="detail_en" id="detail_en" class="form-control"  rows="6" cols="50">{!! $news->detail_en !!}</textarea></td>
              </tr>
              <tr>
                <td width="100">Detail TH</td>
                <td><textarea name="detail_th" id="detail_th" class="form-control"  rows="6" cols="50">{!! $news->detail_th !!}</textarea></td>
              </tr>
            </table>
            <input type = "hidden" name="id" id="id" value="{{ $news->id }}">
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</button>
              <a href="{{ route('news') }}"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>
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
