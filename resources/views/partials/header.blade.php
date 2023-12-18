<header class="container">
    <div class="d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        <nav>
            <ul class="pt-3">
                @foreach ($navbar as $item)
                <li><a href="/">{{$item}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
<div id="jumbotron"></div>
