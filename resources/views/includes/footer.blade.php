
<center>
	<div class="footer">This footer will always be positioned at the bottom of the page, but <strong>not fixed</strong>.
	<br>
		@if (App::getLocale() == 'th')
		<a href="{{ route('lang.switch', 'th') }}"><img src="{{ asset('images/th_lang.png') }}" width="30" height="30"></a>
		<a href="{{ route('lang.switch', 'en') }}"><img src="{{ asset('images/en_lang_deactive.png') }}" width="30" height="30"></a>
		@elseif (App::getLocale() == 'en')
		<a href="{{ route('lang.switch', 'th') }}"><img src="{{ asset('images/th_lang_deactive.png') }}" width="30" height="30"></a>
		<a href="{{ route('lang.switch', 'en') }}"><img src="{{ asset('images/en_lang.png') }}" width="30" height="30"> </a>
		@endif
	</div>
</center>
