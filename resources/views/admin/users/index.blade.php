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
                        <h3>Users</h3>
                    </div>
                    
                    <a class="btn btn-secondary mr-2"href="{{route('users.create')}}" style="width: 190px"><b>Create New User</b></a>
                </div>
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="widget-heading">
                                <h5 class="">Users List</h5>
                            </div>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)                                   
                                        <tr>
                                            <td>{{$user->picture}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at->format('d-m-Y')}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-success btn-sm mr-2" >Edit</a>
                                                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$users->links()}}
                            </div>
                        </div>
                    </div>

                </div>

                </div>

        <!--  END CONTENT AREA  -->


@endsection

@section('scripts')
    
@endsection

