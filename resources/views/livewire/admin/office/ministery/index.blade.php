<div>
    <table>
        <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($ministeries as $ministery)
            <tr>
                <td>{{ $ministery->title }}</td>
                <td>
                    <button wire:click="destroy({{ $ministery->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
