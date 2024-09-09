<nav class="fixed top-0 left-0 flex flex-row items-center justify-between bg-blue-500 p-2 w-screen text-white">
    <div>
        <a href="/" class="text-xl font-bold">My Social Media</a>
    </div>
    @auth
    <div class="space-x-3 flex items-center">
        <a href="/create" class="hover:text-blue-200">Add a New Post</a>
        <a href="" class="hover:text-blue-200">Manage your Posts</a>
    @endauth
        <form action="/search" method="GET" class="inline-flex items-center">
            <input type="text" name="query" placeholder="Search posts..." class="text-black px-2 py-1 rounded-l focus:outline-none">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-r">
                Search
            </button>
        </form>
    @auth
    </div>
    <div class="flex items-center space-x-3">
        <span>Hello, {{auth()->user()->name}}</span>
        <form action="/logout" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                Sign Out
            </button>
        </form>
    </div>
    @endauth

    @guest
    <div class="space-x-3">
        <a href="/login" class="hover:text-blue-200">Sign In</a>
        <a href="/register" class="hover:text-blue-200">Sign Up</a>
    </div>
    @endguest
</nav>