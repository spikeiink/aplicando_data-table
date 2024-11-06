<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Portal SmartStore - Disparo de Pesquisas</title>
    <meta name="description" content="Portal do Licenciado SmartStore.">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portal SmartStore" />
    <meta property="og:description" content="Portal do Licenciado SmartStore." />
    <meta property="og:url" content="https://www.smartstorebrasil.com.br" />
    <meta property="og:image" content="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="ckeditor/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/09b20bb274.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../dash/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="css/style-portal.css?<?= time() ?>">
    <link rel="stylesheet" href="css/style-disparo-pesquisas.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    
    

   
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1750783,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>
<body style="height: 100vh">
    <header>
        <?php include 'cabecalho.php'; ?>
    </header>
<section class="conteudo-listar-licenciados">
        
     <div class="titulo-pagina">
        <h2 data-translate-key="titulo">| Disparo de Pesquisas</h2>
     </div>
       
        <div class="content-listar-licenciados">
                
                
            
            
            <div class="hstack gap-6" style="justify-content: center; display:flex; gap: 40px; flex-wrap:wrap; padding:25px;">
                
                <button class="cards-dados btn" type="button" data-bs-toggle="modal" data-bs-target="#pesquisaEnviadas">
                <div style="display: flex;align-items: center;gap: 10px;">
                <div><p class="font-size" style="display: block;">Pesquisas<br>Enviadas</p>
                <div><p><span class="underline">20000</span></p></div>
                </div>
                    <div style="font-size: 20px;"><i class="fa-regular fa-envelope"></i></div>
                </div>
                </button>
                <button class="cards-dados btn" type="button" data-bs-toggle="modal" data-bs-target="#quantidadeRespostas">
                <div style="display: flex; align-items:center;gap:10px;">
                <div style="display: block;"><p class="font-size">quantidade<br>Respostas</p>
                    <div><p><span class="underline">00000</span></p></div>
                </div>
                    <div style="font-size: 20px;"><i class="fa-solid fa-check"></i></div>
                </div>
                </button>
                <button class="cards-dados btn" type="button" data-bs-toggle="modal" data-bs-target="#naoVizualizadas">
                <div style="display: flex;align-items:center;gap:10px;">
                <div style="display: block;"><p class="font-size">Não <br> Vizualizadas </p>
                <div><p><span class="underline">00000</span></p></div>
                </div>
                    <div style="font-size: 20px;"><i class="fa-solid fa-eye-slash"></i></div>
                </div>
                </button>
                <button class="cards-dados btn" type="button" data-bs-toggle="modal" data-bs-target="#respostasConsectivas">
                <div style="display: flex; align-items:center;gap:10px;">
                <div style="display: block;"><p class="font-size">Respostas<br>Consectivas</p>
                <div><p><span class="underline">00000</span></p></div></div>
                    <div style="font-size: 20px;"><i class="fa-regular fa-thumbs-up"></i></div>
                </div>
                </button>
                <button class="cards-dados btn" type="button" data-bs-toggle="modal" data-bs-target="#possiveisProblemas">
                <div style="display: flex; align-items:center;gap: 10px;">
                <div style="display: block;"><p class="font-size">Possíveis<br>Problemas</p>
                    <div><p><span class="underline">00000</span></p></div> 
                </div>
                    <div style="font-size: 20px;"><i class="fa-solid fa-circle-exclamation"></i></div>   
                </div>
                </button>
                <button class="cards-dados btn" type="button" data-bs-toggle="modal" data-bs-target="#possiveisOportunidades">
                <div style="display: flex; align-items:center;gap: 10px;">
                <div style="display: block;"><p class="font-size">Possíveis<br>Oportunidades</p>
                    <div><p><span class="underline">00000</span></p></div>
                </div>
                 <div style="font-size: 20px;"><i class="fa-solid fa-arrow-up"></i></div>
                </div>
                </button>
            
            </div>
            
            <div class="btn-disparar">
                <div>
                <div class="filtro-table">
                <p style="color: #ff520d; font-weight: 700;">selecionar<br>Filtros</p> 
                <button class="btn"><i class="fa-solid fa-filter"></i></button>  
                </div>
                </div>
                
            <div style="display:flex; gap: 10px;">
                    <div style="color: #ff520d; font-size:12px;"><p>Disparar <br> Pesquisa</p></div>
                    <button class="btn btn-smart"><i class="fa-solid fa-paper-plane"></i></button>
                    <div style="color: #ff520d; font-size:12px;"><p>Novo<br>Email</p></div>
                    <button type="button" class="btn btn-smart" data-bs-toggle="modal" data-bs-target="#novoEmail"><i class="fa-solid fa-user-plus"></i></button> 
            </div>
            </div>
                
            </div>
            <div class="tabelaLicenciados">
            <table id="tableDisparo" class="table table-borderless table-hover" style="text-align: center; table-layout: fixed; display: table; ">
            <thead  class="table-solid">
                <tr role="row">
                    <th scope="col">E-mail</th>
                    <th scope="col">Condomínio</th>
                    <th scope="col">Último Envio</th>
                    <th scope="col">Última Resposta</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody id="tableDisparo">
                <tr>
                    <td>Jacob</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><div><button class="btn"><i class="fa-solid fa-play"></i></button><button class="btn"><i class="fa-solid fa-pen"></i></button></div></td>
                </tr>
                
            </tbody>
            </table>
            <nav aria-label="Navegação de página exemplo" style="justify-content: center;">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Próximo">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Próximo</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="novoEmail" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">Adicionar Novo Email</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color:#ff520d;">Individualmente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false" style="color:#ff520d;">Planilha</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form>
                                    <div class="row p-3">
                                        <div class="col">
                                        <label class="text-modal" for="validationCustom01">Nome</label>
                                        <input type="text" class="form-control" placeholder="Preencher">
                                        </div>
                                        <div class="col">
                                        <label class="text-modal" for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="form-control" placeholder="Preencher">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col">
                                        <label class="text-modal" for="validationCustom01">Condomínio</label>
                                        <input style="color:#ff520d" type="text" class="form-control" placeholder="Preencher">
                                        </div>
                                        <div class="col">
                                        <label class="text-modal" for="validationCustom01">Tipo</label>
                                        <select class="custom-select form-control">
                                            <option value="1">Licenciado</option>
                                            <option value="2">Morador</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-smart">Salvar</button>
                                    </div>
                    
                                </form>
                            </div>
                            <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row p-2">
                                <div class="alert alert-dark" role="alert" style="font-size: 14px;">
                                Observação:<br>Para os envios dos email funcionar é necessario que a planilha esteja nessa configuração
                                <table>
                                <thead  class="table-alert">
                                    <tr role="row">
                                        <th scope="col">Nome do Pesquisado</th>
                                        <th scope="col">Email do Pesquisado</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Condomínio</th>
                                        <th scope="col">Tipo do Pesquisado</th>
                                    </tr>
                                </thead>
                                </table>
                                </div>   
                                <div class="custom-file">
                                    <input type="file" class="form-control" id="exampleId">
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-smart">Salvar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>
        <!-- Modal -->
        <div class="modal fade" id="pesquisaEnviadas" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">Pesquisas Enviadas</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <div class="tab-content" id="myTabContent">
                            
                        </div>
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>        
        <!-- Modal -->
        <div class="modal fade" id="quantidadeRespostas" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">quantidade de Respostas</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <div class="tab-content" id="myTabContent">
                        
                        </div>
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>
         <!-- Modal -->
         <div class="modal fade" id="naoVizualizadas" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">Não Vizualizadas</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-overflow">
                        <table class="table">
                        <thead class="table-modal">
                            <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Condomínio</th>
                            <th scope="col">Última Resposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>mario@teste.com</td>
                            <td>villa topazio</td>
                            <td>20/10/2020</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>            
         <!-- Modal -->
         <div class="modal fade" id="respostasConsectivas" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">Respostas Consectivas</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        
                    </div>
                            
                    </div>
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>            
         <!-- Modal -->
         <div class="modal fade" id="possiveisProblemas" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">Possíveis Problemas</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="table-overflow">
                        <table class="table">
                        <thead class="table-modal">
                            <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Condomínio</th>
                            <th scope="col">Última Resposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>mario@teste.com</td>
                            <td>villa topazio</td>
                            <td>20/10/2020</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                        
                    </div>
                            
                    </div>
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>
         <!-- Modal -->
         <div class="modal fade" id="possiveisOportunidades" style="z-index: 10000;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel" style="color: #ff520d;">Possíveis Oportunidade</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="table-overflow">
                        <table class="table">
                        <thead class="table-modal">
                            <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Condomínio</th>
                            <th scope="col">Última Resposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>mario@teste.com</td>
                            <td>villa topazio</td>
                            <td>20/10/2020</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                        
                                 
                    </div>
                    </div>
                    
                    
                    </div>
                    </div>    
    
    
    


        
     
       
</section>
<?php include 'footer.php'; ?>
    
    <script src="https://kit.fontawesome.com/1766e8d247.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/locale/bootstrap-table-pt-BR.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"crossorigin="anonymous"></script>
    
    <!-- ChartJS -->
    <script src="https://www.portalsmartstorebrasil.com.br/dash/plugins/chart.js/Chart.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="../dash/plugins/toastr/toastr.min.js"></script>

    <script src="js/traducao.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- DataTable -->
  <script src="../dash/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../dash/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../dash/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../dash/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../dash/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../dash/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../dash/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../dash/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../dash/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  
    <script></script>
    
</body>

</html>