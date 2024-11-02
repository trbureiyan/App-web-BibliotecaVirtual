<?php

/*
 * Esta es la plantilla principal de los informes.
 * Aplicacion de PHP y librerías para generar informes en formato Excel.
 * @author @trbureiyan
 * @version 1.4
 */

require '../../includes/conexion.php';
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory}; // & use PhpOffice\PhpSpreadsheet\IOFactory;
// use PhpOffice\PhpSpreadsheet\Style\Alignment;
// use PhpOffice\PhpSpreadsheet\Style\Border;
// use PhpOffice\PhpSpreadsheet\Style\Fill;

/*
// Conexión a la base de datos
try {
    $pdo = new PDO('mysql:host=localhost;dbname=libros', 'user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
*/

// conn tabla autores
$autores = "SELECT ID_autores, Nombre, Apellidos, telefono, correo FROM autores";
try {
    $result = $conn->query($autores);
} catch (PDOException $e) {
    echo 'Query error: ' . $e->getMessage();
    exit();
}

if ($result === null) {
    echo "Error: cannot execute query \n";
    exit();
}

// conn tabla editores
$editores = "SELECT ID_editores, Nombre, Apellidos, nombre_editorial, pais FROM editores";
try {
    $result = $conn->query($editores);
} catch (PDOException $e) {
    echo 'Query error: ' . $e->getMessage();
    exit();
}

if ($result === null) {
    echo "Error: cannot execute query \n";
    exit();
}

// conn tabla libros
$libros = "SELECT ID_libro, Titulo, Tipo, ID_autor, ID_editor, ID_traductor, genero FROM libros";
try {
    $result = $conn->query($libros);
} catch (PDOException $e) {
    echo 'Query error: ' . $e->getMessage();
    exit();
}

if ($result === null) {
    echo "Error: cannot execute query \n";
    exit();
}

// conn tabla traductores
$traductores = "SELECT ID_traductores, Nombre, Apellidos, idioma_nativo, idiomas_traduccion, certificaciones FROM traductores";
try {
    $result = $conn->query($traductores);
} catch (PDOException $e) {
    echo 'Query error: ' . $e->getMessage();
    exit();
}

if ($result === null) {
    echo "Error: cannot execute query \n";
    exit();
}

// gen
$informe = new Spreadsheet();
$hojaActiva = $informe->getActiveSheet(); // $hojaActiva = $spreadsheet->getActiveSheet();
$informe->setActiveSheetIndex(0);

// meta
$informe->getProperties()->setCreator('root@admin')
    ->setLastModifiedBy('root@admin')
    ->setTitle("Informe Excel")
    ->setSubject("Informe Excel")
    ->setDescription("Informe Excel")
    ->setKeywords("Informe Excel")
    ->setCategory("Informe Excel");

// Estilo default
$informe->getDefaultStyle()->getFont()->setSize(12);
$informe->getDefaultStyle()->getFont()->setName('Arial');

// Elementos autores
$hojaActiva->setCellValue('C1', 'Autores');
$hojaActiva->getStyle('C1')->getFont()->setSize(17)->setBold(true);
$columnA = $hojaActiva->getColumnDimension('C');
$columnA->setWidth(20);
$hojaActiva->setCellValue('A2', 'ID_autores'); 
$hojaActiva->setCellValue('B2', 'Nombre');
$hojaActiva->setCellValue('C2', 'Apellidos');
$hojaActiva->setCellValue('D2', 'telefono');
$hojaActiva->setCellValue('E2', 'correo');

// Extraccion de info de autores
$fila = 3;
while($rows = $result->fetch_assoc()) {
    $hojaActiva->setCellValue('A' . $fila, $rows['ID_autores']);
    $hojaActiva->setCellValue('B' . $fila, $rows['Nombre']);
    $hojaActiva->setCellValue('C' . $fila, $rows['Apellidos']);
    $hojaActiva->setCellValue('D' . $fila, $rows['telefono']);
    $hojaActiva->setCellValue('E' . $fila, $rows['correo']);
    $fila++;
}

// Elementos editores
$hojaActiva->setCellValue('J1', 'Editores');
$hojaActiva->getStyle('J1')->getFont()->setSize(17)->setBold(true);
$columnJ = $hojaActiva->getColumnDimension('J');
$columnJ->setWidth(20);
$hojaActiva->setCellValue('H2', 'ID_editores');
$hojaActiva->setCellValue('I2', 'Nombre');
$hojaActiva->setCellValue('J2', 'Apellidos');
$hojaActiva->setCellValue('K2', 'nombre_editorial');
$hojaActiva->setCellValue('L2', 'pais');

// Extraccion de info de editores
$fila = 3;
while($rows = $result->fetch_assoc()) {
    $hojaActiva->setCellValue('H' . $fila, $rows['ID_editores']);
    $hojaActiva->setCellValue('I' . $fila, $rows['Nombre']);
    $hojaActiva->setCellValue('J' . $fila, $rows['Apellidos']);
    $hojaActiva->setCellValue('K' . $fila, $rows['nombre_editorial']);
    $hojaActiva->setCellValue('L' . $fila, $rows['pais']);
    $fila++;
}

