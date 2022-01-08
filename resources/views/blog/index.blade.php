@extends('layouts.blog')
@section('content')
    <section class="breadcrumbs abt-bread softabt-bread">
        <div class="container">
            <ol>
                <li>{{ $Banners['metatitle'] }}</li>
            </ol>
            <h1>{{ $Banners['title'] }}</h1>
        </div>
    </section>

    <div class="container entry-content mb-5 mt-5 first-section">
        <div id="content" class="blog-page-list">
            <div class="sh-group blog-list blog-style-masonry masonry2" style="opacity: 1;">
                <article id="post-4271"
                    class="new-artical post-item post-4271 post type-post status-publish format-standard has-post-thumbnail hentry category-travel category-uncategorized tag-boat tag-dogs tag-team tag-travel tag-watchers">
                    <div class="post-container">
                        <span class="sh-popover-mini sh- fadeIn animated"
                            style="visibility: visible; animation-name: fadeIn;">New</span>
                        <div class="post-meta-thumb">
                            <img src="{{ asset('/') . $featuredPost->image }}"
                                class="attachment-large size-large wp-post-image" alt=""
                                sizes="(max-width: 1024px) 100vw, 1024px">
                            <div class="sh-overlay-style1">
                                <div class="sh-table-full">
                                    <a href="#" class="sh-overlay-item sh-table-cell"
                                        title="Open the article - The team watchers">
                                        <div class="sh-overlay-item-container">
                                            <i class="fa fa-chain"></i>
                                        </div>
                                    </a>
                                    <a href="{{ asset('/') . $featuredPost->image }}"
                                        class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                        <div class="sh-overlay-item-container">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="post-content-container">
                            <div class="post-meta post-meta-one">
                                <time class="updated semantic" itemprop="dateModified"
                                    datetime="2016-04-17T12:49:25+00:00"></time>
                                <a href="#" class="post-meta-date sh-default-color">{!! date('M-d-y', strtotime($featuredPost->created_at)) !!}</a>
                            </div>

                            <a href="{{ route('single_post', $featuredPost->id, $featuredPost->slug) }}"
                                class="post-title">
                                <h2 itemprop="headline">{{ $featuredPost->title }}</h2>
                            </a>

                            <div class="post-content" itemprop="text">
                                {{ substr(strip_tags($featuredPost->content), 0, 250) }}{{ strlen(strip_tags($featuredPost->content)) > 250 ? '...' : '' }}
                            </div>

                            <div class="post-meta post-meta-two">
                                <div class="sh-columns post-meta-comments">
                                    <span class="post-meta-categories"><i class="icon-tag"></i>
                                        <a href="#"></a><a href="#">{{ $featuredPost->category_name }}</a>
                                    </span>
                                    <meta itemprop="interactionCount" content="UserComments:0">
                                    <a href="#" class="post-meta-comments"><i class="fa fa-comment-o"></i> 0</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                @foreach ($Posts as $post)
                    <article id="post-4271"
                        class="post-item post-4271 post type-post status-publish format-standard has-post-thumbnail hentry category-travel category-uncategorized tag-boat tag-dogs tag-team tag-travel tag-watchers">
                        <div class="post-container">
                            <span class="sh-popover-mini sh- fadeIn animated"
                                style="visibility: visible; animation-name: fadeIn;">{{ $post->category_name }}</span>
                            <div class="post-meta-thumb">
                                <img width="1024" height="683" src="{{ asset('/') . $post->image }}"
                                    class="attachment-large size-large wp-post-image" alt=""
                                    sizes="(max-width: 1024px) 100vw, 1024px">
                                <div class="sh-overlay-style1">
                                    <div class="sh-table-full">
                                        <a href="{{ asset('/') . $post->image }}" class="sh-overlay-item sh-table-cell"
                                            data-rel="lightcase">
                                            <div class="sh-overlay-item-container">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content-container">
                                <div class="post-meta post-meta-one">
                                    <time class="updated semantic" itemprop="dateModified"
                                        datetime="2016-04-17T12:49:25+00:00"></time>
                                    <a href="#" class="post-meta-date sh-default-color">{!! date('M-d-y', strtotime($post->created_at)) !!}</a>
                                </div>
                                <a href="{{ route('single_post', $post->id, $post->slug) }}" class="post-title">
                                    <h2 itemprop="headline">{!! Str::limit(html_entity_decode($post->title), 100) !!}</h2>
                                    </ {{-- <h2 itemprop="headline">{{ substr(strip_tags($post->title), 0, 100) }}{{ strlen(strip_tags($post->title)) > 100 ? '...' : "" }}</h2> --}} </a>
                                    <div class="post-content" itemprop="text">{!! Str::limit(html_entity_decode($post->content), 100) !!}</div>
                                    <a href="{{ route('single_post', $post->id, $post->slug) }}"
                                        class="btn btn-primary">Read
                                        More</a>
                                    <!--<div class="post-meta post-meta-two">-->
                                    <!--<div class="sh-columns post-meta-comments">-->
                                    <!--    <span class="post-meta-categories"><i class="icon-tag"></i>-->
                                    <!--    <a href="#">{{ $post->category_name }}</a>-->

                                    <!--    </span>-->
                                    <!--</div>-->
                                    <!--</div>-->
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection
