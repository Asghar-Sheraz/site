	<?
$pageLink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$langID = $_GET['language'];
$imgID = $_GET['img_ID'];
$vidID = $_GET['vid_ID'];
$neoID= $_GET['neo'];
$nID= $_GET['n'];
$expID= $_GET['exp_ID'];
$expType= $_GET['exp_Type'];


"SERVER_NAME [{$_SERVER['SERVER_NAME']}]";


//color

if ($_SERVER['SERVER_NAME']=="sheraz.ninja"){
	$goNinja_login = "ninja";
	$login_BG = "#000";
	$inputPS_BG = "#121212";
	$inputPS_text = "#f00";
	$login_links = "#700";
	} else {
		$goNinja_login = "666";
		$login_BG = "#fff";
		$inputPS_BG = "#eee";
		$inputPS_text = "#666";
		$login_links = "#009cc9";
		}
    

if  ($pageID=="halo"){

		$color = "#0a2538";
		$colorLight = "#475c62";
		$bannerBtnBorder = "#000";
}

if ($pageID=="minion"){

		$color = "#009cc9";
		$colorLight = "#73c9e1";
		$bannerBtnBorder = "#ccc";
}

if  ($pageID=="tnmt"){

		$color = "#461062";
		$colorLight = "#8e6d9f";
		$bannerBtnBorder = "#000";
}

if (($pageID=="projects") || ($pageID=="about") || ($pageID=="videos") || ($pageID=="artwork") || ($pageID=="contact") || ($pageID=="lab") || ($pageID=="unity")){

	$color = "#000";
	$colorLight = "#333";
	$colorAbout = "#000";
	$colorLab = "#000";
	$colorContact = "#000";
	$colorException = "#fff";
	$iconException ="contact";
	$imgBG_Color ="#000000";
	
}

//common language

if (($langID == '') || ($langID == 'en')){
		$tools = "TOOLS";
		$createdBy = "CREATED BY";
		$sheraz = "SHERAZ ASGHAR";
		$viewAllVideos = "View all videos";
		$projects = "WORK";
		$seeProject = "SEE WORK";
		$artwork = "DESIGN";
		$recentVideos = "VIDEOS";
		$recentExps = "EXPERIMENTS";
		$vimeoWatch = "WATCH ON VIMEO";

		$about ="ABOUT";
		$lab ="LAB";
		$unity ="UNITY";
		$contact ="CONTACT";
		$largeView ="LARGE VIEW";
		$download ="DOWNLOAD";
		$videos ="VIDEOS";
		$watchVideo ="WATCH VIDEO";
		$seeAllArtwork = "SEE ALL ARTWORK";
		$relatedVideo = "RELATED VIDEO";
		$info="INFO";
		$tele="514.443.1896";
		$location = "Montreal, QC";
		$access="LOGIN";
		$password="PASSWORD";
		$getAccess="CONTACT TO GET ACCESS";
		$artworkTitle = "RELATED";
		$moreProjects = "MORE PROJECTS";
		$seeExperiment ="SEE EXPERIMENT";
		$seeVideo ="SEE VIDEO";
		$swf ="DOWNLOAD FLASH .SWF";
		$moreVids = "MORE VIDEOS";
}
if ($langID == 'de'){
		$tools = "WERKZEUGE";
		$createdBy = "ERSTELLT VON";
		$sheraz = "SHERAZ ASGHAR";
		$viewAllVideos = "Alle Videos";
		$projects = "SPÄTESTE ARBEIT";
		$seeProject = "SIEHE ARBEIT";
		$artwork = "DESIGN";
		$recentVideos = "DIE NEUESTEN VIDEOS";
   		$recentExps = "EXPERIMENTE";
		$vimeoWatch = "UHR AUF VIMEO";
	
		$about ="ÜBER";
		$lab ="LABOR";
		$unity ="UNITY";
		$contact ="KONTAKT";
		$largeView ="GRŐßERES BILD";
		$download ="DOWNLOAD";
		$videos ="VIDEOS";
		$watchVideo ="VIDEO ANSEHEN";
		$seeAllArtwork = "ALLE GRAFIK";
		$relatedVideo = "VERWANDTE VIDEOS";
		$info="INFORMATIONEN";
		$tele="514.443.1896";
		$location = "Montreal, QC";
		$access="EINLOGGEN";
		$password="PASSWORT";
		$getAccess="UM ZUGANG ZU ERHALTEN";
		$artworkTitle = "VERWANDT";
		$moreProjects = "MEHR PROJEKTE";
		$seeExperiment ="SIEHE EXPERIMENT";
		$seeVideo ="SIEHE VIDEO";
		$swf ="FLASH HERUNTERLADEN .SWF";
		$moreVids = "MEHR VIDEOS";

}
if ($langID == 'fr'){
		$tools = "OUTILS";
		$createdBy = "CRÉÉ PAR";
		$sheraz = "SHERAZ ASGHAR";
		$viewAllVideos = "Voir toutes les vidéos";
		$projects = "DERNIER OUVRAGE";
		$seeProject = "VOIR LE TRAVAIL";
		$artwork = "CONCEPTION";
		$recentVideos = "VIDÉOS RÉCENTES";
	    $recentExps = "EXPÉRIENCES";
		$vimeoWatch = "REGARDEZ SUR VIMEO";
	
		$about ="À PROPOS";
		$lab ="LABORATOIRE";
		$unity ="UNITY";
		$contact ="CONTACT";
		$largeView ="GRANDE VUE";
		$download ="TÉLÉCHARGER";
		$videos ="VIDÉOS";
		$watchVideo ="REGARDER LA VIDÉO";
		$seeAllArtwork = "VOIR TOUTE L'ILLUSTRATION";
		$relatedVideo = "VIDEO CONNEXES";
		$info="INFORMATION";
		$tele="514.443.1896";
		$location = "Montreal, QC";
		$access="S'IDENTIFIER";
		$password="MOT DE PASSE";
		$getAccess="CONTACTER POUR ACCÉDER";
		$artworkTitle = "EN RELATION";
		$moreProjects = "PLUS DE PROJETS";
		$seeExperiment ="VOIR EXPERIENCE";
		$seeVideo ="VOIR LA VIDÉO";
		$swf ="TELECHARGER FLASH .SWF";
		$moreVids = "PLUS DE VIDÉOS";
}
if ($langID == 'es'){
		$tools="HERRAMIENTAS";
		$createdBy = "CREADO POR";
		$sheraz = "SHERAZ ASGHAR";
		$viewAllVideos = "Ver todos los vídeos";
		$projects = "ULTIMO TRABAJO";
		$seeProject = "VER TRABAJO";
		$artwork = "DISEÑO";
		$recentVideos = "VIDEOS RECIENTES";
		$recentExps = "EXPERIMENTOS";
		$vimeoWatch = "VER EN VIMEO";
	
		$about ="CERCA DE MI";
		$lab ="LABORATORIO";
		$unity ="UNITY";
		$contact ="CONTACTO";
		$largeView ="GRAN VISTA";
		$download ="DESCARGAR";
		$videos ="VIDEOS";
		$watchVideo ="VER VIDEO";
		$seeAllArtwork = "VER TODAS LAS ILUSTRACIONES";
		$relatedVideo = "VIDEO RELACIONADO";
		$info="INFORMACIÓN";
		$tele="514.443.1896";
		$location = "Montreal, QC";
		$access="INICIAR SESIÓN";
		$password="CLAVE";
		$getAccess="CONTACTAR AL OBTENER ACCESO";
		$artworkTitle = "RELACIONADO";
		$moreProjects = "MÁS PROYECTOS";
		$seeExperiment ="VER EXPERIMENTO";
		$seeVideo ="VER VIDEO";
		$swf ="DESCARGAR FLASH .SWF";
		$moreVids = "MÁS VIDEOS";
}
if ($langID == 'ar'){
		$tools = "أدوات";
		$createdBy = "الخالق";
		$sheraz = "شيـرﺁﺯأصغر";
		$viewAllVideos = "عرض جميع مقاطع الفيديو";
		$projects = "اخر الاعمال";
		$seeProject = "انظر العمل";
		$artwork = "عمل فني";
		$recentVideos = "أحدث مقاطع الفيديو";
		$recentExps = "من التجارب";
		$vimeoWatch = "مشاهدة فيميو";
	
		$about ="حول";
		$lab ="مختبر";
		$unity ="UNITY";
		$contact ="الاتصال";
		$largeView ="تكبير";
		$download ="تحميل";
		$videos ="الفيديو";
		$watchVideo ="شاهد الفيديو";
		$seeAllArtwork = "رؤية جميع الأعمال الفنية";
		$relatedVideo = "الفيديو ذات الصلة";
		$info="معلومات";
		$tele="٥١٤-٤٤٣-١٨٩٦";
		$location = "مونتريال، كيبيك";
		$access="تسجيل الدخول";
		$password="كلمة السر";
		$getAccess="الاتصال للوصول";
		$artworkTitle = "ذات صلة";
		$moreProjects = "مشاريع أخرى";
		$seeExperiment ="مشاهدة تجربتك";
		$seeVideo ="انظر الفيديو";
		$swf ="تحميل";
		$moreVids = "فيديوهات اكثر";
}
if ($langID == 'jp'){
		$tools = "ツール";
		$createdBy = "によって作成されました";
		$sheraz = "シラーズアスガル";
		$viewAllVideos = "すべての動画";
		$projects = "最新の仕事";
		$seeProject = "仕事を見る";
		$artwork = "設計";
		$recentVideos = "最近のビデオ";
		$recentExps = "実験";
		$vimeoWatch = "ヴィデオを見る";
	
		$about ="について";
		$lab ="ラボ";
		$unity ="UNITY";
		$contact ="コンタクト";
		$largeView ="大きなビュー";
		$download ="ダウンロード";
		$videos ="ビデオ";
		$watchVideo ="ビデオを見ます";
		$seeAllArtwork = "すべてのアートワークを見ます";
		$relatedVideo = "関連ビデオ";
		$info="情報";
		$tele="514.443.1896";
		$location = "ケベック州モントリオール";
		$access="ログイン";
		$password="パスワード";
		$getAccess="アクセスを得るために連絡";
		$artworkTitle = "関連する";
		$moreProjects = "その他のプロジェクト";
		$seeExperiment ="実験を見る";
		$seeVideo ="ビデオを見る";
		$swf ="ダウンロード";
		$moreVids = "より多くのビデオ";
}

// tools
if ($langID=="ar"){
	$max = "ﺩﻱمــكــس‎‎‎‎‎‎٣";
	$mentalray = "مــنــطــلــرﻯ‎";
	$afteraffects = "أفـطـرأفــكـس‎‎‎‎‎‎‎";
	$premiere = "بــريــمــر‎‎‎‎";
	$photoshop = "ـتــوشــوﺏ‎‎‎‎فـ‎";
	$illustrator = "إلــصتــرتــر‎‎‎‎‎‎";
	$mudbox = "مـﺩبوس";
	$vray = "ويرﻯ";
	$unity = "يــونتـى‎";
	$fumefx = "فـيومأفــكـس‎";
	$c4d = "سينمأﺩى٤";
	$css = "المغلق";
	$html = "أتش تي أم أل";
	$javascript = "جافا سكريبت";
	$flash = "فلاش";
	$occulus = "أوكولأس";
	$phpx = "بـى أتش بـى";
	$vue = "ويو";
	$arduino = "اردوينو";

	}
