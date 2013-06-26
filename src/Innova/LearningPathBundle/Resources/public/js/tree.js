////////////////////////////////////////////////////
//////////// FUNCTION ////////////////////////////

function parseTree(ul){
    var tags = [];
    ul.children("li").each(function(){
        var subtree = $(this).children("ul");
        if(subtree.size() > 0){
            tags.push([$(this).attr("id"), parseTree(subtree)]);
        }
        else{
            tags.push($(this).attr("id"));
        }
    });
    return tags;
}


////////////////////////////////////////////////////
//////////// GESTION CLICK ETC. ////////////////////
$(document).ready(function () {	
	$(document).delegate(".delete-item","click",function(e){
		var nodes_to_delete =  new Array();

		var node_id = $(this).parent().attr("node_id");
		if (node_id != ""){
			nodes_to_delete.push(node_id);
		}
		var listItems = $(this).parent().find("li").each(function(){
		if($(this).attr("node_id") != ""){
			nodes_to_delete.push($(this).attr("node_id"));
		}
		});
		$(this).parent().remove();
		
		$.ajax({
			type: 'POST',
			url: Routing.generate('step_ajax_delete'),
			data: {"node_ids": nodes_to_delete} ,
			error: function() { 
			},
			success: function() {
			}
		});
	});



	//si ul vide, hauteur minimum

	$(".sortable").sortable({
		connectWith: ".sortable",
		placeholder: 'ui-state-highlight',
		update: function(event, ui) {
				ui.item.removeClass("ui-draggable").find("*").removeClass("ui-draggable");
				ui.item.removeClass("new-item").find("*").removeClass("new-item");
				//ui.item.attr("node_id","").find("li").attr("node_id","");
				ui.item.addClass("editable-item").find("ul").addClass("editable-item");
				ui.item.addClass("sortable").find("ul").sortable({connectWith: ".sortable"});
				ui.item.find("ul").addClass("tree").sortable({connectWith: ".sortable"});
				ui.item.removeClass("cache").find("*").removeClass("cache");
				ui.item.addClass("editable-item").find("li").addClass("editable-item");
		}
	});

	$(".new-item").draggable({
	    connectToSortable: ".sortable",
	    helper: "clone"
	});
	$("ul, li").disableSelection();


	/*$(".editable-item").mouseover(function(e){
		$(this).children(".delete-item").css("visibility","visible");
		$(this).parents().children(".delete-item").css("visibility","hidden");
		e.stopPropagation();
	});*/

	$(document).delegate(".editable-item","mouseover",function(e){
		$(this).children(".delete-item").css("visibility","visible");
		$(this).parents().children(".delete-item").css("visibility","hidden");
		e.stopPropagation();
	});

	/*$(".editable-item").mouseout(function(){
		$(this).children(".delete-item").css("visibility","hidden");
	});*/

	$(document).delegate(".editable-item","mouseout",function(e){
		$(this).children(".delete-item").css("visibility","hidden");
	});
			
});
