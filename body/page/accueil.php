<div id="up" class="row">
	<?php
include __DIR__.'/../menu.php';
?>
<?php
include __DIR__.'/../sidebar.php';
?>










<div class="col-md-12 col-lg-8 formulaire-home">
	<?php
include __DIR__.'/../menu-commander.php';
?>

<div class="modal" id="changement-de-titulaire">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form text-center " placeholder="AA-123-AA" type="text" name="immatriculation" required><br>

								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type" required>
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<!--<option value="">Choisissez une marque</option>-->
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>




							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>

				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>

<div class="modal" id="changement-de-domicile">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
									<input type="hidden" value="4" name="demande">
								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type">
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>




							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>

<div class="modal" id="demande-de-duplicata">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
									<input type="hidden" value="3" name="demande">
								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type">
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>




							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>

<div class="modal" id="declaration-de-cession">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type">
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>



							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>

<div class="modal" id="changement-prop-veh-occ-fr">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
									<input type="hidden" value="1" name="demande">
								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type">
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>




							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>

<div class="modal" id="immatriculation-veh-neuf">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
									<input type="hidden" value="2" name="demande">
								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type">
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>




							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>


<div class="modal" id="changement-de-statut-matrimonial">
	<div class="col-8 mx-auto modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<div id="Changement-de-titulaire" class="row commander">
					<div class="row search">
						<form class="row" method="POST" action="Result.php">
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Votre immatriculation
									</div>
									<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
									<input type="hidden" value="5" name="demande">
								</div>
							</div>
							<div class="col-9 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Departement (ex: 01, 02, 2A, 2B, 974, 976)
									</div>
									<input type="text" class="search-form text-center mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
								</div>
							</div>
							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Type
									</div>
									<select class="mx-auto search-form" name="type">
										<option value="1">Voiture particulière (VP)</option>
										<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
										<option value="3">Cyclomoteur 50cm³ (CL)</option>
										<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
										<option value="5">Tricycle à moteur (TM)</option>
										<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
										<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
										<option value="8">Camion > 3,5t (CAM)</option>
										<option value="9">Bus > 3,5t (TCP)</option>
										<option value="10">Tracteur Routier > 3,5t (TRR)</option>
										<option value="11">Véhicule spécialisé (VASP)</option>
										<option value="12">Remorque / semi (REM, SREM)</option>$
										<option value="13">Caravane (RESP)</option>
										<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Modele
									</div>
									<select class="mx-auto search-form" name="modele">
										<option value="RENAULT"> RENAULT </option>
										<option value="CITROEN"> CITROEN </option>
										<option value="PEUGEOT"> PEUGEOT </option>
										<option value="FIAT"> FIAT </option>
										<option value="MERCEDES"> MERCEDES </option>
										<option value="">----------------------------</option>
										<option value="ABARTH">ABARTH</option>
										<option value="AC">AC</option>
										<option value="ac cobra">AC COBRA</option>
										<option value="ACREA">ACREA</option>
										<option value="AIXAM">AIXAM</option>
										<option value="AIXAM PRO">AIXAM PRO</option>
										<option value="ALFA ROMEO">ALFA ROMEO</option>
										<option value="AUDI">AUDI</option>
										<option value="APRILIA">APRILIA</option>
										<option value="ASTON MARTIN">ASTON MARTIN</option>
										<option value="BENELLI">BENELLI</option>
										<option value="BETA">BETA</option>
										<option value="BIMOTA">BIMOTA</option>
										<option value="BMW">BMW</option>
										<option value="BUELL">BUELL</option>
										<option value="CAGIVA">CAGIVA</option>
										<option value="CHATENET">CHATENET</option>
										<option value="CHRYSLER">CHRYSLER</option>
										<option value="CITROEN">CITROEN</option>
										<option value="COMARTH">COMARTH</option>
										<option value="COURB">COURB</option>
										<option value="DACIA">DACIA</option>
										<option value="DANGEL">DANGEL</option>
										<option value="DE LOREAN">DE LOREAN</option>
										<option value="DE TOMASO">DE TOMASO</option>
										<option value="DKW">DKW</option>
										<option value="DODGE">DODGE</option>
										<option value="DAELIM">DAELIM</option>
										<option value="DERBI">DERBI</option>
										<option value="DUCATI">DUCATI</option>
										<option value="DODGE">DODGE</option>
										<option value="DONKERVOORT">DONKERVOORT</option>
										<option value="DS">DS</option>
										<option value="DUE">DUE</option>
										<option value="ERAD">ERAD</option>
										<option value="EXCALIBUR">EXCALIBUR</option>
										<option value="EDUARD">EDUARD</option>
										<option value="FAUTRAS">FAUTRAS</option>
										<option value="FERRARI">FERRARI</option>
										<option value="FIAT">FIAT</option>
										<option value="FORD">FORD</option>
										<option value="GAC GONOW">GAC GONOW</option>
										<option value="GAS GAS">GAS GAS</option>
										<option value="GG">GG</option>
										<option value="GILERA">GILERA</option>
										<option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
										<option value="HEADBANGER">HEADBANGER</option>
										<option value="HM">HM</option>
										<option value="HONDA">HONDA</option>
										<option value="HYUNDAI">HYUNDAI</option>
										<option value="HUSABERG">HUSABERG</option>
										<option value="HUSQVARNA">HUSQVARNA</option>
										<option value="HYOSUNG">HYOSUNG</option>
										<option value="INDIAN">INDIAN</option>
										<option value="ISUZU">ISUZU</option>
										<option value="IVECO">IVECO</option>
										<option value="JEEP">JEEP</option>
										<option value="JDM SIMPA">JDM SIMPA</option>
										<option value="Jinlun">Jinlun</option>
										<option value="KAWASAKI">KAWASAKI</option>
										<option value="KEEWAY">KEEWAY</option>
										<option value="KNIEVEL">KNIEVEL</option>
										<option value="KTM">KTM</option>
										<option value="KYMCO">KYMCO</option>
										<option value="KIA">KIA</option>
										<option value="LADA">LADA</option>
										<option value="LAMBORGHINI">LAMBORGHINI</option>
										<option value="LANCIA">LANCIA</option>
										<option value="LAND ROVER">LAND ROVER</option>
										<option value="LEONART">LEONART</option>
										<option value="LEXUS">LEXUS</option>
										<option value="LIGIER">LIEBHERR</option>
										<option value="MAN">MAN</option>
										<option value="MAZDA">MAZDA</option>
										<option value="MASH">MASH</option>
										<option value="MATRA">MATRA</option>
										<option value="MBK">MBK</option>
										<option value="MCCORMICK">MCCORMICK</option>
										<option value="MONTESA">MONTESA</option>
										<option value="MOTO GUZZI">MOTO GUZZI</option>
										<option value="MOTO MORINI">MOTO MORINI</option>
										<option value="MOTRAC">MOTRAC</option>
										<option value="MV AGUSTA">MV AGUSTA</option>
										<option value="MZ">MZ</option>
										<option value="MEGA">MEGA</option>
										<option value="MERCEDES">MERCEDES</option>
										<option value="MINI">MINI</option>
										<option value="MINI MOKE">MINI MOKE</option>
										<option value="MITSUBISHI">MITSUBISHI</option>
										<option value="NISSAN">NISSAN</option>
										<option value="OPEL">OPEL</option>
										<option value="PEUGEOT">PEUGEOT</option>
										<option value="PIAGGIO">PIAGGIO</option>
										<option value="PORSCHE">PORSCHE</option>
										<option value="RENAULT">RENAULT</option>
										<option value="REWACO">REWACO</option>
										<option value="RIEJU">RIEJU</option>
										<option value="ROVER">ROVER</option>
										<option value="ROYAL ENFIELD">ROYAL ENFIELD</option>
										<option value="SANTANA">SANTANA</option>
										<option value="SATELLITE">SATELLITE</option>
										<option value="SEAT">SEAT</option>
										<option value="SKODA">SKODA</option>
										<option value="SMART">SMART</option>
										<option value="SHERCO">SHERCO</option>
										<option value="SKY TEAM">SKY TEAM</option>
										<option value="SUBARU">SUBARU</option>
										<option value="SUZUKI">SUZUKI</option>
										<option value="SWM">SWM</option>
										<option value="SYM">SYM</option>
										<option value="SSANGYONG">SSANGYONG</option>
										<option value="TOYOTA">TOYOTA</option>
										<option value="TRIGANO">TRIGANO</option>
										<option value="TM">TM</option>
										<option value="TNT MOTOR">TNT MOTOR</option>
										<option value="TOMOS">TOMOS</option>
										<option value="TRIUMPH">TRIUMPH</option>
										<option value="VAN HOOL">VAN HOOL</option>
										<option value="VAX">VAX</option>
										<option value="VEZEKO">VEZEKO</option>
										<option value="VELOSOLEX">VELOSOLEX</option>
										<option value="VOLKSWAGEN">VOLKSWAGEN</option>
										<option value="VOLVO">VOLVO</option>
										<option value="WEYTENS">WEYTENS</option>
										<option value="YAMAHA">YAMAHA</option>
										<option value="AUTRE">AUTRE</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Energie
									</div>
									<select class="mx-auto search-form" name="energie">
										<option value="1">Diesel/Essence (GO/ES)</option>
										<option value="2">Electricité (EL)</option>
										<option value="3">Hybride (GH/GL/EH)</option>
										<option value="4">GPL/GNV</option>
										<option value="5">Superéthanol</option>
										<option value="6">Biocarburants</option>
									</select>
								</div>
							</div>

							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Nombre de Cheval Fiscal (CV)
									</div>
									<input class="mx-auto search-form text-center" type="number" name="cv" max=60 min=1 required><br>
								</div>
							</div>





							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Date de mise en circulation
									</div>
									<input class="mx-auto search-form text-center" type="date" name="circulation" required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										CO2
									</div>
									<input class="mx-auto search-form text-center" type="number" name="co2" max=1000 min=0 required><br>
								</div>
							</div>


							<div class="col-11 col-md-6 mx-auto search-box">
								<div class="row col-12 mx-auto input-group ">
									<div class="col-12 search-box--titre">
										Poids vehicule
									</div>
									<select class="mx-auto search-form text-center" name="ptac">
										<option value="1">Inférieur ou égal à 3,5 tonnes</option>
										<option value="2">Entre 3,5 et 6 tonnes</option>
										<option value="3">Entre 6 et à 11 tonnes</option>
										<option value="4">Supérieur à 11 tonnes</option>
									</select>
								</div>
							</div>




							<div class="col-12 col-md-6 mx-auto text-center search-box">
								<button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>










