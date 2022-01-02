<!doctype html>
<html>
<head>
<?

$pageID="projects";
include 'includes/meta.php';
?>
<link rel="stylesheet" href="css/projects.css">
<?
include 'includes/links.php';
?>
</head>
<body>
<? include 'includes/header.php';

if (($pjNUM == null ) && ($pjTYPE == null )){
	$pjName = $projects;
	$y="hide";
	$z="hide";
	$p="show";
	} else {
		$p="hide";
		}
if ($pjNUM == "p1"){
	$pjName = $p1;
	$y="hide";
	}
if ($pjNUM == "p2"){
	$pjName = $p3;
	$y="hide";
	}
if ($pjNUM == "p3"){
	$pjName = $p2;
	$y="hide";
	}
if ($pjNUM == "p4"){
	$pjName = $p4;
	$y="hide";
	}
if ($pjNUM == "p5"){
	$pjName = $p5;
	$y="hide";
	}
if ($pjNUM == "p6"){
	$pjName = $p6;
	$y="hide";
	}
if ($pjNUM == "p7"){
	$pjName = $p7;
	$y="hide";
	}
if ($pjNUM == "p8"){
	$pjName = $p8;
	$y="hide";
	}
if ($pjNUM == "p9"){
	$pjName = $p9;
	$y="hide";
	}
if ($pjNUM == "10"){
	$pjName = $p10;
	$y="hide";
	}
if ($pjTYPE == "ki"){
	$pjName = $kitchens;
	$z="hide";
	}
if ($pjTYPE == "dk"){
	$pjName = $decks;
	$z="hide";
	}
if ($pjTYPE == "ba"){
	$pjName = $bathrooms;
	$z="hide";
	}
if ($pjTYPE == "bs"){
	$pjName = $basements;
	$z="hide";
	}
if ($pjTYPE == "lv"){
	$pjName = $livingrooms;
	$z="hide";
	}
