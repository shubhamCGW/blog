@extends('layouts.blog')
@section('content')
    {{-- <section class="breadcrumbs abt-bread softabt-bread">
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
                                    <div class="post-content" itemprop="text">{!! Str::limit(html_entity_decode($post->content), 100) !!}</div>
                                    <a href="{{ route('single_post', $post->id, $post->slug) }}"
                                        class="btn btn-primary">Read
                                        More</a>
                                    <div class="post-meta post-meta-two">
                                        <div class="sh-columns post-meta-comments">
                                            <span class="post-meta-categories"><i class="icon-tag"></i>
                                                <a href="#">{{ $post->category_name }}</a>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div> --}}
    <section class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-100">
                    <!-- Blog Post Without Thumbnail -->
                    <article class="bg-white rounded mb-40">
                        <!-- Post Content -->
                        <div>
                            <div class="d-flex align-items-center border-bottom">
                                <!-- Published Date -->
                                <div class="text-center border-right p-4">
                                    <h3 class="text-primary mb-0">
                                        {!! date('M-d-y', strtotime($featuredPost->created_at)) !!}
                                        {{-- <span class="d-block paragraph">Nov</span> --}}
                                    </h3>
                                </div>
                                <div class="px-4">
                                    <!-- Post Title -->
                                    <a class="h4 d-block mb-10" href="{{ route('single_post', $featuredPost->id, $featuredPost->slug) }}">{!! Str::limit(html_entity_decode($featuredPost->title), 100) !!}</a>
                                    <!-- Post Meta -->
                                    <ul class="list-inline">
                                        <li class="list-inline-item paragraph mr-5">By
                                            <a href="#" class="paragraph">Admin</a>
                                        </li>
                                        <li class="list-inline-item paragraph">{{ $featuredPost->category_name }}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Post Excerpts -->
                            <div class="p-4">
                                <p>
                                    {!! Str::limit(html_entity_decode($featuredPost->content), 250) !!}
                                    {{-- {{ substr(strip_tags($featuredPost->content), 0, 250) }}{{ strlen(strip_tags($featuredPost->content)) > 250 ? '...' : '' }} --}}
                                </p>
                                <a href="{{ route('single_post', $featuredPost->id, $featuredPost->slug) }}" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    {{-- <div class="row mb-100">
                     <!-- blog item -->
                     <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                         <div class="card">
                             <img class="card-img-top" src="{{asset('User/images/blog/blog-1.jpg')}}" alt="news-thumbnail">
                             <div class="card-body p-0">
                                 <div class="p-3 border-bottom">
                                     <h6 class="text-primary">Dec 20, 2017</h6>
                                     <a href="blog-single.html" class="h4 card-title font-primary text-dark">Cras sed elit sit
                                         amet.</a>
                                     <p class="card-text">Lorem ipsum dolor amet consectur adipsicing elit sed eiusm tempor incididunt labore dolore. magna aliqua enim minim.</p>
                                 </div>
                                 <a href="#" class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-user"></i>Admin</a>
                                 <a href="#" class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-comments-smiley"></i>30
                                     Comments</a>
                                 <a href="#" class="card-link d-inline-block text-color p-2 px-3 float-right border-left"><i
                                         class="text-primary ti-share"></i></a>
                             </div>
                         </div>
                     </div>
                     <!-- blog item -->
                     <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                         <div class="card">
                             <img class="card-img-top" src="{{asset('User/images/blog/blog-2.jpg')}}" alt="news-thumbnail">
                             <div class="card-body p-0">
                                 <div class="p-3 border-bottom">
                                     <h6 class="text-primary">Dec 20, 2017</h6>
                                     <a href="blog-single.html" class="h4 card-title font-primary text-dark">Cras sed elit sit
                                         amet.</a>
                                     <p class="card-text">Lorem ipsum dolor amet consectur adipsicing elit sed eiusm tempor incididunt labore dolore. magna aliqua enim minim.</p>
                                 </div>
                                 <a href="#" class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-user"></i>Admin</a>
                                 <a href="#" class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-comments-smiley"></i>30
                                     Comments</a>
                                 <a href="#" class="card-link d-inline-block text-color p-2 px-3 float-right border-left"><i
                                         class="text-primary ti-share"></i></a>
                             </div>
                         </div>
                     </div>
                     <!-- blog item -->
                     <div class="col-lg-4 col-sm-6">
                         <div class="card">
                             <img class="card-img-top" src="{{asset('User/images/blog/blog-3.jpg')}}" alt="news-thumbnail">
                             <div class="card-body p-0">
                                 <div class="p-3 border-bottom">
                                     <h6 class="text-primary">Dec 20, 2017</h6>
                                     <a href="blog-single.html" class="h4 card-title font-primary text-dark">Cras sed elit sit
                                         amet.</a>
                                     <p class="card-text">Lorem ipsum dolor amet consectur adipsicing elit sed eiusm tempor incididunt labore dolore. magna aliqua enim minim.</p>
                                 </div>
                                 <a href="#" class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-user"></i>Admin</a>
                                 <a href="#" class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-comments-smiley"></i>30
                                     Comments</a>
                                 <a href="#" class="card-link d-inline-block text-color p-2 px-3 float-right border-left"><i
                                         class="text-primary ti-share"></i></a>
                             </div>
                         </div>
                     </div>
                 </div> --}}

                    <!-- Pagination -->
                    <nav class="mb-md-50">
                        <ul class="pagination justify-content-center align-items-center">
                            <li class="page-item disabled prev">
                                <a class="page-link" href="#" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="bg-white px-4 py-100 sidebar-box-shadow">
                        <!-- Search Widget -->
                        <div class="mb-50">
                            <h4 class="mb-3">Search Here</h4>
                            <div class="search-wrapper">
                                <input type="text" class="form-control" name="search" placeholder="Type Here...">
                            </div>
                        </div>
                        <!-- categories -->
                        <div class="mb-50">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 mb-0">
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Business Analysis</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Consultancy</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Investment</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Profit & Growth</a>
                                </li>
                                <li>
                                    <a href="#" class="d-block text-color py-10">Marketing Guidance</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Recent Post -->
                        <div class="mb-50">
                            <h4 class="mb-3">Recent News</h4>
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="images/blog/post-thumb-sm-01.jpg"
                                            alt="post-thumb">
                                    </a>
                                </div>
                                <div>
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Marketing Strategy
                                            2017-2018.</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="images/blog/post-thumb-sm-02.jpg"
                                            alt="post-thumb">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Jack Ma & future of
                                            E-commerce</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                            <div class="d-flex py-3">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="images/blog/post-thumb-sm-03.jpg"
                                            alt="post-thumb">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Jack Ma & future of
                                            E-commerce</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Tags -->
                        <div class="mb-50">
                            <h4 class="mb-3">Tags</h4>
                            <ul class="list-inline tag-list">
                                <li class="list-inline-item">
                                    <a href="#">Business</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Marketing</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Finance</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Consultancy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Market Analysis</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Rvenenue</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Newsletter -->
                        <div class="newsletter">
                            <h4 class="mb-3">Stay Updated</h4>
                            <form action="#">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
{{-- <h2 itemprop="headline">{{ substr(strip_tags($post->title), 0, 100) }}{{ strlen(strip_tags($post->title)) > 100 ? '...' : "" }}</h2> --}}





    <!-- *** Blog Section Start *** -->
    <!-- *** Blog Section End *** -->

