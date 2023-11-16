$(document).ready(function(){
	var fontSize = 16;

	// Função para aplicar as configurações salvas
	function applySettings() {
		var savedFontSize = localStorage.getItem('fontSize');
		var savedContrastMode = localStorage.getItem('contrastMode');

		if (savedFontSize) {
			fontSize = parseInt(savedFontSize);
			$("p, h4, h6").css("font-size", fontSize + "px");
		}

		if (savedContrastMode === 'black') {
			$('body').addClass("contrast-black");
			$('body').removeClass("contrast-white");
		} else if (savedContrastMode === 'white') {
			$('body').addClass("contrast-white");
			$('body').removeClass("contrast-black");
		}
	}

	// Aplicar configurações ao carregar a página
	applySettings();

	/* Increase Text */
	$("#increase-text").click(function(){
		if(fontSize >= 24) {
			return false;
		 } else {
			fontSize = fontSize + 1;
			$("p, h4, h6").css("font-size", fontSize + "px");
			localStorage.setItem('fontSize', fontSize);
		}
	});

	/* Decrease Text */
	$("#decrease-text").click(function(){
		if(fontSize <= 10) {
			return false;
		} else {
			fontSize = fontSize - 1;
			$("p, h4, h6").css("font-size", fontSize + "px");
			localStorage.setItem('fontSize', fontSize);
		}
	});

	/* Default */
	$("#normal-text").click(function(){
		fontSize = 16;
		$("p, h4, h6").css("font-size", fontSize + "px");
		localStorage.setItem('fontSize', fontSize);
		$('body').removeClass("contrast-white");
		$('body').removeClass("contrast-black");
		localStorage.removeItem('contrastMode');
	});

	/* Contrast Black */
	$("#contrast-b").click(function(){
		$('body').addClass("contrast-black");
		$('body').removeClass("contrast-white");
		localStorage.setItem('contrastMode', 'black');
	});

	/* Contrast White */
	$("#contrast-w").click(function(){
		$('body').addClass("contrast-white");
		$('body').removeClass("contrast-black");
		localStorage.setItem('contrastMode', 'white');
	});
});