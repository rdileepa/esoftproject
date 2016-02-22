/** 
 This is Site JS
*/
$(document).ready(function(){


	$('#add_item').on('click',function(e){
		e.preventDefault();

		var _form_data = $('#frm_add_item').serialize(),
			_url		=$('#frm_add_item').attr('action') ;
		$.ajax({
			method:"POST",
			url:_url,
			data:_form_data,
			type:"JSON",
			success:function(data){
				
				$('#alert_message').html();
				var data = JSON.parse(data);//PARSE SERVER DATA AS ACTUAL JSON OBJECT
				
				if(parseInt(data.status) === 200){
					$('#alert_message').html(data.message);
				}else{
					$('#alert_message').html(data.message);
				}
			}
	});
	});




	$('.sidebar-content').on('click','a',function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		var last = url.substring(url.lastIndexOf("/") + 1, url.length);
		var token=$('meta[name="csrf-token"]').attr('content');
		console.log(token);



	

		$.get('/showcategory?cat_id=' + last, function(data){
			console.log(data);
		$('.gallery-product3').remove();	
		$.each(data, function(index, categoryObj){
		$('#ajax-cat').append (	
				
		            ' <a href="/products/' + categoryObj.item_id + '"><div class="gallery-product3"> <img src="' + categoryObj.image + '" alt="">' +
			            '<div class="gallery-name">' + categoryObj.item_name + '</div>' +
			            '<div class="gallery-price">' + categoryObj.item_ + '</div>' +
		            	'<img src="images/goshop.jpg" alt="">' +
		            '</div></a>'                 
		        
	       );
      	});

		});


	
	});








});




