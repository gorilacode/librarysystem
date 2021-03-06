$(document).ready(function(){

		//get the table data 
	// get_table_data();
	// pdf_upload();
	// image_loaded();
	LoadDepartment();
	LoadLevels();
	// LoadCategories();
	
	// Display_Total_Money();
	// Display_Total_Users();
	// Display_Total_LoanRequest();
	// LoadBanks();
	// LoadStates();

	function LoadDepartment(){
		$.ajax({
			// type: 'POST',
			url: 'backbone/controller/getDepartment.php',
			data: "get_department",
			success:function(html){
				$("#department").html(html);
			}
		});
	}

	function LoadLevels(){
		$.ajax({
			// type: 'POST',
			url: 'backbone/controller/getLevel.php',
			data: "get_level",
			success:function(html){
				$("#level").html(html);
			}
		});
	}

	function LoadCategories(){
		$.ajax({
			// type: 'POST',
			url: '../backbone/controller/getCategories.php',
			data: "get_categories",
			success:function(html){
				$("#category").html(html);
			}
		});
	}


	// function image_loaded() {
	// 		$(document).on("change","#img_file", function(){
	// 			var property = document.getElementById("img_file").files[0];
	// 			var image_name = property.name;
	// 			var	image_extension = image_name.split(".").pop().toLowerCase();
	// 			var image_size = property.size;
	// 			if ($.inArray(image_extension,["png","jpg","jpeg"]) === -1) {
	// 				$("#uploaded_image").html("<div class='alert alert-danger' role='alert'>Invalid Format Selected</div>");
	// 				// alert("invalid Image Format");
	// 			}
				
	// 			if (image_size > 200000) {
	// 				$("#uploaded_image").html("<div class='alert alert-warning' role='alert'>Image File is too large</div>");
	// 				// alert("invalid Image size");
	// 			}
	// 			else
	// 			{
	// 				$("#img_show").val(image_name);
	// 				var form_data = new FormData();
	// 				form_data.append("img_file", property);
	// 				$.ajax({
	// 					url:"../backbone/controller/loadImage.php",
	// 					method:"POST",
	// 					data:form_data,
	// 					contentType:false,
	// 					cache:false,
	// 					processData:false,
	// 					beforeSend:function(){
	// 						$("#uploaded_image").html("<label class='atext-success' >Uploading Image ...</label>");
	// 					},
	// 					success:function(data){
	// 						$("#uploaded_image").html(data);

	// 					}
	// 				});
	// 			}
	// 		});
	// 	}

	// 	function pdf_upload() {
	// 		$(document).on("change","#pdf_file", function(){
	// 			var pdf_property = document.getElementById("pdf_file").files[0];
	// 			var pdf_name = pdf_property.name;
	// 			var	pdf_extension = pdf_name.split(".").pop().toLowerCase();
	// 			$("#pdf_show").val(pdf_name);
	// 			var form_data2 = new FormData();
	// 			form_data2.append("pdf_file", pdf_property);

	// 			$.ajax({
	// 				url:"../backbone/controller/uploadPdf.php",
	// 				method:"POST",
	// 				data:form_data2,
	// 				contentType:false,
	// 				cache:false,
	// 				processData:false
	// 			});
	// 		});
	// 	}

	// 	function get_table_data(){

	// 		$.ajax({
	// 			url: "../backbone/controller/getBooksTable.php",
	// 			type: "POST",
	// 			data: 'getBooks',
	// 			dataType: 'json',
	// 			beforeSend: function(){

	// 			}
	// 		}).done(function(data){
	// 			//
	// 			if(data.count != 0){
	// 				//call manage data function
	// 				manage_data(data.data);

	// 			}else{
	// 				alert('NO RECORDED LEAVE FOUND');
	// 			}

	// 		});
	// 	}

	// 	//manage the data
	// 	function manage_data(data){
	// 			var row = '';
	// 			$.each(data, function(key, value){
	// 				row += '<tr>';
	// 				row += '<td class="text-center upper">'+ value.bookTitle +'</td>'; 
	// 				row += '<td class="text-center upper">'+ value.isbn +'</td>';  
	// 				row += '<td class="text-center upper">'+ value.category +'</td> ';  
	// 				row += '<td class="text-center upper">'+ value.department +'</td>'; 
	// 				row += '<td class="text-center upper">'+ value.level +'</td>';
	// 				row += '<td class="text-center upper">'+ value.author +'</td>'; 
	// 				row += '<td class="text-center upper">'+ value.year +'</td>';  
	// 				row += '<td class="text-center upper">'+ value.dateAdded +'</td> ';
	// 				row += '<td class="text-center upper" data-id="'+ value.id +'">';
	// 				row += '<span>' ;
	// 				row += ' <button type="button" data-toggle="modal" data-target="#disbuse-form" id="disbuse" class="btn  btn-info btn-xs disbuse-form"><i class="fa fa-eye"></i></button> '; 
	// 				row += ' <button type="button" id="approve" class="btn btn-small btn-success btn-xs"><i class="fa fa-edit"></i></button> '; 
	// 				row += ' <button type="button" id="denied" class="btn btn-small btn-danger btn-xs"><i class="fa fa-trash"></i></button> '; 
	// 				row += '</span>' ;
	// 				row += '</td>';
	// 				row += '</tr>'; 
	// 			});

	// 		$("tbody").html(row);
	// 	}	
		

	// function LoadBanks(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/loadBanks.php',
	// 		data: "get_banks",
	// 		success:function(html){
	// 			$("#bank_name").html(html);
	// 		}
	// 	});
	// }

	// function Display_Total_Money(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/totalAmount.php',
	// 		data: "get_total_money",
	// 		success:function(html){
	// 			$("#cashview").html(html);
	// 		}
	// 	});
	// }

	// function Display_Total_Users(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/totalUsers.php',
	// 		data: "get_total_users",
	// 		success:function(html){
	// 			$("#usersview").html(html);
	// 		}
	// 	});
	// }

	// function Display_Total_LoanRequest(){
	// 	$.ajax({
	// 		// type: 'POST',
	// 		url: '../../controller/totalLoanRequest.php',
	// 		data: "get_total_request",
	// 		success:function(html){
	// 			$("#loanview").html(html);
	// 		}
	// 	});
	// }


		// function get_table_data(){

		// 	$.ajax({
		// 		url: "../../controller/loadUsersTable.php",
		// 		// type: "POST",
		// 		data: "get_users",
		// 		dataType: 'json',
		// 		beforeSend: function(){

		// 		}
		// 	}).done(function(data){
		// 		//
		// 		if(data.count != 0){
		// 			//call manage data function
		// 			manage_data(data.data);

		// 		}else{
		// 			alert('NO RECORDED LEAVE FOUND');
		// 		}

		// 	});
		// }

		//manage the data
		// function manage_data(data){
		// 	var row = '';
		// 	$.each(data, function(key, value){
		// 		row += '<tr>'; 
		// 		row += '<td class="text-center upper">'+ value.staff_id +'</td>'; 
		// 		row += '<td class="text-center upper">'+ value.firstname +' '+ value.lastname +'</td>';  
		// 		row += '<td class="text-center upper">'+ value.email +'</td> ';  
		// 		row += '<td class="text-center upper">'+ value.mobile_no +'</td>'; 
		// 		row += '<td class="text-center upper"><a href="">'+ value.nexcop_account_no +'</a></td>';
		// 		row += '<td class="text-center upper" data-id="'+ value.id +'">'; 
		// 		row += '<button type="button" data-toggle="modal" data-target="#trans-form" id="transaction" class="btn btn-small btn-info btn-xs trans-form"><i class="fa fa-exchange"></i></button>';
		// 		row += '<button type="button" id="approve" class="btn btn-small btn-success btn-xs"><i class="fa fa-check"></i></button>'; 
		// 		row += '<button type="button" id="denied" class="btn btn-small btn-danger btn-xs"><i class="fa fa-times"></i></button>';
		// 		row += '</td>'; 
		// 		row += '</tr>'; 
		// 	});

		// 	$("tbody").html(row);
		// }

		// //Load the local government from the database
		// $('#state').on('change',function(){
		// 	var id = $(this).val();

		// 	$.ajax({
		// 		type: 'POST',
		// 		url: '../../controller/stateController.php',
		// 		data: {id:id},
		// 		success:function(html){
		// 			$("#local_govt").html(html);
		// 		}
		// 	});


		// });

		$("#send").click(function(e){
			$('#createUser').validate({
		        rules: {
		            firstName: {
		                required: true
		            },
		            lastName: {
		                required: true
		            },
		            matricNo: {
		                required: true
		            },
		            school: {
		                required: true
		            },
		            department: {
		                required: true
		            },
		            inputEmail: {
		                required: true,
		                email:true
		            },
		            course: {
		                required: true
		            },
		            level: {
		                required: true
		            },
		            phone: {
		                required: true
		            },
		            password: {
		                required: true
		            }
		            
				},
				messages: {
					firstName : "Please Select Image File",
					lastName : "Please Select a PDF File",
					matricNo : "Enter Book Title",
					school : "Enter Book ISBN No",
					department : "Select Department",
					inputEmail : "Select Level",
					course : "Select Category",
					level : "Enter Author Name",
					phone : "Enter Year Published",
					password : "Enter Description of the Book",
					
					
				},
				  submitHandler: submitForm
	    	});

			   	function submitForm(){
				var data = $("#createUser").serialize();
				$.ajax({
					type: 'POST',
					url: 'backbone/controller/addStudent.php',
					data: data,
					beforeSend: function(){
						$("#send").html('Submitting Leave..');
						$("#send").attr("disabled", true);
					},	
					success: function(response){
						if (response == 'created'){
							$("#send").html('<i class="fa fa-save"></i>&ensp;Create');
							$("#send").attr("disabled", false);
							$("#createUser")[0].reset();
							window.location.href = "redirect.php";
						}else{
							$("#send").html('<i class="fa fa-save"></i>&ensp;Create');
							$("#send").attr("disabled", false);
							$("#createUser")[0].reset();
							toastr.error(response,'Dange Alert',{timeOut:20000});
						}
					}
				});// ends create ajax 
			}

		});


		// $("body").on("click",".trans-form", function(){
		// 	// var id = $(this).parent("td").data('id');
		// 	var staff_id = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
		// 	var full_name = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
		// 	var email = $(this).parent("td").prev("td").prev("td").prev("td").text();
		// 	var nexcop_account_no = $(this).parent("td").prev("td").text();
		// 	// var quantity = $(this).parent("td").prev("td").prev("td").prev("td").text();
		// 	$("#trans-form").find("input[name='staff_id']").val(staff_id);
		// 	$("#trans-form").find("input[name='full_name']").val(full_name);
		// 	$("#trans-form").find("input[name='email']").val(email);
		// 	$("#trans-form").find("input[name='nexcop_account_no']").val(nexcop_account_no);
		// 	// $("#edit-material").find("input[name='quantity']").val(quantity);
		// 	// $("#edit-material").find(".edit-id").val(id);
		// });


		// $("#submit_deduction").click(function(e){
		// 	$('#createDeduction').validate({
		//         rules: {
		//             staff_id: {
		//                 required: true
		//             },
		//             full_name: {
		//                 required: true
		//             },
		//             email: {
		//                 required: true,
		//                 email: true
		//             },
		//             nexcop_account_no: {
		//                 required: true
		//             },
		//             amount_deduct: {
		//                 required: true
		//             }
		            
		// 		},
		// 		messages: {
		// 			staff_id : "",
		// 			full_name : "",
		// 			email : "",
		// 			nexcop_account_no : "",
		// 			amount_deduct : "Please Enter Amount to be Deducted",
					
					
					
		// 		},
		// 		  submitHandler: submitDeductionForm
	 //    	});

		// 	   	function submitDeductionForm(){
		// 		var data = $("#createDeduction").serialize();
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '../../controller/createDeduction.php',
		// 			data: data,
		// 			beforeSend: function(){
		// 				$("#submit_deduction").html('Submitting Leave..');
		// 				$("#submit_deduction").attr("disabled", true);
		// 			},	
		// 			success: function(response){
		// 				if (response == 'created'){
		// 					get_table_data();
		// 					Display_Total_Money();
		// 					$("#submit_deduction").html('<i class="fa fa-save"></i>&ensp;Create');
		// 					$("#submit_deduction").attr("disabled", false);
		// 					$("#createDeduction")[0].reset();
		// 					$(".modal").modal('hide');
		// 					toastr.success('Leave Successfully Submitted','Success Alert',{timeOut:20000});
		// 				}else{
		// 					get_table_data();
		// 					$("#submit_deduction").html('<i class="fa fa-save"></i>&ensp;Create');
		// 					$("#submit_deduction").attr("disabled", false);
		// 					$("#createDeduction")[0].reset();
		// 					$(".modal").modal('hide');
		// 					toastr.error(response,'Dange Alert',{timeOut:20000});
		// 				}
		// 			}
		// 		});// ends create ajax 
		// 	}

		// });

			



});