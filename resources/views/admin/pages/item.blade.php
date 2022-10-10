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
            <h4 class="page-title">Data Item</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li>
                        <a href="{{route('admin.pages.item.create')}}" class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Add New Item</a>
                    </li>
                </ol>
            </div>
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
                <h3 class="box-title">Data Item</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Quantity</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->jumlah}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                <a href="{{route('admin.pages.item.edit',$item->id)}}" class="btn btn-warning text-white">Edit</a>
                                <a href="{{route('admin.pages.item.create')}}" class="btn btn-danger text-white">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
@endsection
