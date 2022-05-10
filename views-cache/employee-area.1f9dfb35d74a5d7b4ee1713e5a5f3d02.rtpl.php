<?php if(!class_exists('Rain\Tpl')){exit;}?><header class="header">
    <h1 class="title">Área de Colaboradores</h1>
</header>
<main class="main">
    <div class="header-options">
        <div class="btn-options">
            <a href="/areacolaboradores/novocolaborador" class="btn btn-medium btn-green"><i
                    class="fa-solid fa-user-plus"></i> Cadastrar Colaborador</a>
            <a href="/" class="btn btn-medium btn-blue"><i class="fa-solid fa-list-check"></i> Tarefas</a>
        </div>
        <form action="/areacolaboradores" class="form-search">
            <input type="text" class="input-search" placeholder="Pesquisar por Nome" name="search"
                value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <section class="section">
        <table class="table">
            <thead class="thead">
                <tr class="th">
                    <th class="td">#</th>
                    <th class="td">Nome</th>
                    <th class="td">CPF</th>
                    <th class="td">Email</th>
                    <th class="td">Ações</th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
            <tbody>
                <?php $counter1=-1;  if( isset($employeeslist) && ( is_array($employeeslist) || $employeeslist instanceof Traversable ) && sizeof($employeeslist) ) foreach( $employeeslist as $key1 => $value1 ){ $counter1++; ?>
                <tr class="tr">
                    <td class="td"><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td class="td"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td class="td"><?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td class="td"><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td class="td td-btns">
                        <a class="btn btn-min btn-blue" href="/areacolaboradores/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/editarcolaborador"><i
                                class="fa-solid fa-pen-to-square"></i> Editar</a>
                        <a class="btn btn-min btn-yellow" href="#open"><i class="fa-solid fa-clipboard-question"></i>
                            Detalhes</a>
                        <a class="btn btn-min btn-red" href="/areacolaboradores/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/excluir"
                            onclick="return confirm('Deseja realmente excluir o colaborador <?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?> ?')"><i
                                class="fa-solid fa-trash-can"></i> Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
        <div class="pagination">
            <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
            <a class="page" href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
            <?php } ?>
        </div>
    </section>
    <section class="section">
        <div class="container" id="open">
            <div class="container-modal">
                <a href="#close" class="close">Fechar</a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit libero, aliquet at purus congue,
                sodales consequat elit. Ut sagittis interdum leo. Nulla nibh enim, pretium a mauris sed, vestibulum
                tempus libero. Suspendisse ornare ex et erat suscipit commodo eu fringilla nunc. Donec quis finibus
                lorem, feugiat pellentesque sapien. Sed nec bibendum risus, vel tincidunt urna. Nullam ultricies
                facilisis justo id gravida. Vivamus libero velit, volutpat a tempus non, feugiat sed risus.

                Phasellus fermentum tempus ipsum, eget viverra nisi tempor sed. Aenean dictum massa in turpis facilisis,
                non placerat est dictum. Aenean lacinia tincidunt mi quis convallis. Morbi interdum, ex quis laoreet
                consectetur, est sem egestas nibh, vel rutrum ipsum erat eget ipsum. Nulla eleifend metus libero.
                Pellentesque tellus magna, porta vel sagittis vel, maximus in ante. Ut aliquet a dui id placerat. Fusce
                vel tortor volutpat libero pretium sodales. Quisque eget ipsum non mauris tincidunt congue.

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada magna et tellus feugiat
                scelerisque. Aliquam finibus velit sed blandit porta. Vivamus sodales ullamcorper velit, eu tempor
                libero laoreet vel. Nam pretium id sapien at laoreet. Duis ut orci tincidunt, porta lectus vel, pretium
                enim. Donec vel magna mattis, convallis felis et, euismod enim. Vivamus commodo hendrerit lacinia. Proin
                elementum neque ac est accumsan imperdiet. Maecenas quis eros vel risus lobortis rhoncus id vitae lorem.
                Proin aliquet eros ac enim efficitur malesuada. Maecenas nec velit tempus, dictum orci sed, viverra
                erat. Praesent et elit eu lacus eleifend condimentum.

                Fusce sed volutpat felis. Integer congue nisi diam, non porta risus efficitur non. Pellentesque habitant
                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed neque fermentum,
                imperdiet est in, auctor tortor. Vestibulum mollis dapibus nunc sit amet cursus. Pellentesque habitant
                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut placerat elit eget lacinia
                placerat. Sed venenatis pretium erat. Sed porttitor porta dolor sit amet efficitur. Ut dignissim
                tincidunt sapien, ac porttitor enim pharetra et. Donec consectetur malesuada mi, ac iaculis massa
                ultrices et. Suspendisse sollicitudin consequat arcu, in elementum libero varius maximus.

                Proin semper et nisl eget feugiat. Nulla porttitor dolor sit amet purus condimentum, a placerat urna
                aliquet. Nunc tristique in leo eu varius. Donec vestibulum euismod vestibulum. Aliquam sit amet ultrices
                arcu. Duis ut nunc tellus. Sed fringilla mattis felis. Aenean pretium dictum lacus, at aliquam felis
                fermentum vitae. Praesent malesuada, lectus ac pharetra porttitor, magna massa bibendum ante, at porta
                nulla ex at risus. Etiam aliquet tellus est, id semper nunc faucibus sed. Pellentesque at dolor mi.
                Etiam non condimentum justo, vitae pellentesque justo. Donec malesuada facilisis eros id fringilla.
            </div>
        </div>
    </section>
</main>