// Elementos libros
$hojaActiva->setCellValue('R1', 'Libros');
$hojaActiva->getStyle('R1')->getFont()->setSize(17)->setBold(true);
$columnR = $hojaActiva->getColumnDimension('R');
$columnR->setWidth(20);
$hojaActiva->setCellValue('O2', 'ID_libro');
$hojaActiva->setCellValue('P2', 'Titulo');
$hojaActiva->setCellValue('Q2', 'Tipo');
$hojaActiva->setCellValue('R2', 'ID_autor');
$hojaActiva->setCellValue('S2', 'ID_editor');
$hojaActiva->setCellValue('T2', 'ID_traductor');
$hojaActiva->setCellValue('U2', 'genero');

// Extraccion de info de libros
$fila = 3;
while($rows = $result->fetch_assoc()) {
    $hojaActiva->setCellValue('O' . $fila, $rows['ID_libro']);
    $hojaActiva->setCellValue('P' . $fila, $rows['Titulo']);
    $hojaActiva->setCellValue('Q' . $fila, $rows['Tipo']);
    $hojaActiva->setCellValue('R' . $fila, $rows['ID_autor']);
    $hojaActiva->setCellValue('S' . $fila, $rows['ID_editor']);
    $hojaActiva->setCellValue('T' . $fila, $rows['ID_traductor']);
    $hojaActiva->setCellValue('U' . $fila, $rows['genero']);
    $fila++;
}

// Elementos traductores
$hojaActiva->setCellValue('X1', 'Traductores');
$hojaActiva->getStyle('X1')->getFont()->setSize(17)->setBold(true);
$columnX = $hojaActiva->getColumnDimension('X');
$columnX->setWidth(20);
$hojaActiva->setCellValue('X2', 'ID_traductores');
$hojaActiva->setCellValue('Y2', 'Nombre');
$hojaActiva->setCellValue('Z2', 'Apellidos');
$hojaActiva->setCellValue('AA2', 'idioma_nativo');
$hojaActiva->setCellValue('AB2', 'idiomas_traduccion');
$hojaActiva->setCellValue('AC2', 'certificaciones'); 

// Extraccion de info de traductores
$fila = 3;
while($rows = $result->fetch_assoc()) {
    $hojaActiva->setCellValue('X' . $fila, $rows['ID_traductores']);
    $hojaActiva->setCellValue('Y' . $fila, $rows['Nombre']);
    $hojaActiva->setCellValue('Z' . $fila, $rows['Apellidos']);
    $hojaActiva->setCellValue('AA' . $fila, $rows['idioma_nativo']);
    $hojaActiva->setCellValue('AB' . $fila, $rows['idiomas_traduccion']);
    $hojaActiva->setCellValue('AC' . $fila, $rows['certificaciones']);
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
header('Content-Disposition: attachment;filename="Informe General.xlsx"');
header('Cache-Control: max-age=0');
// Generamos el informe en formato Excel y lo guardamos en el navegador

$writer = IOFactory::createWriter($informe, 'Xlsx');
$writer->save('php://output');
exit;
?>

<?php
/*
// Estilos de celdas
$estiloEncabezado = [
    'font' => [
        'bold' => true,
        'size' => 12,
        'name' => 'Arial',
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER,
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => [
            'argb' => 'FFC00000',
        ],
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => [
                'argb' => 'FF000000',
            ],
        ],
    ],
];


// Función para agregar una tabla al Excel
function addTable($hojaActiva, $pdo, $tableName, $startRow) {
    global $estiloEncabezado;
    
    // Obtener columnas de la tabla
    try {
        $stmt = $pdo->query("DESCRIBE $tableName");
        $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } catch (PDOException $e) {
        echo 'Error al obtener columnas: ' . $e->getMessage();
        exit();
    }

    // Establecer encabezados
    $colIndex = 'A';
    foreach ($columns as $column) {
        $hojaActiva->setCellValue($colIndex . $startRow, $column);
        $hojaActiva->getStyle($colIndex . $startRow)->applyFromArray($estiloEncabezado);
        $hojaActiva->getColumnDimension($colIndex)->setAutoSize(true);
        $colIndex++;
    }

    // Obtener datos de la tabla
    try {
        $stmt = $pdo->query("SELECT * FROM $tableName");
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Error al obtener datos: ' . $e->getMessage();
        exit();
    }

    // Agregar filas de datos
    $currentRow = $startRow + 1;
    foreach ($data as $row) {
        $colIndex = 'A';
        foreach ($columns as $column) {
            $hojaActiva->setCellValue($colIndex . $currentRow, $row[$column]);
            $colIndex++;
        }
        $currentRow++;
    }
    return $currentRow + 1; // Espacio entre tablas
}

// Agregar tablas al Excel
$nextRow = 1;
$tables = ['autores', 'editores', 'libros', 'traductores'];
foreach ($tables as $table) {
    $nextRow = addTable($hojaActiva, $pdo, $table, $nextRow);
}

// Configurar encabezados para el archivo Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
header('Content-Disposition: attachment;filename="database_structure.xlsx"');
header('Cache-Control: max-age=0');

// Generar y enviar el archivo Excel
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
*/
?>