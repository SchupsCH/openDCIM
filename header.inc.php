<?php
$header=(!isset($header))?$config->ParameterArray["OrgName"]:$header;
$subheader=(!isset($subheader))?"":$subheader;
$version=$config->ParameterArray["Version"];

echo '
<div id="header">
	<span id="header1">',$header,'</span>
	<span id="header2">',$subheader,'</span>
	<span id="version">',$_SESSION["userid"],'/',$version,'</span>
</div>
';
?>
