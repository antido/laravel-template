<nav aria-label="breadcrumb" class="px-5">
    <ol class="breadcrumb">
        @if($page)
            @if($hasPage == "1")
                <li class="breadcrumb-item"><a href="{{ route($pagePath) }}">{{ $page }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
            @endif
        @endif

        @if($mainRoute)
            @if($hasMainRoute == "1")
                <li class="breadcrumb-item"><a href="{{ route($mainPath) }}">{{ $mainRoute }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $mainRoute }}</li>
            @endif
        @endif

        @if($subRoute)
            @if($hasSubRoute == "1")
                <li class="breadcrumb-item"><a href="{{ route($subPath) }}">{{ $subRoute }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $subRoute }}</li>
            @endif
        @endif
    </ol>
</nav>