if ($langID=="jp"){
	$max = "";
	$mentalray = "";
	$afteraffects = "";
	$premiere = "";
	$photoshop = "";
	$illustrator = "";
	}
	
if(($langID=="")||($langID=="en")||($langID=="de")||($langID=="fr")||($langID=="es")){
	$maya = "Maya";
	$max = "3ds Max";
	$mentalray = "Mental Ray";
	$afteraffects = "After Affects";
	$animate = "Animate";
	$premiere = "Premiere";
	$photoshop = "Photoshop";
	$illustrator = "Illustrator";
	$mudbox = "Mudbox";
	$arnold = "Arnold";
	$vray = "V Ray";
	$arduino = "Arduino";
	$unity = "UNITY";
	$fumefx = "FumeFX";
	$c4d = "Cinema 4D ";
	$css = "CSS";
	$html = "HTML";
	$javascript = "Javascript";
	$flash = "Flash";
	$occulus = "Occulus VR";
	$phpx = "PHP";
	$vue = "Vue Xtream";
	$mobu = "Motion Builder";
	$fusion = "Fusion 360";
	$substance = "Substance";
	$audition = "Audition";
	}

//artwork

if ($langID=="ar"){
		$ac_title="أسأسن كرﺩ";
		$ht_title = "حأت ويل";
		$WOW_title = "العالم من علب";
		$ST_title = "ستار تريك";
		$HALO_title = "هالة-إسبارطـن مـرك‎ ٤";
		$WOW2_title = "العالم من علب";
		$MC_CON_title = "إسبارطـن  مـرك‎  ٤";
		$HT2_title = "حأت ويل";
		$MINION_1_title = "كتلة البوب";
		$MINION_2_title = "العميل عربة";
		$gumpaway_title = "";
		$wowWeb_title = "";
	}
if ($langID=="jp"){
		$ac_title="アサシンクリード";
		$ht_title = "ホットウィール";
		$WOW_title = "アーサス・メネシル";
		$ST_title = "スタートレック";
		$HALO_title = "インサイド ・ザ・プロジェクト";
		$WOW2_title = "ウォークラフト";
		$MC_CON_title = "インサイド ・ザ・プロジェクト";
		$HT2_title = "ホットウィール";
		$MINION_1_title = "ボブスブロック";
		$MINION_2_title = "手先ワゴン";
		$gumpaway_title = "";
		$wowWeb_title = "";
	}
if(($langID=="")||($langID=="en")||($langID=="de")||($langID=="fr")||($langID=="es")){
		$ac_title="ASSASSINS CREED";
		$ht_title = "HOTWHEELS";
		$WOW_title = "ARTHAS MENETHIL";
		$ST_title = "STARTREK";
		$HALO_title = "HALO-SPARTAN MARK VI";
		$WOW2_title = "HORDE VS ALLIANCE";
		$MC_CON_title = "SPARTAN MARK VI";
		$HT2_title = "HOTWHEELS";
		$MINION_1_title = "BOB'S BLOK";
		$MINION_2_title = "MINION WAGON RIG";
		$gumpaway_title = "GUMPAWAY.COM";
		$wowWeb_title = "WORLD OF WARCRAFT WEB DESIGN";
		$alreno_title = "ALRENO.COM";
	}

