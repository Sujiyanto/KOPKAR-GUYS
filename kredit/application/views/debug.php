<?php

print "<pre>";
foreach ($supplier->result() as $row) {
	print_r($row);
}
?>