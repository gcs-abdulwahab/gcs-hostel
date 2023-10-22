<div>
    {{--   show search key --}}
    <h1>Search Key: {{ $search }}</h1>


    <h1>List of Users</h1>
    <input type="text" wire:model.live ="search" />
    <ul>
        @foreach($users as $user)
            <li wire:key='{{ $user->name }}'   >{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
