<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<title>Biblioteca Lino de Mattos - Calendário </title>

<head>
	<meta charset='utf-8' />
	<link href='eventos/css/core/main.min.css' rel='stylesheet' />
	<link href='eventos/css/core/personalizado.css' rel='stylesheet' />
	<link href='eventos/css/daygrid/main.min.css' rel='stylesheet' />
	<script src='eventos/js/core/main.min.js'></script>
	<script src='eventos/js/core/locales/pt-br.js'></script>
	<script src='eventos/js/interaction/main.min.js'></script>
	<script src='eventos/js/daygrid/main.min.js'></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('calendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
				locale: 'pt-br',
				plugins: ['interaction', 'dayGrid'],
				editable: false,
				eventLimit: true,
				events: 'eventos/list_eventos.php',
				extraParams: function() {
					return {
						cachebuster: new Date().valueOf()
					};
				}
			});
			calendar.render();
		});
	</script>
	<style>
		body {
			margin: 40px 10px;
			padding: 0;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: 14px;
		}

		#calendar {
			max-width: 900px;
			margin: 0 auto;
		}
	</style>
</head>

<body>
	<?php
	//PRELOARD
	include 'includes/preloard.php';
	?>
	<div id='calendar'></div>
	<?php
	//FOOTER
	include 'includes/footer.php';
	?>
</body>

</html>