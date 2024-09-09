<div class="bg-blue-500 text-white rounded-xl p-4 shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
    <div class="flex flex-col flex-grow">
        <div class="flex justify-between items-center">
            <span class="font-semibold">By {{$post->user}}</span>
            <span class="text-sm text-blue-200">ID: {{$post->id}}</span>
        </div>
        
        <div class="flex flex-col space-y-3 flex-grow">
            <a href="/post/{{$post->id}}" class="font-bold text-lg">{{$post->title}}</a>
            <span>{{$post->content}}</span>

            <div class="text-sm text-blue-200 mt-auto">
                Created at {{$post->created_at->format('M d, Y H:i')}}
            </div>
        </div>
    </div>
    
    <div class="flex justify-between pt-2 border-t border-blue-400 mt-auto">
        <a href="#" class="hover:text-blue-200 transition-colors duration-200">React</a>
        <a href="#" class="hover:text-blue-200 transition-colors duration-200">Comment ({{$post->commentCount}})</a>
        <a href="#" class="hover:text-blue-200 transition-colors duration-200">Share</a>
    </div>
</div>