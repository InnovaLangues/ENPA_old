////////////////////////////////////////////////////
//////////// FUNCTION ////////////////////////////
function sort(){
	$('.sortable').sortable({
		connectWith: $('.sortable'),
		helper: "clone"
	}).disableSelection();
}

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
	$(".delete_node").click(function() {
		var nodes_to_delete =  new Array();
		var node_id = $(this).parent().attr("node_id");
		nodes_to_delete.push(node_id);
		var listItems = $(this).parent().find("li").each(function(){
		  nodes_to_delete.push($(this).attr("node_id"));
		});

		$(this).parent().remove();
		$.ajax({
			type: 'POST',
			url: 'remove_node.php',
			data: {"node_ids": nodes_to_delete} ,
			error: function() { 
			},
			success: function() {
				save_tree();
				alert("noeud supprimé");
			}
		});
	});
	
	$(".droppable").droppable({
		drop: function( event, ui ) {
			clone = '<ul class="source"><li node_id="" class="file"><ul class="sortable"><li node_id="" class="file"></li><li node_id="" class="file"></li></ul></li></ul>';
			ui.draggable.siblings().removeClass('source');		
			ui.draggable.addClass("sortable");
			ui.draggable.attr("id","").find("li").attr("id","");
			$("#source_content").html(clone);
			sort();
		}
	});
	
	sort();

/*	$('#trash').droppable({
		hoverClass: "ui-state-active",
        drop: function(event, ui) {

            $(ui.draggable).remove();
        }
    });*/

	$(".well .delete-item").click(function(){
		$(this).parent().remove();
	});

	$(".well .editable-item").mouseover(function(e){
		$(this).children(".delete-item").css("visibility","visible");
		$(this).parents().children(".delete-item").css("visibility","hidden");
		e.stopPropagation();
	});

	$(".editable-item").mouseout(function(){
		$(this).children(".delete-item").css("visibility","hidden");
	});
			
});
