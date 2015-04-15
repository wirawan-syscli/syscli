@include("templates.header")

	<div class="row-type-1">
		<div class="section-3 hide">
			<h2>Menu</h2>
			<ul>
				<li>Home</li>
				<li>Services</li>
				<li>Archived Projects</li>
				<li>Open Sources</li>
			</ul>
		</div>
		<div class="section-7">
			<h2>Contact</h2>
			<p>製品、開発案件、保有技術など当社に関するお問い合わせは、 contact@syscli.co.jpまで電子メールにてご連絡いただくか、 あるいは以下の送信フォームをご利用ください。</p>
			<ul class="list list-blue">
				<li>土日・祝日を挟んだ場合およびお問い合わせの内容によっては、 ご回答までに日数がかかる場合がございます。あらかじめご了承ください。</li>
				<li>お問い合わせを通じてお知らせいただきました情報については当社で責任をもって管理し、 お問い合わせへのご回答以外の目的には使用いたしません。</li>
			</ul>
			{{ Form::open(array('route' => 'contact-send')) }}
				<div class="large-12">
  					<label>お名前 <span class="red">*</span>
  						{{ Form::text('name') }}
  					</label>
  					@if($errors->has('name')) <small class="error">{{ $errors->first('name') }}</small> @endif
				</div>

				<div class="large-12">
  					<label>貴方の会社/団体名	
  						{{ Form::text('company') }}
  					</label>
				</div>

				<div class="large-12">
  					<label>電子メールアドレス <span class="red">*</span>
  						{{ Form::text('email') }}
  					</label>
  					@if($errors->has('email')) <small class="error">{{ $errors->first('email') }}</small> @endif
				</div>

				<div class="large-12">
  					<label>お電話番号などご連絡先
  						{{ Form::text('telephone') }}
  					</label>
				</div>

				<div class="large-12">
  					<label>ご記入欄 <span class="red">*</span>
  						{{ Form::text('message') }}
  					</label>
  					@if($errors->has('message')) <small class="error">{{ $errors->first('message') }}</small> @endif
				</div>

  				<input type="submit" class="button form" />
			{{ Form::close() }}
		</div>
	</div>

@include("templates.footer")