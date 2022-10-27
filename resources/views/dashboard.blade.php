<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl ml-10 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div class="row overflow-x">
                        <div class="col-lg-2 mx-auto dashPostCon">
                            <div class="dashPostWrp">
                                <div class="dashPostTitle">
                                    <a href="{{route('blog.create')}}">Create Post</a>
                                </div>
                                <div class="dashNumPost">
                                     <h5>34 post</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mx-auto dashPostCon">
                            <div class="dashPostWrp">
                                <div class="dashPostTitle">
                                    <a href="#">Create Services</a>
                                </div>
                                <div class="dashNumPost">
                                     <h5>8 Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mx-auto dashPostCon">
                            <div class="dashPostWrp">
                                <div class="dashPostTitle">
                                    <a href="#">Create Advisors</a>
                                </div>
                                <div class="dashNumPost">
                                     <h5>20 Advisors</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mx-auto dashPostCon">
                            <div class="dashPostWrp">
                                <div class="dashPostTitle">
                                    <a href="#">Create Testimonials</a>
                                </div>
                                <div class="dashNumPost">
                                     <h5>50 Testimonials</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
