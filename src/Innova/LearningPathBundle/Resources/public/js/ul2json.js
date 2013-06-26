var json = "";

$(document).ready(function() {
    $('#save').click(function(event) {
        json = "";
        html2json("#left_tree");
    });
});

function html2json(tree){
    json += '{';
    recursive($(tree).children("li:first"));
    json += '}';
    sendJson();
}

function recursive(li){
    json += '"step":{';
    // on récupère l'id et le name
    var id = li.attr("node_id");
    json += '"id": "'+id+'",';
    var name = li.children(".descr").text();
    json += '"name": "'+name+'"';
    // on test si le li contient un sous-arbre.
    // -> cas sous-arbre existant
    if(li.children("ul").length > 0){
        var i = 0;
        json += ',"children":[';
        li.children("ul").children("li").each(function(){
            if(i != 0){json += ',';}
            json += "{";
            i++;
            recursive($(this));
            json += "}";
        });
        json += ']';
    }
    // -> cas élément terminal (feuille)
    else{
    // à voir s'il faut créer un tableau de children vide, null ?
    }
    json += '}';
}

function addslashes(str){
    return (str+'').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
}


function sendJson(){
    $("#save_callback").html("<img src='"+ base_path +"bundles/innovalearningpath/img/ajax-loader.gif' />");
    $.ajax({
      url: Routing.generate('path_ajax_save'),
      type: 'POST',
      data: {json: json},
      success: function(data, textStatus, xhr) {
        $("#save_callback").html("<span class='alert alert-success'>Parcours sauvegardé</span>");
      },
      error: function(xhr, textStatus, errorThrown) {
        $("#save_callback").html("<span class='alert alert-error'>Erreur d'enregistrement.</span>");
      }
    });
}
