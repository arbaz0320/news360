@extends('layouts.admin_layouts.app')
@section('content')
<link href="{{url('assets/assets/css/dashboard/dash_2.css" rel="stylesheet')}}" type="text/css" />

<style>
    .btn-group>.btn-group:not(:last-child)>.btn, .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 3px!important;
    border-bottom-right-radius: 3px!important;
}

</style>
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            
            <div class="layout-px-spacing">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Categories</h3>
                    </div>
                    
                    <button class="btn btn-secondary mr-2" data-toggle="modal" data-target="#exampleModal" style="width: 190px"><b>Create Category</b></button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                                </div>
                                
                                <div class="modal-body">
                                        @csrf
                                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label for="validationDefault01">Category Name</label>
                                                    <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Category Name" value="" required>
                                                </div>
            
                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Category Image</label>
                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" style="">
                                                      </div>                                                
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="widget-heading">
                                <h5 class="">Categories List</h5>
                            </div>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i =1;  ?>
                                        @foreach ($categories as $category)                                   
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td><img src="{{$category->image}}" alt="" class="img-fluid" width="100px"></td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at->format('d-m-Y')}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="{{route('admin.category.destroy', $category->id)}}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$categories->links()}}
                            </div>
                        </div>
                    </div>

                </div>

                </div>

        <!--  END CONTENT AREA  -->


@endsection

@section('scripts')
    
@endsection

