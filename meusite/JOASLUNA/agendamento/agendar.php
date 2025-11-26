<form action="?pg=JOASLUNA/agendamento/cadastro-de-agendamento" method="post" class="JOASLUNAs-form">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Insere teu E-Mail." pattern="[A-Za-z0-9@._]{7,49}" required><br>
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Insere tua senha." required><br>
    </div>

    <div>
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br>
    </div>

    <div>
        <button type="submit">Agendar</button>
    </div>
</form>