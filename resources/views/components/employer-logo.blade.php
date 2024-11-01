
@props(['employer','width'])
<img src="https://picsum.photos/seed/{{ rand(0,100) }}/{{ $width }}" alt="" class="rounded-xl"/>
{{-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"/> --}}
