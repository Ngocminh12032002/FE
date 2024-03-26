<ul>
    @foreach ($subUnit as $sub)
        <li data-id="{{ $sub->id }}">
            @if ($previous != null)
                [{{ $previous . '.' . $sub->order ?? '' }}]
            @else
                [{{ $sub->order ?? '' }}]
            @endif
            <a href="{{ route('location.show', ['id' => $sub->id]) }}" class="title-child"
                id="{{ $sub->id }}">{{ $sub->name }}</a>
            @if (count($sub->sub_unit) > 0)
                @if ($previous != null)
                    @include('template.sidebar.sidebarCoCauToChuc.childLocation', [
                        'subUnit' => $sub->sub_unit,
                        'previous' => $previous . '.' . $sub->order,
                    ])
                @else
                    @include('template.sidebar.sidebarCoCauToChuc.childLocation', [
                        'subUnit' => $sub->sub_unit,
                        'previous' => $sub->order,
                    ])
                @endif
            @endif
        </li>
    @endforeach
</ul>
