$s3Client = new Aws\S3\S3Client ([
			'region' => 'ap-southeast-1',
			'version' => 'latest',]);
try {
	$s3Client->putObject ([
	'Bucket' 		=> getenv ("S#_BUCKET"),
	'Key'			=> 'upload/'.$nama,
	'SourceFile'	=> $file_path,
	'ContentType'	=> 'text/plain',
	'ACL'			=> 'authenticated-read',]);
}
catch (S3Exception $e) {
	echo $e->getMessage() . "\n";
}

