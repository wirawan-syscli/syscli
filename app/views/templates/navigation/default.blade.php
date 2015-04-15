<div id="header-wrapper">
	<div id="header">
		<a href="{{ route('home') }}"><div id="header-logo"></div></a>
		<div id="header-bar"></div>
		<div id="header-login"></div>
	</div>
	<ul id="header-navigation">
		<li><a href="#">Introduction</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Client</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
	<!-- <ul id="header-navigation">
		<li><a href="#">イントロ<small class="show-for-medium-up">Introduction</small></a></li>
		<li><a href="#">サービス<small class="show-for-medium-up">Services</small></a></li>
		<li><a href="#">主要取引先<small class="show-for-medium-up">Client</small></a></li>
		<li><a href="#">お問い合わせ<small class="show-for-medium-up">Contact</small></a></li>
	</ul> -->
	<ul id="header-login-bar">
		<form>
			<input type="text" id="username" name="username" placeholder="ユーザーID" />
			<input type="password" id="password" name="password" placeholder="パスワード" />
			<input type="submit" id="login" value="ログイン" />
		</form>
	</ul>
</div>