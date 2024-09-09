<x-layout>
    <x-flex>
        <div class="bg-blue-500 p-6 rounded-lg flex flex-col items-center justify-center">
            <x-heading>Register</x-heading>
            <x-form method="POST" action="/register">
                <x-field name="name">Name</x-field>
                <x-field name="email">E-mail</x-field>
                <x-field name="password">Password</x-field>
                <x-field name="password_confirmation">Reconfirm Password</x-field>
                <x-button>Register</x-button>
            </x-form>
    </x-flex>
</x-layout>