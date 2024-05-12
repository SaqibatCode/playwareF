@props(['category', 'level' => 0])

@php
    $indentation = str_repeat('-', $level);
@endphp


<tr style='vertical-align: middle;'>

    <td> <img src='{{ $category->image  ? asset('category') . '/' . $category->image : asset('assets/images/media/default.webp') }}' style='width: 50px; height: 50px; object-fit: cover;' /></td>
    <td style='vertical-align: middle;' ><a href="#">{{ $indentation }} {{ $category->name }}</a></td>
    <td style='vertical-align: middle;'>{{ $category->description }}</td>
    <td style='vertical-align: middle;'><a href="{{'/' . $category->slug}}">{{ $category->slug }}</a></td>
    <td style="vertical-align: middle;"><form action="#">
    <button class="btn btn-danger">Delete</button>    
    </form></td>
</tr>
<ul>
    @if ($category->children)
        @foreach ($category->children as $child)
       
            <x-adminCategoryItem :category="$child" :level="$level + 1" />
        @endforeach
    @endif
</ul>
