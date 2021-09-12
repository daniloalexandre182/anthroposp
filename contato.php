<?php
    include 'header.php';
?>
    <!-- main -->
    <main>
        <!-- contato -->
        <h2 class="titulo-size titulo-py titulo-px titulo-bg-black text-white display-3 mt-4 mb-3">Contato</h2>
        <section id="contato" class="container mt-4">
            <div class="pb-5">
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="cel">Celular</label>
                        <input type="text" class="form-control" id="cel">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="assunto">Assunto</label>
                      <input type="text" class="form-control" id="assunto">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputState">Formato da produção</label>
                        <select id="inputState" class="form-control">
                          <option selected>Selecione...</option>
                          <option>Videoclipe</option>
                          <option>Documentário</option>
                          <option>Institucional</option>
                          <option>Ensaio Fotográfico</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Onde nos conheceu</label>
                        <select id="inputState" class="form-control">
                          <option selected>Selecione</option>
                          <option>Facebook</option>
                          <option>Instagram</option>
                          <option>Twitter</option>
                          <option>Amigo</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aceite">
                        <label class="form-check-label" for="gridCheck">
                          Aceito receber email
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>
            </div>
        </section>
        <!-- /contato -->
    </main>
    <!-- /main -->
    
<?php
include 'footer.php';
?>