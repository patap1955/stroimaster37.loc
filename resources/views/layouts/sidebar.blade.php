<ul>
    @foreach($services as $service)
        <li>
            <a href="{{ route('service.show', ['service' => $service->slug]) }}">{{ $service->title }}</a>
        </li>
    @endforeach
</ul>
