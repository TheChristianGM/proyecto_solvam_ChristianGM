$("document").ready(function () {
    $("#contact-submit").click(function(){
        
        
        if($("#name").val().trim() ==""){
            $("#vacioNombre").html("Nombre requerido");}
        else $("#vacioNombre").html("");
        
        
         if($("#mail").val().trim() ==""){
            $("#vacioEmail").html("Email requerido");}
            else{var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/i;
                var email_regex_result = email_regex.test($("#mail").val().trim());
                if(email_regex_result==false){$("#vacioEmail").html("El email no tiene el formato requerido");}else $("#vacioEmail").html(""); }
        
                 
        if($("#web").val().trim() != ""){
                var web_regex = /^[www.][a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/i;
                var web_regex_result = web_regex.test($("#web").val().trim());
                if(web_regex_result==false){$("#vacioID").html("La direccion web no tiene el formato requerido");}
                else $("#vacioID").html(""); }
        
        
        if($("#phone").val().trim() != ""){
                var phone_regex = /^[9|8|7|6][0-9]{8}$/;
                var phone_regex_result = phone_regex.test($("#phone").val().trim());
                if(phone_regex_result==false){$("#vacioTelefono").html("El telefono no tiene el formato requerido");}
                else $("#vacioTelefono").html(""); }
                               
        
         if($("#consulta").val().trim() ==""){
            $("#vacioConsulta").html("Consulta requerida");}else{$("#vacioConsulta").html("");}
        
        
        if($("#name").val().trim() !="" && $("#mail").val().trim() !="" && $("#consulta").val().trim() !="")
            alert("Se ha enviado su consulta: " + $("#name").val());
        
        
    });
 });