?>
    <div class="container">
        <ul class="projects">
            <li class="heading">
                <h1><? echo htmlspecialchars($pjName) ?></h1>
            </li>
            <li class="projectsContent">
            	<ul>
                	<li class="projectsMain <? echo $p ?>">
                    	<ul>
                        	<li>
               					<span class="spanLine"></span>
                            </li>	
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p8"><h2><? echo htmlspecialchars($p8) ?></h2></a>
                            <li>
							<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=10"><h2><? echo htmlspecialchars($p10) ?></h2></a>
                            <li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p9"><h2><? echo htmlspecialchars($p9) ?></h2></a>
                            <li>
							<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p4"><h2><? echo htmlspecialchars($p4) ?></h2></a>
                            </li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p1"><h2><? echo htmlspecialchars($p1) ?></h2></a>
                            </li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p3"><h2><? echo htmlspecialchars($p2) ?></h2></a>
                            </li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p2"><h2><? echo htmlspecialchars($p3) ?></h2></a>
                            </li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p5"><h2><? echo htmlspecialchars($p5) ?></h2></a>
                            </li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p6"><h2><? echo htmlspecialchars($p6) ?></h2></a>
                            </li>
                        	<li>
                            	<a href="projects.php<? echo $n ?>&projectNUM=p7"><h2><? echo htmlspecialchars($p7) ?></h2></a>
                            </li>
                            <li class="links">
                                <a href="projects.php<? echo $n ?>&projectTYPE=bs"><? echo htmlspecialchars($basements) ?></a>
                                <a href="projects.php<? echo $n ?>&projectTYPE=ki"><? echo htmlspecialchars($kitchens) ?></a>
                                <a href="projects.php<? echo $n ?>&projectTYPE=ba"><? echo htmlspecialchars($bathrooms) ?></a>
                                <a href="projects.php<? echo $n ?>&projectTYPE=lv"><? echo htmlspecialchars($livingrooms) ?></a>
                                <a class="linkChg"><? echo htmlspecialchars($decks) ?></a>
                            </li>
                        </ul>
                    </li>
                	<li class="itIs <? echo $z ?>">
                    	<h2><? echo htmlspecialchars($itIs) ?></h2>
                        	<?php
                            $files = glob("images/projectIMG/*.*" ) ;
							for ($i=1; $i<count($files); $i++)
                            {
                                $num = $files[$i];
								$pTYPE = substr($num, -9 , 2);
								$pNUM = substr($num, -6, 2);
								$pTIME = substr($num, 21, -10);
								$pSEQ = substr($num, 18, -13);
								
								if (($pjNUM == "p1") && ($pTIME == "af") && ($pNUM == "p1") ){
									$x="block";
									} elseif (($pjNUM == "p2") && ($pTIME == "af") && ($pNUM == "p2")) {
									$x="block";
									} elseif (($pjNUM == "p3") && ($pTIME == "af") && ($pNUM == "p3")){
									$x="block";
									}elseif (($pjNUM == "p4") && ($pTIME == "af") && ($pNUM == "p4")){
									$x="block";
									}elseif (($pjNUM == "p5") && ($pTIME == "af") && ($pNUM == "p5")){
									$x="block";
									}elseif (($pjNUM == "p7") && ($pTIME == "af") && ($pNUM == "p7")){
									$x="block";
									}elseif (($pjNUM == "p8") && ($pTIME == "af") && ($pNUM == "p8")){
									$x="block";
									}elseif (($pjNUM == "p6") && ($pTIME == "af") && ($pNUM == "p6")){
									$x="block";
									}elseif (($pjNUM == "p9") && ($pTIME == "af") && ($pNUM == "p9")){
									$x="block";
									}elseif (($pjNUM == "10") && ($pTIME == "af") && ($pNUM == "10")){
									$x="block";
											}
										 else {
												$x="none";
												}
								echo '<img style="display:'.$x.';" src="'.$num.'" />';
								}
							?>   
                    </li>
                	<li class="itWas <? echo $z ?>">
                    	<h2><? echo htmlspecialchars($itWas) ?></h2>
							<?php
                            $files = glob("images/projectIMG/*.*" ) ;
							
							for ($i=1; $i<count($files); $i++)
                            {
                                $num = $files[$i];
								$pTYPE = substr($num, -9 , 2);
								$pNUM = substr($num, -6, 2);
								$pTIME = substr($num, 21, -10);
								$pSEQ = substr($num, 18, -13);
								
								if (($pjNUM == "p1") && ($pTIME == "bf") && ($pNUM == "p1") ){
									$x="block";
									} elseif (($pjNUM == "p2") && ($pTIME == "bf") && ($pNUM == "p2")) {
									$x="block";
									} elseif (($pjNUM == "p3") && ($pTIME == "bf") && ($pNUM == "p3")){
									$x="block";
									} elseif (($pjNUM == "p4") && ($pTIME == "bf") && ($pNUM == "p4")){
									$x="block";
									} elseif (($pjNUM == "p5") && ($pTIME == "bf") && ($pNUM == "p5")){
									$x="block";
									} elseif (($pjNUM == "p7") && ($pTIME == "bf") && ($pNUM == "p7")){
									$x="block";
									} elseif (($pjNUM == "p8") && ($pTIME == "bf") && ($pNUM == "p8")){
									$x="block";
									} elseif (($pjNUM == "p6") && ($pTIME == "bf") && ($pNUM == "p6")){
									$x="block";
									} elseif (($pjNUM == "p9") && ($pTIME == "bf") && ($pNUM == "p9")){
									$x="block";
									} elseif (($pjNUM == "10") && ($pTIME == "bf") && ($pNUM == "10")){
									$x="block";
											}
										 else {
												$x="none";
												}
                                echo '<img style="display:'.$x.';" src="'.$num.'" />';
								}
							?>                    	
                    </li>
                    <li class="workType <? echo $y ?> ">
                    	<span></span>
                   			<?php
                            $files = glob("images/projectIMG/*.*" ) ;
							
							for ($i=1; $i<count($files); $i++)
                            {
                                $num = $files[$i];
								$pTYPE = substr($num, -9 , 2);
								$pNUM = substr($num, -6, 2);
								$pTIME = substr($num, 21, -10);
								$pSEQ = substr($num, 18, -13);
								
								if (($pjTYPE == "ki") && ($pTYPE == "ki") && ($pTIME == "af")){
									$s="block";
									} elseif (($pjTYPE == "ba") && ($pTYPE == "ba") && ($pTIME == "af")) {
									$s="block";
									} elseif (($pjTYPE == "bs") && ($pTYPE == "bs") && ($pTIME == "af")) {
									$s="block";
									} elseif (($pjTYPE == "dk") && ($pTYPE == "dk") && ($pTIME == "af")){
									$s="block";	
									} elseif (($pjTYPE == "lv") && ($pTYPE == "lv") && ($pTIME == "af")){
									$s="block";	
										} else {
											$s="none";
											}
                                echo '<img style="display:'.$s.';" src="'.$num.'" />';
								}
							?>                    	
                    </li>
                </ul>
            </li>
         </ul>
		<? include 'includes/footer.php'?>
    </div>
</body>
</html>









































