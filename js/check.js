// JavaScript Document
$(function(){
	
	var x=101,
	 fx=000,
	 r='<img src="../images/content/loading.gif"> Processing',
	 ra='<img src="../images/content/loading.gif"> Processing',
	 c='<img src="../images/content/accept.png">',
	 cdata=new Array();

	 var response;
	
	login=function(e){
		e.preventDefault();
		var pwd=$('#pwd').val(),
		usr=$('#usr').val(),
		url=$(this).closest('form').attr('action');
		$('#feedback').html('<center>'+r+'</center>');
		$.post(url,{'usr':usr,'pwd':pwd},function(data){
			if(data==x){
				window.location='index.php?q=tasks';
			}else{
				$('div #feedback').html(data);
				}
			});
		
		} 

	uploadfile={

		pfile:function(event){
			event.preventDefault();
			var fdta=new FormData($('form:file')[0]);
			$.each($('#pfile')[0].files,function(i,file){
				fdta.append('file',file);
				});

			var file_size=$("#file_size").val();
			
			fdta.append('assigned_file_size',file_size);
			
			//$.post('../resource/controller/fupload.php',{'assigned_file_size':file_size});

				$.ajax({
					url: '../resource/controller/fupload.php',
           			type: 'POST',
            		data: fdta,
					contentType:false,
					processData:false,
					cache:false,

					beforeSend:function(event){
						
							
						$('#feedback').html('<center>'+r+' :Please Wait Your File is being Uploaded...</center>');
								
						},
					error:function(){
						alert('An Error Occured, Try Again');
						},
            		success: function (data) {
						if(data==x){
							$('#feedback').empty().html('<b>&nbsp;<span style="color:green;">File Ready</span>:Waiting For Other Fields For Submission.</b>');
							
						}else{
							$('#feedback').html(data);
							}
					}
        			});
			},

		hfile:function(event){
			
			event.preventDefault();
			var fdta=new FormData($('form:file')[0]);
			$.each($('#hfile')[0].files,function(i,file){
				fdta.append('file',file);
				});
				//fdta.serialize();
				
				var file_size=$("#file_size").val();
			
				fdta.append('assigned_file_size',file_size);
			

				$.ajax({
					url: '../resource/controller/hupload.php',
           			type: 'POST',
            		data: fdta,
					contentType:false,
					processData:false,
					cache:false,

					beforeSend:function(event){
							
						$('#feedback').html('<center>'+r+' :Please Wait Your File is being Uploaded...</center>');
								
						},
					error:function(){
						alert('An Error Occured, Try Again');
						},
            		success: function (data) {
						if(data==x){
							$('#feedback').empty().html('<b>&nbsp;<span style="color:green;">File Ready</span>:Waiting For Other Fields For Submission.</b>');
							
						}else{
							$('#feedback').html(data);
							}
					}
        			});
			}

	}

	client_login=function(e){
		
		e.preventDefault();
		var url=$(this).closest('form').attr('action');

		var zdata = $('#clientlogin').serialize();
		$('#feedback').html('<center>'+r+'</center>');
		
		$.post(url,{zdata},function(data){
			
			if(data==x){
				window.location='index.php?q=cpanel';
			}else{
				$('div #feedback').html(data);
			}
			
		});
		
	} 
	
	reg_lec=function(e){

		e.preventDefault();
		
		var fname=$('#fname').val(),
		pass=$('#pass').val(),
		email=$('#email').val(),
		sex=$('#sex').val(),
		
		url=$(this).closest('form').attr('action');
		
		$('#modal1').css({'display':'block'});
		$("modal1 p button").hide();

		$.post(url,{'fname':fname,'pass':pass,'email':email,'sex':sex,'addid':1},function(data){
			
				if(data==x){

					$('#modal1 p cc').html('<center>'+c+' Account Created');
					$("modal1 p button").show();	
					
					$('form').reset();

				}else{

					$('#modal1 p cc').html(data);
					$("modal1 p button").show();	
					
				
				}
	
			});
		}	
	
	reg_cos=function(e){

		e.preventDefault();
		
		var costitle=$('#costitle').val(),
		coscode=$('#coscode').val(),
		cosunit=$('#cosunit').val(),
			
		url=$(this).closest('form').attr('action');
		
		$('#modal1').css({'display':'block'});
		$("modal1 p button").hide();

		$.post(url,{'costitle':costitle,'cosunit':cosunit,'coscode':coscode,'addid':2},function(data){
			
				if(data==x){

					$('#modal1 p cc').html('<center>'+c+' New Course Added');
					$("modal1 p button").show();	
					
					$('form').reset();

				}else{

					$('#modal1 p cc').html(data);
					$("modal1 p button").show();	
					
				
				}
	
			});
		}

	verify={

		verify_contestant:function(e){

		e.preventDefault();
		
		var url='../resource/controller/retrieve.php';
		
				var phone = $('#phone').val();

				$.post(url,{'retrieveid':1,'phone':phone},function(data){
					
					if (data == x) {
						window.location='index.php?q=c_contestant';
					}else{
						$('#feedback').html(data);
					}
					
				});
		},
	}

	iprocess={

		reg_contestant:function(e){
			e.preventDefault();
			
			var url='../resource/controller/add.php';
			var post = $('#post').val(),
			con_name = $('#con_name').val(),
			req = $("input[name='qualification']:checked").val();
			var context = context=CKEDITOR.instances["context"].getData();

			$.post(url,{'addid':4,'post':post,'con_name':con_name,'qualification':req,'context':context},function(data){
				if (data == x) {

					alert("Success");
					window.location="index.php?q=contestant_reg";

				}else{
					alert("Registration Failed ,"+data);
					$('#feedback').html(data);
				}
			});
		}
	}


	modalz = {

		expand_cont_details:function(e){

			var cid = $(this).data('cid'),
			url = '../resource/controller/retrieve.php';
			
			$("#modal1 p").html('Loading...');

			$.post(url,{'retrieveid':2,'cid':cid},function(data){

				if (data != fx) {
					
					$("#modal1").css({'display':'block'});
					$("#modal1 p").html(data);

				}else{
					alert('An Error Occured');
				}
			});
		}
	}

	attachimg=function(event){
		
			event.preventDefault();
			var url=$(this).closest('form').attr('action');
			$.post(url,{'addid':2},function(data){

				
					$("#imgpreview").append('<img src='+data+' width="auto" height="90px">');
					$("#feedback").html("");
			
			});

		} 	
			


	tableToExcel = (function() {
		var uri = 'data:application/vnd.ms-excel;base64,'
    	, template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    	, base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    	, format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  		return function(table, name) {
    	if (!table.nodeType) table = document.getElementById(table)
    	var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    	window.location.href = uri + base64(format(template, ctx))
  		}
		})()



	

	load_news_into_editor=function(event){

		    var id=$("#news").val();
		    
          	$.post('../resource/controller/retrieve.php',{'retrieveid':5,'id':id},function(data){

          		CKEDITOR.instances["context"].setData(data);

          	});

	}


	

/************************End Function*****************************************/


/* **********************|Binders|****************************************** */
	
	$('#btnlogin').bind('click',login);
	$('#verify_contestant').bind('click',verify.verify_contestant);
	$('#pfile').bind('change',uploadfile.pfile);

	$('#hfile').bind('change',uploadfile.hfile);
	
	
	$('#btnregcontestant').bind('click',iprocess.reg_contestant);
	$('#btnloginvote').bind('click',client_login);
	$('a#expand_details').bind('click',modalz.expand_cont_details);

	//$('#filterfans').bind('keyup',filter_fans);
	//$('#filterapplicants').bind('keyup',filter_applicants);
	//$('a#extend_right').bind('click',extend_right);
	//$('a#loadcontext').bind('click',load_context_into_editor);
	//$('#sbeditcontext').bind('click',update_context);
	//$('a#loadnews').bind('click',load_news_into_editor);
	//$('#sbeditnews').bind('click',update_news);
	//$('#country').bind('click change',country_check);
	//$('#sbcreatesector').bind('click',create_download_sectors);


	
	
	
});