<?php

if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) && substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == 'fr')
	$startpage = 'fr/';
else
	$startpage = 'en/';

header('Location: '. $startpage);
