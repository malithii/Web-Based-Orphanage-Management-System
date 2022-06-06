
$(document).ready(function(){
	$(document).on('click', '.edit_staff', function(){
		var id=$(this).val();
		var name=$('#name'+id).text();
		var contact=$('#contact'+id).text();
		var address=$('#address'+id).text();
        var username=$('#username'+id).text();
        
		$('#edit_staff').modal('show');
        $('#donorId').val(id);
		$('#edonarname').val(name);
		$('#econtactNo').val(contact);
		$('#eaddress').val(address);
        $('#eusername').val(username);
	});
});


$(document).ready(function(){
	$(document).on('click', '.edit_child', function(){
		var id=$(this).val();
		var no=$('#no'+id).text();
		var name=$('#name'+id).text();
        var gender=$('#gender'+id).text();
		var bdate=$('#bdate'+id).text();
        var age=$('#age'+id).text();
        
		$('#edit_child').modal('show');
        $('#childId').val(id);
		$('#echildname').val(name);
		$('#ebdate').val(bdate);
		$('#egender').val(gender);
       
	});
});


$(document).ready(function(){
	$(document).on('click', '.edit_adoption', function(){
		var id=$(this).val();
		var nic=$('#nic'+id).text();
		var name=$('#name'+id).text();
        var address=$('#address'+id).text();
		var contactno=$('#contact'+id).text();
        var cadopt=$('#cname'+id).text();
        var adopt_date=$('#adop_date'+id).text();
        
        
		$('#edit_adoption').modal('show');
        $('#Adopter_Id').val(id);
        $('#enic').val(nic);
		$('#eaname').val(name);
		$('#eaddress').val(address);
		$('#econtactno').val(contactno);
        $('#ecadopt').val(cadopt);
         $('#eadopt_date').val(adopt_date);
       
	});
});
/*$(document).ready(function(){
	$(document).on('click', '.del_staff', function(){
		var id=$(this).val();
        var name=$('#name'+id).text();
        
		$('#del_staff').modal('show');
        $('#donorId').val(id);
        $('#dname').val(name);
	});
});*/