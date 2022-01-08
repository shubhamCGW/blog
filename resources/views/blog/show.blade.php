@extends('layouts.blog')
@section('content')
    <section class="breadcrumbs abt-bread softabt-bread">
        <div class="container">
            <h1>{{ $post->title }}</h1>
        </div>
    </section>
    <div class="container entry-content mb-5 mt-5 first-section">
        <div id="content" class="content-with-sidebar-right">
            <div class="blog-single blog-style-large">
                <article id="post-4271"
                    class="post-item post-item-single post-4271 post type-post status-publish format-standard has-post-thumbnail hentry category-travel category-uncategorized tag-boat tag-dogs tag-team tag-travel tag-watchers">
                    <div class="post-container">
                        <span class="sh-popover-mini sh- fadeIn animated">New</span>
                        <div class="post-meta-thumb inner-blogimg">
                            <img width="800" height="400" src="{{ asset('/') . $post->image }}"
                                class="attachment-jevelin-landscape-large size-jevelin-landscape-large wp-post-image" alt="">
                        </div>

                        <div class="post-meta-data sh-columns">
                            <div class="post-meta post-meta-one">
                                <span class="post-meta-author"> <a href="#" class="bypostauthor" itemprop="url"
                                        rel="author"></a></span>
                                <time class="updated semantic" itemprop="dateModified"
                                    datetime="2016-04-17T12:49:25+00:00"></time>
                                <a href="#" class="post-meta-date sh-default-color">{!! date('M-d-y', strtotime($post->created_at)) !!}</a>
                            </div>
                            <div class="post-meta post-meta-two">
                                <div class="sh-columns post-meta-comments">
                                    <span class="post-meta-categories">
                                        <i class="fa fa-tag"></i>
                                        <a href="#" rel="category tag"></a><a href="#"
                                            rel="category tag">{{ $category_name[0]->category_name }}</a>
                                    </span>

                                </div>

                            </div>
                        </div>

                        <div class="post-content" itemprop="text">
                            <p>{!! html_entity_decode($post->content) !!}</p>

                        </div>

                    </div>
                </article>

                <div class="sh-clear"></div>
                <div class="sh-page-links"></div>

                <div class="sh-blog-single-meta row">
                    <div class="sh-social-share">
                        <div class="">
                            <div class="jssocials-shares">
                                <div class="jssocials-share jssocials-share-twitter">
                                    <a target="_blank" href="https://www.facebook.com/tophatindore/"
                                        class="jssocials-share-link jssocials-share-link-count jssocials-share-no-count">
                                        <i class="fa fa-facebook jssocials-share-logo"></i>
                                        <span class="jssocials-share-count"></span>
                                    </a>
                                </div>
                                <div class="jssocials-share jssocials-share-pinterest">
                                    <a target="_blank" href="https://www.instagram.com/accounts/login/"
                                        class="jssocials-share-link jssocials-share-link-count jssocials-share-no-count">
                                        <i class="fa fa-instagram jssocials-share-logo"></i>
                                        <span class="jssocials-share-count"></span>
                                    </a>
                                </div>
                                <div class="jssocials-share jssocials-share-email">
                                    <a target="_self" href="https://www.linkedin.com/in/tophat-software-pvt-ltd-3a9824171/"
                                        class="jssocials-share-link jssocials-share-link-count jssocials-share-no-count">
                                        <i class="fa fa-linkedin jssocials-share-logo"></i>
                                        <span class="jssocials-share-count"></span>
                                    </a>
                                </div>
                                <div class="jssocials-share jssocials-share-pinterest">
                                    <a target="_blank" href="https://in.pinterest.com/tophatsoftware/pins/"
                                        class="jssocials-share-link jssocials-share-link-count jssocials-share-no-count">
                                        <i class="fa fa-pinterest jssocials-share-logo"></i>
                                        <span class="jssocials-share-count"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="sh-page-switcher">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Start -->
        <div id="sidebar" class="sidebar-right">

            <div id="categories-3" class="widget-item widget_categories">
                <h3 class="widget-title">Categories</h3>
                @foreach ($Categories as $category)
                    <ul>
                        <li class="cat-item cat-item-20"><a href="#">{{ $category->name }}</a><span
                                class="count">{{ $category->posts_count }}</span></li>
                    </ul>
                @endforeach
            </div>
        </div>
        <!-- Sidebar End -->
    </div>
@endsection
