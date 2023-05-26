<x-mail::message>


<p>
    {{ $name }} buat janji tanggal {{$date }} di {{$department}}
</p>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
