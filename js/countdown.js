function countdown() {
    		var i = document.getElementById('counter');
    		if (parseInt(i.innerHTML)<=2) {
        		location.href = "http://www.prblmtq.com";
    		}
    		i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);