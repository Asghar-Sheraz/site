    <?
		if ($pageID=="tnmt"){
			$tnmtOther="none";
		}
		if ($pageID=="halo"){
			$haloOther="none";
		}
		if ($pageID=="minion"){
			$minionOther="none";
		}
	
	?>
    <div class="otherProjects">
		<div class="contentCenter">
			<h2><? echo htmlspecialchars($moreProjects) ?></h2>

			<ul style="display:<? echo $tnmtOther ?>;">
				<li>
					<a href="tnmt.php<? echo $globalLink ?>">
						<img src="images/projects/tnmt.jpg" alt="TNMT">
					</a>
				</li>
				<li class="otherTitle">
					<a href="tnmt.php<? echo $globalLink ?>">
						<? echo htmlspecialchars($vidTitle_tnmt) ?>
					</a>
				</li>
			</ul>

			<ul style="display:<? echo $gumpawayOther ?>;">
				<li>
					<a href="http://gumpaway.com/makeawish/">
						<img src="images/projects/gumpaway.jpg" alt="Gumpaway.com">
					</a>
				</li>
				<li class="otherTitle">
					<a href="http://gumpaway.com/makeawish/">
						<? echo htmlspecialchars($vidTitle_bike) ?>
					</a>
				</li>
			</ul>
												
			<ul style="display:<? echo $minionOther ?>;">
				<li>
					<a href="minion.php<? echo $globalLink ?>">
						<img src="images/projects/minion.jpg" alt="minions">
					</a>
				</li>
				<li class="otherTitle">
					<a href="minion.php<? echo $globalLink ?>">
						<? echo htmlspecialchars($vidTitle_minion) ?>
					</a>
				</li>
			</ul>
			
			<ul style="display:<? echo $haloOther ?>;">
				<li>
					<a href="halo.php<? echo $globalLink ?>">
						<img src="images/projects/spartan_0.jpg" alt="Halo">
					</a>
				</li>
				<li class="otherTitle">
					<a href="halo.php<? echo $globalLink ?>">
						<? echo $vidTitle_mark6 ?>
					</a>
				</li>
			</ul>
			
			
		</div>
    </div>
