<div>
    <input type="text" wire:model="search" required autofocus>
    <table>
        <thead>
        <tr>
            <th>
                <a href="#" wire:click.prevent="orderBy('name')">Name</a>
            </th>
            <th>
                <a href="#" wire:click.prevent="orderBy('uf')">States</a>
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($churches as $church)
            <tr>
                <td>{{ $church->name }}</td>
                <td>{{ $church->state }}</td>
                <td>
                    <button wire:click="destroy({{ $church->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>{{ $churches->links() }}</div>
</div>
