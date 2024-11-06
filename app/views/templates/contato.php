<section class="contato">
        <article class="site">
            <h2>Formulário de Contato</h2>
            <?php
                if(isset($mensagem) && isset($status)){
                    if($status == 'sucesso'){
                        echo '<div class="alerta-sucesso"> '. $mensagem . '</div>';
                    }elseif($status == 'erro'){
                        echo '<div class="alerta-erro"> '. $mensagem . '</div>';
                    }
                }
            ?>
            
            <form action="contato/enviarEmail" method="post">
                <div>
                    <label>Nome: </label><br>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" require><br>
                    <label>Telefone: </label><br>
                    <input type="tel" name="tel" placeholder="Digite seu telefone" require><br>
                    <label>E-mail: </label><br>
                    <input type="email" name="email" placeholder="Digite seu email" require><br>
                </div>
                <div>
                    <label>Mensagem</label><br>
                    <textarea name="mensagem" cols="50" rows="6" placeholder="Digite sua mensagem" require></textarea><br>
                    <div class="mesageButton">
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar">
                    </div>
                </div>
                </form>
        </article>
</section>