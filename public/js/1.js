function validateForm()
	{
	    // Bước 1: Lấy giá trị của url và linkpj
	    var url = document.getElementById('url').value;
	    var linkpj = document.getElementById('linkpj').value;
	 
	    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
	    if (url == ''){
	        alert('Bạn chưa nhập Input URL');
	    }
	    else if (linkpj == '')
	    {
	        alert('Bạn chưa nhập Project Address');
	    }
	    else{
	        //alert('Dữ liệu hợp lệ, ta có thể chấp nhận submit form');
	        return true;
	    }			 
	    return false;

}


function hiddenCreate()
{
	//$("#btn-create").css('display','none');	
	var drive = document.getElementById("drive").value;
	var server = document.getElementById("server").value;
	var db = null;
	if (server == "xampp") {
			db = drive + ":\\"+server+"\\htdocs\\";
		} else {
			db =  drive +":\\"+server+"\\www\\";
		}		
	
	document.getElementById("svaddress").value = db;		
	showVhost();
}


function showVhost(){
	var linkpj = document.getElementById("linkpj").value;
	var svaddress = document.getElementById("svaddress").value;
	var weburl = document.getElementById("url").value;
	var linkpj = document.getElementById("linkpj").value;
	var host = "\n\n<VirtualHost *:80>" +
    	"\nDocumentRoot " + svaddress + weburl +
    	"\nServerName "+ weburl +
    	"\nErrorLog logs\\dummy-host.example.com-error.log"+
    	"\nCustomLog logs\\dummy-host.example.com-access.log common"+
    	"\n<Directory " + linkpj +">"+
    	"\nOrder allow,deny" +
    	"\nAllow from all" +
    	"\n</Directory>" +
    	"\n</VirtualHost>";
	document.getElementById("vhost").value = host;
	document.getElementById("path").value = "\n127.0.0.10 " + weburl;
}

// function showFileName() {
//    var fil = document.getElementById("myFile");
//    alert(fil.value);
// }