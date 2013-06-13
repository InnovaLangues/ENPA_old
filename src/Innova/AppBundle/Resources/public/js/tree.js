////////////////////////////////////////////////////
//////////// FUNCTION ////////////////////////////
function sort(){
	$('.sortable').sortable({
		connectWith: $('.sortable'),
		helper: "clone",
	}).disableSelection();
}


function save_tree(){
	tree_html = $("#cible").html();
	$.ajax({
		type: 'POST',
		url: 'save_tree.php',
		data: {"tree": tree_html} ,
		error: function() { 
		},
		success: function() {
			alert("arbre sauvegardé");
		},
	})
}

////////////////////////////////////////////////////
//////////// GESTION CLICK ETC. ////////////////////
$(document).ready(function () {	
	
	$("#save").click(function() {
		save_tree();
	});
	
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
			},
		})
		
		
	});
	
	$(".droppable").droppable({
		drop: function( event, ui ) {
			if(ui.draggable.hasClass("source")){
				console.log(ui.draggable);
				clone = '<ul class="source"><li node_id="" class="file"><ul class="sortable"><li node_id="" class="file"></li><li node_id="" class="file"></li></ul></li></ul>';
				ui.draggable.siblings().removeClass('source');		
				ui.draggable.addClass("sortable");
				$("#source_content").html(clone);
				sort();
			}
		}
	});
	
	sort();

/*	$('#trash').droppable({
		hoverClass: "ui-state-active",
        drop: function(event, ui) {

            $(ui.draggable).remove();
        }
    });*/

	$(".deleteItem").click(function(){
		$(this).parent().css("display","none");
	});

	$(".editableItem").mouseover(function(e){
		$(this).children(".deleteItem").css("visibility","visible");
	});

	$(".editableItem").mouseleave(function(){
		$(this).children(".deleteItem").css("visibility","hidden");
	});
			
});
