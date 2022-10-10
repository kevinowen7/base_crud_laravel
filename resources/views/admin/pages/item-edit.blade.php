@extends('admin.layouts.apps')

@section('title','Dashboard - Test Project')

@section('meta')
    @include('admin.include.meta')
@endsection

@section('header')
    @include('admin.include.header')
@endsection

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Data Item</h4>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="{{route('admin.pages.item.update',$item->id)}}">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Name</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input id="name" name="name" type="text" value="{{$item->name}}" placeholder="Item Name" class="form-control p-0 border-0"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Quantity</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input id="qty" name="qty" type="number" value="{{$item->jumlah}}" placeholder="Item Quantity" class="form-control p-0 border-0"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Price</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input id="price" name="price" type="text" value="{{$item->price}}" placeholder="Item Price" class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection

@section('footer')
    @include('admin.include.footer')
@endsection

@section('custom-script')
    @include('admin.include.custom-script')
    <script>
        $("#price").on('change keyup', function(){ 
            const parsedText = convertTextToPrice(convertPriceToText($("#price").val()));
            $("#price").val(parsedText);
        });
    </script>
@endsection
