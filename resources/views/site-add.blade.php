<x-main-layout>
	<x-slot name="title">Добавить сайт</x-slot>
	<x-slot name="description">Добавить сайт на блог Михаила Русакова.</x-slot>
	<x-slot name="keywords">добавить сайт, добавить сайт блог, добавить сайт блог михаил русаков</x-slot>
	<x-slot name="left">
		<div id="other" style="height: 1257.36px;">
            <h1>Заполните форму</h1>

			@if($errors->any())
				@foreach ($errors->all() as $message)
					<p class="message">{{ $message }}</p>
				@endforeach
			@elseif ($success_add)
				<p class="message">Сайт успешно добавлен и отправлен на проверку</p>
			@endif

            <p>Обратите внимание, что на добавляемой страницей должно быть упоминание обо мне. Например, "Спасибо Михаилу Русакову!", либо должна быть ссылка на любой из моих сайтов (например, на <b>myrusakov.ru</b>).</p>
            <form name="add_site" method="post" action="{{ url()->current() }}">
				@csrf
				<div>
                    <input type="text" name="address" placeholder="Адрес сайта" value="{{ old('address') }}">
                </div>
                <div>
                    <textarea name="description" placeholder="Описание">{{ old('description') }}</textarea>
                </div>
				{!! NoCaptcha::display() !!}
				@if ($errors->has('g-recaptcha-response'))
					<span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
				@endif
                <div>
                    <input type="submit" name="add_site" value="Добавить сайт">
                </div>
            </form>
			{!! NoCaptcha::renderJs() !!}
        </div>
	</x-slot>

</x-main-layout>