<div id="cadre" class="col-10 mx-auto">
	<div class="row mx-auto home-texte">
		<div class="col-12 col-md-12 home-texte1">
			<h2 class="col-10 col-md-8 mx-auto"><i class="far fa-circle"></i></i> Avec CG Officiel, obtenez rapidement et facilement votre Certificat d'immatriculation / carte grise</h2>
			<div>
				<h6 class="col-10 col-md-8 mx-auto" style="margin-top: 2vh;">Effectuer une demande de certificat d’immatriculation en ligne est désormais chose simple grâce à notre service d’immatriculation des véhicules en ligne.</h6>
				<h6 class="col-10 col-md-8 mx-auto">Simplifiez-vous donc la vie ; Il n’est plus nécessaire de se déplacer pour <strong>obtenir un nouveau certificat d’immatriculation</strong>. Obtenez rapidement votre carte grise, tout en économisant du temps pour vos
					démarches ; nous réceptionnons vos documents via notre service d’immatriculation de carte grise en ligne, accessible à l’adresse <strong>www.cgofficiel.fr</strong>. </h6>
				<h6 class="col-10 col-md-8 mx-auto">
					<strong>Tout dossier complet sera traité dans les 24 heures</strong>
				</h6>
				<h6 class="col-10 col-md-8 mx-auto">Dès réception de votre nouvelle carte grise, pensez à vous procurer sur le site officiel du Certificat qualité de l'air, une <strong>vignette Crit'Air</strong>, l'autocollant sécurisé obligatoire dans certaines grandes
					villes de France.</h6>
			</div>
		</div>
	</div>

