@extends('backend.layouts.app')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-10">
          <h1 class="m-0 text-dark"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Product Sub </h1>
        </div>
        <div class="col-sm-2">
          <?php  
            $hide = DB::table('tb_product_sub')->where('sub_product_id','=',$id)->get();
            
            if(count($hide)<=1){
              $disabled = '';
            }else{
              $disabled = 'disabled';
            }
             ?>

            <a href="{{ url('insert_product_sub/'.$id.'/'.$delete_id.'') }}">
                <button {{ $disabled }} type="button" class="btn btn-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Insert
                </button>
            </a>
            <a href="{{ url('product/'.$delete_id.'') }}"><button type="button" class="btn btn-dark"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</button></a>

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

    <div class="work-con">
        <div class="tab-content" id="master-tabContent">
            <div id="con_1" aria-labelledby="tab_1" role="tabpanel" class="tab-pane fade show active">
                <table class="table table-bordered data-table" id="list_product_sub" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title EN</th>
                            <th>Title TH</th>
                            <th width="300">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" id="id" class = "form-control " value="{{ $id }}">
    <input type="hidden" name="delete_id" id="delete_id" class = "form-control " value="{{ $delete_id }}">
  </div>
</section>
@endsection

@section('script')

<script type="text/javascript">

  var token = $('meta[name="csrf-token"]').attr('content');
     var id = document.getElementById("id").value;
     var delete_id = document.getElementById("delete_id").value;
         $('#list_product_sub').DataTable({
             scrollY: true,
             scrollCollapse: true,
             searching: true,
             "ajax": {
              "url": '{{url("product_sub_data")}}',
              "type": 'GET',
              "data": {
                "id": id,
                "delete_id": delete_id,
                "_token": token,
              },
              },
             columns : [
             { data : 'no' },
             { data : 'title_en' },
             { data : 'title_th' },
             { data : 'active' }
             ],
         }); 
       
 </script>


<script type="text/javascript">
  function ConfirmDelete(id,image){
    if(confirm("ConfirmDelete?"))
    {
     $.ajax({
        url:"{{ route('delete_product_sub')}}",
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
</script>

@endsection
