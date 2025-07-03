@props(['href', 'active' = false, 'mobile' => false])

@php
  $classes = $mobile ? 'block px-3 py-2 rounded-md text-base font-medium' : 'px-3 py-2 rounded-md text-sm font-medium';
  
  $active .= $active ? ' bg-blue-500 text-white' : ' text-gray-700 hover:bg-gray-100 hover:text-blue-500'
@endphp
<a href="{{ $href }}" {{ $attributes->marge(['class' => $classes ]) }}>{{ $slot }}</a>