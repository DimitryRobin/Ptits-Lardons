$(document).ready(function(){
$('.actif').removeClass('actif');
$('#menu_horizontal').find('a').each(function() {
    $hr=$(this).attr('href');$url= $(location).attr('pathname');
	//alert($hr);alert($url);
	if($url.indexOf($hr)>0)
	{	//alert('ok');
		$(this).addClass("actif");
		}
});
});
