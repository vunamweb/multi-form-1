<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <?php
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "multi_form";

    
   
   //$servername = "localhost";
//   $username = "d01c8fdb";
//   $password = "xhTgWp3yVFFwTuzU";
//   $dbname = "d01c8fdb";
      
   $countPage = 5;
 
            
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
   ?>
	<div id="page">
		<?php require 'header.php'; ?>

      	<main>
		  <div class="slider-pro">
		     
		
			<div class="sp-slides">
			  <!-- page wellcome  -->
			  <div class="sp-slide">
				 <section class="section_welcome">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<h2 class="headline">Digital Readiness Check</h2>
								<h3 class="sub_headline">Status und Anforderungen ermitteln</h3>
								<p>Ihr Team, Bereich oder das gesamte Unternehmen - auf
								den verschiedenen Ebenen der Organisation kann die
								Bereitschaft zur digitalen Transformation unterschiedlich
								sein. Für Sie ist wichtig zu wissen: „Ready to go?“
								Die Bereitschaft zum Handeln ist entscheidend. Nur
								dann werden vorhandene Fähigkeiten aktiviert und
								konsequent neue Kompetenzen entwickelt. Das zeichnet
								eine leistungsfähige Organisation aus.</p>
								<p>Der folgende Check zeigt, wo Ihre Einheit oder gesamte
								Organisation steht, wo Hindernisse sind und welche
								nächsten Schritte zur erfolgreichen digitalen Transformation
								aktuell geeignet sind. Die nachfolgenden Punkte
								für ihre Eigenbewertung folgen einem klaren Raster.
								Jedes Ergebnis ist wertvoll zur Planung der weiteren
								digitalen Transformation.</p>
								<p>Selbstverständlich ist jede einzelne Bewertung subjektiv.
								Durch die insgesamt 50 Aussagen, die Sie gleich
								einordnen, ergibt sich jedoch ein Bild, mit dem Sie
								optimal arbeiten können. Die nächsten 10 bis maximal
								15 Minuten sind also gut investiert. Beginnen wir mit
								einigen kurzen Angaben, damit die Aussagen für Sie
								ausgewertet werden können.</p>
								<a class="slider-next btn btnOrange" href="#" class="btn btnOrange">Hier geht´s weiter</a>
							</div>
						</div>
					</div>
      		     </section>
			</div>
			<!-- end page wellcome  -->
			
			<!-- page register  -->
			 <div class="sp-slide">
				 <section class="section_welcome">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<h2 class="headline">Digital Readiness Check</h2>
								<h3 class="sub_headline">Registrierung</h3>
								<p>Bitte füllen Sie die nachfolgenden Felder aus und bestätigen die Nutzung Ihrer Angaben, damit wir das Ergebnis des Digital Readiness Check bewerten, Ihnen zusenden und besprechen können.</p>
								<form class="frm_register">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Vorname">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Unternehmen">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="E-Mail">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Telefon">
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
										<label class="form-check-label" for="defaultCheck1">
											Feld zum Anklicken<br>
											Ich stimme zu, dass Groß & Cie. meine Angaben aus dem Formular
											und der nachfolgenden Checkliste zum Zwecke der Auswertung
											speichert. Die Daten werden nach abgeschlossener Bearbeitung gelöscht.<br>
											Hinweis: Sie können Ihre Einwilligung jederzeit per E-Mail an info@
											gross-cie.com widerrufen. Detaillierte Informationen zum Umgang
											mit Nutzerdaten finden Sie in unserer Datenschutzerklärung
										</label>
									</div>
									<button type="submit" class="btn btnOrange slider-next">Hier geht´s zur Checkliste</button>
								  </form>
							</div>
						</div>
					</div>
      		</section>
			</div>
			<!-- end page register  -->  
			
			<!-- page explain  -->
			 <div class="sp-slide">
			   <section class="section_welcome">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<h2 class="headline">Digital Readiness Check</h2>
								<h3 class="sub_headline">Einleitung</h3>
								<p>Jeder Teil besteht aus zehn Aussagen. Zu jeder Selbstaussage wählen
								Sie bitte aus den immer gleichen fünf Bewertungen jeweils diejenige,
								die für die Situation in der organisationalen Einheit, die Sie
								betrachten, aktuell zutreffend ist. Kreuzen Sie das passende Feld an:</p>
								<ul class="list_explain">
									<li class="clearfix"><span class="box">--</span> <span class="text">bedeutet „Stimmt gar nicht“ - Die Aussage trifft in keinem Fall zu.</span></li>
									<li class="clearfix"><span class="box">-</span> <span class="text">bedeutet „Stimmt manchmal“ - In Ausnahmefällen trifft die Aussagezu.</span></li>
									<li class="clearfix"><span class="box">◦</span> <span class="text">bedeutet „Teils-teils“ - Die Aussage ist sehr wechselhaft gültig.</span></li>
									<li class="clearfix"><span class="box">+</span> <span class="text">bedeutet „Stimmt häufig“ - In der Regel trifft die Aussage zu.</li>
									<li class="clearfix"><span class="box">++</span> <span class="text">bedeutet „Stimmt immer“ - Die Aussage stimmt ohne Einschränkung.</span></li>
									<li class="clearfix"><span class="box">?</span> <span class="text">bedeutet „Weiß nicht“ - Die Aussage kann nicht bewertet werden.</span></li>
								</ul>
								<a href="#" class="btn btnOrange slider-next">Start</a>
							</div>
						</div>
					</div>
      		</section>
			</div>
			<!-- end page explain  --> 
			
			<!-- page question  -->
			 <?php for($i=1;$i<=$countPage;$i++){ ?>
			  <div class="sp-slide">
				   <section class="section_welcome">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<h4 class="sub_headline2">Situation</h4>
					  <a class="i_notify" href="#"><img src="images/1x/i_notify.png" alt=""></a>
					   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
							  <a  page="3" class="tab-header nav-link <?php if($i == 1) echo 'active'?>"  href="#"></a>
							</li>
							<li class="nav-item">
							  <a  page="4" class="tab-header nav-link <?php if($i == 2) echo 'active'?>"  href="#" ></a>
							</li>
							<li class="nav-item">
							  <a  page="5" class="tab-header nav-link <?php if($i == 3) echo 'active'?>"  href="#"></a>
							</li>
							<li class="nav-item">
							  <a  page="6" class="tab-header nav-link <?php if($i == 4) echo 'active'?>"  href="#"></a>
							</li>
							<li class="nav-item">
							  <a  page="7" class="tab-header nav-link <?php if($i == 5) echo 'active'?>"  href="#"></a>
							</li>
					  </ul>
					  <div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  <h6>Starten wir mit der Situation!</h6>
						  <p>Bitte bewerten Sie jede Aussage, damit die Checkliste vollständig ist.</p>
						  <ul class="list_content_line">
							 <?php 
								$row_question = 1;
								$sql = "SELECT * FROM question where page=".$i."";
								$result = $conn->query($sql);
								// output data of each row
								while($row = $result->fetch_assoc()) {
								  ?>
									<li>
									  <div class="row" row="<?php echo $row_question ?>">
										<div class="col col-12 col-sm-8 conten-tab-text" parent-tab="<?php echo $i ?>">
										  <p><?php echo $row['description'] ?></p>
										</div>
										<div class="col col-12 col-sm-4">
										  <div class="w_checkbox clearfix">
											<div class="custom-control custom-control-inline checkbox">  
											  <input name="<?php echo "check".$i."".$row_question."" ?>" type="radio" id="<?php echo "check".$i."".$row_question."" ?>1" value="1">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>1" class="check01"></label>
											  <span class="text_rotate">Stimmt gar nicht</span>
											</div>
											<div class="custom-control custom-control-inline checkbox">
											  <input name="<?php echo "check".$i."".$row_question."" ?>"  type="radio" id="<?php echo "check".$i."".$row_question."" ?>2" value="2">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>2" class="check02"></label>
											  <span class="text_rotate">Stimmt manchmal</span>
											</div>
											<div class="custom-control custom-control-inline checkbox">  
											  <input name="<?php echo "check".$i."".$row_question."" ?>"  type="radio" id="<?php echo "check".$i."".$row_question."" ?>3" value="3">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>3" class="check03"></label>
											  <span class="text_rotate">Teils-teils</span>
											</div>
											<div class="custom-control custom-control-inline checkbox">
											  <input name="<?php echo "check".$i."".$row_question."" ?>"   type="radio" id="<?php echo "check".$i."".$row_question."" ?>4" value="4">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>4" class="check04"></label>
											  <span class="text_rotate">Stimmt häufig</span>
											</div>
											<div class="custom-control custom-control-inline checkbox">  
											  <input name="<?php echo "check".$i."".$row_question."" ?>"   type="radio"  id="<?php echo "check".$i."".$row_question."" ?>5"value="5">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>5" class="check05"></label>
											  <span class="text_rotate">Stimmt immer</span>
											</div>
											<div class="custom-control custom-control-inline checkbox">
											  <input name="<?php echo "check".$i."".$row_question."" ?>"   type="radio" id="<?php echo "check".$i."".$row_question."" ?>6" value="6">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>6" class="check06"></label>
											  <span class="text_rotate">Weiß nicht</span>
											</div>
										  </div>
										</div>
									  </div>
								</li>
								  <?php  
								  $row_question++;          
								}
							 ?>
							</ul>

						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic perspiciatis doloremque quod excepturi accusantium assumenda? Quos soluta mollitia itaque blanditiis voluptas beatae maxime provident illum, id nemo quae iure, harum.</p>
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic perspiciatis doloremque quod excepturi accusantium assumenda? Quos soluta mollitia itaque blanditiis voluptas beatae maxime provident illum, id nemo quae iure, harum.</p>
						</div>
					  </div>
								<?php if($i != 5) { ?>
							      	<a tab="<?php echo $i ?>" page="<?php echo $i+3 ?>" href="#" class="btn btnOrange disabled nextPage">WEITER MIT TEIL <?php echo ($i+1)  ?> VON 5 </a>
								<?php }else{?>
							        	<a tab="<?php echo $i ?>" page="<?php echo $i+3 ?>" href="#" class="btn btnOrange disabled nextPage"> Weiter mit dem letzten Teil 5 </a>
								<?php }?>
							</div>
						</div>
					</div>
				</section>
			</div>
			 <?php }?>
			<!-- end page question  -->
			
			<!-- page finish -->
			<div class="sp-slide">
			   <section class="section_welcome">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<h2 class="headline">Digital Readiness Check</h2>
								<img class="img-fluid mb-3" src="images/1x/100percent.png" alt="">
								<h3 class="sub_headline">Sie haben es geschafft!<br>
								Danke für Ihre Bewertung! </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur.</p>
								<p class="mb-0"><a href="results.php" class="btn btnBlue">ABSSENDEN</a></p>
								<a href="control_settings.php" class="btn btnOrange">VORAB PRÜFEN</a>
							</div>
						</div>
					</div>
      		</section>
			</div>
			<!-- end page finish -->
			
			<!-- page control setting -->
			<div class="sp-slide">
			   <section class="section_welcome">
      			<div class="container">
      				<div class="row">
      					<div class="col col-12">
      						<h4 class="sub_headline2">Vernetzung</h4>

                  <ul class="list_content_line">
                     <?php for($i=1;$i<=$countPage;$i++){ ?>
					   <?php 
								$row_question = 1;
								$sql = "SELECT * FROM question where page=".$i."";
								$result = $conn->query($sql);
								// output data of each row
								while($row = $result->fetch_assoc()) {
								  ?>
									<li>
										  <?php echo $row['description'] ?>
										  <div class="w_checkbox clearfix">
											<div class="custom-control custom-control-inline checkbox" id="setting<?php echo $i . $row_question .'1' ?>">  
											  <input name="<?php echo "check".$i."".$row_question."" ?>" type="radio" id="<?php echo "check".$i."".$row_question."" ?>1" value="1">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>1" class="check01"></label>
											  <span class="text_rotate">Stimmt gar nicht</span>
											</div>
											<div class="custom-control custom-control-inline checkbox" id="setting<?php echo $i . $row_question .'2' ?>">
											  <input name="<?php echo "check".$i."".$row_question."" ?>"  type="radio" id="<?php echo "check".$i."".$row_question."" ?>2" value="2">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>2" class="check02"></label>
											  <span class="text_rotate">Stimmt manchmal</span>
											</div>
											<div class="custom-control custom-control-inline checkbox" id="setting<?php echo $i . $row_question .'3' ?>">  
											  <input name="<?php echo "check".$i."".$row_question."" ?>"  type="radio" id="<?php echo "check".$i."".$row_question."" ?>3" value="3">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>3" class="check03"></label>
											  <span class="text_rotate">Teils-teils</span>
											</div>
											<div class="custom-control custom-control-inline checkbox" id="setting<?php echo $i . $row_question .'4' ?>">
											  <input name="<?php echo "check".$i."".$row_question."" ?>"   type="radio" id="<?php echo "check".$i."".$row_question."" ?>4" value="4">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>4" class="check04"></label>
											  <span class="text_rotate">Stimmt häufig</span>
											</div>
											<div class="custom-control custom-control-inline checkbox" id="setting<?php echo $i . $row_question .'5' ?>">  
											  <input name="<?php echo "check".$i."".$row_question."" ?>"   type="radio"  id="<?php echo "check".$i."".$row_question."" ?>5"value="5">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>5" class="check05"></label>
											  <span class="text_rotate">Stimmt immer</span>
											</div>
											<div class="custom-control custom-control-inline checkbox" id="setting<?php echo $i . $row_question .'6' ?>">
											  <input name="<?php echo "check".$i."".$row_question."" ?>"   type="radio" id="<?php echo "check".$i."".$row_question."" ?>6" value="6">  
											  <label for="<?php echo "check".$i."".$row_question."" ?>6" class="check06"></label>
											  <span class="text_rotate">Weiß nicht</span>
											</div>
											
											<a class="i_notify" href="#"><img src="images/1x/i_notify.png" alt=""></a>
										  </div>
                                 </li>
								  <?php  
								  $row_question++;          
								}
							 ?>
					 <?php } ?>
					</ul>
      						
      					</div>
      				</div>
      			</div>
      		</section>
          
          <a href="finished.php" class="btn btnOrange btnReady">FERTIG</a>
			</div>
			<!-- end page control setting -->
			
			</div>
		  </div>
		</main>
	</div>

    <?php require 'js-footer.php'; ?>
</body>

</html>