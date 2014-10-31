<?php

require "vendor/autoload.php";

var_dump(
	(new \Kanti\HubUpdater("kanti/test"))
		->update()
);