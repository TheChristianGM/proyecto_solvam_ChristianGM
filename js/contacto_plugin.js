$("document").ready(function () {
    $.validator.addMethod("phone_regex", function(value, element, regexpr){
        if(value.trim() !=""){
        return regexpr.test(value);
        }else{
            return true;}
                         
    
    });
    
    
    
    		// validate signup form on keyup and submit
		$("#contact").validate({
			rules: {
                name: "required",
                consulta: "required",
                phone:{
                    phone_regex: /^[9|7|6][0-9]{8}$/},
                web: {
                    required: false,
                    url: true},
                email: {
					required: true,
					email: true
				},
                /*
                
                
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
                */
			},
            
            
			messages: {
                name:"Introduce tu nombre completo",
                email: "Introduce un email válido",
                web: "Formato introducido incorrecto",
                phone: "Introduce un número de teléfono correcto"
                
                /*
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				
				agree: "Please accept our policy",
				topic: "Please select at least 2 topics"
                
                */
			},
            submitHandler: function(){
                alert('Rellenado correctamente');
                console.log('all ok');
                
                
                }
            
		});

    
});