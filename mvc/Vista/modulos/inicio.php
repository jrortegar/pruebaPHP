<br>
	<h1>INGRESAR</h1>

	<form method="post" action="">

		<input type="submit" value="Ingresar" onclick="mostrar();">
		<script>
			function mostrar(){
				<?php
			$mostrar = new UsersC();
			$mostrar -> mostrarUsers();
			?>
			}
		</script>

	</form>

	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Contact Number</th>
				<th>Last_Name</th>
				<th>Created Date</th>

			</tr>

		</thead>

		<tbody>
			
			
		</tbody>

	</table>