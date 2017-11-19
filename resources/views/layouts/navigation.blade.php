<div id = "navbar" class = "collapse navbar-collapse">
    <ul class = "nav navbar-nav">
        @foreach($categories as $category)
            <li class = "active"><a href = "{{route('product_by_cat', ['id'=> $category->id])}}">{{$category->nom}}</a></li>
        @endforeach
        <li role = "separator" class = "divider"></li>
        <li><a href = "{{route('panier')}}">Panier <span
                        class = "label label-info">{{$total_articles_panier}}</span></a>
        </li>
        @if(\Illuminate\Support\Facades\Auth::user() === null)
            <li><a href = "{{route('home')}}">Se Log</a></li>
        @else
            <li><a href = "{{route('home')}}">Panneau utilisaeur</a></li>
            @endif
                @if(\Illuminate\Support\Facades\Auth::user() === null)
                @elseif((\Illuminate\Support\Facades\Auth::user()->is_admin))
                    <li><a href = "{{route('backend_homepage')}}">Backend</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user() !== null)
                <li><a href = "{{ route('logout') }}"
                   onclick = "event.preventDefault();
                document.getElementById('logout-form').submit();"> Logout
                    </a>
                    <form id = "logout-form" action = "{{ route('logout') }}" method = "POST" style = "display: none;">
                                            {{ csrf_field() }}
                    </form>
                </li>
        @endif
    </ul>
</div><!--/.nav-collapse -->

