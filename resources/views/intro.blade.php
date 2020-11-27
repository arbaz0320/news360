@include('front_partials.head')
     <div class="section" style="margin-top: 50px;"> 	



        <div class="row" >
        	<div class="col-md-12">
        		<h2 class="text-center" style="font-size: 24px;line-height: 1.4;color: #757575;margin-top: 50px;">First, choose how you want to log in to your News360 account</h2>
        		<h4 class="text-center" style="font-size: 18px;line-height: 1.4;color: #757575;margin-bottom: 40px">(Don't worry, we will never post anything)</h4>
        	</div>

        	<div class="col-md-4 col-md-offset-4 text-center">
        		<a href="{{ url('/auth/redirect/facebook') }}"><img style="width: 105px;float: left;" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-facebook-circle-512.png"></a>

        		<img style="width: 105px;" src="https://assets.stickpng.com/thumbs/5a2fe3efcc45e43754640848.png">
        		
                <a href="{{url('google_redirect')}}"><img style="width: 105px;float: right;" src="https://www.pngkit.com/png/full/178-1783296_g-transparent-circle-google-logo.png"></a>
        	</div>

        	<div class="col-md-12">
        		<h3 class="text-center" style="font-size: 20px;line-height: 1.4;color: #757575;margin-top: 40px;">we will also analyse your social profile to find interests to recommend to you</h3>
        	</div>



        </div>
    </div>

@include('front_partials.footer')    
