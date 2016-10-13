<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

use Carbon\Carbon;

class PdfController extends Controller
{
    public function generate(){

    	$list 			=	array(
    		array(
    			'dateTransaction'		=>	'01/01/01',
    			'strItemName'			=>	'Wax',
    			'deciPrice'				=>	200,
    			'intQuantity'			=>	3
    			),
    		array(
    			'dateTransaction'		=>	'01/01/01',
    			'strItemName'			=>	'Wax',
    			'deciPrice'				=>	200,
    			'intQuantity'			=>	3
    			),
    		array(
    			'dateTransaction'		=>	'01/01/01',
    			'strItemName'			=>	'Wax',
    			'deciPrice'				=>	200,
    			'intQuantity'			=>	3
    			),
    		array(
    			'dateTransaction'		=>	'01/01/01',
    			'strItemName'			=>	'Wax',
    			'deciPrice'				=>	200,
    			'intQuantity'			=>	3
    			),
    		array(
    			'dateTransaction'		=>	'01/01/01',
    			'strItemName'			=>	'Wax',
    			'deciPrice'				=>	200,
    			'intQuantity'			=>	3
    			)
    		);

    	$pdf = App::make('snappy.pdf.wrapper');
		$pdf->loadView('pdf.report', array(
			'list'			=>	$list,
			'dateFrom'		=>	Carbon::today(),
			'dateTo'		=>	Carbon::today()
			));
		
		return $pdf->inline();

    }//end function
}