if (($langID=="en") || ($langID=="")){
	$tools = "TOOLS";
	$ac_desc = "Graphic created for unreveal of Assassins Creed and Megabloks Alliance for New York Comicon. 3ds max was used to render of the character, the background was taken for Assassins Creed artwork.";
	$ht_desc = "This graphic is designed for Megabloks website. All the renders are created in Cinema 4D and  composed in photoshop.";
	$WOW_desc = "This composition is created for Megabloks World of Warcraft website Site. The character is rendered in Cinema 4D and composed in photoshop.";
	$ST_desc = "The graphic is designed for Megabloks-Startrek unreveal at NY Comicon. The graphic is modelled and rendered in 3ds Max and composed in photoshop.";
    $HALO_desc = "The graphic is a despiction of cyro bay. The set is modelled in 3ds max for the Halo-Mega bloks short. The image is rendered using mental ray and later composed in photoshop.";
	$WOW2_desc = "The composition is a dipiction of  Horde Vs Alliance faceoff with megabloks figs. The characters are rendered in Cinema 4D and composed in photoshop.";
	$MC_CON_desc = "Initial concept of Spartan Mark IV with Master Chief as the main character. The set is modelled in 3ds max. The image is rendered using mental ray and later composed in photoshop.";
	$HT2_desc = "This graphic is designed for Megabloks website. All the renders are created in Cinema 4D and  composed in photoshop.";
	$MINION_1_desc = "Graphic of bob holding a blok from the CGI short Minion Mayhem. This artwork is rendered in 3ds max and later composed in photoshop.";
	$MINION_2_desc = "A graphic display of rig used to animated the minion wagon in the CGI short Minion Mayhem. This artwork is rendered in 3ds max and later composed in photoshop. ";
	$gumpaway_desc = "Created this website for Bike Across Canada event. Build graphics and animations in 3ds Max then finalized layout in Photoshop. Used Dreamweaver to script HTML CSS Javascript PHP.";
	$wowWeb_desc = "Designed this website for World of Warcraft - Megabloks. Rendered all the characters in Cinema 4D. Composed all the pages in Photoshop with some assets created in 3DS Max and Illustrator.";
	$alreno_desc= "Alreno.com: designed this renovation website. HTML CSS Javascript PHP.";
}
if ($langID=="de"){
	$tools = "WERKZEUGE";	
	$ac_desc = "Grafik erstellt für unreveal von Assissins Glaubensbekenntnis und Megabloks Alliance for New York Comicon . 3ds max wurde verwendet, um den Charakter zu machen, war der Hintergrund für Assassins Creed Kunstwerk gemacht.";
	$ht_desc = "Diese Grafik wird für Megabloks Website entwickelt . All das Putzen in Cinema 4D erstellt und in Photoshop zusammen.";
	$WOW_desc = "Diese Zusammensetzung ist für Megabloks World of Warcraft Website Web-Site erstellt . Das Zeichen wird in Cinema 4D gerendert und in Photoshop zusammengesetzt ist.";
	$ST_desc = "Die Grafik ist für Megabloks - Startrek unreveal in NY Comicon konzipiert. Die Grafik wird modelliert und in 3ds Max gerenderten und in Photoshop zusammengesetzt ist.";
    $HALO_desc = "Die Grafik ist ein despiction von Cyro Bucht. Das Set wird in 3ds max für das Halo - Mega Bloks kurzen modelliert . Das Bild wird mit mental ray gerendert und dann in Photoshop zusammengesetzt ist.";
    $WOW2_desc ="Die Zusammensetzung ist eine dipiction der Horde gegen Allianz faceoff mit Megabloks Feigen . Die Zeichen werden in Cinema 4D gerendert und in Photoshop zusammengesetzt ist.";
	$MC_CON_desc = "Initial Konzept der Spartan Mark IV mit Master Chief in der Hauptrolle. Das Set wird in 3ds max modelliert. Das Bild wird mit mental ray gerendert und dann in Photoshop zusammen.";
	$HT2_desc = "Diese Grafik wird für Megabloks Website entwickelt. All das Putzen in Cinema 4D erstellt und in Photoshop Komponiert.";
	$MINION_1_desc = "Grafik von bob hält einen block vom CGI Kurz Minion Mayhem. Dieses Kunstwerk ist in 3ds max gemacht und später in Photoshop zusammen.";
	$MINION_2_desc = "Eine grafische Darstellung der rig verwendet, um den Schergen Wagen im cgi-Kurz Minion Mayhem animiert. Dieses Kunstwerk ist in 3ds max gemacht und später in Photoshop zusammen.";
	$gumpaway_desc = "Erstellt diese Website für das Event Bike Across Canada. Erstellen Sie Grafiken und Animationen in 3ds Max und legen Sie das Layout in Photoshop fest. Dreamweaver verwendet, um HTML CSS Javascript PHP zu schreiben";
	$wowWeb_desc = "Diese Website wurde für World of Warcraft - Megabloks entworfen. Alle Zeichen in Cinema 4D gerendert. Alle Seiten in Photoshop mit einigen in 3DS Max und Illustrator erstellten Elementen.";
	$alreno_desc= "Alreno.com: Design und Entwicklung einer Renovierungs-Website. HTML CSS Javascript PHP.";

}
if ($langID=="fr"){
	$tools = "OUTILS";	
	$ac_desc = "Graphique créé pour Unreveal de Assissins Creed et Megabloks Alliance pour New York Comicon . 3ds max a été utilisé pour rendre le caractère, le fond a été prise pour Assassins Creed.";
	$ht_desc = "Ce graphique est conçue pour le site Web Megabloks . Tout le rend sont créés dans CINEMA 4D et composée dans photoshop";
	$WOW_desc = "Cette composition est créé pour Megabloks World of Warcraft site Site. Le personnage est rendu dans Cinema 4D et composé dans photoshop .";
	$ST_desc = "Le graphique est conçu pour Megabloks - Startrek Unreveal à NY Comicon . Le graphique est modélisé et rendu dans 3ds Max et composé dans photoshop ";
    $HALO_desc = "Le graphique est un despiction de cyro baie. L'ensemble est modélisée dans 3ds max pour le Halo de Mega Bloks - court . L'image est rendue en utilisant mental ray et plus tard composé dans photoshop .";
    $WOW2_desc ="La composition est un dipiction de Horde Vs Alliance faceoff avec Megabloks figues . Les personnages sont rendus dans Cinema 4D et composées dans photoshop .";
	$MC_CON_desc = "Concept initial de Spartan Mark IV avec Master Chief comme le personnage principal. L'ensemble est modélisée dans 3ds max. L'image est rendue en utilisant mental ray et plus tard composé dans photoshop.";
	$HT2_desc = "Ce graphique est conçue pour le site Web Megabloks. Tout le rend sont créés dans Cinema 4D et composé dans Photoshop.";
	$MINION_1_desc = "Graphique de Bob tenant un blok du CGI courte Minion Mayhem. Cette oeuvre est rendue dans 3ds max et plus tard composé dans photoshop.";
	$MINION_2_desc = "Un affichage graphique de plate-forme utilisée pour animation le wagon séide dans le CGI courte Minion Mayhem. Cette oeuvre est rendue dans 3ds max et plus tard composé dans photoshop.";
	$gumpaway_desc = "Création de ce site Web pour l'événement Bike Across Canada. Construisez des graphiques et des animations dans 3ds Max puis finalisez la mise en page dans Photoshop. Utilisation de Dreamweaver pour la création de scripts HTML CSS Javascript PHP.";
	$wowWeb_desc = "Conception de ce site Web pour World of Warcraft - Megabloks. Rendu tous les caractères dans Cinema 4D. Composé de toutes les pages de Photoshop avec des éléments créés dans 3DS Max et Illustrator.";
	$alreno_desc="Alreno.com: a conçu ce site Web sur la rénovation. HTML CSS Javascript PHP.";
}
if ($langID=="es"){
	$tools = "HERRAMIENTAS";	
	$ac_desc = "Gráfico creado para unreveal de Assissins Credo y Megabloks Alianza para la Nueva York Comicon . 3ds max se utiliza para representar el carácter, el fondo fue tomada por obra Assassins Creed.";
	$ht_desc = "Este gráfico está diseñado para el sitio web Megabloks . Todos los renders son creados en Cinema 4D y compuesta en photoshop";
	$WOW_desc = "Se crea esta composición para Megabloks World of Warcraft Sitio web . El carácter se representa en Cinema 4D y compuso en photoshop.";
	$ST_desc = "El gráfico está diseñado para Megabloks - Startrek unreveal en NY Comicon . El gráfico es modelado y rendido en 3ds Max y compuesta en photoshop.";
    $HALO_desc = "El gráfico es una despiction de la bahía de Cyro . El conjunto está modelado en 3ds max para el Halo Mega Bloks corto. La imagen se procesa utilizando mental ray y más tarde compuso en photoshop.";
    $WOW2_desc ="La composición es una dipiction de Horda vs Alianza cara a cara con Megabloks higos . Los personajes se prestan en Cinema 4D y compuestas en photoshop.";
	$MC_CON_desc = "Concepto inicial de Spartan Mark IV con el Jefe Maestro como personaje principal. El conjunto está modelado en 3ds max. La imagen se procesa utilizando mental ray y más tarde compuso en photoshop.";
	$HT2_desc = "Este gráfico está diseñado para el sitio web Megabloks. Todos los renders son creados en Cinema 4D y compuesta en Photoshop;";
	$MINION_1_desc = "Gráfico de bob sosteniendo un blok del CGI corto Minion Mayhem. La obra se representa en 3ds max y más tarde compuso en photoshop.";
	$MINION_2_desc = "Una representación gráfica de la plataforma utilizada para el carro animada siervo en el CGI corto Minion Mayhem. La obra se representa en 3ds max y más tarde compuso en photoshop.";
	$gumpaway_desc = "Creado este sitio web para el evento Bike Across Canada. Cree gráficos y animaciones en 3ds Max y luego finalice el diseño en Photoshop. Usé Dreamweaver para crear un script HTML CSS Javascript PHP.";
	$wowWeb_desc = "Diseñé este sitio web para World of Warcraft - Megabloks. Representé a todos los personajes en Cinema 4D. Compuse todas las páginas en Photoshop con algunos recursos creados en 3DS Max e Illustrator.";
	$alreno_desc="Alreno.com: diseñó este sitio web de renovación. HTML CSS Javascript PHP.";
	
}
if ($langID=="ar"){
	$tools = "أدوات";	
	$ac_desc = "خلق الرسم للعرض من أسأسن كرﺩ ومكع بلوكس التحالف من أجل نيويورك كومكون. تم استخدام ﺩﻱ٣مــكــس‎‎‎‎ لتقديم للشخصية، واتخذت الخلفية لالقتلة العقيدة الفني.";
	$ht_desc = "تم تصميم هذا الرسم لمكع بلوكس الموقع. جميع يجعل تم إنشاؤها في سينما ﺩى٤ وتتألف في الفوتوشوب";
	$WOW_desc = "يتم إنشاء هذه التركيبة لمكع بلوكس العالم من علب الموقع الموقع. يتم تقديم شخصية في السينما ﺩى٤ وتتكون في الفوتوشوب.";
	$ST_desc = "تم تصميم الرسوم البيانية لمكع بلوكس - عرض ستار تريك في نيويورك كومكون. وعلى غرار الرسم وجعل في ﺩﻱمــكــس‎‎‎‎‎‎٣ و تتكون في الفوتوشوب.";
    $HALO_desc = "الرسم هو اظهار كـرأيــو‎ الخليج. وعلى غرار مجموعة في ٣ﺩﻱ ماكس لهالو ميجا بلوكس قصيرة. يتم تقديم الصورة باستخدام شعاع العقلية وتتكون في وقت لاحق في الفوتوشوب.";
    $WOW2_desc ="تركيبة هو خلق من الحشد مقابل التحالف معركة مع مكع بلوكس التين. يتم تقديم الشخصيات في السينما ﺩى٤ وتتكون في الفوتوشوب";
	$MC_CON_desc = "المفهوم الأولي للالمتقشف مارك الرابع مع رئيس ماجستير والشخصية الرئيسية. وعلى غرار مجموعة في ٣ﺩﻱ ماكس. يتم تقديم الصورة باستخدام شعاع العقلية وتتكون في وقت لاحق في الفوتوشوب.";
	$HT2_desc = "تم تصميم هذا الرسم لمكع بلوكس الموقع. جميع يجعل تم إنشاؤها في سينما ﺩى٤ وتتألف في الفوتوشوب.";
	$MINION_1_desc = "الرسم من بوب عقد بلوك من المجموعة الاستشارية لاندونيسيا قصيرة المحبوب المعبود الفوضى. يتم تقديم هذا العمل الفني في أقصى الثريد وتتألف في وقت لاحق في الفوتوشوب.";
	$MINION_2_desc = "وعرض الرسومات من تلاعب تستخدم لالمتحركة عربة العميل في المجموعة الاستشارية لاندونيسيا قصيرة المحبوب المعبود الفوضى. يتم تقديم هذا العمل الفني في الثريد وتتألف في وقت لاحق في الفوتوشوب.";
	$gumpaway_desc = "أنشأ هذا الموقع لحدث الدراجات عبر كندا. قم ببناء الرسومات والرسوم المتحركة في ثلاثة س ثم وضع اللمسات الأخيرة على التخطيط في متجر الصور. تستخدم الحلم الحائك للسيناريو";
	$wowWeb_desc = "قدمت جميع الشخصيات في السينما أربعة د. تتألف جميع الصفحات في متجر الصور مع بعض الأصول التي تم إنشاؤها في ثلاثة د وث ومصور.";
	$alreno_desc="";

}
if ($langID=="jp"){
	$tools = "ツール";	
	$ac_desc = "未発表の「アサシンクリードとMEGA BLOKS」のコラボレーショングラフィックを制作した。ニューヨークで開催されるコミコンにて発表予定である。キャラクターのレンダリングは3DS MAXで制作。背景はアサシンクリードのアートワークをそのまま使用。";
	$ht_desc = "このグラフィックはMEGA BLOKSのウェブ用にデザインした。全てのレンダリングはCinema 4DとPhotoshopで制作。";
	$WOW_desc = "これはMEGA BLOKS・ワールド・ワークラフトというウェブ用に制作した。全てのキャラクターのレンダリングはCinema 4DとPhotoshopで制作。";
	$ST_desc = "未発表の「スタートレックとMEGA BLOKS」のコラボレーショングラフィックを制作した。ニューヨークで開催されるコミコンにて発表予定である。グラフィックのモデリングとレンダリングは、3DS MAXとPhotoshopで制作。";
    $HALO_desc = "グラフィックはCyroの湾のdespictionです。セットには、ハロ - メガ用の3ds Maxでモデル化されているbloks短いです。画像は、mental rayのを使用してレンダリングし、後でPhotoshopで構成されています。";
	$WOW2_desc = "組成物は、megabloksのイチジクと軍団対アライアンスfaceoffのdipictionです。文字は、CINEMA 4DでレンダリングしてPhotoshopで構成されています。";
	$MC_CON_desc = "メインキャラクターとしてマスターチーフとスパルタンマークIVの最初のコンセプト。セットは、3ds Maxでモデル化されています。画像は、mental rayのを使用してレンダリングし、後でPhotoshopで構成されています。";
	$HT2_desc = "このグラフィックはMegabloksのウェブサイトのために設計されています。すべてのCINEMA 4Dで作成し、Photoshopで構成されているレンダリングされます。";
	$MINION_1_desc = "CGI短いミニオンメイヘムからブロックを保持しているボブのグラフィック。このアートワークは、3ds Maxでレンダリングし、後でPhotoshopで構成されています。";
	$MINION_2_desc = "リグのグラフィック表示は、CGI短いミニオンメイヘムでミニオンワゴンをアニメーション化するために使用されます。このアートワークは、3ds Maxでレンダリングし、後でPhotoshopで構成されています。";
	$gumpaway_desc = "3ds Maxでグラフィックスやアニメーションを作成してから、Photoshopでレイアウトを完成させます。 Dreamweaverを使用してHTML CSS Javascript PHPをスクリプト化しました。";
	$wowWeb_desc = "World of Warcraftのためにこのウェブサイトをデザインしました - メガブロック。 Cinema 4Dの全てのキャラクターをレンダリングしました。 Photoshopのすべてのページを3DS MaxおよびIllustratorで作成されたアセットで構成しました。";
	$alreno_desc="Alreno.com：このリフォームウェブサイトをデザインしました。 HTML CSS Javascript PHP。";

}

$ac_link = "images/artwork/assasinsCreed.jpg";
$ht_link = "images/artwork/hotwheels.jpg";
$WOW_link = "images/projectWarcraft/downloads/ArthasWorldofWarcraft.jpg";
$ST_link = "images/artwork/startrek.jpg";
$HALO_link = "images/projectSpartan/downloads/cryoBay.jpg";
$WOW2_link = "images/projectWarcraft/downloads/HordeVSAllianceDepiction.jpg";
$MC_CON_link = "images/artwork/halo_concept.jpg";
$HT2_link = "images/artwork/hotwheels2.jpg";
$MINION_1_link = "images/minion/minion_3.jpg";
$MINION_2_link = "images/minion/minion_wagon_rig.jpg";
$gumpaway_link = "images/artwork/gumpaway.jpg";
$alreno_link = "images/artwork/alreno.jpg";
$wowWeb_link = "images/projectWarcraft/home.jpg";
$wowWeb_link02 = "images/projectWarcraft/toys.jpg";
$wowWeb_link03 = "images/projectWarcraft/figsPage.jpg";
$wowWeb_link04 = "images/projectWarcraft/DYIC.jpg";
$wowWeb_link05 = "images/projectWarcraft/herosGuide.jpg";



$experiment_1 ="images/lab/experiment_1.jpg";
$exp01_videoLink = "videos/pokeblok.mp4";
$exp01_poster = "images/lab/experiment_1.jpg";
$load_Exp01_link_01="images/lab/exp01_img_01.jpg";
$load_Exp01_link_02="images/lab/exp01_img_02.jpg";
$load_Exp01_link_03="images/lab/exp01_img_03.jpg";
$load_Exp01_link_04="images/lab/exp01_img_04.jpg";
$load_Exp01_link_05="images/lab/exp01_img_05.jpg";
$load_Exp01_link_06="images/lab/exp01_img_06.jpg";
$load_Exp01_link_07="images/lab/exp01_img_07.jpg";
$load_Exp01_link_08="images/lab/exp01_img_08.jpg";
$load_Exp01_link_09="images/lab/exp01_img_09.jpg";
$load_Exp01_link_10="images/lab/exp01_img_10.jpg";
$load_Exp01_link_11="images/lab/exp01_img_11.jpg";
$load_Exp01_link_12="images/lab/exp01_img_12.jpg";


