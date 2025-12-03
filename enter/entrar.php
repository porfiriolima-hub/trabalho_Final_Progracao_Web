<form action="?pg=enter/validacao" method="post" class="JOASLUNAs-form">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Insere teu E-Mail aqui." pattern="[A-Za-z0-9@._]{7,49}" required><br>
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Insere tua senha aqui." pattern="[A-Za-z0-9._]{8,21}" required><br>
    </div>

    <input type="hidden" name="tipo-de-conta" value="<?= $_GET['tipo-de-conta'] ?>">
    <div>
        <button type="submit">Entrar</button>
    </div>
</form>