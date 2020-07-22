$(function($)
	{
	showTable();
	});

function showTable(){
	$.getJSON("djs1.php", 
		function(data){
			var read_html=`	
				<table class="table table-striped">
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">Type</th>
						<th scope="col">Act</th>
						<th scope="col">Mult</th>
						<th scope="col">Require</th>
						<th scope="col">Sort</th>
						<th scope="col">Code</th>
						<th scope="col">Delete</th>
					<tr>`;


	  
	$.each(data.records, function(key,val) {	
		read_html+=`
			<tr>
				<td>`+val.ID+`</td>
				<td><input type='text' name='name' class='form-control' required value='`+val.Name+`'/></td>
				<td><input type='text' name='Type' class='form-control' required value='`+val.Type+`'/></td>	
				<td><input type='checkbox' name='Active' value='`+val.Active+`'
					`+( val.Active == 'Y' ? ` checked='True'` : `` ) + `/></td>
				<td><input type='checkbox' name='Mult1' value='`+val.Mult+`'
					`+( val.Mult == 'Y' ? ` checked='True'` : `` )+ `></td>
				<td><input type='checkbox' name='Require' value='`+val.Require+`'
					`+( val.Require == 'Y' ? ` checked='True'` : `` )+ `></td>
				<td><input type='text' name='Sort' class='form-control' required value='`+val.Sort+`'/></td>
				<td><input type='text' name='Code' class='form-control' required value='`+val.Code+`'/></td>
				<td><button class='btn btn-danger delete-product-button' data-id='`+val.Delete+`'>
                    <span class='glyphicon glyphicon-remove'></span> Delete</button></td>
			</tr>`;	
		
		
		});
		read_html+=`</table>`;
		$("#page-content").html(read_html);

	


});
}