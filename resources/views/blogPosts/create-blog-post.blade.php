<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl ml-10 text-gray-800 leading-tight">
             {{ __('Create Services') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    

                        <div class="row postFormWrp">
                            <div class="col-md-6 mx-auto postFormCon">
                                <h3>Add new Post</h3>
                                @if (session('status'))
                                    <p class="successSession">{{session('status')}}</p>
                                @endif
                                <form action="{{route('blog.store')}}" method="post" class="postCreate" enctype="multipart/form-data">
                                    @csrf
                                    <div class="postFormInput">
                                        <input type="text" class="postInput" name="postTitle" placeholder="Write post title" value="{{old('postTitle')}}">
                                        @error('postTitle')
                                            <p class="validationError">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="postFormFile">
                                        <input type="file" name="postImage" class="postImg">
                                        @error('postImage')
                                            <p class="validationError">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="postFormBody" id="body">
                                        <textarea name="body" id="lucky_summernote" placeholder="Write Post">{{old('body')}}</textarea>
                                        @error('body')
                                            <p class="validationError">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="publishButton">
                                       <input type="submit" value="Publish Post">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


</x-app-layout>
