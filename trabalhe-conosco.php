<?php
    include 'header.php';
?>
    <!-- main -->
    <main>
        <!-- trabalhe conosco -->
        <h2 class="titulo-size titulo-py titulo-px titulo-bg-black text-white display-3 mt-4 mb-3">Trabalhe Conosco</h2>
        <section id="trab-conosco" class="container mt-4">
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
                      <label for="assunto">Fale sobre você e seus projetos</label>
                      <textarea class="form-control" id="sobre" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
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
                    <div class="form-group row">
                        <div class="col-sm-3 col-md-2"><label for="ocupacao">Ocupações:</label></div>
                    </div>
                    <div class="form-group row border mx-1">
                        <div class="col-md-4 col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="fotografo">
                            <label class="form-check-label" for="fotografo">
                            Fotógrafo
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cinegrafista">
                            <label class="form-check-label" for="cinegrafista">
                                Cinegrafista
                            </label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cinegrafista">
                            <label class="form-check-label" for="cinegrafista">
                                Produtor
                            </label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cinegrafista">
                            <label class="form-check-label" for="cinegrafista">
                                Editor
                            </label>
                            </div>
                        </div>
                    </div>
                      
                    <div class="form-group">
                    <label for="exampleFormControlFile1">Currículo</label>
                    <input type="file" class="form-control-file border" id="arquivo">
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>
            </div>
        </section>
        <!-- /trabalhe conosco -->
    </main>
    <!-- /main -->
<?php
include 'footer.php';
?>