<?php
require_once 'basics.php';

if (!isset($_SESSION['userdata']['id'])) {
	exit;
}
$user_id=(int)$_SESSION['userdata']['id'];
header('Content-Type: text/json; charset=utf8');

$iid=(int)$_REQUEST['iid'];
$amt=(float)$_REQUEST['amt'];

$inv=dbRow('select customer_id from invoices where id='.$iid.' and user_id='.$user_id);
if (!$inv) {
	die(json_encode(array('error'=>'invoice does not exist, or is not yours')));
}

$sql1='insert into payments set invoice_id='.$iid.', cdate=now()'
	.', amt='.$amt.', user_id='.$user_id
	.', meta="{}"';
dbQuery($sql1);
dbQuery(
	'update invoices set paid=paid+'.$amt.' where id='.$iid
);
dbQuery(
	'update customers set paid=paid+'.$amt.' where id='.$inv['customer_id']
);
$owed=dbOne('select (total-paid) as owed from invoices where id='.$iid, 'owed');

echo json_encode(
	array(
		'ok'=>1,
		'owed'=>$owed
	)
);
