$(document).ready(function() {



    $( "#tabs" ).tabs();
    $("#click-left").click(function() {
        if($("#menu-gauche").attr("ouvert") == "pasok"){
            $("#menu-gauche").attr("ouvert","ok");
            $("#menu-gauche").animate({left:"0"});
            if($("#menu-droite").attr("ouvert") == "ok"){
                $("#menu-droite").attr("ouvert","pasok");
                $("#menu-droite").animate({right:"-360"});
                $("#chevron_right_rightvolet").css("display","none");
                $("#chevron_left_rightvolet").css("display","block");
            }
            $("#chevron_right_leftvolet").css("display","none");
            $("#chevron_left_leftvolet").css("display","block");
        }
        else{
            $("#menu-gauche").attr("ouvert","pasok");
            $("#menu-gauche").animate({left:"-360"});
            $("#chevron_right_leftvolet").css("display","block");
            $("#chevron_left_leftvolet").css("display","none");
        }

    });
    $("#click-right").click(function() {
        if($("#menu-droite").attr("ouvert") == "pasok"){
            $("#menu-droite").attr("ouvert","ok");
            $("#menu-droite").animate({right:"0"});
            if($("#menu-gauche").attr("ouvert") == "ok"){
                $("#menu-gauche").attr("ouvert","pasok");
                $("#menu-gauche").animate({left:"-360"});
                $("#chevron_right_leftvolet").css("display","block");
                $("#chevron_left_leftvolet").css("display","none");
            }
            $("#chevron_right_rightvolet").css("display","block");
            $("#chevron_left_rightvolet").css("display","none");
        }
        else{
            $("#menu-droite").attr("ouvert","pasok");
            $("#menu-droite").animate({right:"-360"});
            $("#chevron_right_rightvolet").css("display","none");
            $("#chevron_left_rightvolet").css("display","block");
        }

    });


    $( "#accordion" ).accordion({
        heightStyle: "content"
    });

    $( "#accordion2" ).accordion({
        heightStyle: "content"
    });

    $( "#tabsA, #tabsB, #tabsC, #tabsD" ).tabs();

    //plein ecran
    $(".fullscreen-supported").toggle($(document).fullScreen() != null);
    $(".fullscreen-not-supported").toggle($(document).fullScreen() == null);

    $(document).bind("fullscreenchange", function(e) {
       console.log("Full screen changed.");
       $("#status").text($(document).fullScreen() ?
           "Full screen enabled" : "Full screen disabled");
    });

    $(document).bind("fullscreenerror", function(e) {
       console.log("Full screen error.");
       $("#status").text("Browser won't enter full screen mode for some reason.");
    });

    $("#switch_fs").click(function() {
        $(document).toggleFullScreen();
    });

    $("#path-id").select2(); 

    $(".clickParcoursTree").click(function(){
        $(".parcoursTree").css("display","block");
    });

    $(document).delegate(".parcours-item","click",function(e){
        $(".parcoursTree").addClass("span6");
        $(".parcoursTree").removeClass("span12");
        $(".ressourcesTypes").css("display","block");
        $(".parcours-item").removeClass("active");
        $(this).addClass("active");

    });

    $(".ressourcesTypes-item").click(function(){
        $(".parcoursTree").addClass("span4");
        $(".parcoursTree").removeClass("span6");
        $(".ressourcesTypes").addClass("span4");
        $(".ressourcesTypes").removeClass("span6");
        $(".ressourcesReelles").css("display","block");
    });

    $('#step-list .step').click(function(event) {
        $.ajax({
            type: 'POST',
            url: Routing.generate('abstract_workspace_ajax_render_abstract_ressource'),
            data: {"stepId": $(this).attr('data-node-id')},
            error: function() { 
            },
            success: function(data) {
                $('#abstractRessourcesDisplay').html(data);

            }
        });
    });
});
