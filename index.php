<?php include("header.php"); ?>
<body>
    <div class="container">
    <div class="jumbotron bg">
        <h1>Twitter4j</h1>      
        <p>Uso do twitter4j para twittar e buscar tweets.</p>
    </div>
    <div class="navbar">
        <ul class="nav nav-tabs" id="abas">
            <li><a data-toggle="tab" href="#aba1">Twittar</a></li>
            <li><a data-toggle="tab" href="#aba2">Buscar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content">
                <div id="aba1" class="tab-pane fade in active">
                    <form role="form">
                        <div class="form-group">
                            <label for="msg">Mensagem:</label>
                            <textarea class="form-control" rows="3" id="msg" placeholder="O que você está pensando?"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-default">Enviar</button>
                        </div>
                    </form>
                    <hr>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="8" id="status_msg" placeholder="Status"></textarea>
                        </div>
                    </form>
                </div>
                <div id="aba2" class="tab-pane fade">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label for="usuario">Usuário:</label>
                            <input type="text" class="form-control" id="usuario" placeholder="@">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-default">Buscar</button>
                        </div>
                    </form>
                    <hr>
                    <table id="resultado" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th class="desktop">Data (Twitter)</th>
                                <th class="desktop">Localização</th>
                                <th class="desktop">Data (BD)</th>
                                <th class="desktop">Texto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Exemplo</td>
                                <td>Exemplo</td>
                                <td>Exemplo</td>
                                <td>Exemplo</td>
                                <td>Exemplo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<?php include("footer.php"); ?>