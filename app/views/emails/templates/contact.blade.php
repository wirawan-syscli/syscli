<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<style type="text/css">
		</style>
	</head>
	<body style="font-family: 'Helvetica Neue';">
		<div id="contact-top" style="max-width: 710px; text-align: center; background-color: #FFF; padding: 2em 5%; border-bottom: 3px solid #d3d3d3;">
			<img style="width: 50%;" src="{{ $message->embed(asset('img/system-clinic-logo.png')) }}" />
		</div>
		<div id="contact-bottom" style="max-width: 710px; background-color: #FFF; padding: 2em 5%;">
			<h1 style="margin: 0 0 0.4em 0; padding: 0 0 0 0.3em !important; font-weight: 500; border-left: 4px solid #0E7FFF;">Inbox</h1>
			<p style="margin: 0; padding: 0 !important;">New Message has arrived from <span style="color: #0E7FFF;">syscli.co.jp/contact</span> at <span style="color: #0E7FFF;">{{ date('H:i:s - Y/m/d'); }}</span></p>
			<table style="width: 100%; max-width: 640px; padding: 1em 0; ">
				<tr>
					<th style="width: 40%; text-align: left; background-color: #0E7FFF; color: #FFF; font-weight: 400; padding: 1em 3%;">お名前</th>
					<td style="background-color: #F0F0F0; padding: 1em 3%;">{{ $name }}</td>
				</tr>
				<tr>
					<th style="width: 40%; text-align: left; background-color: #0E7FFF; color: #FFF; font-weight: 400; padding: 1em 3%;">貴方の会社/団体名</th>
					<td style="background-color: #F0F0F0; padding: 1em 3%;">{{ $company }}</td>
				</tr>
				<tr>
					<th style="width: 40%; text-align: left; background-color: #0E7FFF; color: #FFF; font-weight: 400; padding: 1em 3%;">電子メールアドレス</th>
					<td style="background-color: #F0F0F0; padding: 1em 3%;">{{ $email }}</td>
				</tr>
				<tr>
					<th style="width: 40%; text-align: left; background-color: #0E7FFF; color: #FFF; font-weight: 400; padding: 1em 3%;">お電話番号などご連絡先</th>
					<td style="background-color: #F0F0F0; padding: 1em 3%;">{{ $telephone }}</td>
				</tr>
				<tr>
					<th style="width: 40%; text-align: left; background-color: #0E7FFF; color: #FFF; font-weight: 400; padding: 1em 3%;">ご記入欄</th>
					<td style="background-color: #F0F0F0; padding: 1em 3%;">{{ $description }}</td>
				</tr>
			</table>
		</div>
	</body>
</html>