$experiment_2 ="images/lab/experiment_2.jpg";
$exp02_videoLink = "videos/roboblok.mp4";
$exp02_poster = "images/lab/experiment_2.jpg";
$load_Exp02_link_01="images/lab/exp02_img_01.jpg";
$load_Exp02_link_02="images/lab/exp02_img_02.jpg";
$load_Exp02_link_03="images/lab/exp02_img_03.jpg";
$load_Exp02_link_04="images/lab/exp02_img_04.jpg";
$load_Exp02_link_05="images/lab/exp02_img_05.jpg";
$load_Exp02_link_06="images/lab/exp02_img_06.jpg";
$load_Exp02_link_07="images/lab/exp02_img_07.jpg";
$load_Exp02_link_08="images/lab/exp02_img_08.jpg";
$load_Exp02_link_09="images/lab/exp02_img_09.jpg";
$load_Exp02_link_10="images/lab/exp02_img_10.jpg";
$load_Exp02_link_11="images/lab/exp02_img_11.jpg";
$load_Exp02_link_12="images/lab/exp02_img_12.jpg";
$load_Exp02_link_13="images/lab/exp02_img_13.jpg";
$load_Exp02_link_14="images/lab/exp02_img_14.jpg";
$load_Exp02_link_15="images/lab/exp02_img_15.jpg";
$load_Exp02_link_16="images/lab/exp02_img_16.jpg";
$load_Exp02_link_17="images/lab/exp02_img_17.jpg";
$load_Exp02_link_18="images/lab/exp02_img_18.jpg";



$experiment_3 ="images/lab/experiment_3.jpg";
$experiment_3 ="images/lab/experiment_3.jpg";
$exp03_videoLink = "videos/blokTurrent.mp4";
$exp03_poster = "images/lab/experiment_3.jpg";
$load_Exp03_link_01="images/lab/exp03_img_01.jpg";
$load_Exp03_link_02="images/lab/exp03_img_02.jpg";
$load_Exp03_link_03="images/lab/exp03_img_03.jpg";
$load_Exp03_link_04="images/lab/exp03_img_04.jpg";
$load_Exp03_link_05="images/lab/exp03_img_05.jpg";
$load_Exp03_link_06="images/lab/exp03_img_06.jpg";
$load_Exp03_link_07="images/lab/exp03_img_07.jpg";
$load_Exp03_link_08="images/lab/exp03_img_08.jpg";


$experiment_4 ="images/lab/experiment_4.jpg";
$exp04_videoLink = "videos/roverAPP.mp4";
$exp04_poster = "images/lab/experiment_4.jpg";
$load_Exp04_link_01="images/lab/exp04_img_01.jpg";
$load_Exp04_link_02="images/lab/exp04_img_02.jpg";
$load_Exp04_link_03="images/lab/exp04_img_03.jpg";
$load_Exp04_link_04="images/lab/exp04_img_04.jpg";
$load_Exp04_link_05="images/lab/exp04_img_05.jpg";
$load_Exp04_link_06="images/lab/exp04_img_06.jpg";
$load_Exp04_link_07="images/lab/exp04_img_07.jpg";
$load_Exp04_link_08="images/lab/exp04_img_08.jpg";
$load_Exp04_link_09="images/lab/exp04_img_09.jpg";

$experiment_5 ="images/lab/experiment_5.jpg";
$exp05_videoLink = "videos/shapeshifter.mp4";
$exp05_poster = "images/lab/experiment_5.jpg";
$load_Exp05_link_01="images/lab/exp05_img_01.jpg";
$load_Exp05_link_02="images/lab/exp05_img_02.jpg";
$load_Exp05_link_03="images/lab/exp05_img_03.jpg";
$load_Exp05_link_04="images/lab/exp05_img_04.jpg";
$load_Exp05_link_05="images/lab/exp05_img_05.jpg";
$load_Exp05_link_06="images/lab/exp05_img_06.jpg";
$load_Exp05_link_07="images/lab/exp05_img_07.jpg";
$load_Exp05_link_08="images/lab/exp05_img_08.jpg";
$load_Exp05_link_09="images/lab/exp05_img_09.jpg";
$load_Exp05_link_10="images/lab/exp05_img_10.jpg";
$load_Exp05_link_11="images/lab/exp05_img_11.jpg";

$experiment_6 ="images/lab/experiment_6.jpg";
$exp06_videoLink = "videos/rig.mp4";
$exp06_poster = "images/lab/experiment_6.jpg";
$load_Exp06_link_01="images/lab/exp06_img_01.jpg";
$load_Exp06_link_02="images/lab/exp06_img_02.jpg";
$load_Exp06_link_03="images/lab/exp06_img_03.jpg";
$load_Exp06_link_04="images/lab/exp06_img_04.jpg";
$load_Exp06_link_05="images/lab/exp06_img_05.jpg";
$load_Exp06_link_06="images/lab/exp06_img_06.jpg";
$load_Exp06_link_07="images/lab/exp06_img_07.jpg";
$load_Exp06_link_08="images/lab/exp06_img_08.jpg";
$load_Exp06_link_09="images/lab/exp06_img_09.jpg";

$experiment_7 ="images/lab/experiment_7.jpg";
$exp07_videoLink = "videos/rig.mp4";
$exp06_poster = "images/lab/experiment_7.jpg";
$load_Exp07_link_01="images/lab/exp07_img_01.jpg";
$load_Exp07_link_02="images/lab/exp07_img_02.jpg";
$load_Exp07_link_03="images/lab/exp07_img_03.jpg";
$load_Exp07_link_04="images/lab/exp07_img_04.jpg";
$load_Exp07_link_05="images/lab/exp07_img_05.jpg";
$load_Exp07_link_06="images/lab/exp07_img_06.jpg";
$load_Exp07_link_07="images/lab/exp07_img_07.jpg";
$load_Exp07_link_08="images/lab/exp07_img_08.jpg";
$load_Exp07_link_09="images/lab/exp07_img_09.jpg";

$experiment_8 ="images/lab/experiment_8.jpg";
$exp08_videoLink = "videos/rig.mp4";
$exp08_poster = "images/lab/experiment_8.jpg";
$load_Exp08_link_01="images/lab/exp08_img_01.jpg";
$load_Exp08_link_02="images/lab/exp08_img_02.jpg";
$load_Exp08_link_03="images/lab/exp08_img_03.jpg";
$load_Exp08_link_04="images/lab/exp08_img_04.jpg";
$load_Exp08_link_05="images/lab/exp08_img_05.jpg";
$load_Exp08_link_06="images/lab/exp08_img_06.jpg";
$load_Exp08_link_07="images/lab/exp08_img_07.jpg";
$load_Exp08_link_08="images/lab/exp08_img_08.jpg";
$load_Exp08_link_09="images/lab/exp08_img_09.jpg";
$load_Exp08_link_10="images/lab/exp08_img_10.jpg";
$load_Exp08_link_11="images/lab/exp08_img_11.jpg";
$load_Exp08_link_12="images/lab/exp08_img_12.jpg";



// videos


if (($langID=="en") || ($langID=="")){

	$vidTitle_tnmt = "TNMT 80s THEME - 2017";
	$vidDesc_tnmt =	"Recreating Turtles theme intro from the 80s using the Megabloks toys. The project is in production To be released by the end of 2017. This video is the rough pass of the first 20 seconds.";

	$vidTitle_bike =	"BIKING ACROSS CANADA - 2016";
	$vidDesc_bike =	"I am attempting to bike and run across Canada. In the past, I have done a few extreme races, that proved to be mentally and physically rewarding. Now I want to do something more . . . something more meaningful I think . . . so the best place to start is by helping our children. I'm collaborating with Make A Wish foundation on this venture. All proceeds will be aimed towards the happiness of our children . . . . . . . . so Cheers & Thanks!";

	$vidTitle_minion =	"MINION MAYHEM - 2015";
	$vidDesc_minion =	"The chaos keeps building with your favorite Minions in this “blokified” animation by Mega Bloks. While making a despicable getaway in their Station Wagon, Kevin and Stuart collide with Bob’s massive building project, blasting bricks everywhere! But all the pieces fall into place as Kevin lands inside the ultimate Supervillain Jet, taking to the skies with Stuart on his zipline. And even Bob ends up with a miniature version of his favorite plant. Check out the entire Mega Bloks Minions line at minions.megabloks.com to build your own world of Minion mischief!";

	$vidTitle_earlyConcept = "EARLY CONCEPT - 2015";
	$vidDesc_earlyConcept =	"This was the initial concept for the Minion Mayhem animation placed somewhere in the Mojave desert. Later this concept was changed into Mega Bloks blocky style. The environment for this concept animation is scultped and painted in 3DS Max and Mudbox. The minion wagon is rigged and animated in 3DS Max. The complete scene is rendered with Mental Ray and later dust particles were added using FumeFX. The final scene composition was conducted in After Effects.";

	$vidTitle_mark6 = "SPARTAN MARK VI - 2014";
	$vidDesc_mark6 =	"When working solo, need to break down the pipeline from the very beginning. This short movie is an 8 STEP process. To begin the movie needed 3 main set, first the elevator tunnel and the shaft, second cryo bay, third the armory bay. The sets are based on the visuals from Halo 4 and are modeled in studio max. Step 2: rigging the sets to make it animation ready. Step 3: rigging the character. Step 4: environment and character animations. Step 5: shaders in the scene. Step 6: lighting and rendering. Step 7: scene composition and visual FX - this is done in After Effects. Step 8: the final output from Adobe Premiere.";

	$vidTitle_scorpion = "SCORPION WEB SPOT - 2015";
	$vidDesc_scorpion =	"The video was created as a web spot. The video shows off the authentic desinged of the megabloks toys from the Halo 5.";

	$vidTitle_pegasus = "PEGASUS WEB SPOT - 2015";
	$vidDesc_pegasus =	"The video was created as a web spot. The video shows off the authentic desinged of the megabloks toys from the Halo 5.";

	$vidTitle_minionDemos = "MINION DEMO - 2014";
	$vidDesc_minionDemo =	"A very quick 72 hours deadline project for a sales conference. Used CAT System to rig the Mega bloks Minions.  The scene is rendered with Mental Ray. The final composition was done in After Effects.  ";

	$vidTitle_billyBeats = " BILLY BEATS - 2013";
	$vidDesc_billyBeats =	"A transforming animation of a box. Created the animation foro a sales conference.";

	$vidTitle_neo = "NEO SHIFTERS MMO - FLASH ANIMATION";
	$vidDesc_neo =	"This perticular animation was created showing off the new MMO of Neoshiters. The animation is complete created in Flash with action script 3 and timeline animations. The walking  Neoshifter in the beginning was created out of photographed instances of the acctual toy and later animated in Flash. Some of the sprites animations were stripped from the game itself and then resimulated in the video using AS3. The final edited was also achieved in flash no compositing softwares was used.";

	$vidTitle_destinyTVC = "Build A Scene Destiny TVC - 2017 ";
	$vidDesc_destinyTVC =	"Initially did the animations for Bungie Destiny. The animation was used for a TV commercial for Mattel-Magabloks toy line. The scene is created in 3ds Max 2017. Rendered with V ray. Then Composed in After Effects. Later decided breakdown the scene into a build up sequence.";

	$vidTitle_magnext = "MAGNEXT - 2018 ";
	$vidDesc_magnext =	"Animation showcasing a new line for Mattel. Used 3DS max for modelling (environment, scene props), rigging and animation. Used After effects for post, VFX, SFX.";

	$vidTitle_starbucksMinions = "MINIONS AT STARBUCKS - 2017 ";
	$vidDesc_starbucksMinions =	"So this experiment started as a training project for another very cool project. The background footage is filmed at my local Starbucks in Lasalle ... Montreal.Quebec.Canada. Used Boujou to track, 3DS Max for animations rigging ETC ...  and AfterEffects to compile. Duration 28 hours render time inclusive... cheers.";

	$vidTitle_fumeTracking = "FUMEFX TRACKING - 2017 ";
	$vidDesc_fumeTracking =	"Filmed this footage with an Iphone 7 free style. The fig is a Halo Master Chief from Megabloks. Tracked  the footage in Boujou 5. Imported the camera data into 3ds Max. Created a flame animation in FumeFX. Rendered with Scanline. Composed the render output in Adobe After Effects.";
	
	$vidTitle_mattelMinions = "MINIONS AT HQ - 2017 ";
	$vidDesc_mattelMinions =	"Filmed this footage with Iphone 7. This is a test of distant camera tracking. Used Boujou to track, 3DS Max for animations rigging ETC ...  and AfterEffects to compile.";
	
	$vidTitle_rig = "CHARACTER RIGS";
	$vidDesc_rig =	"This video is a breakdown of some of the characters, vehicle, animal rigs I made for different projects. A disclaimer is included for assets not created by me.";

	$vidTitle_evn = "SCENE ENVIRONMENTS";
	$vidDesc_evn =	"This video shows environments of different scenes in short movies I have done in the past followed by the actual footage in fast forward. A disclaimer is included for assets not created by me.";

	$vidTitle_haloLapse = "HALO COMPOSITION LAPSE - 2018 ";
	$vidDesc_haloLapse = "The Halo FOD (Forward Onto Dawn - Megabloks) ship was filmed on a green screen for a stop-motion short movie. This animation is an artistic composition breakdown of how VFX were added to the scene. The foreground planet is created in 3ds Max and rendered with Vray. The explosion was created in fumefx. The rest of the VFX conducted in After Effects.";

	$vidTitle_zackManual = "Zack Build Manual ";
	$vidDesc_zackManual = "Zack Build Manual ";

	$page1 = "PAGE 1";
	$page2 = "PAGE 2";
	$page3 = "PAGE 3";
	
	}
	
