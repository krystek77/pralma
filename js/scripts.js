function externalLinks(){
    if (!document.getElementsByTagName) return;

    var anchors = document.getElementsByTagName("a");

    for (var i=0; i<anchors.length; i++){
        var anchor = anchors[i];
        if(anchor.getAttribute("href") && anchor.getAttribute("rel") == "external") {
            anchor.target = "_blank";
        }
    }
}
function $(arg) {
    return document.getElementById(arg);
}
function insertInfo(opis) {
    advAJAX.get({
    	url: "opis.php?opis="+opis,
	    onSuccess : function(obj) {
            $("productinfo").innerHTML=obj.responseText;
	   	},
    	onError : function(obj) { alert("Error: " + obj.status); }
	});
}

function openWindow(url,width,height) {
	var left = parseInt((screen.availWidth/2) - (width/2));
	var top = parseInt((screen.availHeight/2) - (height/2));
    var windowFeatures = "width=" + width + ",height=" + height +
        ",status=no,resizable=no,scrollbars=no,left=" + left + ",top=" + top +
        ",screenX=" + left + ",screenY=" + top;
    wind = window.open(url, "subWind", windowFeatures);
}
