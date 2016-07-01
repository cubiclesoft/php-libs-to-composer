<?php
	// This runs the main updater.  Requires PHP and git on the path and repo commit access.  That last part you, of course, don't have.
	// (C) 2016 CubicleSoft.  All Rights Reserved.

	if (!isset($_SERVER["argc"]) || !$_SERVER["argc"])
	{
		echo "This file is intended to be run from the command-line.";

		exit();
	}

	$rootpath = str_replace("\\", "/", dirname(__FILE__));

	require_once $rootpath . "/functions.php";

	$srcpath = $rootpath . "/repos";
	$destpath = $rootpath . "/src";

	if (!is_dir($srcpath))  mkdir($srcpath);
	if (!is_dir($destpath))  mkdir($destpath);

	// Update the registered repo list.  If nothing has changed, exit.
	$numchanged = (int)GitRepoChanged($rootpath) + GitPull($srcpath);
	if (!$numchanged)  exit();

	// Always do a full rebuild.
	DeleteDirectory($destpath);

	// Retrieve a list of all PHP files that contain 'class' + a name.
	$files = array();
	GetPHPFiles($files, $srcpath);

	// Generate final file set.
	foreach ($files as $name => $filename)
	{
		$data = file_get_contents($filename);

		// Remove standard inclusion lines so that the autoloader does its thing.
		$lines = explode("\n", $data);
		foreach ($lines as $num => $line)
		{
			$line = trim($line);

			if (substr($line, 0, 18) === "if (!class_exists(")  $lines[$num] = "";
		}
		$data = implode("\n", $lines);

		unset($files[$name]);
		$name = str_replace("\\CubicleSoft\\", "", $name);
		$files[$name] = "/" . $name . ".php";

		file_put_contents($destpath . "/" . $name . ".php", $data);
	}

	// Generate README.
	copy($srcpath . "/php-libs-namespaced/readme_src/classes.json", $rootpath . "/readme_src/classes.json");
	GenerateReadme($rootpath . "/readme_src/classes.json", $rootpath . "/readme_src/README.md", $rootpath . "/README.md", "\\\\CubicleSoft\\\\", $files, "src/", $srcpath);

	CommitRepo($rootpath);
?>