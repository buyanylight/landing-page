<html>
<head>
<meta charset="utf-8">
<title>Callback</title>
<script>
	window.opener.postMessage(
		{ 
			email: "{{ $email }}", 
			fullname: "{{ $fullname }}",
			token: "{{ $token }}", 
		}, 
		"http://almani.ddns.net:1984/login"
	);
	// window.close();
</script>
</head>
<body>
</body>
</html>