<!DOCTYPE html>
<html>
    <head>
        <title>prueba</title>
        <link rel="stylesheet" href="CSS/prueba.css">
    </head>
    <body>
        <div id="userInput">
            <input id="textInput" class="input-box" type="text" name="msg" placeholder="Pregunta">
            <p></p>
        </div>
        <div id="userInput">
            <input id="textInput" class="input-box" type="text" name="msg" placeholder="Respuesta">
            <p></p>
        </div>
        <label class="control-label">Destinatario</label>
						<div class="controls">
							<select name="idDestinatario">
								<option disabled selected>Ingrese un usuario</option>
								<?php
									$pdo = Database::connect();
									$query = 'SELECT * FROM Dashboard';
									foreach($pdo->query($query) as $row){
										if ($row['idUsuario']==$idDestinatario)
											echo "<option selected value'" . $row['idUsuario'] . "'>" . $row['usuario'] . "</option>";
										else
											echo "<option value='" . $row['idUsuario'] . "'>" . $row['usuario'] . "</option>";
									}
									Database::disconnect();
								?>
							</select>
        <button type="button" role="button" href ="html/maximized.html" class="ac-pushButton">
            <div>Enviar</div>
        </button>
    </body>
</html>
