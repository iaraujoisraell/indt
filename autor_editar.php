<?php

    $id = $_GET['id'];
    echo $id;
    ?>
<html>
    <head>
           <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
   
        <meta charset="UTF-8">
        <title></title>
   
        
         <link href="css/plugins/pace/pace.css" rel="stylesheet">
    <script src="js/plugins/pace/pace.js"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="css/demo.css" rel="stylesheet">
        
    </head>
    <body>
        
           <script type="text/javascript">
                function optionCheck(valor){

                    if(valor == 1){
                     //   document.getElementById("hiddenDiv").style.visibility ="visible";
                        document.getElementById("add_livro").style.display = "block";
                    }else{
                        document.getElementById("add_livro").style.display = "none";
                    }

                }
                
                       function optionCheck_autor(valor){

                    if(valor == 1){
                     //   document.getElementById("hiddenDiv").style.visibility ="visible";
                        document.getElementById("add_autor").style.display = "block";
                    }else{
                        document.getElementById("add_autor").style.display = "none";
                    }

                }


            </script>
                        
        <div id="wrapper">
            <div id="page-wrapper">

            <div class="page-content">
             <!-- begin PAGE TITLE ROW -->
             <div class="portlet-body">
                 <br>
                                <ul id="myPills" class="nav nav-pills">
                                    <li ><a href="index.php" data-toggle="tab">Livro</a>
                                    </li>
                                    <li class="active"><a href="autor.php" data-toggle="tab">Autor</a>
                                    </li>
                                    
                                </ul>
                                <div id="myPillsContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="livro">
                                    
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="page-title">
                                                    <h1>Editar Cadastro de Autor

                                                    </h1>
                                                    
                                                </div>
                                            </div>
                                           <?php
                                           
                                                            
                                            $url = "https://bibliapp.herokuapp.com/api/authors/$id";
                                            
                                            
                                            $curl = curl_init();
                                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
                                            curl_setopt($curl, CURLOPT_URL, $url);
                                            curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1');
                                            $return = curl_exec($curl);
                                           
                                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                                            curl_close($curl);
                                           
                                          //  var_dump($return);      
                                             $obj = json_decode($return);
                                             //imprime o conteúdo do objeto 
                                            $nome = $obj->firstName; 
                                            $sobre_nome = $obj->lastName; 
                                           
                                             
                                            
                                          
                                             
                                                       
                                           ?>
                                                <div class="col-lg-12">
                                                    
                                                    <form action="autor_edit.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                                                     <h4>Nome</h4>
                                                     <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control" maxlength="50" id="basicMax" />
                                                     <h4>Sobrenome</h4>
                                                     <input type="text" name="sobrenome" value="<?php echo $sobre_nome; ?>" class="form-control" maxlength="50" id="basicMax" /> 
                                                       
                                                        <center>
                                                            <div class="col-md-12">

                                                                <div
                                                                    class="fprom-group"><input type="submit" class="btn btn-primary"  style="padding: 6px 15px; margin:15px 0;" value="Enviar">
                                                                    <a  class="btn btn-danger" href="#" onclick="optionCheck_autor('0')">Fechar</a>
                                                                </div>   
                                                            </div>
                                                        </center>
                                                    </form>
                                            </div>
                                           
                                            <!-- /.col-lg-12 -->
                                        </div>
             
                                    <div class="row">
                     
                </div>
                                    
                                    </div>
                                    
                                    
                                </div>
                            </div>
             
                
           </div>
        </div>   
        </div>    
      
    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="js/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <script src="js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>
    <script src="js/demo/advanced-tables-demo.js"></script>
</html>