</div>

<div id="cadre2" class="col-12 home-back mx-auto">
	<div class="row col-10 mx-auto home-texte">

		<h2 class="col-10 col-md-8 mx-auto"><i class="far fa-circle"></i></i> Démarche Simplifiée : Obtenez votre carte grise en 4 étapes</h2>


		<div class="col-12 row home-texte2">
			<div class="col-12 mx-auto home-texte2--titre">
				<h4 class="col-10 col-md-8 mx-auto">1.Calculez le prix de votre certificat d’immatriculation en ligne</h4>
				<div class="home-texte2--description col-10 col-md-8 mx-auto">
					Calculez le tarif légal de votre carte grise grâce à notre outil en ligne </div>
			</div>

		</div>


		<div class="col-12 row home-texte2">
			<div class="col-12 mx-auto home-texte2--titre">
				<h4 class="col-10 col-md-8 mx-auto">2.Procédez au paiement en ligne</h4>
				<div class="home-texte2--description col-10 col-md-8 mx-auto">
					Le règlement de votre certificat d’immatriculation et de la prestation de <strong>www.cgofficiel.fr</strong> s’effectuera par Carte Bancaire, <strong>via un paiement sécurisé</strong>. Vous recevrez, par la suite, un email de confirmation avec
					la liste des documents à nous faire parvenir. </div>
			</div>

		</div>

		<div class="col-12 row home-texte2">

			<div class="col-12 mx-auto home-texte2--titre">
				<h4 class="col-10 col-md-8 mx-auto">3.Faites nous parvenir votre dossier complet</h4>
				<div class="home-texte2--description col-10 col-md-8 mx-auto">
					Dès réception de vos documents à notre agence, <strong>nous traiterons votre demande immédiatement </strong>et vérifierons que votre dossier soit bien complet. Si une pièce justificative manque à votre dossier, vous serez immédiatement
					averti(e)
					par email et invité(e) à fournir les derniers éléments pour finaliser la procédure. En attendant, nous conserverons précieusement votre dossier.
				</div>
			</div>

		</div>
		<div class="col-12 row home-texte2">
			<div class="col-12 mx-auto home-texte2--titre">
				<h4 class="col-10 col-md-8 mx-auto">4.Recevez votre Carte Grise</h4>
				<div class="home-texte2--description col-10 col-md-8 mx-auto">
					<strong>Un Certificat Provisoire d'Immatriculation (CPI)</strong> ou un accusé d'enregistrement de changement de titulaire <strong>(AECT)</strong> vous sera d'abord envoyé dans un délai de 24 heures. Ensuite, le certificat d’immatriculation (ou
					carte grise) définitif sera expédié directement à votre domicile par <strong>l'Imprimerie Nationale</strong> sous pli sécurisé ("Lettre expert" en lettre suivie avec remise contre signature par la Poste) en moins d'une semaine.
					En cas d'absence, le courrier contenant votre carte grise est conservé 15 jours dans un bureau de poste. En cas de non retrait, il est renvoyé à l'<strong>Agence Nationale des Titres Sécurisés</strong> (ANTS) qui pourra procéder à un nouvel
					envoi, selon certaines conditions.
					En attendant votre certificat d'immatriculation définitif, vous recevrez une carte grise provisoire qui vous permettra de circuler librement.

				</div>
			</div>

		</div>
	</div>
