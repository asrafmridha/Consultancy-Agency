
@foreach ($data as $item)
    <a href="{{ route($item->route) }}" class="nav-link ">{{ $item->name }}</a>
@endforeach