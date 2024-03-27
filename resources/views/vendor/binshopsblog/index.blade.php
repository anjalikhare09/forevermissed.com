@extends('layout.master')

@section('title', 'Blogs')
<style>
    .full{
        height: auto !important;
    }
</style>
@section('content')
                @if($category_chain)
                                @forelse($category_chain as $cat)
                                    / <a href="{{$cat->categoryTranslations[0]->url($locale)}}">
                                        <span class="cat1">{{$cat->categoryTranslations[0]['category_name']}}</span>
                                    </a>
                                @empty @endforelse
                @endif

                @if(isset($binshopsblog_category) && $binshopsblog_category)
                    <h2 class='text-center'> {{$binshopsblog_category->category_name}}</h2>

                    @if($binshopsblog_category->category_description)
                        <p class='text-center'>{{$binshopsblog_category->category_description}}</p>
                    @endif

                @endif


                        @forelse($posts as $post)
                            @include("binshopsblog::partials.index_loop")
                        @empty
                            <div class="col-md-12">
                                <div class='alert alert-danger'>No posts!</div>
                            </div>
                        @endforelse
                <h6>Blog Categories</h6>
                <ul class="binshops-cat-hierarchy">
                    @if($categories)
                        @include("binshopsblog::partials._category_partial", [
    'category_tree' => $categories,
    'name_chain' => $nameChain = "",
    'routeWithoutLocale' => $routeWithoutLocale
    ])
                    @else
                        <span>No Categories</span>
                    @endif
                </ul>

        @if (config('binshopsblog.search.search_enabled') )
            @include('binshopsblog::sitewide.search_form')
        @endif
                @foreach($lang_list as $lang)
                    <a href="{{route("binshopsblog.index" , $lang->locale)}}">
                        <span>{{$lang->name}}</span>
                    </a>
                @endforeach

@endsection
