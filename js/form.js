$( document ).ready(function() {
	$("#groupeSelect option").click(function() {
		var valueSelect=$("#groupeSelect").val();
		$("#groupeTxt").val(valueSelect);
		//alert(valueSelct);
	});
	
	$("#Domaine option").click(function() {
		var valueSelectDomaine=$("#Domaine").val();
		$("#domaineTxt").val(valueSelectDomaine);
		//alert(valueSelct);
	});
	
	$("#domaineSelect option").click(function() {
		var valueSelectDomaine=$("#domaineSelect").val();
		$("#domaineTxt").val(valueSelectDomaine);
		//alert(valueSelct);
	});
});