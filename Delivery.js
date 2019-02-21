window.onload = function() {

	// ** DATE ** //
	
	(function () {
		var newdate = new Date();
		var day;
		switch (new Date().getDay()) {
			case 0:
				day = "Sunday";
				break;
			case 1:
				day = "Monday";
				break;
			case 2:
				day = "Tuesday";
				break;
			case 3:
				day = "Wednesday";
				break;
			case 4:
				day = "Thursday";
				break;
			case 5:
				day = "Friday";
				break;
			case 6:
				day = "Saturday";
				break;
			}

			if (day === "Sunday") {
				newdate.setDate(newdate.getDate() + 3);
			} else if (day === "Monday") {
				newdate.setDate(newdate.getDate() + 2);
			} else if (day === "Tuesday") {
				newdate.setDate(newdate.getDate() + 1);
			} else if (day === "Wednesday") {
				newdate.setDate(newdate.getDate());
			} else if (day === "Thursday") {
				newdate.setDate(newdate.getDate() + 6);
			} else if (day === "Friday") {
				newdate.setDate(newdate.getDate() + 5);
			} else if (day === "Saturday") {
				newdate.setDate(newdate.getDate() + 4);
			}

			var dd = newdate.getDate();
			var mm = newdate.getMonth() + 1;
			var y = newdate.getFullYear();

			var wed = mm + '/' + dd + '/' +y;
		
			document.getElementById('date').innerHTML = "Wednesday " +'(' + wed + ')';
		})();

	
	// ** SEARCH **//

	(function () {
		document.getElementById('name').innerHTML = 'hi';
		console.log(document.getElementById('name'));
	})();


	// ** CONTENT ** //	

	(function () {
		// CONTENT VARIABLES //
	
		var	Qty = document.getElementById('qty');
			Products = document.getElementById('products/services');
			Total = document.getElementById("total");
			Cost = document.getElementById("cost");

		var	Qty_val;
		var	Cost_val;
	
		// QTY //

		Qty.onkeyup = function inputKeyUp(e) {
			e.which = e.which || e.keyCode;
			if(e.which == 13) {
				Blur();
				Qty.blur();
			}
		}

		// two quantity event handlers
		Qty.onblur = Blur();
	
		Qty.onclick = function() {
			Qty.select();
		}

		function Blur() {
			Qty_val = Qty.value;
			Calc();
		}

		// PRODUCTS //

		Products.onchange = function() {

			Cost_val = Cost.value;

			if (Products.value === "") {
				Cost_val = 0;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			} else if (Products.value === "3 Gallon G Alkaline") {
				Cost_val = 10;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			} else if (Products.value === "5 Gallon G Alkaline") {
				Cost_val = 13;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			} else if (Products.value === "3 Gallon P Alkaline") {
				Cost_val = 9;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			} else if (Products.value === "5 Gallon P Alkaline") {
				Cost_val = 12;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			} else if (Products.value === "3 Gallon P Regular") {
				Cost_val = 8;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			} else if (Products.value === "5 Gallon P Regular") {
				Cost_val = 9;
				Cost.innerHTML = "$"+ Cost_val +"."+0+0;
				Calc();
			}
		}	

		function Calc() {
			if (Qty_val === undefined) {
				Qty_val = 0;
			} else if (Cost_val === undefined) {
				Cost_val = 0;
			}
			var Total_val = Qty_val * Cost_val;
			Total.innerHTML = "$"+Total_val+"."+0+0;
		}
	})();


}