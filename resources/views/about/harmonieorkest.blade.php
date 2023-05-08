@extends('layouts.layout') 

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js">
</head>

@section('content')

<div id="hmo" class="container py-5" data-aos="fade-in-up">
	<div class="row mb-3">
		<div class="col-lg-8 mx-auto text-center">
			<div class="lc-block mb-4">
				<div editable="rich">
					<p class="mb-0 badge bg-secondary">KTVM</p>
					<h1>Het Harmonieorkest</h1>
				</div>
			</div><!-- /lc-block -->
			<!-- /lc-block -->


			<div class="lc-block">
				<div editable="rich">

					<p class="lead">Het harmonieorkest bestaat uit ruim 45 enthousiaste musici. Vanaf het jaar 2000 treedt het orkest alleen nog in concertvorm op. Jaarlijks worden diverse concerten gegeven met een wisselend repertoire.</p>

				</div>
			</div>
			<!-- /lc-block -->
		</div><!-- /col -->
	</div>

	<div class="row mb-4 " data-aos="fade-up">
		<div class="col-lg-10 mx-auto text-center">
			<!-- requires glightbox, please flag the option in the picostrap customizer panel-->


			<div class="lc-block position-relative">
                <img class="img-fluid rounded shadow" src="https://ktvm.nl/wp-content/uploads/2018/12/46489462_1997396473651593_6498687983053438976_o.jpg" alt="Het Harmonieorkest">
              </div>
		</div><!-- /col -->
	</div>
</div>
<div class="container-fluid p-0" data-aos="fade-up">
	<div class="row g-0">
		<div data-aos="fade-left" lc-helper="background" class="col-md-6 order-md-2 ps-4 d-flex" style="background-size: cover; background-position: center; background-image: url('/assets/imgs/concert_ktvm.jpg');">
			<div class="lc-block align-self-center text-light ms-4">
				
			</div>
		</div>
		<div class="col-md-6 order-md-1" style="padding:5vh 5vw" data-aos="fade-down">
			<div class="lc-block mb-5">
				<div editable="rich">

					<p><strong>In de wereld van de amateur-blaasmuziek is het harmonieorkest van de KTVM een vooruitstrevend ensemble.&nbsp;</strong></p>


				</div>
			</div><!-- /lc-block -->
			<div class="lc-block text-secondary pb-4">
				<div editable="rich">
					<p><em> Onder leiding van dirigent Jacco Nefs (vanaf 2022) begeven de muzikanten zich diverse muzikale deelgebieden. Zo is één van de sterke punten van het orkest de zogenaamde ‘lichte’ muziek, een onderbelicht genre binnen de traditionele blaasmuziek. Hierbij wordt gebruik gemaakt van vocalisten, ritmesectie, instrumentale solisten en werkt er een creatief team mee aan de concerten, shows en voorstellingen. Ook wordt er gebruik gemaakt van alle facetten die een schouwburg of theater te bieden heeft zoals professioneel licht, geluid en audiovisuele middelen. Arrangementen voor shows worden speciaal voor het orkest geschreven.&nbsp;</em></p>
				</div>
			</div>
			<div class="lc-block text-secondary">
				<div editable="rich">
					<p>Het orkest presenteerde in 2003 (Proms Music Night), 2005 (Music of Hollywood) en 2008 (Music of Mother Earth) avondvullende voorstellingen in schouwburg Agnietenhof. Het streven om een show neer te zetten die in haar opvatting de amateurkunst overstijgt werd in de loop van de jaren gehaald. In 2008 volgde een absolute erkenning door opname in het HRFSTWND programma, een concertreeks met de beste amateur-gezelschappen van Nederland.  In 2013 werd het 110-jarig bestaan gevierd met twee concerten in theater Agnietenhof samen met niemand minder dan Karin Bloemen. Het meest recente jubileum van de vereniging, het 115-jarig bestaan in 2018, is gevierd in samenwerking met Frans Duijts.</p>
				</div>
			</div><!-- /lc-block -->
		</div>
	</div>
</div>
<div class="row g-0">
    <div data-aos="fade-right" lc-helper="background" class="col-lg-6" style="min-height: 45vh; background-size: cover;background-position: center; background-image: url('/assets/imgs/ktvm.jpg');">
    </div>
    <div class="col-lg-6 my-auto px-5 py-5" data-aos="fade-up">
        <div class="lc-block">
            <div class="lc-block mb-5" >
				<div editable="rich">

					<p><strong>Naast de ‘lichte’ muziek blijft het orkest in haar samenstelling een harmonieorkest dat ook gewoon harmoniemuziek speelt.&nbsp;</strong></p>


				</div>
			</div><!-- /lc-block -->
			<div class="lc-block text-secondary pb-4">
				<div editable="rich">
					<p><em>  Er wordt naar gestreefd een zeer gevarieerd programma te spelen; muziek voor elk wat wils. Bij de muziekkeuze wordt rekening gehouden met het soort concert dat wordt gegeven.&nbsp;</em></p>
				</div>
			</div>
			<div class="lc-block text-secondary">
				<div editable="rich">
					<p>Het muzikale jaar kent een aantal vaste concertoptredens. Het jaar wordt traditioneel geopend met het nieuwjaarsconcert (1e zondag van januari in de St. Dominicuskerk te Tiel). Tijdens dit concert worden de meer klassiek getinte werken gespeeld. Toch weet het orkest ook op een “traditioneel” nieuwjaarsconcert zeer verfrissend uit de hoek te komen!</p>
				</div>
			</div><!-- /lc-block -->
            <div class="lc-block text-secondary">
				<div editable="rich">
					<p>Wanneer de lente hoogtij viert, beginnen ook de muzikanten al aan de zomer te denken. Tijdens het voorjaarsconcert  wordt een ‘licht’ of meer populair repertoire uitgevoerd. Variërend van een vrolijke concertmars tot swingende concertnummers.</p>
				</div>
			</div><!-- /lc-block -->
        </div>

    </div>
</div>

@endsection