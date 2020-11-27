@extends('layouts.admin_layouts.app')
@section('content')
<link href="{{url('assets/assets/css/dashboard/dash_2.css" rel="stylesheet')}}" type="text/css" />
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Create New Users</h3>
            </div>
            
            <a class="btn btn-secondary mr-2" href="{{route('users.index')}}" style="width: 150px"><b>Users List</b></a>
        </div>

        <div class="row layout-top-spacing">



            <div class="col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h5 class="">User Details</h5>
                    </div>
                    <div class="widget-content">
                        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="validationDefault01">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Full Name" value="" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="validationDefault01">Email</label>
                                        <input type="email" class="form-control" name="email" id="validationDefault01" placeholder="Email" value="" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="validationDefault01">Password</label>
                                        <input type="password" class="form-control" name="password" id="validationDefault01" placeholder="Password" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="validationDefault01">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="validationDefault01" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="row">
                                      <div class="col-md-12">
                                          <img id="image_preview_1" class="img-fluid" src="{{ asset('assets/images/placeholder-profile.png') }}"
                                              alt="preview image" style="width:250px; height:250px">
                                              <input type="file" name="image" class="inputfile mt-2 ml-5" placeholder="Choose image" id="image1" style="padding-left: 45px">

                                      </div>  
                                    </div>
                                  </div>
                            </div>

                          <button class="btn btn-primary mt-3" type="submit" style="width: 250px"><b>Add User</b></button>
                        </form>
                    </div>
                </div>
            </div>



        </div>


    </div>
</div>


@endsection

@section('scripts')
    <script>
        $(document).ready(function (e) {
   
  
            $('#image1').change(function(){
           
           let reader = new FileReader();
       
           reader.onload = (e) => { 
       
             $('#image_preview_1').attr('src', e.target.result); 
           }
       
           reader.readAsDataURL(this.files[0]); 
              
       });

});


</script>
@endsection

