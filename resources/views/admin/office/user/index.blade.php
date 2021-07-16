<a href="{{ route('user.create') }}">Cadastrar</a>
<ul>
    @foreach($users as $user)
        <li><a href="{{ route('user.show',$user->id) }}">{{ $user->name }}</a></li>
    @endforeach
</ul>

<div>{{ $users->links() }}</div>
