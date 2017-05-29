$("document").ready(function () {
    console.log("Document JS carregat correctament");
    $(".arriba").click(function(){
    $("html,body").animate({
        scrollTop:0
        
        },1000);
    });
    
    
    $(".lupa").click(function(){
        var fotolupa=($(this).prev().prev().attr("src"));
        
        var subtitulo=($(this).prev().text());
        
        $.fancybox.open([
            {
                src: fotolupa,
                opts: {
                    caption: subtitulo
                }
            }
        ]);
    });
    
    
 });
