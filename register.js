$().ready(function() {
  
	$("#signupform").validate({
		
	rules:{
		name:
		{
			required:true,
			minlength:2	
			
		},
		password:{
			required: true,
			minlength: 8
			 
		},
		cpassword:{
			required: true,
			minlength: 8,
			equalTo: "#psw"

		},
		email:{
			required: true,
			email: true

	}
}
	messages:{
		name: {
			required:"Please enter your name",
			minlength: "Your name must contain atleast 2 characters"},
			password:
			{
				required:"Please provide a password",
				minlength:"Password must be atleast 5 characters long"},
				cpassword:
				{required:"Please provide a password",
				minlength:"Password must be atleast 5 characters long",
				equalTo:"Password dont match"}
	            
	}
							
		
	
/*
	jQuery.validator.addMethod("name", function(value, element) {
  
  return this.optional( element ) || /^[a-zA-Z]+$/.test( value );
}, 'Please enter a Name.');
	jQuery.validator.addMethod("password", function( value, element, param ) {
                var result = this.optional(element) || value.length >= 6 && /\d/.test(value) && /\w/.test(value);
               
                return result;
        }, "Your password must be at least 6 characters long and contain at least one number and one character.");

}*/

	});
});