<footer>
    <div class=" top-footer container">
        <ul class="d-flex justify-content-between align-items-center">
            @foreach ($icons as $item )
            <li>
                <img src="{{Vite::asset($item['img'])}}" alt="{{$item['text']}}">
                <a href="/">{{$item['text']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</footer>
