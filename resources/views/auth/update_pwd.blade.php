@extends('Admin.master')

@section('title','修改密码')

@section('css')
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="http://yanshi.sucaihuo.com/modals/26/2674/demo/favicon.ico">
	<link rel="stylesheet" href="{{asset('Admin/pwd/animate.css')}}">
	<link rel="stylesheet" href="{{asset('Admin/pwd/style.css')}}">
	<meta name="_token" content="{{ csrf_token() }}"/>
@endsection

@section('menu','修改密码')
@section('page','修改密码')

@section('pageName','修改密码')

@section('content')


<div class="container">		
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			

			<!-- Start Sign In Form -->
			<div class="fh5co-form animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
				<h2>修改密码</h2>
				
				<div class="form-group al">
				 	
				</div>
				
				<div class="form-group">
					<label for="password" class="sr-only">Password</label>
					<input type="password" class="form-control1" id="old-password" placeholder="原始密码" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="password" class="sr-only">Password</label>
					<input type="password" class="form-control1" id="new-password" placeholder="新密码" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="re-password" class="sr-only">Re-type Password</label>
					<input type="password" class="form-control1" id="re-password" placeholder="请重新输入新密码" autocomplete="off">
				</div>
				<div class="form-group btn-submit">
					<span class="btn btn-primary1"> 修 改 </span>
				</div>
			</div>
			<!-- END Sign In Form -->
			<div style="margin-top: 100px ">
				 	
			</div>
		</div>
	</div>
		
</div>	
	


	

@endsection
@section('js')
	<script>
		$(document).ready(function(){
			$('.btn-primary1').click(function(){
				$('.al').empty();
				var old=$('#old-password').val();
				var new_pwd=$('#new-password').val();
				var re=$('#re-password').val();
				if(AuthPasswd(new_pwd)<2){
					$aa=$('.as').html();
					if($aa){
						$('.as').html('新密码强度太低！');
					}else{
						$('.al').append(`<div class="alert alert-success as" role="alert">新密码强度太低！</div>`);
					}
					
					return false;
				}
				 $.ajax({ 
		            type:'post', 
		            url:'{{url('/update_pwd')}}', 
		            data:{old:old,new:new_pwd,new_confirmation:re}, 
		            headers: { 
					    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') 
					}, 
					dataType: "json",
		            success:function(data){
		            	if(data.status==200){
		            		layer.alert(data.msg, {icon: 6});
		            		window.location.href='{{url('/logout')}}';
		            	} else{
		
		            		console.log(data.msg);
		            		for(var i=0;i<data.msg.length;i++){
		            			$('.al').append(`<div class="alert alert-success as" role="alert">`+data.msg[i]+`</div>`);
		            		}

		            	}
		                
		            }, 
	        	});
        	}); 
		})

		function AuthPasswd(string) {
			 if(string.length >=6) {
			 if(/[a-zA-Z]+/.test(string) && /[0-9]+/.test(string) && /\W+\D+/.test(string)) {
			  return 3;
			 }else if(/[a-zA-Z]+/.test(string) || /[0-9]+/.test(string) || /\W+\D+/.test(string)) {
			  if(/[a-zA-Z]+/.test(string) && /[0-9]+/.test(string)) {
			  return 2;
			  }else if(/\[a-zA-Z]+/.test(string) && /\W+\D+/.test(string)) {
			  return 2;
			  }else if(/[0-9]+/.test(string) && /\W+\D+/.test(string)) {
			  return 2;
			  }else{
			  return 1;
			  }
			 }
			 }else{
			 	return 0;
			 }
		}

	</script>
    @endsection

