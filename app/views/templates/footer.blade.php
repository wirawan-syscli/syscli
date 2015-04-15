	<div id="copyright-wrapper" class="text-center">
		<div id="copyright-logo-wrapper">
			<img id="copyright-logo" src="{{ asset('img/system-clinic-logo2.png') }}" />
		</div>
		<div id="copyright-top">
			<div id="copyright-info">
				<table>
					<tr>
						<td>本社</td>
						<td>〒658-0046 兵庫県神戸市東灘区御影本町8丁目11-2</td>
					</tr>
					<tr>
						<td>開発室</td>
						<td>〒650-0025 兵庫県神戸市中央区相生町1-1-15カーサ・ルーチェビル2F/3F</td>
					</tr>
					<tr>
						<td>電話</td>
						<td>078-366-6117</td>
					</tr>
					<tr>
						<td>ファクス</td>
						<td>078-366-6118</td>
					</tr>
					<tr>
						<td>交通機関</td>
						<td>
							<ul>
								<li>ＪＲ神戸線神戸駅（新快速停車）下車 徒歩約5分</li>
								<li>神戸高速鉄道 高速神戸駅下車 徒歩約5分</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			<div id="location-wrapper">
				<div id="location"></div>
			</div>
		</div>
		<div id="copyright-bottom" class="text-center">
			<p>Copyright &copy; 2015 System Clinic Inc. All right reserved.</p>
		</div>
		<div class="text-left-center-right"></div>
	</div>

	<!-- Javascript -->
	{{ HTML::script("js/vendor/jquery.js") }}
	{{ HTML::script("js/vendor/owl.carousel2.min.js") }}
	{{ HTML::script("js/app.js") }}
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2w819SxK1myz6aj8amJv_z2HdQi35D9w"></script>
	{{ HTML::script("js/map.js") }}
	

</body>
</html>