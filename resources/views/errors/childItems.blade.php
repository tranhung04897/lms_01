<ul>
    @foreach($menu->childs as $menu)
        <li >
            <a href="{{ route('category.show', $menu->id) }}"> {!! $menu->name !!} </a>
            @include('errors.childItems')
        </li>
    @endforeach
</ul>
