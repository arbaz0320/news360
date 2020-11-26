@extends('layouts.admin_layouts.app')
@section('content')
<link href="{{url('assets/assets/css/dashboard/dash_2.css" rel="stylesheet')}}" type="text/css" />
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>News RSS Feeds</h3>
            </div>
            
            <button class="btn btn-secondary mr-2" style="width: 150px"><b>Rss Feeds List</b></button>
        </div>

        <div class="row layout-top-spacing">



            <div class="col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h5 class="">Create News RSS Feed</h5>
                    </div>
                    <div class="widget-content">
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="validationDefault01">Title</label>
                                        <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Full Name" value="" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="validationDefault01">Link</label>
                                        <input type="email" class="form-control" name="email" id="validationDefault01" placeholder="Email" value="" required>
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

