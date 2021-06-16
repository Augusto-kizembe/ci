<?php
defined('BASEPATH') or exit('No direct script allowed');
// reference the Dompdf namespace
use Dompdf\Dompdf;
class PdfController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function teste()
    {
        // instantiate and use the dompdf class
        $teste = "testando";
        $html = "<h1>$teste</h1>";
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}