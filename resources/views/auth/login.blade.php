<x-layout>
    <x-flex>
        <div class="bg-blue-500 p-6 rounded-lg flex flex-col items-center justify-center">
            <x-heading>Log In</x-heading> 
            <x-form method="POST" action="/login">
                <x-field name="email">E-mail</x-field>
                <x-field name="password">Password</x-field>
                <x-button>Log In</x-button>
            </x-form>
    </x-flex>
</x-layout>