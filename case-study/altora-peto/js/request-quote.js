function submitQuote(){
	_("mybtn").disabled = true;
	_("sta").innerHTML = '<h2 style="color:#828585;"><img src="../../images/loading1.gif"/>please wait ...</h2>';
	var formdata = new FormData();
	formdata.append( "mess", _("mess").value );
	formdata.append( "sel1", _("sel1").value );
	formdata.append( "sel2", _("sel2").value );
	formdata.append( "sel3", _("sel3").value );
	formdata.append( "em", _("em").value );
	formdata.append( "ph", _("ph").value );
	formdata.append( "com", _("com").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "quote_parse.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("sta").innerHTML = '<h2>Message Saved. Thanks</h2>';
			} else {
				_("sta").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}