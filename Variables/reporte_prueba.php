
<?php
require('../Librerias/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../Imagenes/IconWeb.jpg',10,8,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

     $this -> Cell (60,10,'Nombre', 1, 0, 'C', 0);
   $this -> Cell (30,10,'Valor', 1, 0, 'C', 0);
    $this -> Cell (30,10,'Codigo', 1, 0, 'C', 0);
     $this -> Cell (30,10,'Fecha', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require('../Variables/Conexion.php');

 $query11 = "SELECT * FROM tb_productos";
    $res11 = $conexion->query($query11);
 

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $res11->fetch_assoc()){
  $pdf -> Cell (60,10,$row['nombre'], 1, 0, 'C', 0);
   $pdf -> Cell (30,10,$row['valor'], 1, 0, 'C', 0);
    $pdf -> Cell (30,10,$row['codigo'], 1, 0, 'C', 0);
     $pdf -> Cell (30,10,$row['fecha'], 1, 1, 'C', 0);
      
     
}

$pdf->Output();
?>
