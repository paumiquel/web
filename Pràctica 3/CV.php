<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currículum vitae</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" ><!--Bootstrap Icons-->
</head>
<body>
  <?php require 'partials/header.php' ?>
  <a href="logout.php" style="text-align:center; display:block;text-decoration:underline;
    color: #333;">Logout</a>
    <div class="container">
        <div class="row-md-12" id="titol">
        <?php 
        include 'databaseCV.php';
        $sql=" SELECT * FROM DB_CV_1 WHERE id = (SELECT MAX(id) FROM DB_CV_1)";
        $execucio=mysqli_query($conn1, $sql);
        while($fila=mysqli_fetch_array($execucio)){
            $dades=$fila[1]."||".
            $fila[2]."||".
            $fila[3]."||".
            $fila[4]."||".
            $fila[5]."||".
            $fila[6]."||".
            $fila[7]."||".
            $fila[8]."||".
            $fila[9]."||".
            $fila[10]."||". 
            $fila[11]."||".
            $fila[12]."||".
            $fila[13]."||".
            $fila[14]."||".
            $fila[15]."||".
            $fila[16]."||".
            $fila[17]."||".
            $fila[18]."||". 
            $fila[19]."||".
            $fila[20]."||".
            $fila[21]."||".
            $fila[32]."||".
            $fila[33]."||".
            $fila[34]."||".
            $fila[35]."||".
            $fila[36]."||".
            $fila[37]."||".
            $fila[38]."||". 
            $fila[39]."||".
            $fila[40]."||".
            $fila[41]."||".
            $fila[42]."||". 
            $fila[43]."||".
            $fila[44]."||".
            $fila[45]."||".
            $fila[46]."||". 
            $fila[47]."||".
            $fila[48]."||".
            $fila[49]."||".
            $fila[50];
        
        ?>

        </div>

            <button class="btn-small modal-trigger"  data-target="modal1" id="veure"  onclick="omplirModal_actualitzar('<?php echo $dades ?>')";>EDITAR</button>
            
        <form id=dadesper method="POST">

        <h2 class="p-5 text-center">Pau Bentué</h2>
          
    </header>

    <div class="container containerfoto">
      <img class="img-fluid rounded-circle lafoto" src="foto.jpg" alt="Una foto d'un noi que no existeix">
    </div>
  </div>   
  <div class="container" style="margin-top: 15px;">
      <div class="row">
        <div class="col-4">
          <div class="row dadesper"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Dades personals</h7><hr>
            <ul class="list-unstyled">
              <li><i class="bi bi-person-fill"></i>&nbsp;Pau Miquel</li>
              <li><i class="bi bi-house-door-fill"></i>&nbsp;Carrer de Mont Blanc, 09431, Barcelona</li>
              <li><i class="bi bi-telephone-fill"></i>&nbsp;649 468 133</li>
              <li><i class="bi bi-envelope-fill"></i>&nbsp;pmiki@gmail.com</li>
              <li><i class="bi bi-calendar-month"></i>&nbsp;22/03/2002</li>
              <li><i class="bi bi-flag-fill"></i>&nbsp;Catalunya</li>
              <li><i class="bi bi-phone"></i>&nbsp;985 211 392</li>
              <li><i class="bi bi-people-fill"></i>&nbsp;Solter</li>
              <li><i class="bi bi-stoplights-fill"></i>&nbsp;Classe C</li>
            </ul>
          </div>

        </form>
                
                <div id="habilidades">
                <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Habilitats</strong></h4>
                    <hr>

 
                    <div class="row">
                        <div class="col">
                            <h6><?php echo $fila[1]; ?></h6>
                            <h6><?php echo $fila[3]; ?></h6>
                            <h6><?php echo $fila[5]; ?></h6>
                            <h6><?php echo $fila[7]; ?></h6>
                            <h6><?php echo $fila[9]; ?></h6>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[2]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[4]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[6]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[8]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[10]; ?>%">
                                    </div>
                                </div>                            
                        </div>
                    </div>

                    <br>
                </div>



                <div id="Idiomas">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Idiomes</strong></h4>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <h6><?php echo $fila[11]; ?></h6>
                            <h6><?php echo $fila[12]; ?></h6>
                            <h6><?php echo $fila[13]; ?></h6>
                            <h6><?php echo $fila[14]; ?></h6>
                            <br>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[15]; ?>%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80" style="width:<?php echo $fila[16]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80" style="width:<?php echo $fila[17]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="50" style="width:<?php echo $fila[18]; ?>%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="informatica">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Informàtica</strong></h4>
                    <hr>


                    <div class="row">
                        <div class="col">
                            <h6><?php echo $fila[19]; ?></h6>
                            <h6><?php echo $fila[20]; ?></h6>
                            <h6><?php echo $fila[21]; ?></h6>
                            <h6><?php echo $fila[22]; ?></h6>
                            <h6><?php echo $fila[23]; ?></h6>
                            <br>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[24]; ?>%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[25]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[26]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[27]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[28]; ?>%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row"><h7 class="mt-2 mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Competències</h7><hr>
            <ul class="list-unstyled">
              <li><i class="bi bi-caret-right-fill"></i>&nbsp;Comuniació</li>
              <li><i class="bi bi-caret-right-fill"></i>&nbsp;Treball en equip</li>
          </div>
          </div>
        <div class="col-8 ps-5">
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Perfil</h7><hr>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum consequatur quaerat, perferendis quis cumque culpa. A adipisci consectetur suscipit laborum sapiente, impedit, in non atque ea architecto earum sed quae quia eligendi ex iure assumenda est repellendus dolor at recusandae sint nesciunt, voluptatibus provident! Eaque labore ipsa nihil quis?</p>
          </div>
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Experiència laboral</h7><hr>
              <div class="row">
                <div class="col-4"><p>01/2017 - Present</p></div>
                <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis libero quisquam explicabo dignissimos, nemo rem voluptatum ullam reprehenderit sit sapiente officia eligendi unde veritatis cumque id eum facere quo est nobis totam error laborum?</p></div>
              </div>
              <div class="row">
                <div class="col-4"><p>08/2016 - 12/2016</p></div>
                <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, aut.</p>
                  <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>consectetur adipisicing elit nostrum.</li>
                    <li>Libero inventore sunt placeat cum.</li>
                    <li>Lorem, ipsum dolor sit amet inventore sunt placeat elit</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-4"><p>01/2015 - 07/2016</p></div>
                <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis libero quisquam explicabo dignissimos, nemo rem voluptatum ullam reprehenderit sit sapiente officia eligendi unde veritatis cumque id eum facere quo est nobis totam error laborum?</p></div>
              </div>
          </div>
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Educació</h7><hr>
            <div class="row">
              <div class="col-4"><p>08/208 - Present</p></div>
              <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis libero quisquam explicabo dignissimos, nemo rem voluptatum ullam reprehenderit sit sapiente officia eligendi unde veritatis cumque id eum facere quo est nobis totam error laborum?</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>


            </div>
        </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
        <form id=form_actualitzar method="POST">

    
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Habilitats</h3>

            <div id=dades-hab>
            <span class="material-symbols-outlined">
                construction
            </span>
            <input type="text" name="hab1" value="" id="hab1" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab2" value="" id="hab2" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab3" value="" id="hab3" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab4" value="" id="hab4" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab5" value="" id="hab5" placeholder="Afegeix una habilitat"></input>
            </div>                    
        </div>

        <div class="col-6">
            <div id=dades-percent>
                <h3>Percentatges</h3>
                <span class="material-symbols-outlined">
                    percent
                </span>
                <input type="number" name="per1" value="" id="per1" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per2" value="" id="per2" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per3" value="" id="per3" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per4" value="" id="per4" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per5" value="" id="per5" placeholder="Percentatge de l'habilitat"></input>
            </div>
        </div>
    </div>

    
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Idiomes</h3>
            <div id=dades-idiom>
                <span class="material-symbols-outlined">
                    translate
                </span>
                <input type="text" name="idi1" value="" id="idi1" placeholder="Afegeix un idioma"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="idi2" value="" id="idi2" placeholder="Afegeix un idioma"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="idi3" value="" id="idi3" placeholder="Afegeix un idioma"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="idi4" value="" id="idi4" placeholder="Afegeix un idioma"></input>
            </div>
        </div>

        <div class="col-6">    

            <div id=dades-percent>
                <h3>Percentatges</h3>
                <span class="material-symbols-outlined">
                    percent
                </span>
                <input type="number" name="per11" value="" id="per11" placeholder="Percentatge de l'idioma"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per12" value="" id="per12" placeholder="Percentatge de l'idioma"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per13" value="" id="per13" placeholder="Percentatge de l'idioma"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per14" value="" id="per14" placeholder="Percentatge de l'idioma"></input>
            </div>
        </div>
    </div>

    <!--informa i percent-->
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Informàtica</h3>
            <div id=dades-idiom>
                <span class="material-symbols-outlined">
                    computer
                </span>
                <input type="text" name="inf1" value="" id="inf1" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf2" value="" id="inf2" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf3" value="" id="inf3" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf4" value="" id="inf4" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf5" value="" id="inf5" placeholder="Afegeix un llenguatge de programació"></input>
            </div>        
        </div>

        <div class="col-6">
            <div id=dades-percent>
                <h3>Percentatges</h3>
                <span class="material-symbols-outlined">
                    percent
                </span>
                <input type="number" name="per21" value="" id="per21" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per22" value="" id="per22" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per23" value="" id="per23" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per24" value="" id="per24" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per25" value="" id="per25" placeholder="Percentatge del llenguatge"></input>
            </div>
        </div>
    </div>



  <script type="text/javascript">

    $(document).ready(function(){

    $("#Actualitzar").on('click',function(e){
            e.preventDefault();
        actualitzar_dades();
        });

    });

    </script>
        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#Actualitzar").on('click',function(e){
                    e.preventDefault();
                    afegir_dades();
                })
            });

        </script>
        <script>

        $(document).ready(function(){
            M.AutoInit();
        });
        </script>
  </body>
  <footer>
  <div class="container">
    <p>Pàgina 1/2</p>
  </div>
</footer>
</html>