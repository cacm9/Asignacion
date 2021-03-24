<?php

require_once "../model/Import.php";
$import = new Import();

$inputTest = isset($_POST["inputTest"]) ? limpiarCadena($_POST["inputTest"]) : "";
$filellamada2 = isset($_POST["fileLlamada"]) ? limpiarCadena($_POST["fileLlamada"]) : "";

switch ($_GET["op"]) {
	case "Procesarllamadas":

		if (isset($_FILES['fileLlamada']) && is_uploaded_file($_FILES['fileLlamada']['tmp_name'])) {
			$filellamada = $_FILES['fileLlamada'];
			$filellamada = file_get_contents($filellamada['tmp_name']);

			$filellamada = explode("\n", $filellamada);
			$filellamada = array_filter($filellamada);

			// preparar Datos (convertirlos en array)
			foreach ($filellamada as $llamadas) {
				$llamadaList[] = explode("|", $llamadas);
			}
			echo count($llamadaList)-1;

		} else {
			echo 0;
		}

	break;

	case "Cargarllamadas":

		if (isset($_FILES['fileLlamada']) && is_uploaded_file($_FILES['fileLlamada']['tmp_name'])) {

			$filellamada = $_FILES['fileLlamada'];
			$filellamada = file_get_contents($filellamada['tmp_name']);

			$filellamada = explode("\n", $filellamada);
			$filellamada = array_filter($filellamada);

			// preparar Datos (convertirlos en array)
			foreach ($filellamada as $llamadas) {
				$llamadaList[] = explode("|", $llamadas);
			}
			// insertar Datos
			$i = 0;
			$CantReg = 0;
			foreach ($llamadaList as $llamadasData) {
				if ($i != 0) {
					$rspta = $import->Importarllamadas(
						$llamadasData[0],
						$llamadasData[1],
						$llamadasData[2],
						$llamadasData[3],
						$llamadasData[4],
						$llamadasData[5]
					);
					$CantReg++;
				}
				$i++;
			}
			echo $rspta ? "Se Cargaron: " . $CantReg . " Filas a la Base,success" : "El Archivo no se pudo Cargar,error";
		} else {

			echo "No se ecuentra ningun Archivo Cargado ";
		}
		break;

	case "CargarVisitas":

		if (isset($_FILES['fileVisitas']) && is_uploaded_file($_FILES['fileVisitas']['tmp_name'])) {

			$fileVisita = $_FILES['fileVisitas'];
			$fileVisita = file_get_contents($fileVisita['tmp_name']);

			$fileVisita = explode("\n", $fileVisita);
			$fileVisita = array_filter($fileVisita);

			// preparar Datos (convertirlos en array)
			foreach ($fileVisita as $Visitas) {
				$VisitasList[] = explode("|", $Visitas);
			}
			// insertar Datos
			$i = 0;
			$CantReg = 0;
			foreach ($VisitasList as $VisitasData) {
				if ($i != 0) {
					$rspta = $import->ImportarVisitas(
						$VisitasData[0],
						$VisitasData[1],
						$VisitasData[2],
						$VisitasData[3],
						$VisitasData[4]
					);
					$CantReg++;
				}
				$i++;
			}
			echo $rspta ? "Se Cargaron: " . $CantReg . " Filas a la Base,success" : "El Archivo no se pudo Cargar,error";
		} else {

			echo "No se ecuentra ningun Archivo Cargado ";
		}
		break;
}