</div>

<!-- <div id="home-ensuite" class="col-12 home-texte--img d-flex flex-row align-items-center justify-content-center my-flex-container">
        <img class="img-fluid" src="asset/img/home.jpg" alt="">
      </div> -->










<div id="cadre3" class="col-10 mx-auto">
	<div class="row mx-auto home-texte">
		<div class="home-texte3">
			<h2 class="col-10 col-md-8 mx-auto"><i class="far fa-circle"></i></i> Les avantages de CG Officiel</h2>
			<ol class="col-10 col-md-8 mx-auto">
				<li><span class="li-texte3">Gagnez du temps : </span> simplifiez vos démarches en accédant au service d'immatriculation de véhicules en ligne de CG Officiel. Tous les formulaires CERFA sont disponibles en téléchargement gratuit sur notre site.
					Économisez du temps et de l’argent sur vos frais de déplacement et stationnement.</li>
				<li><span class="li-texte3">Simplicité : </span>finies les files d’attente et le parcours du combattant en préfecture ; grâce au service de demande de certificat d’immatriculation de CG Officiel, vous effectuez vos démarches et passez commande
					depuis votre domicile.</li>
				<li><span class="li-texte3">Livraison rapide : </span>recevez rapidement votre certificat d’immatriculation directement à l’adresse de votre domicile.</li>
			</ol>
		</div>
		<div class="col-10 col-md-8 mx-auto home-texte4">
			<p>
				<strong>
					En tant que professionnel de l'automobile, CG Officiel est habilité par la Préfecture, au Système d'Immatriculation des Véhicules (SIV). Non affilié au gouvernement, CG officiel est également agréé par le Ministère de l'Intérieur (n°222442) ,
					et habilité par le Trésor Public (n°55337) afin de vous proposer ce service d'immatriculation de véhicule en ligne et vous épargner ainsi tout déplacement pour vous démarches.
				</strong>
			</p>
		</div>

		<div class="col-10 col-md-8 mx-auto mx-auto home-texte5">
			<p>
				<strong>Si vous préférez envoyer votre demande à l’ANTS, l’Agence nationale des Titres Sécurisés, prenez en compte les délais de traitement des demandes d’immatriculation bien plus importants, la plateforme gouvernementale accusant de nombreux
					retards avec son système automatisé de demandes de cartes grises mis en place le 6 novembre 2017 .</strong>
			</p>
		</div>


		<div class="col-12 arrow-up">
			<a href="#up">
				<span class="arrowup">Retour</span>
			</a>
		</div>
	</div>
</div>

<?php
  include __DIR__.'/../footer.php';
  ?>
