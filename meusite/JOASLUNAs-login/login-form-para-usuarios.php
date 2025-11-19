<form action="">
    <label for="nome">Nome e sobrenome<mark style="color: red;">*</mark></label>
    <input type="text" id="nome" name="nome" placeholder="Digita teu nome e sobrenome" pattern="[^0-9]{10,}" required><br>
    <label for="data">Data de nascimento<mark style="color: red;">*</mark>:</label>
    <input type="date" name="data" id="data" required><br>
    <label for="sexo">Sexo:</label>
    <select name="sexo" id="sexo">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="PREFIRO NÃO INFORMAR" selected>Não informar</option>
    </select><br>
    <label for="tipo-de-sangue">Tipo sanguíneo:</label>
    <input type="text" id="tipo-de-sangue" name="tipo-de-sangue" pattern="(AB|[ABO])[+-]" placeholder="Digita no formato AB+, B-, ou O+, por exemplo."><br>
    <label for="email">E-Mail<mark style="color: red;">*</mark>:</label>
    <input type="email" id="email" name="email" placeholder="Digita o teu e-mail aqui" required><br>
    <label for="senha">Senha<mark style="color: red;">*</mark>:</label>
    <input type="password" name="senha" id="senha" placeholder="Digita tua senha aqui" required><br>
    <label for="cpf">CPF<mark style="color: red;">*</mark>:</label>
    <input type="text" name="cpf" id="cpf" pattern="[0-9]{11}" placeholder="Insire teu CPF" required><br>
    <label for="rg">RG<mark style="color: red;">*</mark>:</label>
    <input type="text" name="rg" id="rg" pattern="[0-9]{7}|[0-9]{11}" placeholder="Insire teu Registro Geral" required><br>
    <label for="pais">País<mark style="color: red;">*</mark>:</label>
    <input type="text" name="pais" id="pais" pattern="[^0-9]{6,}" placeholder="País" required><br>
    <label for="estado">Estado<mark style="color: red;">*</mark>:</label>
    <input type="text" name="estado" id="estado" pattern="[^0-9]{6,}" placeholder="Estado" required><br>
    <label for="cidade">Cidade<mark style="color: red;">*</mark>:</label>
    <input type="text" name="cidade" id="cidade" pattern="[^0-9]{6,}" placeholder="Cidade" required><br>
    <label for="bairro">Bairro<mark style="color: red;">*</mark>:</label>
    <input type="text" name="bairro" id="bairro" pattern="[^0-9]{6,}" placeholder="Bairro" required><br>
    <label for="rua">Rua<mark style="color: red;">*</mark>:</label>
    <input type="text" name="rua" id="rua" pattern="[^0-9]{10,}" placeholder="Rua" required><br>
    <label for="cep">CEP<mark style="color: red;">*</mark>:</label>
    <input type="text" name="cep" id="cep" pattern="[0-9]{8}" placeholder="CEP" required><br>
    <label for="logradouro">Logradouro da casa<mark style="color: red;">*</mark>:</label>
    <input type="text" name="logradouro" id="logradouro" pattern="[0-9]+" placeholder="Insire logradouro" required><br>
    <label for="local-de-referncia">Local de referência:</label>
    <textarea name="local-de-referencia" id="local-de-referencia" placeholder="Insire o local de referência (opcional)"></textarea>
</form>