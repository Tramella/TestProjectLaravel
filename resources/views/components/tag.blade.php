@props(['tag', 'size'=>'base'])

@php
    $classes = "font-semibold bg-white/10 hover:bg-white/25 rounded-xl transition-colors duration-300";

    if($size === 'base'){
        $classes.= " px-5 py-1 text-sm";
    }

    if($size === 'small'){
        $classes.= " px-2 py-1 text-2xs";
    }

@endphp




<a href="/tag/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
