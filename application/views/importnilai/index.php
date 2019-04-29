<div class = "row">
	<div class = "col-lg-12">
		<h1>Nilai <small>Overview</small></h1>
		<ol class = "breadcrumb">
			<li class = "active"><i class = "fa fa-list"></i> Import Nilai </li>
		</ol>
	</div>
</div>


<?php

$output = '' ;
// $output .= form_open_multipart('import/save') ;
$output .= '<div class = "row">' ;
$output .= '<div class = "col-lg-12 col-sm-12"><div class = "form-group">' ;
$output .= form_label('Import Nilai') ;
$data = array (
	 'name' => 'userfile' ,
	 'id' => 'userfile' ,
	 'class' => 'form-control lifestyle' ,
	 'value' => '' ,
	 'data-icon' => 'false'
) ;
$output .= form_upload($data) ;
$output .= '</div> <span style ="color:red;"> *Please choose an Excel file(.xls or .xlxs) as Input </span></div>' ;
$output .= '<div class ="col-lg-12 col-sm-12"><div class="form-group text-right">' ;
$data = array(
	'name' => 'importfile' ,
	'id' => 'importfile-id' ,
	'class' => 'btn btn-primary' ,
	'value' => 'Import'
) ;
$output .= form_submit($data , 'Import Data Nilai') ;
$output .= '</div>
						</div></div>' ;
$output .= form_close() ;
echo $output ;

?>
