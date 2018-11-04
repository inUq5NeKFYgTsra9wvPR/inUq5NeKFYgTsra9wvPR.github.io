		document.querySelector('.pricing p').style.display="none";
		document.querySelector('.pricing a').style.display="none";
		document.querySelector('.pricing img').style.display="none";
		document.querySelector('.pricing h2').style.display="none";
		document.querySelector('.main p').style.display = "none";
		document.querySelector('.main h1').style.display = "none";
		document.querySelector('.main').classList.add('spinner-2');	

		setTimeout(() => {
			document.querySelector(".main").classList.remove("spinner-2");
	  		document.querySelector(".main p").style.display = "block";
	  		document.querySelector(".main h1").style.display = "block";
	  		document.querySelector('.pricing h2').style.display="block";
	  		document.querySelector('.pricing img').style.display="block";
	  		document.querySelector('.pricing a').style.display="block";
	  		document.querySelector('.pricing p').style.display="block";
			document.querySelector('.header h2').style.display="block";
			document.querySelector('.content img').style.display = "block";
			document.querySelector('.footer a').style.display = "block";
		}, 2000);