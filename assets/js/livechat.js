(function () {
	var options = {
		facebook: "1629986620602076", // Facebook page ID
		whatsapp: "+6282216669226", // WhatsApp number
		button_color: "#007bff", // Color of button
		position: "right", // Position may be 'right' or 'left'
		order: "facebook,whatsapp", // Order of buttons
	};
	var proto = document.location.protocol,
		host = "getbutton.io",
		url = proto + "//static." + host;
	var s = document.createElement('script');
	s.type = 'text/javascript';
	s.async = true;
	s.src = url + '/widget-send-button/js/init.js';
	s.onload = function () {
		WhWidgetSendButton.init(host, proto, options);
	};
	var x = document.getElementsByTagName('script')[0];
	x.parentNode.insertBefore(s, x);
})();
