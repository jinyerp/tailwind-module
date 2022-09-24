@php
if(isset($attributes['href'])) {
    $href = $attributes['href'] ?? 'javascript:void(0)';
    unset($attributes['href']);
} else {
    $href = 'javascript:void(0)';
}

// active 배경 클래스 추가
if(isset($attributes['active'])) {
    if(isset($attributes['class'])) {
        $attributes['class'] []= "bg-indigo-50";
    } else {
        $attributes['class'] = ["bg-indigo-50"];
    }

    $text_class = "text-sm font-medium text-indigo-500";
} else {
    $text_class = "text-sm font-medium text-slate-700";
}

@endphp

<li class="mr-px text-left md:mr-0 md:mb-px" style="list-style: outside none none;">
    <a {{ $attributes->merge(['class' => 'flex items-center p-2 whitespace-nowrap rounded cursor-pointer']) }}
        href="{{$href}}" style="list-style: outside none none;">
        {{-- 아이콘 출력--}}
        @if(isset($icon))
        {{$icon}}
        @endif

        <span class="{{$text_class}}"
            style="line-height: 1.5715; list-style: outside none none;">
            {{$slot}}
        </span>
    </a>
</li>
