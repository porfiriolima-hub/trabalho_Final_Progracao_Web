<form action="?pg=JOASLUNA/login/registrar-usuario" method="post">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Insere teu E-Mail aqui." required><br>
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Cria tua senha aqui." required><br>
    </div>

    <input type="hidden" name="tipo-de-conta" value="<?= $_GET['tipo-de-conta'] ?>">

    <button type="submit">Login</button>
</form>