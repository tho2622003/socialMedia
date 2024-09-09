<x-layout>
    <x-flex>
        <div class="bg-blue-500 p-6 rounded-lg flex flex-col justify-center w-1/2">
            <span class="font-bold text-lg">{{$post->title}}</span>
            <span class="text-sm border-b border-spacing-2">Posted by: {{$post->user}}</span>
            <span class="mt-4">{{$post->content}}</span>
            <span>{{$post->created_at->format('M d, Y H:i')}}</span>
        </div>
        <div class="bg-blue-500 p-6 rounded-lg flex flex-row justify-between w-1/2 mt-2">
            <a href="">React</a>
            <a href="">Comments ({{$post->commentCount}})</a>
            <a href="">Share</a>
            <a href="/">Return to Main Page</a>
        </div>
    </x-flex>
</x-layout>