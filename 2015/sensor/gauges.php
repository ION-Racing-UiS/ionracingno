<link rel="stylesheet" href="gauges.css">
<script src="../model/js/raphael.2.1.0.min.js"></script>
<script src="../model/js/justgage.1.0.1.min.js"></script>

<div id="gauge1" class="gauge">	
	<script>
			
		setInterval(function() {g1.refresh(s);},reloadDataMs);
			
		var g1 = new JustGage({
			id: "gauge1",
			value: 0,
			min: 0,
			max: 100,
			title: "Speed",
      label: "Kilometers per hour",
      titleFontColor: "Blue",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>

<div id="gauge2" class="gauge">	
	<script>
			
		setInterval(function() {g2.refresh(soc);},reloadDataMs);
			
		var g2 = new JustGage({
			id: "gauge2",
			value: 0,
			min: 0,
			max: 100,
			title: "State Of Charge",
      label: "Ampere-hours",
      titleFontColor: "Green",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>

<div id="gauge3" class="gauge">	
	<script>
			
		setInterval(function() {g3.refresh(cm);},reloadDataMs);
			
		var g3 = new JustGage({
			id: "gauge3",
			value: 0,
			min: 0,
			max: 100,
			title: "Current Meter",
      label: "Ampere",
      titleFontColor: "Red",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>

<div id="gauge4" class="gauge">	
	<script>
			
		setInterval(function() {g4.refresh(vm);},reloadDataMs);
			
		var g4 = new JustGage({
			id: "gauge4",
			value: 0,
			min: 0,
			max: 100,
			title: "Voltage Meter",
      label: "Volt",
      titleFontColor: "Purple",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>

<div id="gauge5" class="gauge">	
	<script>
			
		setInterval(function() {g5.refresh(vm2);},reloadDataMs);
			
		var g5 = new JustGage({
			id: "gauge5",
			value: 0,
			min: 0,
			max: 100,
			title: "Voltage Meter 2",
      label: "Volt",
      titleFontColor: "Cyan",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>

<div id="gauge6" class="gauge">	
	<script>
			
		setInterval(function() {g6.refresh(bt);},reloadDataMs);
			
		var g6 = new JustGage({
			id: "gauge6",
			value: 0,
			min: 0,
			max: 100,
			title: "Battery Temp.",
      label: "Celsius",
      titleFontColor: "Grey",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>

<div id="gauge7" class="gauge">	
	<script>
			
		setInterval(function() {g7.refresh(ct);},reloadDataMs);
			
		var g7 = new JustGage({
			id: "gauge7",
			value: 0,
			min: 0,
			max: 100,
			title: "Cooling Liquid Temp.",
      label: "Celsius",
      titleFontColor: "Grey",
      showInnerShadow: false,
      gaugeWidthScale: 0.5
		});

	</script>
</div>