if ($langID=="de"){

	$vidTitle_tnmt = "TNMT 80s THEMA - 2017";
	$vidDesc_tnmt =	"Recreating Schildkröten Thema Intro aus den 80er Jahren mit dem Megabloks Spielzeug. Das Projekt ist in Produktion Bis Ende 2017 veröffentlicht werden. Dieses Video ist der grobe Pass der ersten 20 Sekunden.";

	$vidTitle_bike =	"Biken & quer durch Kanada laufen - 2016";
	$vidDesc_bike =	"Ich versuche, mit dem Rad und laufen in ganz Kanada. In der Vergangenheit habe ich einige extreme Rennen gemacht, die geistig und körperlich lohnend erwiesen. Jetzt möchte ich etwas mehr zu tun. . . etwas Sinnvolles , denke ich. . . so dass der beste Ort zu beginnen, ist von unseren Kindern zu helfen. Ich bin zusammen mit Make A Wish Stiftung auf diesem Projekt. Der Erlös wird auf das Glück unserer Kinder ausgerichtet sein. . . . . . . . so Prost & Dank!";

	$vidTitle_minion =	"MINION MAYHEM - 2015";
	$vidDesc_minion =	"Das Chaos, hält den Aufbau mit Ihrem Lieblings-Schergen in dieser “blokified” Animation von Mega Bloks. Während eines verabscheuungswürdigen Wochenende in ihrem Station Wagon, Kevin und Stuart kollidieren mit massiven Bauvorhaben Bobs, Strahlen überall Steine! Aber all die Stücke fallen in Platz als Kevin Länder innerhalb der ultimative Supervillain Jet, in die Lüfte mit Stuart auf seinem zipline. Und selbst Bob endet mit einem Miniatur-Version seiner Lieblingspflanze . Schauen Sie sich die gesamte Mega Bloks Minions Linie bei minions.megabloks.com eigene Welt der Minion Unfug bauen!";

	$vidTitle_earlyConcept = "FRÜHEN KONZEPT - 2015";
	$vidDesc_earlyConcept =	"Dies war das ursprüngliche Konzept für die Minion Mayhem Animation irgendwo in der Mojave-Wüste platziert. Später wurde dieses Konzept in Mega Bloks blocky Stil verändert. Das Umfeld für dieses Konzept Animation scultped und in 3ds Max und Mudbox gemalt. Der Günstling Wagen ist in Ordnung gebracht und in 3DS Max animiert. Der komplette Szene mit Mental Ray gerendert und später Staubpartikel wurden unter Verwendung FumeFX aufgenommen. Die letzte Szene Zusammensetzung wurde in After Effects durchgeführt.";

	$vidTitle_mark6 = "SPARTAN MARK VI - 2014";
	$vidDesc_mark6 =	"Wenn Sie solo arbeiten, müssen Sie die Pipeline von Anfang an durchbrechen. Dieser kurze Film ist ein 8-Step-Prozess. Um den Film zu beginnen, benötigte man 3 Hauptsets, zuerst den Aufzugstunnel und den Schacht, die zweite Kryo-Bucht, die dritte die Rüstungsbucht. Die Sets basieren auf den Visuals von Halo 4 und sind im Studio max. Schritt 2: Rigging die Sets, um es Animation bereit zu machen. Schritt 3: Rigging der Charakter. Schritt 4: Umgebungs- und Charakteranimationen. Schritt 5: Shader in der Szene Schritt 6: Beleuchtung und Rendering. Schritt 7: Szenenaufbau und visueller Effekt - dies geschieht in After Effects. Schritt 8: Die endgültige Ausgabe von Adobe Premiere.";

	$vidTitle_scorpion = "SCORPION WEB SPOT - 2015";
	$vidDesc_scorpion =	"Das Video wurde als Web-Spot erstellt. Das Video zeigt, von der authentischen desinged der Megabloks Spielzeug aus der Halo 5.";

	$vidTitle_pegasus = "PEGASUS WEB SPOT - 2015";
	$vidDesc_pegasus =	"Das Video wurde als Web-Spot erstellt. Das Video zeigt, von der authentischen desinged der Megabloks Spielzeug aus der Halo 5";

	$vidTitle_minionDemos = "MINION DEMO - 2014";
	$vidDesc_minionDemo =	"Eine sehr schnelle 72 Stunden Frist Projekt für eine Vertriebstagung. CAT-System zu manipulieren die Mega Bloks Minions. Die Szene wird mit Mental Ray gerendert. Die endgültige Zusammensetzung wurde in After Effects gemacht.  ";

	$vidTitle_billyBeats = " BILLY BEATS - 2013";
	$vidDesc_billyBeats =	"Eine Umwandlung Animation von einer Box. Erstellt die Animation fro eine Vertriebstagung.";

	$vidTitle_neo = "NEO SHIFTERS MMO - 2008 ";
	$vidDesc_neo =	"Diese perticular Animation wurde Berei das neue MMO von Neoshiters erstellt. Die Animation ist komplett in Flash erstellt mit Action Script 3 und Zeitleistenanimationen. Der Fuß Neoshifter am Anfang wurde aus fotografiert Instanzen des acctual Spielzeug angelegt und später in Flash animiert. Einige der Sprites Animationen wurden aus dem Spiel selbst gestrippt und dann neu simuliert in dem Video mit AS3. Die endgültige bearbeitet wurde auch in Flash erreicht keine Compositing-Software verwendet wurde.";

	$vidTitle_destinyTVC = "Baue eine Szene Schicksal TVC - 2017 ";
	$vidDesc_destinyTVC =	"Zuerst haben die Animationen für Bungie Destiny. Die Animation wurde für einen TV-Spot für Mattel-Magabloks Spielzeuglinie verwendet. Die Szene wird in 3ds Max 2017 erstellt. Rendered mit V ray. Dann in After Effects zusammengesetzt. Später entschlossen, die Szene in eine Build-Sequenz zu bringen.";

	$vidTitle_magnext = "MAGNEXT - 2018 ";
	$vidDesc_magnext =	"Animation zeigt eine neue Linie für Mattel. Gebrauchte 3DS max für Rigging und Animation. Benutzt After-Effekte für Post und VFX.";

	$vidTitle_starbucksMinions = "MINIONEN AN STARBUCKS - 2017 ";
	$vidDesc_starbucksMinions =	"So begann dieses Experiment als Trainingsprojekt für ein weiteres, sehr cooles Projekt. Das Hintergrundmaterial wird gefilmt bei meinem lokalen Starbucks in Lasalle ... Montreal.Quebec.Canada. Gebrauchte Boujou zu verfolgen, 3DS Max für Animationen Takelage ETC ... und AfterEffects zu kompilieren. Dauer 28 Stunden Renderzeit inklusive ... Jubel.";

	$vidTitle_fumeTracking = "FUMEFX TRACKING - 2017 ";
	$vidDesc_fumeTracking =	"Gefilmt dieses Filmmaterial mit einem Iphone 7 freien Stil. Die Feige ist ein Halo Master Chief von Megabloks. Verfolgt die Aufnahmen in Boujou 5. Importiert die Kameradaten in 3ds Max. Erstellt eine Flammenanimation in FumeFX. Mit Scanline ausgegeben. Komponiert die Renderausgabe in Adobe After Effects.";
	
	$vidTitle_mattelMinions = "MINIONEN BEI MEINEM BÜRO - 2017 ";
	$vidDesc_mattelMinions =	"Gefilmt dieses Filmmaterial mit Iphone 7. Dies ist ein Test der entfernten Kamera-Tracking. Gebraucht Boujou zu verfolgen, 3DS Max für Animationen Takelage ETC ... und AfterEffects zu kompilieren.";

	$vidTitle_rig = "CHARAKTER RIGS";
	$vidDesc_rig =	"Dieses Video ist eine Aufschlüsselung einiger der Charaktere, Fahrzeuge, Tier-Rigs, die ich für verschiedene Projekte gemacht habe. Ein Disclaimer ist für nicht von mir erstellte Assets enthalten.";

	$vidTitle_evn = "SZENENUMGEBUNGEN";
	$vidDesc_evn =	"Dieses Video zeigt Umgebungen von verschiedenen Szenen in kurzen Filmen, die ich in der Vergangenheit gemacht habe, gefolgt vom eigentlichen Filmmaterial im Schnellvorlauf. Ein Disclaimer ist für nicht von mir erstellte Assets enthalten.";

	$vidTitle_haloLapse = "HALO ZUSAMMENSETZUNG LAPSE - 2018 ";
	$vidDesc_haloLapse = "Das Halo-FOD-Schiff (Forward Onto Dawn - Megabloks) wurde für einen Stop-Motion-Kurzfilm auf einer grünen Leinwand gedreht. Diese Animation ist eine künstlerische Komposition, die zeigt, wie VFX zur Szene hinzugefügt wurde. Der Vordergrundplanet wird in 3ds Max erstellt und mit Vray gerendert. Die Explosion wurde in fumefx erstellt. Der Rest des VFX wurde in After Effects durchgeführt.";
	
	$page1 = "SEITE 1";
	$page2 = "SEITE 2";
	$page3 = "SEITE 3";

	}

