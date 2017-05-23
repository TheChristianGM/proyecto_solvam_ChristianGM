$("document").ready(function () {
    console.log("Document JS carregat correctament");
    $(".arriba").click(function(){
    $("html,body").animate({
        scrollTop:0
        
        },1000);
    });
    
    
    $(".lupa").click(function(){
        alert("entramos");
        
        $.fancybox.open([
            {
             //imagen1
                src: 'img/detalles/asus-h81-gamer-edition.jpg',
                opts: {
                    caption: 'First image'
                }
            }
        ]);
    });
    
    
 });
