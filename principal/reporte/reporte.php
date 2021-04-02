<?php
include("../../conexiones/abrir.php");
?>

<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../fpdf/img/icono.PNG', 10, 8, 33);
        // Salto de línea
        $this->Ln(20);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, 10, utf8_decode('Reporte de Ventas'), 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);
        $this->Cell(47, 10, utf8_decode('Nombre'), 1, 0, 'C', 0);
        $this->Cell(47, 10, utf8_decode('Cantidad'), 1, 0, 'C', 0);
        $this->Cell(47, 10, utf8_decode('Precio Producto'), 1, 0, 'C', 0);
        $this->Cell(47, 10, utf8_decode('Categoria'), 1, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Pagina ') . $this->PageNo() . '  Atlaz', 0, 0, 'C');
    }
}
$_fechaini = $_POST['fechaini'];
$_fechafinal = $_POST['fechafin'];
require("../../conexiones/SelectModVentas.php");
$resultado = $registros;

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 16);

while ($row = mysqli_fetch_array($resultado)) {
    $pdf->Cell(47, 10, utf8_decode($row['nomProd']), 1, 0, 'C', 0);
    $pdf->Cell(47, 10, utf8_decode($row['cantidad']), 1, 0, 'C', 0);
    $pdf->Cell(47, 10, utf8_decode($row['precioVenta']), 1, 0, 'C', 0);
    $pdf->Cell(47, 10, utf8_decode($row['categoria']), 1, 1, 'C', 0);
}
require("../../conexiones/SelectModVentas.php");
$registros3 = $registros;
while ($suma = mysqli_fetch_array($registros3)) {
    $recventa = $recventa + $suma['precioVenta'];
}
$pdf->Cell(330, 10, utf8_decode('Total'), 0, 1, 'C', 0);
$pdf->Cell(330, 10, $recventa, 0, 1, 'C', 0);
$pdf->Output();

?>
