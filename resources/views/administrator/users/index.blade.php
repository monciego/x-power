<x-app-layout>
    @section('title', 'List of Users')
    <div class="col-span-full xl:col-span-6  bg-[#1a1f23] shadow-lg rounded-sm  ">
        <header class="px-5 py-4 border-b border-slate-700 flex justify-between items-center">
            <h2 class="font-semibold text-slate-50">Registered Users</h2>

        </header>
        <div class="p-3">
            @include('administrator.users.table')
        </div>
    </div>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</x-app-layout>
