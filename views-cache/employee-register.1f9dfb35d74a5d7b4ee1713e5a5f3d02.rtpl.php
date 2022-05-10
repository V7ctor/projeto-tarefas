<?php if(!class_exists('Rain\Tpl')){exit;}?><header class="header">
    <h1 class="title">Cadastrar novo Colaborador</h1>
</header>
<main class="main">
    <section class="section">
        <form action="/areacolaboradores/novocolaborador" class="form" method="POST">
            <label for="nome" class="label-form">Nome</label>
            <input type="text" class="input-form" placeholder="Insira um nome" name="nome">
            <label for="cpf" class="label-form">CPF</label>
            <input type="text" class="input-form" placeholder="Insira um cpf válido" name="cpf">
            <label for="email" class="label-form">Email</label>
            <input type="text" class="input-form" placeholder="Insira um email" name="email">
            <div class="form-btns">
                <button type="submit" class="btn btn-medium btn-green"><i class="fa-solid fa-user-plus"></i> Cadastrar
                    Colaborador</button>
            </div>
        </form>
    </section>
</main>