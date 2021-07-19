<div>
    <input type="text" wire:model="search" required autofocus>
    <table>
        <thead>
        <tr>
            <th>
                <a href="#" wire:click.prevent="orderBy('user')">Users</a>
            </th>
            <th>
                <a href="#" wire:click.prevent="orderBy('church')">Churches</a>
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->user }}</td>
                <td>{{ ($user->church !== 'Master')?$user->church:'-' }}</td>
                <td>
                    <button wire:click="destroy({{ $user->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>{{ $users->links() }}</div>
</div>
