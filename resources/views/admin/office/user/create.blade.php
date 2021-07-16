<form action="{{ route('user.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome completo">
    <input type="text" name="phone" placeholder="Telefone">
    <input type="text" name="mobile_phone" placeholder="Celular">
    <input type="email" name="mail" placeholder="E-mail">
    <input type="text" name="zip_code" placeholder="CEP" maxlength="8">
    <input type="text" name="street" placeholder="Logradouro">
    <input type="number" name="number" placeholder="Número">
    <input type="text" name="complement" placeholder="Complemento">
    <input type="text" name="neighborhood" placeholder="Bairro">
    <input type="text" name="city" placeholder="Cidade">
    <input type="text" name="state" placeholder="UF" maxlength="2">
    <select name="church_id" id="Church_id">
        <option value="" hidden>Selecione a igreja</option>
        @foreach($churches as $church)
            <option value="{{ $church->id }}">{{ $church->name }}</option>
        @endforeach
    </select>
</form>
