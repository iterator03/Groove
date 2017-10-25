$().ready(function() {
    
	$("#loginform").validate({
		
	rules:{
		
		email:{
			required: true,
			email: true

	     },
		password:{
			required: true,
			minlength: 8
		},
	
	
	messages:{
		email: {
			required:"Please enter your email"
			   },
			password:{
		required:"Please provide a password"
			}
				
	            
	}
							
		
	
	}
	
	
	});
});