if ($langID=="fr"){

	$vidTitle_tnmt = "	TNMT 80s THÉME - 2017";
	$vidDesc_tnmt =	"Recréer l'introduction de thème des tortues des années 80 en utilisant les jouets de Megabloks. Le projet est en production À paraître d'ici la fin de 2017. Cette vidéo est la passe approximative des 20 premières secondes.";

	$vidTitle_bike =	"Vélo et course à travers le Canada - 2016";
	$vidDesc_bike =	"Je tente de faire du vélo et de courir à travers le Canada. Dans le passé, je l'ai fait quelques courses extrêmes, qui se sont révélées être mentalement et physiquement gratifiant. Maintenant, je veux faire quelque chose de plus. . . quelque chose de plus significatif, je pense. . . de sorte que le meilleur endroit pour commencer est d'aider nos enfants. Je collaboration avec Make A Wish Foundation dans cette aventure. Tous les profits seront dirigés vers le bonheur de nos enfants. . . . . . . . alors Acclamations et Merci!";

	$vidTitle_minion =	"MINION MAYHEM - 2015";
	$vidDesc_minion =	"Le chaos continue de construire avec vos Larbins préférés dans ce “blokified”  animation par Mega Bloks. Tout en faisant une escapade méprisable dans leur Station Wagon, Kevin et Stuart en collision avec projet de construction massive de Bob, le dynamitage des briques partout! Mais tous les morceaux tombent en place comme des terres à l'intérieur de l'ultime Kevin Supervillain Jet, prendre l'avion avec Stuart sur son tyrolienne. Et même Bob se retrouve avec une version miniature de sa plante préférée. Découvrez l'ensemble de Mega Bloks ligne Minions au minions.megabloks.com pour construire votre propre monde de Minion méfait!";

	$vidTitle_earlyConcept = "CONCEPT INITIAL - 2015";
	$vidDesc_earlyConcept =	"Ce fut le concept initial de l'animation Minion Mayhem placé quelque part dans le désert de Mojave. Plus tard, ce concept a été changé dans le style blocs Mega Bloks. L'environnement de ce concept animation est scultped et peint dans 3DS Max et Mudbox. Le wagon de minion est truqué et animé dans 3DS Max. La scène complète est rendu avec Mental Ray et les particules de poussière ont été ajoutés plus tard à l'aide FumeFX. La composition de la scène finale a été menée dans After Effects.";

	$vidTitle_mark6 = "SPARTAN MARK VI - 2014";
	$vidDesc_mark6 =	"Lorsque vous travaillez en solo, vous devez commencer dès le début. Ce court métrage est un processus en 8 étapes. Pour commencer le film avait besoin de 3 plateaux principaux, d'abord le tunnel de l'ascenseur et le puits, la deuxième baie de cryo, le troisième la baie de l'armurerie. Les décors sont basés sur les visuels de Halo 4 et sont modélisés en studio max. Etape 2: manipuler les ensembles pour les rendre prêts. Étape 3: truquer le personnage. Étape 4: animations de l'environnement et des personnages. Étape 5: shaders dans la scène. Étape 6: éclairage et rendu. Étape 7: composition de la scène et effets visuels - ceci est fait dans After Effects. Étape 8: la sortie finale d'Adobe Premiere.";

	$vidTitle_scorpion = "SCORPION WEB SPOT - 2015";
	$vidDesc_scorpion =	"La vidéo a été créé comme un endroit web. La vidéo montre au large de la desinged authentique des Megabloks jouets de la Halo 5.";

	$vidTitle_pegasus = "PEGASUS WEB SPOT - 2015";
	$vidDesc_pegasus =	"La vidéo a été créé comme un endroit web. La vidéo montre au large de la desinged authentique des Megabloks jouets de la Halo 5.";

	$vidTitle_minionDemos = "MINION DEMO - 2014";
	$vidDesc_minionDemo =	"A 72 heures projet de délai très rapide pour une conférence de vente. Système occasion CAT de truquer les Mega Bloks des Minions. La scène est rendue avec Mental Ray. La composition finale a été fait dans After Effects.  ";

	$vidTitle_billyBeats = " BILLY BEATS - 2013";
	$vidDesc_billyBeats =	"A transforming animation of a box. Created the animation fro a sales conference.";

	$vidTitle_neo = "NEO SHIFTERS MMO - 2008 ";
	$vidDesc_neo =	"Cette animation a été créée perticular exhibant le nouveau MMO de Neoshiters. L'animation est complète créée en Flash avec l'action script 3 et d'animations de montage. Le Neoshifter de marche dans le début a été créé à partir de cas photographiés du jouet acctual et plus tard animé en Flash. Certains des sprites animations ont été dépouillés du jeu lui-même, puis resimulated dans la vidéo en utilisant AS3. La dernière édition a également été réalisé en flash aucun des logiciels de compositing a été utilisé.";

	$vidTitle_destinyTVC = "Construire une scène Destiny TVC - 2017 ";
	$vidDesc_destinyTVC = "Initialement, les animations pour Bungie Destiny. L'animation a été utilisée pour une publicité télévisée pour la ligne de jouets Mattel-Magabloks. La scène est créée dans 3ds Max 2017. Rendu avec rayons V. Ensuite, composé dans After Effects. Plus tard, a décidé de décomposer la scène en une séquence de compilation.";

	$vidTitle_magnext = "MAGNEXT - 2018 ";
	$vidDesc_magnext =	"Animation présentant une nouvelle ligne pour Mattel. 3DS max utilisé pour le rigging et l'animation. Utilisé After Effects pour post et VFX.";

	$vidTitle_starbucksMinions = "MINIONS À STARBUCKS - 2017 ";
	$vidDesc_starbucksMinions =	"Donc, cette expérience a commencé comme un projet de formation pour un autre projet très cool. Le film d'arrière-plan est filmé à mon Starbucks local à Lasalle ... Montréal.Quebec.Canada. Utilisé Boujou pour suivre, 3DS Max pour les animations de gréage ETC ... et AfterEffects à compiler. Durée 28 heures rendent le temps inclus ... acclamations.";

	$vidTitle_fumeTracking = "FUMEFX TRACKING - 2017 ";
	$vidDesc_fumeTracking =	"Filmé ce film avec un style gratuit Iphone 7. La figue est un Chef Halo Master de Megabloks. Suivi des images dans Boujou 5. Importation des données de la caméra dans 3ds Max. Création d'une animation de flamme dans FumeFX. Rendu avec Scanline. Composé de la sortie de rendu dans Adobe After Effects.";
	
	$vidTitle_mattelMinions = "MINIONS À MON BUREAU - 2017 ";
	$vidDesc_mattelMinions = "Filmé ce film avec Iphone 7. Il s'agit d'un test de suivi des caméras lointaines. Utilisé Boujou pour suivre, 3DS Max pour les animations de gréage ETC ... et AfterEffects à compiler.";

	$vidTitle_rig = "CARACTÈRES RIGS";
	$vidDesc_rig =	"Cette vidéo est une ventilation de certains des personnages, des véhicules, des plates-formes d'animaux que j'ai créées pour différents projets. Une clause de non-responsabilité est incluse pour les actifs non créés par moi.";
	
	$vidTitle_evn = "SCENE ENVIRONNEMENTS";
	$vidDesc_evn =	"Cette vidéo montre des environnements de différentes scènes de courts métrages que j'ai réalisés dans le passé, suivis du métrage réel en avance rapide. Une clause de non-responsabilité est incluse pour les actifs non créés par moi.";
	
	$vidTitle_haloLapse = "COMPOSITION DU HALO EN ACCÉLÉRÉ - 2018 ";
	$vidDesc_haloLapse = "Le navire Halo FOD (Forward Onto Dawn - Megabloks) a été filmé sur un écran vert pour un court métrage en stop motion. Cette animation est une composition de composition artistique de la manière dont VFX a été ajouté à la scène. La planète de premier plan est créée dans 3ds Max et rendue avec Vray. L'explosion a été créée dans fumefx. Le reste de la VFX effectué dans After Effects.";
	
	$page1 = "PAGE 1";
	$page2 = "PAGE 2";
	$page3 = "PAGE 3";

	}

