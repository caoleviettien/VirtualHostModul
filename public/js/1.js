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
	var id = document.getElementById("countid").value;

	var times = new Date();
	var host = 
		"\n##Porject:\thttp://"+weburl+"   #####################" +
		"\n##ID\t: " + id +
		"\n##Date\t: " + times.getDate() + "/" + times.getMonth() + "/" + times.getFullYear() +
		"\n<VirtualHost *:80>" +
    	"\n\tDocumentRoot " + svaddress + weburl +
    	"\n\tServerName "+ weburl +
    	"\n\tErrorLog logs\\dummy-host.example.com-error.log"+
    	"\n\tCustomLog logs\\dummy-host.example.com-access.log common"+
    	"\n\t<Directory " + svaddress + weburl +">"+
    	"\n\t\tAllowOverride All" +
    	"\n\t\tRequire local" +
    	"\n\t</Directory>" +
    	"\n</VirtualHost>" +
    	"\n##########################################################";
	document.getElementById("vhost").value = host;
	document.getElementById("path").value = "\n127.0.0.10 " + weburl;
}


function checkIf(){
	var url = document.getElementById("url").value;
	var cpath = document.getElementById("cpath").value;
	
	var dot = ".";

	if(url.indexOf(dot) == -1){
    	confirm("Đường dẫn phải chứa dấm chấm");
    	$("#url").focus();
	}

	if(cpath.indexOf(url) != -1){
    	confirm("Tên miền đã tồn tại!");
    	$("#url").val('');
    	$("#url").focus();
	}
}