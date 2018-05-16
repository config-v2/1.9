function price_old_select_func()
{
	//alert (document.getElementById("price_old_select").value);
	if (document.getElementById("price_old_select").value=='0') {
	document.getElementById("skidka").disabled = true;
	document.getElementById("price_old").disabled = false;	
		
	
	}
else {
	document.getElementById("skidka").disabled = false;
	document.getElementById("price_old").disabled = true;
	
}
return true;
}

function script1()
{
	//alert (document.getElementById("script").value);
	if (document.getElementById("script").value=='0') {
		document.getElementById("script_id").style.visibility ="hidden";
document.getElementById("script_id").style.position="absolute";
		
document.getElementById("title").disabled = true;
document.getElementById("country_script").disabled = true;
document.getElementById("auditoria").disabled = true;
document.getElementById("tovar").disabled = true;
document.getElementById("vsego").disabled = true;
document.getElementById("delay1").disabled = true;
document.getElementById("delay2").disabled = true;
}
else {
	document.getElementById("script_id").style.visibility="visible";
	document.getElementById("script_id").style.position="relative";
	
document.getElementById("title").disabled = false;
document.getElementById("country_script").disabled = false;
document.getElementById("auditoria").disabled = false;
document.getElementById("tovar").disabled = false;
document.getElementById("vsego").disabled = false;
document.getElementById("delay1").disabled = false;
document.getElementById("delay2").disabled = false;
}
	return true;
}

function script2()
{
	//alert (document.getElementById("modal").value);
	if (document.getElementById("modal").value=='0') {
		document.getElementById("modal_id").style.visibility ="hidden";
document.getElementById("modal_id").style.position="absolute";
		
document.getElementById("modal_title").disabled = true;
document.getElementById("modal_text").disabled = true;
document.getElementById("modal_text2").disabled = true;
document.getElementById("button").disabled = true;
document.getElementById("modal_delay").disabled = true;

}
else {
	document.getElementById("modal_id").style.visibility="visible";
	document.getElementById("modal_id").style.position="relative";
document.getElementById("modal_title").disabled = false;
document.getElementById("modal_text").disabled = false;
document.getElementById("modal_text2").disabled = false;
document.getElementById("button").disabled = false;
document.getElementById("modal_delay").disabled = false;
}
	return true;
}

function script3()
{
	//alert (document.getElementById("upsel").value);
	if (document.getElementById("upsel").value=='0') {
	document.getElementById("upsel_id").style.visibility ="hidden";
document.getElementById("upsel_id").style.position="absolute";	
document.getElementById("upsel_title").disabled = true;
//document.getElementById("upsel_dir").disabled = true;
document.getElementById("upsel_pic").disabled = true;
if (document.getElementById('upsel_pic_p')) document.getElementById("upsel_pic_p").disabled = true;
document.getElementById("upsel_url").disabled = true;
document.getElementById("upsel_url_title").disabled = true;
document.getElementById("upsel_delay").disabled = true;
document.getElementById("upsel_pic_h").disabled = true;

}
else {
	document.getElementById("upsel_id").style.visibility="visible";
	document.getElementById("upsel_id").style.position="relative";
document.getElementById("upsel_title").disabled = false;
//document.getElementById("upsel_dir").disabled = false;
document.getElementById("upsel_pic").disabled = false;
if (document.getElementById('upsel_pic_p')) document.getElementById("upsel_pic_p").disabled = false;
document.getElementById("upsel_url").disabled = false;
document.getElementById("upsel_url_title").disabled = false;
document.getElementById("upsel_delay").disabled = false;
document.getElementById("upsel_pic_h").disabled = false;
}
	return true;
}

function script4()
{
	//alert (document.getElementById("script_pokup").value);
if (document.getElementById("script_pokup").value=='0') {
	document.getElementById("pokup_id").style.visibility ="hidden";
document.getElementById("pokup_id").style.position="absolute";	
document.getElementById("pokup1").disabled = true;
document.getElementById("pokup1n").disabled = true;
document.getElementById("pokup2").disabled = true;
document.getElementById("pokup2n").disabled = true;


}
else {
	
	document.getElementById("pokup_id").style.visibility="visible";
	document.getElementById("pokup_id").style.position="relative";
document.getElementById("pokup1").disabled = false;

document.getElementById("pokup1n").disabled = false;
document.getElementById("pokup2").disabled = false;
document.getElementById("pokup2n").disabled = false;

}
	return true;
}

function script5()
{
	//alert (document.getElementById("script_pokup").value);
if (document.getElementById("og_tag").value=='0') {

document.getElementById("og_id").style.visibility ="hidden";
document.getElementById("og_id").style.position="absolute";
		
document.getElementById("product").disabled = true;
document.getElementById("desc").disabled = true;
document.getElementById("og_pic").disabled = true;



}
else {
	document.getElementById("og_id").style.visibility="visible";
	document.getElementById("og_id").style.position="relative";
document.getElementById("product").disabled = false;
document.getElementById("desc").disabled = false;
document.getElementById("og_pic").disabled = false;


}
	return true;
}

function script6()
{
	//alert (document.getElementById("script_pokup").value);
if (document.getElementById("mail_type").value=='0') {

document.getElementById("smtp_id").style.visibility ="hidden";
document.getElementById("smtp_id").style.position="absolute";
document.getElementById("smtp").disabled = true;
document.getElementById("mail_secure").disabled = true;
document.getElementById("smtp_port").disabled = true;
document.getElementById("smtp_user").disabled = true;
document.getElementById("smtp_pass").disabled = true;



}
else {
	
	document.getElementById("smtp_id").style.visibility="visible";
	document.getElementById("smtp_id").style.position="relative";
document.getElementById("smtp").disabled = false;
document.getElementById("mail_secure").disabled = false;
document.getElementById("smtp_port").disabled = false;
document.getElementById("smtp_user").disabled = false;
document.getElementById("smtp_pass").disabled = false;


}
	return true;
}