window.onload  = function() {
	var	qty = document.getElementById('qty'),
		Dd = document.getElementById('Dd'),
		Da = document.getElementById('Da'),
		button = document.getElementById('button');
	
	var 	qty_val;
	var	Dd_val;
	var	Total_val;

	/* EVENTS */
	qty.onclick = function() {
		qty.select();
	}

	qty.addEventListener("keyup", qtyval);

	Dd.addEventListener("change", Ddval);

	button.addEventListener("click", submit);

	button.addEventListener("keyup", inputKeyUp);

	/* FUNCTIONS */

	function inputKeyUp(e) {
		e.which = e.which || e.keyCode;
		if(e.which == 13) {
			submit();
		}
	}

	function qtyval() {
		qty_val = qty.value;
		Calc();
		return qty_val;
	}

	function Ddval() {

		if (Dd.value === "") {
			Dd_val = 0;
			Calc();
			return Dd_val;
		} else if (Dd.value === "5 Gallon BPA Free") {
			Dd_val = 13;
			Calc();
			return Dd_val;
		} else if (Dd.value === "5 Gallon BPA Free w/ Spout") {
			Dd_val = 19;
			Calc();
			return Dd_val;
		} else if (Dd.value === "3 Gallon BPA Free Chubby") {
			Dd_val = 12;
			Calc();
			return Dd_val;
		} else if (Dd.value === "3 Gallon BPA Free Chubby w/ Spout") {
			Dd_val = 16;
			Calc();
			return Dd_val;
		} else if (Dd.value === "5 Gallon Glass") {
			Dd_val = 67;
			Calc();
			return Dd_val;
		} else if (Dd.value === "3 Gallon Glass") {
			Dd_val = 45;
			Calc();
			return Dd_val;
		}
	}

	function Calc() {
		if (qty_val === undefined) {
			qty_val = 0;
		} else if (Dd.value === "") {
			Dd_val = 0;
		}
		Total_val = qty_val * Dd_val;
		Da.value = "$"+Total_val+"."+0+0;
	}

	function submit() {
		Da.value = Total_val;
	}
	
}