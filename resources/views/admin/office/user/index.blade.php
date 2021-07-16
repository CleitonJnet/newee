<a href="{{ route('user.create') }}">Cadastrar</a>
<ul>
    @foreach($users as $user)
        <li>
            <a href="{{ route('user.show',$user->id) }}">
                {{ $user->id }}
                {{ $user->name }}
                <form action="{{ route('user.destroy_show',$user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="X">
                </form>
            </a>
        </li>
    @endforeach
</ul>

<div>{{ $users->links() }}</div>
