$().ready(function(){
	$("#recherche").on('keyup', function()  
	{
		var t=$("recherche").val();
		$('tbody>tr').css('display', 'none');
		$("tbody>tr:contains('"+t+"')").css('display' , 'table-row');
		var n=$("tbody>:contains('"+t+"')").length;
		$(".correspondances").html('+n+ correspondances(s))');

	});
	});