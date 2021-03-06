<!doctype html>
<html lang="en">

<head>
	<title>IPv4 Variable-Length Subnet Masking (VLSM) Calculator | Adityacprtm</title>
	<meta name="title" content="IPv4 Variable-Length Subnet Masking (VLSM) Calculator | Adityacprtm">
	<meta name="description"
		content="IPv4 Variable Length Subnet Masking (VLSM) Calculator is one of the tools from Adityacprtm.com.">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1 days">
	<meta name="author" content="Aditya">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

	<meta property="og:type" content="website">
	<meta property="og:url" content="https://adityacprtm.com/vlsm-calc/">
	<meta property="og:title" content="IPv4 Variable-Length Subnet Masking (VLSM) Calculator | Adityacprtm">
	<meta property="og:description"
		content="IPv4 Variable Length Subnet Masking (VLSM) Calculator is one of the tools from Adityacprtm.com.">
	<meta property="og:image" content="{{ asset('assets/main/images/social.png') }}">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://adityacprtm.com/vlsm-calc/">
	<meta property="twitter:title" content="IPv4 Variable-Length Subnet Masking (VLSM) Calculator | Adityacprtm">
	<meta property="twitter:description"
		content="IPv4 Variable Length Subnet Masking (VLSM) Calculator is one of the tools from Adityacprtm.com.">
	<meta property="twitter:image" content="{{ asset('assets/main/images/social.png') }}">

	<link rel="shortcut icon" href="{{ url('/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ url('/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ url('/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ url('/safari-pinned-tab.svg') }}" color="#1e73be">
	<meta name="msapplication-TileColor" content="#1e73be">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vlsm/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vlsm/css/style.css') }}">
</head>

<body>
	<div id="header-holder" class="inner-header domainspage-header">
		<div id="page-head" class="container-fluid inner-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="page-title">
							<h1 class="h1-sm">IPv4 Variable-Length Subnet Masking (VLSM) Calculator</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="domain-search-holder">
							<div class="input-holder">
								<input id="input_network" type="text" value="192.168.1.1/24" placeholder="Major Network" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="spacer2">
	</div>
	<div id="message1" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-md-12">
						<div class="row-title">Subnets breakout</div>
						<div class="row-subtitle"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p class="p-center">Subnet Name</p>
					</div>
					<div class="col-md-6">
						<p class="p-center">Needed Hosts per Subnet</p>
					</div>
				</div>
				<div class="col-sm-12">
					<p id='subnet_pargraph'>
						<input type='text' class="form-control-ipv4-vlsm" id='name1' value='Subnet 1'>
						<input type='text' class="form-control-ipv4-vlsm" id='hosts1' placeholder=' ' tabindex='1'><br>
						<input type='text' class="form-control-ipv4-vlsm" id='name2' value='Subnet 2'>
						<input type='text' class="form-control-ipv4-vlsm" id='hosts2' placeholder=' ' tabindex='2'><br>
						<input type='text' class="form-control-ipv4-vlsm" id='name3' value='Subnet 3'>
						<input type='text' class="form-control-ipv4-vlsm" id='hosts3' placeholder=' ' tabindex='3'><br>
						<input type='text' class="form-control-ipv4-vlsm" id='name4' value='Subnet 4'>
						<input type='text' class="form-control-ipv4-vlsm" id='hosts4' placeholder=' ' tabindex='4'><br>
				</div>
			</div>
		</div>
	</div>
	<div id="message1" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="p-center">Change number of subnets</p>
				</div>
				<div class="col-md-12">
					<input type="text" class="form-control-ipv4-vlsm-lg" id='input_num_of_subnets' value='4' min='2'
						max='999' maxlength="3">
				</div>
				<div class="col-md-12">
					<button class="ybtn ybtn-white-2-lg ybtn-shadow"
						onClick="if (!window.__cfRLUnblockHandlers) return false; change_subnet_number();"
						data-cf-modified-21e0c22756c222b79fc9a7e0-="">Change Subnets</button><span id='nets'
						style="display:none;">4</span>
					<button class="ybtn ybtn-accent-color-lg ybtn-shadow"
						onClick="if (!window.__cfRLUnblockHandlers) return false; vlsm();"
						data-cf-modified-21e0c22756c222b79fc9a7e0-="">Calculate</button>
				</div>
			</div>
		</div>
	</div>
	<div id="message1" class="container-fluid">
		<div class="container">
			<div class="row">
				<p id='not_valid_ip'>
					<p id='ans'>
			</div>
		</div>
	</div>
	</div>
	<div class="spacer"></div>
	<div id="message1" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/vlsm/js/jquery.min.js') }}" type="21e0c22756c222b79fc9a7e0-text/javascript"></script>
	<script src="{{ asset('assets/vlsm/js/bootstrap.min.js') }}" type="21e0c22756c222b79fc9a7e0-text/javascript">
	</script>
	<script src="{{ asset('assets/vlsm/js/vlsm.js') }}" type="21e0c22756c222b79fc9a7e0-text/javascript"></script>
	<script src="{{ asset('assets/vlsm/js/rocket-loader.min.js') }}" data-cf-settings="21e0c22756c222b79fc9a7e0-|49"
		defer=""></script>
</body>

</html>