if ($langID=="es"){

	$vidTitle_tnmt = "TNMT 80s TEMA - 2017";
	$vidDesc_tnmt =	"Recrea la introducción de tema de las tortugas de los años 80 usando los juguetes de Megabloks. El proyecto está en producción para ser lanzado a finales de 2017. Este video es el pase áspero de los primeros 20 segundos.";

	$vidTitle_bike =	"Andar en bicicleta y Ejecución A través de Canadá - 2016";
	$vidDesc_bike =	"Estoy tratando de bicicleta y correr a través de Canadá. En el pasado, he hecho unas cuantas carreras extremas, que resultaron ser física y mentalmente gratificante. Ahora quiero hacer algo más. . . algo más significativo que pienso. . . por lo que el mejor lugar para empezar es ayudar a nuestros hijos. Estoy colaborando con Fundación Make a Wish en esta empresa. Todos los ingresos serán dirigidos hacia la felicidad de nuestros hijos. . . . . . . . por lo Saludos y Gracias!";

	$vidTitle_minion =	"MINION MAYHEM - 2015";
	$vidDesc_minion =	"El caos sigue construyendo con sus esbirros favoritos en esta animación “blokified” de Mega Bloks. Al hacer una escapada despreciable en su Station Wagon, Kevin y Stuart chocan con proyecto de construcción masiva de Bob, voladuras ladrillos en todas partes! Pero todas las piezas caen en su lugar como tierras Kevin dentro de la última Supervillain Jet, tomando a los cielos con Stuart en su descenso por cable. E incluso Bob termina con una versión en miniatura de su planta favorita. Echa un vistazo a toda la línea Bloks Mega Minions en minions.megabloks.com para construir su propio mundo de Minion travesuras!";

	$vidTitle_earlyConcept = "CONCEPTO TEMPRANA- 2015";
	$vidDesc_earlyConcept =	"This was the initial concept for the Minion Mayhem animation placed somewhere in the Mojave desert. Later this concept was changed into Mega Bloks blocky style. The environment for this concept animation is scultped and painted in 3DS Max and Mudbox. The minion wagon is rigged and animated in 3DS Max. The complete scene is rendered with Mental Ray and later dust particles were added using FumeFX. The final scene composition was conducted in After Effects.";

	$vidTitle_mark6 = "SPARTAN MARK VI - 2014";
	$vidDesc_mark6 =	"Cuando trabaje solo, necesita analizar la tubería desde el principio. Esta película corta es un proceso de 8 pasos. Para comenzar, la película necesitaba 3 juegos principales, primero el túnel del ascensor y el eje, la segunda bahía de crio, la tercera bahía de la armería. Los conjuntos se basan en las imágenes de Halo 4 y están modelados en estudio max. Paso 2: arreglando los conjuntos para que esté listo para la animación. Paso 3: manipular el personaje. Paso 4: animaciones de ambiente y personaje. Paso 5: sombreadores en la escena. Paso 6: iluminación y renderizado. Paso 7: composición de escena y efectos visuales: esto se hace en After Effects. Paso 8: el resultado final de Adobe Premiere.";

	$vidTitle_scorpion = "SCORPION WEB SPOT - 2015";
	$vidDesc_scorpion =	"El video fue creado como un lugar web. El video muestra fuera de la desinged auténtica de los Megabloks juguetes de Halo 5.";

	$vidTitle_pegasus = "PEGASUS WEB SPOT - 2015";
	$vidDesc_pegasus =	"El video fue creado como un lugar web. El video muestra fuera de la desinged auténtica de los Megabloks juguetes de Halo 5.";

	$vidTitle_minionDemos = "MINION DEMO - 2014";
	$vidDesc_minionDemo =	"Un proyecto plazo de 72 horas muy rápido para una conferencia de ventas. Sistema CAT usada para manipular los bloks Minions Mega. La escena se representa con Mental Ray. La composición final se hizo en After Effects.";

	$vidTitle_billyBeats = " BILLY BEATS - 2013";
	$vidDesc_billyBeats =	"Una animación de transformación de una caja. Creado la animación aquí para allá en una conferencia de ventas.";

	$vidTitle_neo = "NEO SHIFTERS MMO - 2008 ";
	$vidDesc_neo =	"Esta animación perticular fue creado mostrando el nuevo MMO de Neoshiters. La animación se completa creada en flash con action script 3 y animaciones de línea de tiempo. El Neoshifter caminar en un principio fue creado a partir de instancias fotografiados del juguete acctual y más tarde animada en Flash. Algunas de las animaciones de sprites fueron despojados del juego en sí y luego resimulated en el vídeo usando AS3. La final editado se logró también el flash no softwares de composición se utilizó.";

	$vidTitle_destinyTVC = "Construir una escena Destiny TVC - 2017 ";
	$vidDesc_destinyTVC =	"Al principio hicimos las animaciones para Bungie Destiny. La animación fue utilizada para un comercial de televisión para la línea de juguetes Mattel-Magabloks. La escena se crea en 3ds Max 2017. Renderizado con V ray. Luego compuesto en After Effects. Más tarde decidió dividir la escena en una secuencia de construcción.";

	$vidTitle_magnext = "MAGNEXT - 2018 ";
	$vidDesc_magnext =	"Animación mostrando una nueva línea para Mattel. Utiliza 3DS max para rigging y animación. Utiliza After effects para publicación y VFX.";

	$vidTitle_starbucksMinions = "MINIONS AT STARBUCKS - 2017 ";
	$vidDesc_starbucksMinions =	"Así que este experimento comenzó como un proyecto de formación para otro proyecto muy cool. La filmación de fondo se filma en mi local Starbucks en Lasalle ... Montreal.Quebec.Canada. Boujou usado para seguir, 3DS máximo para el aparejo de las animaciones ETC ... y AfterEffects para compilar. Duración 28 horas hacen tiempo incluido ... aplausos.";

	$vidTitle_fumeTracking = "FUMEFX TRACKING - 2017 ";
	$vidDesc_fumeTracking =	"Filmó este metraje con un estilo libre de Iphone 7. El higo es un Halo Master Chief de Megabloks. Seguimiento de las imágenes en Boujou 5. Importó los datos de la cámara en 3ds Max. Creado una animación de la llama en FumeFX. Renderizado con Scanline. Compuso la salida de render en Adobe After Effects.";
	
	$vidTitle_mattelMinions = "MINIONS AT HQ - 2017 ";
	$vidDesc_mattelMinions =	"Filmó este metraje con Iphone 7. Esta es una prueba de seguimiento de cámara distante. Boujou usado para seguir, 3DS máximo para el aparejo de las animaciones ETC ... y AfterEffects para compilar.";

	$vidTitle_rig = "ROPA DE CARACTERES";
	$vidDesc_rig =	"Este video es un desglose de algunos de los personajes, vehículos y plataformas de animales que hice para diferentes proyectos. Se incluye una exención de responsabilidad para los activos no creados por mí.";
	
	$vidTitle_evn = "ENTORNOS DE ESCENA";
	$vidDesc_evn =	"Este video muestra entornos de diferentes escenas en cortometrajes que he hecho en el pasado, seguido por el metraje real en avance rápido. Se incluye una exención de responsabilidad para los activos no creados por mí.";

	$vidTitle_haloLapse = "LAPSO DE COMPOSICIÓN DE HALO - 2018 ";
	$vidDesc_haloLapse = "El barco Halo FOD (Forward Onto Dawn - Megabloks) fue filmado en una pantalla verde para una película corta de stop-motion. Esta animación es un desglose de la composición artística de cómo VFX se agregaron a la escena. El planeta en primer plano se crea en 3ds Max y se representa con Vray. La explosión fue creada en fumefx. El resto del VFX realizado en After Effects.";
	
	$page1 = "PÁGINA 1";
	$page2 = "PÁGINA 2";
	$page3 = "PÁGINA 3";

	}

if ($langID=="ar"){

	$vidTitle_tnmt = "سلاحف النينجا المراهقون المتحولون";
	$vidDesc_tnmt =	"إعادة السلاحف موضوع مقدمة من استخدام اللعب كتل. ويعتبر هذا المشروع في الإنتاج ليتم الافراج بحلول نهاية. هذا الفيديو هو تمرير الخام من عشرين ثانية الأولى.";

	$vidTitle_bike =	"ركوب الدراجات والجري عبر كندا - ٢٠١٦";
	$vidDesc_bike =	"أنا محاولة الدراجة وتشغيل في جميع أنحاء كندا. في الماضي، وقد فعلت بضعة سباقات المتطرفة، التي ثبت أن عقليا وجسديا مجزية. الآن أريد أن أفعل شيئا أكثر من ذلك. . . شيء أكثر وضوحا على ما أعتقد. . . ولذلك فإن أفضل مكان للبدء هو من خلال مساعدة أطفالنا. أنا بالتعاون مع جعل الأساس أتمنى على هذا المشروع. وستوجه جميع العائدات نحو السعادة أطفالنا. . . . . . . . حتى هتاف وشكرا!";

	$vidTitle_minion =	"العميل الفوضى - ٢٠١٥";
	$vidDesc_minion =	"الفوضى يحتفظ بناء مع التوابع المفضلة لديك في هذه الرسوم المتحركة كتلة التي ميجا بلوكس. في حين هروبه حقير في بهم ستيشن واجون، كيفن وستيوارت يصطدم مع مشروع بناء ضخم بوب، التفجير الطوب في كل مكان! لكن كل قطعة تقع في المكان كما كيفن الأراضي داخل النهائي سوبرفيلين جيت ليرتفع الى السماء مع ستيوارت على سفينته. وحتى بوب ينتهي مع نسخة مصغرة من له محطة المفضلة لديك";

	$vidTitle_earlyConcept = "المفهوم الأولي - ٢٠١٥";
	$vidDesc_earlyConcept =	"وكان هذا المفهوم الأولي للرسوم المتحركة المحبوب المعبود الفوضى وضعت في مكان ما في صحراء موهافي. وفي وقت لاحق تم تغيير هذا المفهوم إلى ميجا بلوكس أسلوب ممتلئ الجسم. هو محفور البيئة لهذا المفهوم الرسوم المتحركة ورسمت في ﺩﻱمــكــس‎‎‎‎‎‎٣ و مـﺩبوس البرمجيات. والتلاعب في عربة العميل ومتحركة في ﺩﻱمــكــس‎‎‎‎‎‎٣. يتم تقديم المشهد الكامل مع راي العقلية وأضيفت جزيئات الغبار في وقت لاحق باستخدام فـيومأفــكـس‎. وقد أجريت تكوين المشهد الأخير في أفـطـرأفــكـس.";

	$vidTitle_mark6 = "٦	إسبارطـن مـرك‎ - ٢٠١٤";
	$vidDesc_mark6 =	"وحيد هالو مجلس الأمن المتقشف يستعد لمعركة في دعوى محسنة من بالطاقة كافة السادس الدرع. نهج التهديد المتقدم وانه يعرف انه يعد نفسه للقتال من حياته.";

	$vidTitle_scorpion = "عقرب - ٢٠١٥";
	$vidDesc_scorpion =	"تم إنشاء الفيديو كبقعة على شبكة الإنترنت. الفيديو يظهر قبالة ديسينجيد أصيلة من اللعب بلوكس من هالو ٥.";

	$vidTitle_pegasus = "بيغاسوس - ٢٠١٥";
	$vidDesc_pegasus =	"تم إنشاء الفيديو كبقعة على شبكة الإنترنت. الفيديو يظهر قبالة ديسينجيد أصيلة من اللعب بلوكس من هالو ٥.";

	$vidTitle_minionDemos = "العميل تجريبي - ٢٠١٤";
	$vidDesc_minionDemo =	"مشروع سريع جدا الموعد النهائي ٧٢ ساعة لمؤتمر المبيعات. مستعملة نظام  لتزوير ميجا بلوكس التوابع. يتم تقديم المشهد مع راي العقلية. تم التشكيل النهائي في أفـطـرأفــكـس.";

	$vidTitle_billyBeats = "بيلي على البيانو - ٢٠١٣";
	$vidDesc_billyBeats =	"الرسوم المتحركة تحويل مربع. إنشاء الرسوم المتحركة جيئة وذهابا في مؤتمر المبيعات.";

	$vidTitle_neo = "لعبة المغيرون الجدد - ٢٠٠٨ ";
	$vidDesc_neo =	"تم إنشاء هذه الرسوم المتحركة الرياء جديدة من اللعب. يتم إنشاء كامل الرسوم المتحركة في فلاش مع رمز والجدول الزمني الرسوم المتحركة. تم إنشاء لعبة المشي في البداية من الحالات تصويرها من لعبة والرسوم المتحركة في وقت لاحق فلاش. تم تجريد بعض الرسوم المتحركة العفاريت من اللعبة نفسها ثم المتحركة في الفيديو باستخدام التعليمات البرمجية. وقد تحقق أيضا في ومضة لا برامج التركيب وتستخدم تحريرها المباراة النهائية.";

	$vidTitle_destinyTVC = "بناء مشهد التلفزيون مصير التجارية ";
	$vidDesc_destinyTVC =	"في البداية لم الرسوم المتحركة ل بونجي مصير. تم استخدام الرسوم المتحركة للتلفزيون التجاري لخط لعبة ماتيل-ماغابلوكس. يتم إنشاء المشهد في ثلاثة دس ماكس. المقدمة مع راي V. ثم تتألف في بعد الآثار. قرر في وقت لاحق انهيار المشهد في تراكم تسلسل.";

	$vidTitle_magnext = "MAGNEXT - 2018 ";
	$vidDesc_magnext =	"الرسوم المتحركة عرض خط جديد لشركة Mattel. تستخدم 3DS كحد أقصى للتزييف و animtion. تستخدم After Effects للنشر و VFX.";

	$vidTitle_starbucksMinions = "التوابع في ستاربكس";
	$vidDesc_starbucksMinions =	"لذلك بدأت هذه التجربة كمشروع التدريب لمشروع رائع جدا آخر. صورت لقطات الخلفية في بلدي ستاربكس المحلي في لاسال، مونتريال، كيبيك، كندا. استخدام الكاميرا لتتبع والرسوم المتحركة البرمجيات تزوير الخ ... ورجعية لتجميع. مدة 28 ساعة تجعل الوقت شامل ... الهتافات.";

	$vidTitle_fumeTracking = "هالو فلامر";
	$vidDesc_fumeTracking =	"تصوير هذه اللقطات مع اي فون سبعة نمط الحرة. التين هو رئيس هالو ماستر من ميغابلوكس. تتبع لقطات في بوجو خمسة. استيراد بيانات الكاميرا إلى ثلاثة ماكس. خلق الرسوم المتحركة لهب في فوميفكس. المقدمة مع سكانلين. تأليف الناتج تقديم في أدوبي بعد الآثار.";
	
	$vidTitle_mattelMinions = "مينيونس في مكتبي";
	$vidDesc_mattelMinions =	"تصوير هذه اللقطات مع اي فون سبعة. هذا هو اختبار تتبع الكاميرا البعيدة. تستخدم بوجو لتتبع، ثلاثة ماكس للرسوم المتحركة تزوير الخ ... و أفتيرفكتس لتجميع.";

	$vidTitle_rig = "الشخصيات البارزة";
	$vidDesc_rig =	"هذا الفيديو عبارة عن انهيار لبعض الشخصيات ، مركبة ، منصات حيوانات صنعتها لمشاريع مختلفة. يتم تضمين بيان إخلاء بشأن الأصول التي لم يتم إنشاؤها بواسطة.";

	$vidTitle_evn = "بيئة السين";
	$vidDesc_evn =	"يعرض هذا الفيديو بيئات من المشاهد المختلفة في أفلام قصيرة قمت بها في الماضي متبوعة بالقطات الفعلية بسرعة. يتم تضمين بيان إخلاء بشأن الأصول التي لم يتم إنشاؤها بواسطة.";
	
	$vidTitle_haloLapse = "هالة تكوين التأرجح ";
	$vidDesc_haloLapse = "تم تصوير السفينة على شاشة خضراء لفيلم قصير الحركة. هذه الرسوم المتحركة عبارة عن انهيار مكون أساسي لكيفية إضافة التأثيرات المرئية على المشهد.";
	
	$page1 = "صفحة ١";
	$page2 = "صفحة ٢";
	$page3 = "صفحة ٣";
	
	}

