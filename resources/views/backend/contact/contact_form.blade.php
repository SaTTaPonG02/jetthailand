@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-11">
          <h1 class="m-0 text-dark"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Contact Form</h1>
        </div>
        <div class="col-sm-1">
            {{-- <a href="{{ url('insert_home_banner') }}">
                <button type="button" class="btn btn-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Insert
                </button>
            </a> --}}
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
<div class="work-pane on-simple-bar">

    <br>
    <div class="work-con">
        <div class="tab-content" id="master-tabContent">
            <div id="con_1" aria-labelledby="tab_1" role="tabpanel" class="tab-pane fade show active">
                <table class="table table-bordered data-table" id="list_contact_form" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Tel</th>
                            <th>E-mail</th>
                            <th>Message</th>
                            <th width="200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function() {
        $('#list_contact_form').DataTable({
            scrollY: true,
            scrollCollapse: true,
            searching: true,
            ajax:'{{url("contact_form_data")}}',
            columns : [
            { data : 'no' },
            { data : 'name' },
            { data : 'tel' },
            { data : 'email' },
            { data : 'message' },
            { data : 'active' }
            ], 
        });  
    });
</script>



{{-- <script type="text/javascript">
  function ConfirmDelete(id,image){
    if(confirm("ConfirmDelete?"))
    {
     $.ajax({
        url:"{{ route('delete_home_banner')}}",
        method:"POST",
        data:{
        "_token": "{{ csrf_token() }}",
        id:id,
        image:image
    },
    success:function(data){
      Swal.fire({
        title: data,
        type: 'success',
        timer: 70000,
        showCloseButton: true
      })
      window.location.reload();
    },
    error:function(data){
        Swal.fire({
          title: "Error",
          type: 'error',
          timer: 3000,
          showCloseButton: true
        })
    }
    });
    }
    }
</script> --}}

@endsection
