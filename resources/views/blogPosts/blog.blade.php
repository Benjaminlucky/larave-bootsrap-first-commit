@include('layouts.header')

<div class="hero-blog-section">
    <div class="row mx-auto blogHero-Wrapper">
        <div class="blogHeader">
            <h2>Blog</h2>
        </div>
    </div>
</div>

<div class="blog-sectionMain">
    <div class="row mx-auto blogWrapperMain">
        <!--MAIN BLOG POSTS -------------------->
        <div class="col-lg-7">
            <div class="mainBlogContent">
                 @if (session('status'))
                    <p class="successSession">{{session('status')}}</p>
                @endif
                @foreach($posts as $post)
                    <div class="blogPost">
                        @auth 
                            @if (auth()->user()->id === $post->user->id)
                                <div class="blogModificationBtn">
                                    <div class="bDeleteBtn">
                                        <a href="{{route('blog.edit', $post)}}">Edit Post</a>
                                    </div>
                                    <form action="{{route('blog.destroy', $post)}}" method="post" class="bEditBtn">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete Post">
                                    </form>
                                </div>
                            @endif
                        @endauth
                        <div class="bPostImg">
                        <a href="{{route('blog.show', $post)}}">
                                <img src="{{asset($post->imagePath)}}" alt="Post Image">
                        </a>
                        </div>
                        <div class="postMetaInfo">
                            <div class="blogPostDate">
                                <a href=""><p>{{$post->created_at->diffForHumans()}}</p></a>
                            </div>
                            <div class="blogPostAuthor">
                                <p>By {{$post->user->name}} / 0 comment</p>
                            </div>
                        </div>
                        <div class="blogPostTitle">
                            <a href="{{route('blog.show', $post)}}">{{$post->title}}</a>
                        </div>
                        <div class="blogPostContent">
                            <p>{!!$post->body!!}</p>
                        </div>
                        <div class="blogPostButton">
                            <a href="{{route('blog.show', $post)}}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{$posts->links()}}

        </div>

        <!-- BLOG ASIDE ---------------------------->
        <div class="col-lg-4">
            <div class="blogAside">
                <div class="blogSearch">
                    <input type="search" placeholder="Search....">
                </div>

                <div class="blogCategories">
                    <div class="categoriesTitle">
                        <h4>Categories</h4>
                    </div>



                    <div class="category">
                        <div class="categoryName">
                            <h5>Business Growth</h5>
                        </div>
                        <div class="categoryIcon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>


                    <div class="category">
                        <div class="categoryName">
                            <h5>Industries</h5>
                        </div>
                        <div class="categoryIcon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>


                    <div class="category">
                        <div class="categoryName">
                            <h5>Insurance</h5>
                        </div>
                        <div class="categoryIcon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>


                    <div class="category">
                        <div class="categoryName">
                            <h5>Marketing</h5>
                        </div>
                        <div class="categoryIcon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>

                    <div class="category">
                        <div class="categoryName">
                            <h5>Sales Analysis</h5>
                        </div>
                        <div class="categoryIcon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>


                <div class="asideRecentPost">
                    <div class="recentPostTitle">
                        <h4>Recent Post</h4>
                    </div>

                    <div class="recentPostContent">
                        <div class="rPostImg">
                            <img src="{{asset('images/blog-sidebar-1-150x150.jpg')}}" alt="Recent Post Image">
                        </div>
                        <div class="rPostTitle">
                            <a href="#">Many desktop publishing packages and web page editors</a>
                            <p>September 5, 2015</p>
                        </div>
                    </div>


                    <div class="recentPostContent">
                        <div class="rPostImg">
                            <img src="{{asset('images/blog-sidebar-3-150x150.jpg')}}" alt="Recent Post Image">
                        </div>
                        <div class="rPostTitle">
                            <a href="#">These cases are perfectly simple and easy to distinguish</a>
                            <p>September 5, 2015</p>
                        </div>
                    </div>



                    <div class="recentPostContent">
                        <div class="rPostImg">
                            <img src="{{asset('images/blog-sidebar-2-150x150.jpg')}}" alt="Recent Post Image">
                        </div>
                        <div class="rPostTitle">
                            <a href="#">A paradisematic country, where roasted parts of sentences fly</a>
                            <p>September 5, 2015</p>
                        </div>
                    </div>


                    <div class="recentPostContent">
                        <div class="rPostImg">
                            <img src="{{asset('images/blog-sidebar-2-150x150.jpg')}}" alt="Recent Post Image">
                        </div>
                        <div class="rPostTitle">
                            <a href="#">Many desktop publishing packages and web page editors</a>
                            <p>September 5, 2015</p>
                        </div>
                    </div>


                    <div class="recentPostContent">
                        <div class="rPostImg">
                            <img src="{{asset('images/blog-sidebar-3-150x150.jpg')}}" alt="Recent Post Image">
                        </div>
                        <div class="rPostTitle">
                            <a href="#">Many desktop publishing packages and web page editors</a>
                            <p>September 5, 2015</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@include('layouts.footer')