if ($langID=="jp"){

	$vidTitle_tnmt = "十代の突然変異体の忍者カメ - 2017";
	$vidDesc_tnmt =	"ブロックのおもちゃを使用して、カメのテーマのイントロを再作成します。 プロジェクトは生産中です。 このビデオは最初の20秒の大まかなパスです。";

	$vidTitle_bike =	"サイクリング＆カナダ横切ります - 2016";
	$vidDesc_bike =	"私は自転車にしようとカナダ全体を実行しています。過去には、私は精神的にも肉体的にやりがいのあることが証明されたいくつかの極端なレースを、行っています。今、私はもっと何かをしたいです。 。 。何かもっと有意義だと思います。 。 。そう開始するのに最適な場所は、私たちの子供たちを支援することです。私は、このベンチャーにウィッシュ基盤を作ると協力しています。すべての収益は、我々の子供たちの幸せに向かって目的とされます。 。 。 。 。 。 。 。乾杯＆おかげでそう！";

	$vidTitle_minion =	"ミニオン騒乱 - 2015";
	$vidDesc_minion =	"混乱はメガブロックすることにより、このブロックのアニメーションで、お気に入りの手下で構築し続けます。そのステーションワゴン、ケビンで卑劣な休暇を作り、一方スチュアートはどこでもレンガを爆破、ボブの大規模な建築プロジェクトと衝突！しかし、すべての作品は、彼の船にスチュアートと空に取って、究極のスーパーヴィランジェット内部のケビンの土地のような場所に分類されます。とにもボブは彼のお気に入りの植物のミニチュア版で終わり。ミニオンのいたずらの独自の世界を構築するためにminions.megabloks.comで全体メガブロックミニオンラインをチェックしてください！";

	$vidTitle_earlyConcept = "初期概念 - 2015";
	$vidDesc_earlyConcept =	"これは、モハーベ砂漠のどこかに配置されたミニオンメイヘムアニメーションの最初のコンセプトでした。その後、この概念は、メガブロックブロック状のスタイルに変更しました。このコンセプトアニメーションの環境がscultpedと3DS MaxとMudboxの中に描かれています。手先ワゴンは不正と3DS Maxでアニメーション化されています。完全なシーンはメンタルレイでレンダリングされ、後にダスト粒子がFumeFXを使用して追加されました。最後のシーンの組成物は、After Effectsで行いました。";

	$vidTitle_mark6 = "質素マーク6 - 2014";
	$vidDesc_mark6 =	"孤独なヘイローUNSCスパルタンマークVIアーマー搭載ミョルニルの強化スーツで戦いの準備をします。フォアランナーの脅威に近づくと、彼は彼が彼の人生の戦いのために自分自身を準備している知っています。";

	$vidTitle_scorpion = "サソリアニメーション - 2015";
	$vidDesc_scorpion =	"ビデオは、ウェブスポットとして作成されました。ビデオはヘイロー5からmegabloksのおもちゃの設計本物を披露。";

	$vidTitle_pegasus = "ペガサス - 2015";
	$vidDesc_pegasus =	"ビデオは、ウェブスポットとして作成されました。ビデオはヘイロー5からmegabloksのおもちゃの設計本物を披露。";

	$vidTitle_minionDemos = "手先のデモ - 2014";
	$vidDesc_minionDemo =	"営業会議のための非常に迅速な72時間の期限プロジェクト。リグために使用されるCATシステムメガブロック手下。シーンは、メンタルレイでレンダリングされます。最終組成物は、After Effectsで行われました。  ";

	$vidTitle_billyBeats = "ビリーピアノ - 2013";
	$vidDesc_billyBeats =	"ボックスの変換アニメーション。営業会議あちこちアニメーションを作成しました。";

	$vidTitle_neo = "ネオシフター - 2008 ";
	$vidDesc_neo =	"このperticularアニメーションはNeoshitersの新しいMMOを披露作成されました。アニメーションは、アクションスクリプト3とタイムラインアニメーションをFlashで完全に作成されます。初めに歩行Neoshifterはacctualおもちゃの撮影インスタンスの外に作成され、それ以降のFlashでアニメーションされました。スプライトアニメーションの中には、ゲーム自体から削除して、AS3を使用してビデオにresimulatedました。最終的な、フラッシュで使用された何の合成ソフトウェアを達成しなかった編集しました。";

	$vidTitle_destinyTVC = "シーンを構築デスティニーテレビの商業 - 2017 ";
	$vidDesc_destinyTVC =	"最初はBungie Destinyのアニメーションをやりました。 このアニメーションはMattel-MagabloksのおもちゃラインのTVコマーシャルに使用されました。 シーンは3ds Max 2017で作成されます.V rayでレンダリングされます。 その後、After Effectsで構成されます。 後でシーンをビルドアップシーケンスに分解した。";

	$vidTitle_magnext = "大笑い- 2018 ";
	$vidDesc_magnext =	"Animation showcasing a new line for Mattel. Used 3DS max for rigging and animtion. USed After effects for post and VFX.";

	$vidTitle_starbucksMinions = "ミネソタ州スターバックス";
	$vidDesc_starbucksMinions = "だからこの実験は別の非常にクールなプロジェクトのためのトレーニングプロジェクトとして始まりました。 バックグラウンド映像はLasalleの私の地元スターバックスで撮影されています... Montreal.Quebec.Canada。 使用されたカメラ追跡ソフトウェア、アニメーションのためのアニメーションソフトウェアを追跡するETC ...そしてコンパイルされた。 時間はレンダリング時間を含めて数時間...歓声。";

	$vidTitle_mattelMinions = "マイオフィスのマイノリティ";
	$vidDesc_mattelMinions = "Mattelの新しい行を紹介するアニメーション。リギングとアニメーションに3DS maxを使用。 postおよびVFXのAfter Effectsに使用されます。";

	$vidTitle_fumeTracking = "ハローフラマー";
	$vidDesc_fumeTracking = "この映像をIphone 7フリースタイルで撮影しました。 イチジクはメガブロックスのHalo Master Chiefです。 Boujouで映像を追跡しました。5.カメラデータを3ds Maxにインポートしました。 FumeFXでフレームアニメーションを作成しました。 Scanlineでレンダリングされます。 Adobe After Effectsでレンダリング出力を作成しました。";
	
	$vidTitle_rig = "キャラクターリグ";
	$vidDesc_rig =	"このビデオは、さまざまなプロジェクトのために作ったキャラクター、車両、動物リグの内訳です。 免責条項は私が作成していない資産に含まれています。";
	
	$vidTitle_evn = "シーンの環境";
	$vidDesc_evn =	"このビデオでは、私が過去に行ったショートムービーのさまざまなシーンの環境と、早送りの実際のフッテージが続きます。 免責条項は私が作成していない資産に含まれています。";
	
	$vidTitle_haloLapse = "ハロー組成経過 - 2018 ";
	$vidDesc_haloLapse = "この船は、ストップモーションの短い映画のための緑のスクリーンで撮影されました。 このアニメーションは、ビジュアルエフェクトがシーンにどのように追加されたかの基本的な構成ブレークダウンです。";
	
	$page1 = "ページ 1";
	$page2 = "ページ 2";
	$page3 = "ページ 3";
	
	}

?>











































