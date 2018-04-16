	var x0, y0, xe, ye;

	x0 = document.documentElement.clientWidth / 2;
	y0 = document.documentElement.clientHeight / 2;

	xe = document.documentElement.clientWidth / 100;
	ye = document.documentElement.clientHeight / 100;


	function moveYourAss(event) {
		var x1 = event.clientX;
		var y1 = event.clientY;

		var x2 = x0 - x1 + 'px';
		var y2 = y0 - y1 + 'px';

		var x_x = x1 / 50 - xe;
		var y_y = y1 / 50 - ye;

		var x3 = x_x + 'px';
		var y3 = y_y + 'px';

		var xH = x_x * 1.5 + 'px';
		var yH = y_y * 1.5 + 'px';

		var xb = x_x * -1 + 'px';
		var yb = y_y * -1 + 'px';

		document.getElementById("docImg").style.right = x3;
		document.getElementById("docImg").style.top = y3;

		document.getElementById("logo").style.right = xH;
		document.getElementById("logo").style.top = yH;

		document.getElementById("explanation").style.right = xH;
		document.getElementById("explanation").style.top = yH;

		// -----                                    ---------

		document.getElementById("backImg").style.right = xb;
		document.getElementById("backImg").style.top = yb;

		// document.getElementById("coorC").innerHTML = 'center: ' + x0 + ', ' + y0;
		// document.getElementById("coorM").innerHTML = 'mouse: ' + x1 + ', ' + y1;
		// document.getElementById("coorD").innerHTML = 'difference: ' + x2 + ', ' + y2;
		// document.getElementById("coorDD").innerHTML = 'division: ' + x3 + ', ' + y3;
		// document.getElementById("coorE").innerHTML = 'style: ' + document.getElementById("docImg").style.right + ', ' + document.getElementById("docImg").style.top;

	}