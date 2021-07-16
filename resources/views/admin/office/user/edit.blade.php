<form action="{{ route('user.update',$user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" name="password" value="EE@Brasil">
    <input type="text" name="name" placeholder="Nome completo" value="{{ $user->name }}">
    <input type="text" name="phone" placeholder="Telefone" value="{{ $user->phone }}">
    <input type="text" name="mobile_phone" placeholder="Celular" value="{{ $user->mobile_phone }}">
    <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
    <input type="text" name="zip_code" placeholder="CEP" maxlength="8" value="{{ $user->zip_code }}">
    <input type="text" name="street" placeholder="Logradouro" value="{{ $user->street }}">
    <input type="number" name="number" placeholder="Número" value="{{ $user->number }}">
    <input type="text" name="complement" placeholder="Complemento" value="{{ $user->complement }}">
    <input type="text" name="neighborhood" placeholder="Bairro" value="{{ $user->neighborhood }}">
    <input type="text" name="city" placeholder="Cidade" value="{{ $user->city }}">
    <input type="text" name="state" placeholder="UF" maxlength="2" value="{{ $user->state }}">
    <select name="church_id" id="Church_id">
        <option value="" hidden>Selecione a igreja</option>
        @foreach($churches as $church)
            <option @if($user->church_id === $church->id) selected @endif value="{{ $church->id }}">{{ $church->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Salvar">
</form>
