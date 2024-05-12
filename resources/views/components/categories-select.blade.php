@props(['category', 'level' => 0])

@php
    $indentation = str_repeat('-', $level);
@endphp

<option value="{{$category->id}}">{{  $indentation . ' ' . $category->name }}</option>

@if ($category->children)
    @foreach ($category->children as $child)
        <x-categories-select :category="$child" :level="$level + 1" />
    @endforeach
@endif
