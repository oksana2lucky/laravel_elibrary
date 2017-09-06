<?php
use App\Category;
$categories = App\Category::all();
?>
<h1>Categories</h1>
<ul>
    @foreach ($categories as $category)
        <li><a href="subpage.html">{{ $category->title }}</a></li>
    @endforeach
</ul>