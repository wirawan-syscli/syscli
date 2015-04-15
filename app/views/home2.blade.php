@include("templates.header")

	<div id="slideshow-wrapper">
		<div id="slideshow" class="owl-carousel">
			<div class="slideshow-item"><img src="{{ asset('img/cover.jpg') }}" /></div>
			<div class="slideshow-item"><img src="{{ asset('img/cover.jpg') }}" /></div>
			<div class="slideshow-item"><img src="{{ asset('img/cover.jpg') }}" /></div>
		</div>
	</div>

	<div id="introduction-wrapper">
		<h2>イントロ<br /><small>Introduction</small></h2>
		<div id="introduction-detail">
			<p>システムクリニックでは、これまでに培ってきた技術とノウハウを基に「コンサルティングサービス」と「開発サービス」の二つのサービスを提供しております。 コンサルティングサービスは、ITシステムの構築、新規事業やアイデアの実現などのご要望にあわせて、 調査分析、ソリューションの検討、システムの設計といった上流工程をサポートします。 開発サービスは、C++、Java、C#、Objective-Cなどの言語を用い、Windows、Macintosh、Web、iOSなど各種のプラットフォームで動作するソフトウェアの開発を行います。 コンサルティングサービスと開発サービスによって、システムの上流工程からプログラミングやデバッグなどの実務に至るまで、一貫したサポートをご提供します。</p>
		</div>
	</div>

	<div id="services-wrapper" class="text-center">
		<div id="services-title" class="text-center-left">
			<h2>サービス<br/><small>Services</small></h2>
		</div>
		<div id="services-big-item-wrapper" class="hide">
			<div id="services-big-item">
				<div class="icon consulting"></div>
				<h3>コンサルティング</h3>
				<p>ITで業務を効率化したい、新規事業を興したい、自分のアイデアを実現したい... システムクリニックでは、コンピュータシステムが使われる様々なケースにおけるコンサルティングサービスを提供します。	要求されているビジネスを理解しどのようにコンピュータシステムを利用するか、業務の効率化においては人員とワークフローを含めたトータルシステムの改善、 新規事業やアイデアの実現においてはマーケットの調査やソリューションの組み合わせなど、クライアントのみなさまの立場からの解決方法を提案します。</p>
				<a href="#">View more <i class="fa fa-external-link"></i></a>
			</div>
		</div>
		<div id="services">
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>コンサルティング</h4>
					</div>
					<div class="icon consulting"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>ITで業務を効率化したい、新規事業を興したい、自分のアイデアを実現したい... システムクリニックでは、コンピュータシステムが使われる様々なケースにおけるコンサルティングサービスを提供します。	要求されているビジネスを理解しどのようにコンピュータシステムを利用するか、業務の効率化においては人員とワークフローを含めたトータルシステムの改善、 新規事業やアイデアの実現においてはマーケットの調査やソリューションの組み合わせなど、クライアントのみなさまの立場からの解決方法を提案します。</p>
				</div>
			</div>
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>開発支援</h4>
					</div>
					<div class="icon advice"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>現在行っている開発がどうもうまくいかない、技術的な壁にぶつかっている、新しい技術を導入したいが業界標準とその動向を知りたい... このようなケースに対しては、弊社のノウハウをもとに開発支援や技術アドバイザリをご提供します。 工程管理、開発方法の見直し、共同開発など単なるモジュールやソースコードのご提供だけでなく、弊社が持つ開発ノウハウの移転を含めたお手伝いをさせていただきます。 また弊社の技術アドバイザリを活用することで、新規技術導入におけるリスクを最小限に抑えることができます。</p>
				</div>
			</div>
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>オープンソースソ</h4>
					</div>
					<div class="icon opensource"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>Linuxに代表されるオープンソースソフトウェアはシステムの一部として当たり前に使われる時代になりました。 オープンソースソフトウェアの導入によって一定のレベルに達したソフトウェアを低コストで利用することが可能になった反面、 基本的に手厚いサポートが見込めないオープンソースソフトウェアの利用には、何を、どの部分に、どのように使うかというノウハウや、ライセンスの理解が必要です。 弊社ではこれまでに蓄積したノウハウをもとに、オープンソースソフトウェア導入のお手伝いにとどまらず、オープンソースソフトウェアとXMLなどの汎用的な技術との組み合わせ、 開発工程へのオープンソースソフトウェアの活用などさまざまな側面からのインテグレーションをサポートします。</p>
				</div>
			</div>
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>Webサービス開発</h4>
					</div>
					<div class="icon website"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>Java/J2EE技術を用いたWebアプリケーション、Webサービスの開発を行います。 独自に開発したJ2EEフレームワークをはじめ、オープンソースソフトウェアの活用など多くの開発手法に対応することができます。 また、XML技術、Windows/Macintosh上で動作するリッチクライアントなど、他の技術とのインテグレーションについてもさまざまな提案や開発が可能です。 最近ではC#/.NETを使ったサーバ開発も手がけており、ビジネスの形態や目的によってプラットフォームを選択することができます。</p>
				</div>
			</div>
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>Winアプリケーション</h4>
					</div>
					<div class="icon windows"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>アプリケーション、デバイスドライバ、プリンタドライバ、WindowsサービスなどWindowsプラットフォームで動作するさまざまな形態のソフトウェア開発が可能です。 C++/MFC、C#/.NETなど、ビジネスの形態に応じた開発方法を選択することができ、画像処理や通信処理をはじめとする弊社保有の技術/ライブラリを組み込むことも可能です。 また、Webアプリケーション/Webサービス開発と組み合わせるリッチクライアントの開発も行っております。</p>
				</div>
			</div>
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>Macアプリケーション</h4>
					</div>
					<div class="icon macintosh"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>アプリケーション、プリンタドライバなどMacintoshプラットフォームで動作するさまざまな形態のソフトウェア開発が可能です。 Classic OS(MacOS 8,9)、MacOS Xのいずれかあるいは両者のサポート、画像処理や通信処理をはじめとする弊社保有の技術/ライブラリ組み込む、 Windowsと同じ仕様のソフトウェアの同時開発などさまざまなご要望にお応えできるリソースを保持しています。</p>
				</div>
			</div>
			<div class="services-item">
				<div class="services-top">
					<div class="services-top-left text-left">
						<h4>その他の開発</h4>
					</div>
					<div class="icon"></div>
				</div>
				<div class="services-bottom hide text-left">
					<p>上記に挙げた以外にも、以下のような開発への対応が可能です。 
					<br />・Linux対応アプリケーション開発
	                <br />・マルチプラットフォーム対応Javaアプリケーション開発
					<br />また、今後情報家電などへのアプローチも行っていく予定です。</p>
				</div>
			</div>
		</div>
	</div>

	<div id="client-wrapper">
		<h2>主要取引先<br /><small>Main Customer</small></h2>
		<div id="client-detail" class="owl-carousel">
			<div class="client-item"><img src="{{ asset('img/clients/apple.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/obayashi.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/kubota.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/canon.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/minolta.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/sun.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/epson.png') }}" /></div>
			<div class="client-item"><img src="{{ asset('img/clients/mitsubishi.png') }}" /></div>
		</div>
	</div>

	<div id="contact-wrapper">
		<div id="contact" class="text-center">
			<button><a href="{{ route('contact') }}"><i class="fa fa-envelope"></i> お問い合わせ</a></button>
		</div>
	</div>

@include("templates.footer")