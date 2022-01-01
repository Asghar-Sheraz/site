<?

if ((($langID=="en") && ($pageID=="contact")) || ($langID=="")){
	$firstName="FIRST NAME*";
	$lastName="LAST NAME*";
	$email="EMAIL ADDRESS*";
	$telephone="TELEPHONE";
	$comments="COMMENTS*";
	$submitBTN="SUBMIT";
	$errorMsg="PLEASE FILL OUT ALL SECTIONS MARKED * ";
	$thankYou="THANK YOU";
	$intouch="I WILL BE INTOUCH SOON";
	
}
if (($langID=="de") && ($pageID=="contact")){
	$firstName="VORNAME*";
	$lastName="NACHNAME*";
	$email="E-MAIL-ADDRESSE*";
	$telephone="TELEFON";
	$comments="KOMMENTARE*";
	$submitBTN="EINREICHEN";
	$errorMsg="BITTE FULLEN SIE ALLE MIT * GEKENNZEICHNETEN SEKTIONEN";
	$thankYou="DANKE";
	$intouch="ICH WERDE BALD INTOUCH";
}
if (($langID=="fr") && ($pageID=="contact")){
	$firstName="PRÉNOM*";
	$lastName="NOM DE FAMILLE*";
	$email="ADRESSE E-MAIL*";
	$telephone="TÉLÉPHONE";
	$comments="COMMENTAIRES*";
	$submitBTN="SOUMETTRE";
	$errorMsg="SE IL VOUS PLAÎT REMPLIR TOUTES LES PARTIES INDIQUÉS AVEC *";
	$thankYou="MERCI";
	$intouch="JE SERAI INTOUCH BIENTÔT";
}
if (($langID=="es") && ($pageID=="contact")){
	$firstName="NOMBRE DE PILA*";
	$lastName="APELLIDO*";
	$email="CORREO ELECTRÓNICO*";
	$telephone="TELÉFONO";
	$comments="COMENTARIOS*";
	$submitBTN="ENVIAR";
	$errorMsg="POR FAVOR LLENE TODAS LAS SECCIONES MARCADOS *";
	$thankYou="Gracias";
	$intouch="ME CONTACTARÉ PRONTO";
}
if (($langID=="ar") && ($pageID=="contact")){
	$firstName="الاسم الأول*";
	$lastName="اسم العائلة*";
	$email="البريد الإلكتروني*";
	$telephone="رقم الهاتف";
	$comments="تعليقات*";
	$submitBTN="إرسال";
	$errorMsg="يرجى ملء كل مقطع وضع علامة *";
	$thankYou="شكر";
	$intouch="وسوف يكون ابن فاكرنى";
}

if (($langID=="jp") && ($pageID=="contact")){
	$firstName="なまえ*";
	$lastName="名字*";
	$email="メールアドレス*";
	$telephone="電話番号";
	$comments="コメント*";
	$submitBTN="決定";
	$errorMsg="マークされたセクションを記入してください * ";
	$thankYou="ありがとう";
	$intouch="私はすぐに連絡になります";
}

?>


