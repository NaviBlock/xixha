
@extends ('layouts.adminuser')
@section ('contenido')

<div class="container-fluid adx">

        <div class="container adx">
            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
                <div class="card-body text-warning fix-card">
                    <h5 class="card-title">Padrón de Apicultores</h5>
                    <a class="nav-link e-coloresx px-2">Apicultor {{ auth()->user()->name }}</a>
                </div> 
            </div>
        </div>
    
        <div class="container">
            <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">

                    <div class="container-fluid">                        
                        <?php
                            $hora=date("g");
                            $minuto=date("i");
                            $segundo=date("s");
                            $antePost=date("a");
                            $dia=date("d");
                            $mes=date("n");
                            $ao=date("o");                        
                            if($dia <= 29){
                                echo "<h3 class=\"e-text-color\">Convocatoria para hoy: $hora:$minuto:$segundo $antePost, Dia $dia/$mes/$ao</h3>";
                            }else{
                                echo"Sitio No Activo";
                            }
                        ?>
                    </div>

                    <!--Card-->
                    <div class="container-fliud">  
                        <div class="row">      
                            
                            <!--Card1-->
                            <div class="col-md-4 ">
                                <div class="card text-center">
                                    <div class="card-body e-element-2 ">
                                        <h5 class="card-title text-primary">Convocatoria</h5>
                                        <p class="card-text text-justify e-element-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit nostrum voluptas omnis accusantium voluptatem odit, architecto ipsa deserunt harum temporibus id facilis ratione atque dolore assumenda ipsam eum. Quas, rem.</p>                                        
                                        <button class="btn btn-primary" id="myBtn">
                                            <div id="myModal2" class="modal">    
                                                <div class="modal-content">
                                                    <span class="close" hidden>&times;</span>
                                                    <p class="e-text-color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis fuga placeat repudiandae consequuntur ducimus rem, suscipit aut perferendis. Eaque perspiciatis debitis quae ducimus? Consequuntur voluptatem odit explicabo commodi, assumenda adipisci?</p>
                                                </div>    
                                            </div>        
                                            <a class="fix-boto" role="button">Detalles</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Card1-->
                            <div class="col-md-4 ">
                                    <div class="card text-center">
                                        <div class="card-body e-element-2 ">
                                            <h5 class="card-title text-primary">Convocatoria</h5>
                                            <p class="card-text text-justify e-element-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit nostrum voluptas omnis accusantium voluptatem odit, architecto ipsa deserunt harum temporibus id facilis ratione atque dolore assumenda ipsam eum. Quas, rem.</p>                                        
                                            <button class="btn btn-primary" id="myBtn">
                                                <div id="myModal3" class="modal">    
                                                    <div class="modal-content">
                                                        <span class="close" hidden>&times;</span>
                                                        <p class="e-text-color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis fuga placeat repudiandae consequuntur ducimus rem, suscipit aut perferendis. Eaque perspiciatis debitis quae ducimus? Consequuntur voluptatem odit explicabo commodi, assumenda adipisci?</p>
                                                    </div>    
                                                </div>        
                                                <a class="fix-boto" role="button">Detalles</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            
                            <!--Card1-->
                            <div class="col-md-4 ">
                                    <div class="card text-center">
                                        <div class="card-body e-element-2 ">
                                            <h5 class="card-title text-primary">Convocatoria</h5>
                                            <p class="card-text text-justify e-element-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit nostrum voluptas omnis accusantium voluptatem odit, architecto ipsa deserunt harum temporibus id facilis ratione atque dolore assumenda ipsam eum. Quas, rem.</p>                                        
                                            <button class="btn btn-primary" id="myBtn">
                                                <div id="myModal" class="modal">    
                                                    <div class="modal-content">
                                                        <span class="close" hidden>&times;</span>
                                                        <p class="e-text-color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis fuga placeat repudiandae consequuntur ducimus rem, suscipit aut perferendis. Eaque perspiciatis debitis quae ducimus? Consequuntur voluptatem odit explicabo commodi, assumenda adipisci?</p>
                                                    </div>    
                                                </div>        
                                                <a class="fix-boto" role="button">Detalles</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="card-footer mx-auto e-alineacion">
                    <span class="foorter-color-e">&copy;XIXHÁ 2019</span>
                </div>                
            </div>
        </div>
    </div>

    
@endsection