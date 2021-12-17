<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\mcabang\CabangModel;
use App\Models\munit\UnitModel;
use TCPDF;
use Fpdf\Fpdf;
//use Fpdf\Fpdf_html;

class Pdf extends BaseController
{
    public function index()
    {
        $html = "<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		
		<h2>HTML Table</h2>
		
		<table style='font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;'>
		  <tr>
			<th>Company</th>
			<th>Contact</th>
			<th>Country</th>
		  </tr>
		  <tr>
			<td>Alfreds Futterkiste</td>
			<td>Maria Anders</td>
			<td>Germany</td>
		  </tr>
		  <tr>
			<td>Centro comercial Moctezuma</td>
			<td>Francisco Chang</td>
			<td>Mexico</td>
		  </tr>
		  <tr>
			<td>Ernst Handel</td>
			<td>Roland Mendel</td>
			<td>Austria</td>
		  </tr>
		  <tr>
			<td>Island Trading</td>
			<td>Helen Bennett</td>
			<td>UK</td>
		  </tr>
		  <tr>
			<td>Laughing Bacchus Winecellars</td>
			<td>Yoshi Tannamuri</td>
			<td>Canada</td>
		  </tr>
		  <tr>
			<td>Magazzini Alimentari Riuniti</td>
			<td>Giovanni Rovelli</td>
			<td>Italy</td>
		  </tr>
		</table>
		
		</body>
		</html>
		
		";

		$pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Dea Venditama');
		$pdf->SetTitle('Invoice');
		$pdf->SetSubject('Invoice');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('invoice.pdf', 'I');
    }

    public function fpdf2()
    {
		return view('vitest');
    }
	  

}
