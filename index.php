<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alexander Lorenz - Referenzen Seite</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);
	body {
		margin: 0;
		background: #ECEFF1;
		font-family: Roboto, sens-serif;
	}
	@font-face {
	font-family: 'icomoon';
	src:url('fonts/icomoon.eot?8wktyy');
	src:url('fonts/icomoon.eot?8wktyy#iefix') format('embedded-opentype'),
		url('fonts/icomoon.ttf?8wktyy') format('truetype'),
		url('fonts/icomoon.woff?8wktyy') format('woff'),
		url('fonts/icomoon.svg?8wktyy#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}
	
	[class^="icon-"], [class*=" icon-"] {
		font-family: 'icomoon';
		speak: none;
		font-style: normal;
		font-weight: normal;
		font-variant: normal;
		text-transform: none;
		line-height: 1;
	
		/* Better Font Rendering =========== */
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
	
	.icon-home:before {
		content: "\e900";
	}
	.icon-images:before {
		content: "\e90e";
	}
	.icon-bubbles2:before {
		content: "\e96d";
	}
	.icon-user:before {
		content: "\e971";
	}

	nav.titlebar, h1.footer {
		top: 0;
		left: 0;
		right: 0;
		z-index: 1;
		position: fixed;
		height: 50px;
		margin: 0;
		color: #FAFAFA;
		background: #616161;
		text-align: center;
		font-size: 20px;
		line-height: 50px;
		box-shadow: 0 2px 5px rgba(0,0,0,0.26);
		padding: none;
		height: 50px;
	}
		nav.titlebar div.container {
			display: inline-flex;
			width: auto;
		}
		nav.titlebar div.container div.logo {
			display: none;
		}
		nav.titlebar div.container div.navi {
			display: flex;
			flex: 1;
			order: 2;
		}
		nav.titlebar div.container div.navi a.link {
			display: flex;
			flex: 1;
			order: 1;
			color: #FAFAFA;
			text-decoration: none;
			text-align: center;
			font-size: 14px;
			transition: background 0.3s, color 0.3s;
			height: 50px;
			width: 50px;
			box-sizing: border-box;
			padding-top: 13px;
			font-size: 22px;
		}
		nav.titlebar div.container div.navi a.link:hover {
			background: #8BC34A;
			color: #F1F8E9;
		}
		nav.titlebar div.container div.navi a.link .navitext {
			text-align: center;
			display: block;
			width: 100%;
		}
	nav.titlebar div.container div.navi a.link .navitext p {
		display: none;
	}
	h1.footer {
		position: relative;
		z-index: 0;
		background: #CFD8DC;
		color: #546E7A;
		font-size: 12px;
		box-shadow: none;
	}
	article {
		text-align: center;
		margin-bottom: 15px;
	}
	.content {
		text-align: left;
	}
	.content + .hero {
		margin-top: 15px;
	}
	nav.titlebar + .card {
		margin-top: 65px;
	}
	nav.titlebar + article {
		margin-top: 50px;
	}
	.hero {
		margin: 0;
		color: #FFF;
		background: #292E33;
		text-align: left;
		font-size: 30px;
		padding: 20px 30px 125px 30px;
		text-shadow: 0 2px 5px rgba(0,0,0,0.50);
	}
	.hero h1 {
		margin: 0;
		font-weight: 700;
		font-size: 31px;
	}
	.hero h2 {
		margin: 0;
		font-weight: 300;
		font-size: 16px;
		text-shadow: 0 2px 5px rgba(0,0,0,1);
	}
	.hero + .content {
		margin-top: -55px;
	}
	.start {
		background: url(img/head_start.jpg) no-repeat top center #292E33;
		background-size: auto 250px;
	}
	.ref {
		background: url(img/head_ref.jpg) no-repeat top center #292E33;
		background-size: auto 250px;
	}
	.me {
		background: url(img/head_me.jpg) no-repeat top center #292E33;
		background-size: auto 250px;
	}
	.con {
		background: url(img/head_con.jpg) no-repeat top center #292E33;
		background-size: auto 250px;
	}
	.hassebrauk {
		background: url(img/head_hassebrauk.jpg) no-repeat top center #292E33;
		background-size: auto 250px;
	}
	h2.headline {
		padding: 0;
		margin: 0;
		font-size: 20px;
		color: #37474F;
	}
	.card {
		transition: transform 0.3s, background 0.3s, color 0.3s; 
	}
	.card, .table1, .table2 {
		margin: 15px;
		padding: 20px;
		background: #FFF;
		box-shadow: 0 1px 2px rgba(0,0,0,0.26);
		border-radius: 2px;
		font-weight: 300;
	}
	.card p, .table1 p, .table2 p {
		margin: 0;
		color: #607D8B;
		line-height: 150%;
	}
	.card p + p, .table1 p + p, .table2 p + p {
		margin-top: 15px;
	}
	.card p.type {
		color: #7CB342;
	}
	.card a.more {
		display: flex;
		color: #7CB342;
		text-decoration: none;
		background: #7CB342;
		color: #FFF;
		text-align: center;
		box-sizing: border-box;
		padding: 15px;
		font-weight:500;
		transition: transform 0.3s, background 0.3s;
	}
	.card a.more:hover {
		transform: scale(0.95);
		background: #689F38;
	}
	.card a.more div {
		width: 100%;
		display: block;
		text-align: center;
	}
	.card img {
		border-radius: 100%;
		margin-bottom: 15px;
		width: 80%;
		margin-left: 10%;
	}
	.downmenu {
		display: none;
	}
	.livetable {
		display: flex;
	}
	.livetable + .livetable {
		margin-top: 10px;
	}
	.livetable p {
		flex: 1;
		font-weight: 500;
	}
	.livetable p + p {
		flex: 2;
		font-weight: 300;
		margin: 0;
	}
	.description {
		opacity: 0;
		transition: opacity 0.3s;
	}
	.description p, .description h2, .description p.type {
		color: #FFF;
	}
	@media (min-width: 800px) {
		nav.titlebar {
			height: 50px;
			text-align: center;
			z-index: 2;
		}
		nav.titlebar div.container {
			display: inline-flex;
			width: 900px;
		}
		nav.titlebar div.container div.logo {
			display: flex;
			flex: 1;
			order: 1;
		}
		nav.titlebar div.container div.navi {
			display: flex;
			flex: 1;
			order: 2;
		}
		nav.titlebar div.container div.navi a.link {
			padding: 0;
			font-size: 14px;
		}
		nav.titlebar div.container div.navi a.link .navitext p {
			display: inline;
		}
		.content {
			display: inline-flex;
			max-width: 1000px;
			text-align: left;
		}
		.card {
			flex: 1;
			order: 1;
		}
		.card:hover {
			background: #F1F8E9;
			color: #FFF;
			transform: scale(1.02)
		}
		.table1 {
			flex: 2;
			order: 1;
		}
		.table2 {
			flex: 1;
			order: 2;
		}
		.picture {
			flex: 1;
			order: 1;
		}
		.picture:hover {
		}
		.start {
			background: url(img/head_start.jpg) no-repeat top center #292E33;
			background-size: auto 600px;
			text-align: center;
		}
		.ref {
			background: url(img/head_ref.jpg) no-repeat top center #292E33;
			background-size: auto 600px;
			text-align: center;
		}
		.me {
			background: url(img/head_me.jpg) no-repeat top center #292E33;
			background-size: auto 600px;
			text-align: center;
		}
		.con {
			background: url(img/head_con.jpg) no-repeat top center #292E33;
			background-size: auto 600px;
			text-align: center;
		}
		.hassebrauk {
			background: url(img/head_hassebrauk.jpg) no-repeat top center #292E33;
			background-size: auto 600px;
			text-align: center;
		}
		.hero {
			padding: 140px 30px 100px 30px;
		}
		.hero div {
			display: inline-block;
			min-width: 950px;
			text-align: left;
		}
		.hero h1 {
			font-size: 42px;
		}
		.hero h2 {
			font-size: 21px;
		}
	}
	.floatingButton {
		-webkit-appearance: none;
		position: fixed;
		right: 10px;
		bottom: 10px;
		width: 50px;
		height: 50px;
		padding: 0;
		border: none;
		border-radius: 100%;
		background: #FF9800;
		color: #FFF;
		font-size: 20px;
		box-shadow: 0 1px 2px rgba(0,0,0,0.26);
		z-index: 1;
	}
</style>
</head>

<body>
	<!--button class="floatingButton">+</button>-->
	<nav class="titlebar">
        <div class="container">
        	<div class="logo">
    			Alexander Lorenz
        	</div>
        	<div class="navi">
                <a href="#start" class="link"><div class="navitext"><span class="icon-home"></span> <p>Start</p></div></a>
                <a href="#me" class="link"><div class="navitext"><span class="icon-user"></span> <p>Über mich</p></div></a>
                <a href="#ref" class="link"><div class="navitext"><span class="icon-images"></span> <p>Referenzen</p></div></a>
                <a href="#con" class="link"><div class="navitext"><span class="icon-bubbles2"></span> <p>Kontakt</p></div></a>
        	</div>
        </div>
    </nav>
    <!-- START HERE -->
    <article id="pageStart">
        <div id="start" class="hero start">
        	<div>
                <h1>ALEXANDER LORENZ</h1>
                <h2>“PROGRAMMIEREN IST NICHT<br />
    NUR LOGIK, ES KANN AUCH<br />
    KREATIV SEIN!”</h2>
			</div>
        </div>
        <section class="content">
            <section class="card">
            	<img src="img/card_alex.jpg" />
                <h2 class="headline">Hallo Besucher!</h2>
                <p>Willkommen auf meiner Bewerbungsseite. Hier möchte ich Ihnen mein gesamtes Können und meine Fähigkeiten auf einen Schlag präsentieren, sodass Sie einen ersten Eindruck von mir bekommen.</p>
            </section>
            <section class="card">
            	<img src="img/card_responsive.jpg" />
                <h2 class="headline">Responsive Design</h2>
                <p>Da sich meine Bemühungen einen neuen Job zu finden speziell auf den Bereich Web-Design & -Development richten, habe ich mich entschlossen eine kleine Website mit einem Responsive Design zu entwickeln, die Ihnen eine angenehme Übersicht bietet.</p>
            </section>
            <section class="card">
            	<img src="img/card_app.jpg" />
                <h2 class="headline">Ganz wie 'ne App</h2>
                <p>Die Navigation im oberen Bereich der Seite bietet Ihnen so die Möglichkeit zwischen den verschiedenen Inhalten zu wechseln. Im unteren Bereich finden Sie Kontaktmöglichkeiten mit denen Sie mit mir in Verbindung treten können.</p>
            </section>
        </section>
    <!-- ABOUT ME HERE -->
        <div id="me" class="hero me">
        	<div>
                <h1>ANSCHREIBEN</h1>
                <h2>“DAS IST MEIN ANSPORN<br />
                DAS SIND MEINE ZIELE<br />
                UND DA WILL ICH HIN.”</h2>
            </div>
        </div>
        <section class="content">
            <section class="table1">
            	<h2 class="headline">Anschreiben</h2><br />
                <p>Marmalade - Zunächst war ich darüber erstaunt wie ein Aufstrich-Produkt zur kreativen Namensgebung eines Unternehmens führen kann - fand die Idee anschließend allerdings gar nicht so verkehrt: Es ist lecker, sieht gut aus und man verbindet so gut wie nichts Negatives damit – außer, dass das Brot beim Runterfallen so gut wie immer auf der falschen Seite landet.</p>
                
                <p>Nun, Spaß bei Seite: Mein Name ist Alexander Lorenz und ich bin 27 Jahre jung. Meine Begeisterung am Web-Design und -Development liegt schon so weit zurück, dass ich es nur mit meinem ersten Rechner in Verbindung bringen kann. Früher noch lediglich mit Paint gebaute "Pseudo-Websites" - bin ich doch schnell auf den Geschmack des Programms Macromedia Fireworks gekommen, welches mir die grafische Umsetzung meiner Ideen ermöglichte. 10 weitere Jahre des Einstudierens gaben mir ein breit gefächertes Wissen in HTML, CSS, PHP und JavaScript, sowie die Nutzung von Datenbanken wie MySQL.</p>
                
                <p>Aus Spaß wurde Arbeit. Ich fand schnell heraus, dass meine Vorliebe für Grafiken und das Programmieren auch ein Beruf sein kann. Eine Agentur nahm mich nicht auf, Firmen hatten keine Verwendung für mich, also machte ich mich selbstständig und arbeitete als freier Dozent für Informatik in verschiedenen Bildungsunternehmen. Die Adobe Creative Suite und Microsoft Office wurden so zu den Programmen meiner Arbeit. Nebenbei versuchte ich mit Hilfe meiner Fähigkeiten Aufträge für Kunden zu erledigen.</p>
                
                <p>Ich möchte zu Marmalade, weil mich das Team anspricht. Ein junges Unternehmen mit jungen Mitarbeitern ist für mich genau das Richtige. Ich arbeite gerne im Team, bin offen und ehrlich und schrecke nicht davor zurück, wenn es darum geht Kritik zu äußern. Viel wichtiger ist jedoch, dass ich Kritik sehr gut aufnehme und für meine weitere Arbeit verwende. Außerdem spricht mich die Kombination aus Hobby und Job einfach sehr an.</p>
            </section>
            <section class="table2">
            	<h2 class="headline">Lebenslauf</h2><br />
                <div class="livetable">
                    <p>1994-1998</p>
                    <p>Grundschule Möringen</p>
                </div>
                <div class="livetable">
                    <p>1998-2004</p>
                    <p>Sekundarschule Börgitz</p>
                </div>
                <div class="livetable">
                    <p>2004-2005</p>
                    <p>Berufsschule Stendal (Erwerb des Hauptschulabschlusses)</p>
                </div>
                <div class="livetable">
                    <p>2005-2006</p>
                    <p>EWS Stendal (Zum Erwerb des Realschulabschlusses)</p>
                </div>
                <div class="livetable">
                    <p>2006-2008</p>
                    <p>Berufsschule Stendal (Technischer Assistent für Informatik)</p>
                </div>
                <div class="livetable">
                    <p>2009-2011</p>
                    <p>cimdata.de Berlin (Mediengestalter Bild und Ton)</p>
                </div>
                <div class="livetable">
                    <p>2011-2012</p>
                    <p>Walter Services Magdeburg (Fachansprechpartner im Projekt 1&1 Technik-Support)</p>
                </div>
                <div class="livetable">
                    <p>2012-2015</p>
                    <p>Selbstständig (Dozent: Adobe Creative Suite, Microsoft Office)</p>
                </div>
                <div class="livetable">
                    <p>2015-2015</p>
                    <p>Schreinerei Hassebrauk (Webmaster, IT-Techniker, Grafiker)</p>
                </div>
            </section>
        </section>
    <!-- REFERENCES HERE -->
        <div id="ref" class="hero ref">
        	<div>
                <h1>REFERENZEN</h1>
                <h2>“WAS ICH GEMACHT HABE<br />
                UND WAS ICH NOCH<br />
                MACHEN MÖCHTE.”</h2>
            </div>
        </div>
        <section class="content">
            <section class="card">
            	<img src="img/card_hassebrauk.jpg" />
                <h2 class="headline">Hassebrauk.com</h2>
                <p class="type">Website</p>
                <p>In meinem aktuellen Job bei der Schreinerei Hassebrauk übernehme ich alle Arbeiten, die sich auf den Bereich IT und Web beziehen. Auch die Bearbeitung von Dokumenten und das Erstellen von Prospekten fällt in meinen Aufgabenbereich.</p>
                <br /><a href="http://hassebrauk.com" class="more" target="_blank"><div>Zur Website</div></a>
            </section>
            <section class="card">
            	<img src="img/card_pixelmad.jpg" />
                <h2 class="headline">pixelmad.de</h2>
                <p class="type">Website</p>
                <p>Die Website pixelmad.de ist ein früheres Projekt, das als soziales Netzwerk für Gamer angesetzt war. Auch wenn Die Seite heute tot ist, gebe ich sie gerne als Referenz an, da hier meine Arbeit mit PHP und MySQL in Zusammenarbeit mit JavaScript sehr gut zu erkennen ist. Der Code ist schon alt und entspricht nicht mehr meinem aktuellen Code-Standard.</p>
                <br /><a href="http://pixelmad.de" class="more" target="_blank"><div>Zur Website</div></a>
            </section>
            <section class="card">
            	<img src="img/card_bang.jpg" />
                <h2 class="headline">In Sane - Bang Bang</h2>
                <p class="type">Musik-Video</p>
                <p>Die Band In Sane ist - um genau zu sein - meine eigene Band. Für diese habe ich ein Musik-Video produziert, dass den Song "BANG BANG" von "Jessy J." parodieren sollte. Sowohl Regie, als auch die Produktion lagen hier in meiner Verantwortung.</p>
                <br /><a href="http://youtu.be/McXn4iDnEgU" class="more" target="_blank"><div>Zum Video</div></a>
            </section>
        </section>
        <section class="content">
                <section class="card">
                    <img src="img/card_rache.jpg" />
                    <h2 class="headline">RACHE NEHMEN</h2>
                    <p class="type">Kurzfilm</p>
                    <p>Die Produktion von RACHE NEHMEN fand im Zuge des 99-FIRE-FILMS-AWARDS 2015 statt und fand unter ca. 5000 Einreichungen seinen Platz in den Top99. Ich gebe diesen als Referenz an, da ich davon überzeugt bin, dass die Fähigkeit einen Kurzfilm zu produzieren auch für eine Web-Agentur nützlich sein kann.</p>
                <br /><a href="http://youtu.be/-3ceh1VAEds" class="more" target="_blank"><div>Zum Video</div></a>
                </section>
            <section class="card">
            	<img src="img/card_realitaet.jpg" />
                <h2 class="headline">REALITÄT</h2>
                <p class="type">Kurzfilm</p>
                <p>Der Kurzfilm REALITÄT befindet sich auch aktuell noch in der Post-Produktion. Meine Aufgabe bei der Produktion besteht zum einen, in der Organisation und zum anderen, in der Nachbearbeitung des Films.</p>
                <br /><a href="http://igg.me/at/realitaet/x/12635376" class="more" target="_blank"><div>Zur Crowdfunding-Kampagne</div></a>
            </section>
            <section class="card">
            	<img src="img/card_fotografie.jpg" />
                <h2 class="headline">Fotografie</h2>
                <p class="type">Fotos</p>
                <p>Auf dieser Facebook-Seite können Sie ein paar meiner Fotografien sehen, da diese unter anderem auch die Fähigkeit des Umgangs mit dem Programm Adobe Photoshop zeigen.</p>
                <br /><a href="https://www.facebook.com/ajanders.media/" class="more" target="_blank"><div>Zur Facebook-Seite</div></a>
            </section>
        </section>
    <!-- ABOUT ME HERE -->
        <div id="con" class="hero con">
        	<div>
                <h1>KONTAKT</h1>
                <h2>“SO KÖNNEN SIE MICH<br />
                ERREICHEN.”<br /></h2>
            </div>
        </div>
        <section class="content">
            <section class="table1">
                <p>Gerne bin ich zu einem Probearbeiten in Ihrem Unternehmen bereit, um Ihnen zu beweisen, dass meine Fähigkeiten wie auf diesen Beruf zugeschnitten sind. Ich lerne schnell und mit Sicherheit wird es möglich sein, kleinere Projekte schon in kürzester Zeit zu realisieren.</p>
                
                <p>Wenn Sie Interesse an einer Zusammenarbeit mit mir haben, können Sie gerne über die unten / nebenan stehenden Kontaktdaten mit mir in Kontakt treten, um alles weitere zu klären.</p>
                
                <p>Ich freue mich auf Ihre baldige Rückmeldung!</p>
            </section>
            <section class="table2">
            	<h2 class="headline">Kontaktmöglichkeiten</h2><br />
                <div class="livetable">
                    <p>E-Mail</p>
                    <p>a.lorenz@unit-ent.de</p>
                </div>
                <div class="livetable">
                    <p>Telefon</p>
                    <p>+49 (0) 1522 89 444 59</p>
                </div>
            </section>
        </section>
    </article>
    <h1 class="footer">
    	(c)2015 by Alexander Lorenz
    </h1>
    <script>
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: (target.offset().top - 50)
				}, 500);
				return false;
			  }
			}
		  });
		});
	</script>
</body>
</html>
