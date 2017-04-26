$("document").ready(function () {
    console.log("Document JS carregat correctament");
    $(".arriba").click(function(){
    $("html,body").animate({
        scrollTop:0
        
        },1000);
    });
 });