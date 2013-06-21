var json = "";

$(document).ready(function() {
    $('#save').click(function(event) {
        json = "";
        html2json("#left_tree #cible");
    });
});

function html2json(tree){
    json += '{';
    recursive($(tree).children("li:first"));
    json += '}';
    out();
}

function recursive(li){
    json += '"step":{';
    // on récupère l'id et le name
    var id = li.attr("id");
    json += '"id": "'+id+'",';
    console.log(li);
    var name = li.clone().children().remove().end().text();
    console.log(name);
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


function out(){
    console.log(json);
    $.ajax({
      url: Routing.generate('path_ajax_save'),
      type: 'POST',
      data: {tab: json},
      complete: function(xhr, textStatus) {
      },
      success: function(data, textStatus, xhr) {
        console.log(data);
      },
      error: function(xhr, textStatus, errorThrown) {
        alert("error");
      }
    });


}
