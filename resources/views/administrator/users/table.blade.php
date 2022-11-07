@unless ($users->isEmpty())
<div class="overflow-x-auto">
    <table class="table-auto w-full">
        {{-- table header --}}
        <thead class="text-xs uppercase text-slate-50  rounded-sm">
            <tr>
                <th class="p-2">
                    <div class="font-semibold text-left">Name</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Email</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Registered Date</div>
                </th>
            </tr>
        </thead>
        {{-- table body --}}
        <tbody class="text-sm font-medium divide-y text-slate-300 divide-slate-800">
            @foreach ($users as $user)
            <tr>
                <td class="p-2">
                    {{ $user->name }}
                </td>
                <td class="p-2 ">
                    {{ $user->email }}
                </td>
                <td class="p-2 ">
                    {{ \Carbon\Carbon::parse($user->created_at)->isoFormat('MMM D YYYY')}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="flex-col flex items-center justify-center">
    <div>
        <img src="" alt="There are currently no listed users.">
    </div>
    <div>
        <h1 class="text-center font-bold text-xl mt-8 uppercase">
            There are currently no listed users.
        </h1>
    </div>
</div>
@endunless
