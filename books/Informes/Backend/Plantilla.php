<?php

/*
 * Esta es la plantilla principal de los informes.
 * Aplicacion de PHP y librerías para generar informes en formato Excel.
 * @author @trbureiyan
 * @version 1.1
 */

require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\SpreadSheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new SpreadSheet();
$spreadsheet->getProperties()->setCreator('root@admin')
    ->setLastModifiedBy('root@admin')
    ->setTitle("Informe Excel")
    ->setSubject("Informe Excel")
    ->setDescription("Informe Excel")
    ->setKeywords("Informe Excel")
    ->setCategory("Informe Excel");

// Creamos la hoja de datos
$spreadsheet->setActiveSheetIndex(0); // Seteamos la hoja activa
$hojaActiva = $spreadsheet->getActiveSheet(); // Obtenemos la hoja activa

// Creamos las celdas
$hojaActiva->setCellValue('A1', 'Autores');
$hojaActiva->setCellValue('B1', 'Editores');
$hojaActiva->setCellValue('C1', 'Libros');
$hojaActiva->setCellValue('D1', 'Traductores');

// Estilos de celdas
$spreadsheet->getDefaultStyle()->getFont()->setBold(true);
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
$spreadsheet->getDefaultStyle()->getFont()->setSize(12);

$columnA = $hojaActiva->getColumnDimension('A');
$columnA->setWidth(20);
$columnB = $hojaActiva->getColumnDimension('B');
$columnB->setWidth(20);
$columnC = $hojaActiva->getColumnDimension('C');
$columnC->setWidth(20);
$columnD = $hojaActiva->getColumnDimension('D');
$columnD->setWidth(20);

// Creamos las filas
for ($fila = 2; $fila <= 5; $fila++) {
    $hojaActiva->setCellValue('A' . $fila, $fila);
    $hojaActiva->setCellValue('B' . $fila, $fila);
    $hojaActiva->setCellValue('C' . $fila, $fila);
    $hojaActiva->setCellValue('D' . $fila, $fila);
}

// Indicamos el tipo de hoja de calculo, extension y configuraciones para la hoja XLSX para que se genere correctamente: https://phpspreadsheet.readthedocs.io/en/latest/topics/recipes/#http-headers

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
header('Content-Disposition: attachment;filename="myfile.xlsx"');
header('Cache-Control: max-age=0');

// Generamos el informe en formato Excel y lo guardamos en el navegador

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

// Generar el informe
/* 
$writer = new Xlsx($spreadsheet);
$writer->save('InformeExcel.xlsx');
*/
?>