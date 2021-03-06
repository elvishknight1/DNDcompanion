<!DOCTYPE html>

<html>
    <head>
        <title>DND: Campaign Companion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>
    <body>
	<?php include("header.php"); ?>
	<div class="container gray_hl main">
            <div class="row">
                <?php $segment1 = array(array("Character_Name", "3",false),array("Character_Level", "1",true)
                                ,array("Class", "2",false),array("Paragon_Path", "2",false),array("Epic_Destiny", "2",false)
                                ,array("Exp", "2",true));
		for($i=0; $i<count($segment1); $i++){
				if($i==1){
					echo '<div class="col-md-1"><h4 name="Character_Level"></h4><label class="tiny space-fix">Character Level</label></div>';
				}else if($segment1[$i][2]==true){
			echo '<div class=" form-group col-md-' . $segment1[$i][1] . '">
			<input type="number" name="' . $segment1[$i][0] . '" class="form-control" value=""><label class="tiny">' . $segment1[$i][0] . '</label></div>';

                    }else{
			echo '<div class=" form-group col-md-' . $segment1[$i][1] . '">
			<input name="' . $segment1[$i][0] . '" class="form-control" value=""><label class="tiny">' . $segment1[$i][0] . '</label></div>';
                    }
		}?>
            </div>
            <div class="row">
		<?php $segment2 = array(array("Race", "3",false),array("Size", "1",false)
		,array("Age", "1",true),array("Gender", "1",false),array("Height", "1",true)
		,array("Weight", "1",true), array("Alignment", '1',false),array("Diety", '1',false),array("Adventuring_Company", '2',false));
		for($i=0; $i<count($segment2); $i++){
                    if($segment2[$i][2]==true){
			echo '<div class=" form-group col-md-' . $segment2[$i][1] . '">
			<input type="number" name="' . $segment2[$i][0] . '" class="form-control" value=""><label class="tiny">' . $segment2[$i][0] . '</label></div>';
                    }else{
			echo '<div class=" form-group col-md-' . $segment2[$i][1] . '">
			<input name="' . $segment2[$i][0] . '" class="form-control" value=""><label class="tiny">' . $segment2[$i][0] . '</label></div>';
                    }
		}?>
            </div>
	</div>
	<div class="container gray_l">
            <?php
            for($i=0; $i<3; $i++){
		echo '<div class="col-md-4">
                      <div class="row">
                      <div class="col-md-12 title gray">';
		if($i == 0){
                    echo '<h3> INITIATIVE </h3>';
		}else if($i == 1){
                    echo '<h3> DEFENSES</h3>';
		}else{
                    echo '<h3> MOVEMENT </h3>';
		}
		echo '</div>
                      </div>';            
        	if($i == 0){
        		echo '<div class="row">';
        		$segment3 = array(array("Score", 3,"Your Total Initiative Score"),array("Initiative", 3,"Initiative stats"),array("DEX", 2,"Dexterity is added to initiative here"),array("1/2Lvl", 2,"additional points equal to half your level"),array("Misc", 2,"Any other bonuses"));
           
			for ($j = 0; $j<5; $j++){
	        	        echo '<div class="col-md-' . $segment3[$j][1] . ' gray">
	        	                    <label class="tiny" data-toggle="popover" title="Initiative ' .  $segment3[$j][0] . '" data-trigger="hover" data-content="' . $segment3[$j][2] . '">' . $segment3[$j][0] . '</label>
	        	                    <h4 id="target-' . $segment3[$j][0] . '"></h4>
				      </div>';
			} 
			echo '</div>';
			echo '<div class="row">
	                	<div class="col-md-8">
	                		<label class="tiny"> Conditional Modifiers </label> 
					<input name="conditional-1-' . $j . '" class="form-control">
				</div>
				<div class="col-md-4">
	                		<button class="btn btn-default space-fix"> Add </button> 
				</div>
		              </div>';
			$segment4 = array(array(array("StrScore", 3,false),array("STRENGTH", 3,true),array("Abil-Mod", 3,false),array("1/2Lvl", 3,false)),
				array(array("ConScore", 3,false),array("CONSTITUTION", 3,true),array("Abil-Mod", 3,false),array("1/2Lvl", 3,false)),
				array(array("DexScore", 3,false),array("DEXTERITY", 3,true),array("Abil-Mod", 3,false),array("1/2Lvl", 3,false)),
				array(array("IntScore", 3,false),array("INTELLIGENCE", 3,true),array("Abil-Mod", 3,false),array("1/2Lvl", 3,false)),
				array(array("WisScore", 3,false),array("WISDOM", 3,true),array("Abil-Mod", 3,false),array("1/2Lvl", 3,false)),
				array(array("ChaScore", 3,false),array("CHARISMA", 3,true),array("Abil-Mod", 3,false),array("1/2Lvl", 3,false)));
			echo '<div class="row"><div class="col-md-12 title gray">
				<h3> ABILITY SCORES </h3>
				</div>
			      </div>
			      <div class="row">
				<div class="col-md-3 gray">
					<p class="tiny"> Score </p>
				</div>
				<div class="col-md-3 gray">
					<p class="tiny "> Ability </p>
				</div>
				<div class="col-md-3 gray">
					<p class="tiny "> Abil Mod </p>
				</div>
				<div class="col-md-3 gray">
					<p class="tiny "> Mod + 1/2 lvl </p>
				</div>
			      </div>';
			for ($m=0;$m<6;$m++){
				echo '<div class="row">';
				for ($l=0;$l<4; $l++){
					if($l == 0 || $l == 1){
						if($segment4[$m][$l][2]){

							echo '<div class="col-md-' . $segment4[$m][$l][1] . '">';
							echo '<h4 class="tiny">' . $segment4[$m][$l][0] . '</h4>
							</div>';
						}else{				
							echo '<div class="col-md-' . $segment4[$m][$l][1] . '">';
							echo '<input type="number" id="' . $segment4[$m][$l][0] . '" name="' . $segment4[$m][$l][0] . '" class="form-control">
							</div>';
						}
					}else{
						echo '<div class="col-md-' . $segment4[$m][$l][1] . ' gray">';
						echo   '<h4 id="target-' . $segment4[$m][$l][0] . '-' . $m . '"></h3>
						</div>';
					}
				}
				echo '</div>';
			}
				echo '<div class="row">
								<div class="col-md-12 title gray">
									<h3> HIT POINTS </h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h3 class="tiny"> MAX HP </h3>
									<h3 class="target-HP"></h3>
								</div>
								<div class="col-md-3">
									<h3 class="tiny"> Bloodied </h3>
									<h3 class="target-bloodied"></h3>
								</div>
								<div class="col-md-3">
									<h3 class="tiny"> Surge Value </h3>
									<h3 class="target-surge"></h3>
								</div>
								<div class="col-md-3">
									<h3 class="tiny"> Surges/Day </h3>
									<h3 class="target-surgeperday"></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<h3 class="tiny">Current Hit Points</h3>
									<input type="number" name="target-currenthp" class="form-control target-current">
								</div>
								<div class="col-md-5">
									<h3 class="tiny">Current Surge Uses</h3>
									<input type="number" name="target-currentsurges" class="form-control target-uses">
								</div>
							</div>';
							echo '<div class="row">
							<div class="col-md-8">
								<h3 class="tiny"> Second Wind 1/Encounter </h3>
							</div>';
							echo '<div class="row">
							<div class="col-md-2">
							 <h3 class="tiny"> USED </h3>
							</div>';
							echo '<div class="col-md-2">
							 <input class="form-control" type="checkbox" name="2ndWind">
							</div></div>';
							echo '<div class="row">
							<div class="col-md-12">
								<h3 class="tiny"> Temporary Hitpoints </h3>
								<input class="form-control" type="text" name="TempHitPoints">
							</div></div>';
							echo '<div class="row">
							<div class="col-md-6">
								<h3 class="tiny"> Death Saving Throw Failures </h3>
							</div>
							<div class="col-md-2">
								<input class="form-control" type="checkbox" name="deathsavingthrow1">
							</div>
							<div class="col-md-2">
								<input class="form-control" type="checkbox" name="deathsavingthrow2">
							</div>
							<div class="col-md-2">
								<input class="form-control" type="checkbox" name="deathsavingthrow2">
							</div>
						</div>';
							$segment9 = array('Acrobatics', 'Arcana','Athletics','Bluff','Diplomacy','Dungeoneering','Endurance','Heal','History','Insight','Intimidate','Nature','Perception','Religion','Stealth','Streetwise','Thievery');
			
			echo '<div class="row"><div class="col-md-12 title gray">
				<h3> Skills </h3>
				</div>
			      </div>
			      <div class="row">
				<div class="col-md-2 gray">
					<p class="tiny"> Bonus </p>
				</div>
				<div class="col-md-2 gray">
					<p class="tiny "> Skill Name </p>
				</div>
				<div class="col-md-2 gray">
					<p class="tiny "> Abil Mod + 1/2 lvl </p>
				</div>
				<div class="col-md-2 gray">
					<p class="tiny "> Trnd </p>
				</div>
				<div class="col-md-2 gray">
					<p class="tiny "> Armor Penalty </p>
				</div>
				<div class="col-md-2 gray">
					<p class="tiny "> Misc </p>
				</div>
			      </div>';
			for ($u=0;$u<17;$u++){
				echo '<div class="row">';
				for ($v=0;$v<6;$v++){
					if($v == 1){
						echo '<div class="col-md-4 gray">';
						echo '<h4 class="tiny">' . $segment9[$u] . '</h4>
					</div>';
					}else if($v!=4 && $v!=5){				
						echo '<div class="col-md-2 gray">';
						echo '<h3 class="target"></h3>
					</div>';
					}else{
						echo '<div class="col-md-2 gray">';
						echo '<h3 class="target"></h3>
						</div>';
					}
				}
				echo '</div>';
			}
			echo '</div>';
		}else if($i == 1){
				 		$segment5 = array(array(array("Score", 2),array("AC", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1),array("misc2",1)),
					array(array("Score", 2),array("FORT", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1),array("misc2",1)),
				 	array(array("Score", 2),array("REF", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1),array("misc2",1)),
				 	array(array("Score", 2),array("WILL", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1),array("misc2",1)));
		 	for ($n = 0; $n<4; $n++){
				echo '<div class="row">';
				for($o=0;$o<9;$o++){
		                    echo '<div class="col-md-' . $segment5[$n][$o][1] . ' gray">
		                		<label class="tiny">' . $segment5[$n][$o][0] . '</label>
		                                <h3 id="target-' . $segment5[$n][$o][0] . $n . '"></h3>
					  </div>';
				}
				echo  '</div>';
					
				echo '<div class="row">
		                        <div class="col-md-8">
		                            <label class="tiny"> Conditional Modifiers </label> 
						<input name="conditional-2-' . $n . '" class="form-control">
					</div>
					<div class="col-md-4">
		                            <button class="btn btn-default space-fix"> Add </button> 
					</div>
		        	      </div>';
		    	}
		}else{
			$segment6 = array(array("SpeedScore",2,),array("Speed",5),array("Base",2),array("Armor",1),array("Item",1),array("Misc",1));
			echo '<div class="row">';
			for($p=0;$p<6;$p++){
				if($p != 1){
					echo '<div class="col-md-' . $segment6[$p][1] . ' gray">
							<h3 class="tiny">' . $segment6[$p][0] . '</h3>
							<h3 class="target-' . $segment6[$p][0] . '"></h3>
							</div>';
				}else{
					echo '<div class="col-md-' . $segment6[$p][1] . ' gray">
							<h3 class="tiny">' . $segment6[$p][0] . '</h3>
							</div>';
				}	
			}
				echo '</div>';
				echo '<div class="row">
		                        <div class="col-md-8">
		                            <label class="tiny"> Special Movement </label> 
						<input name="special-movement" class="form-control">
					</div>
					<div class="col-md-4">
		                            <button class="btn btn-default space-fix"> Add </button> 
					</div>';
		echo '</div>';
		echo '<div class="row">
				<div class="col-md-12 title gray">
					<h3> SENSES </h3>
				</div>
			</div>';
		$segment7 = array(array(array("Score",3),array("Passive Insight",3),array("Base",3),array("Skill Bonus",3)),
					array(array("Score",3),array("Passive Perception",3),array("Base",3),array("Skill Bonus",3)));
			for($q=0;$q<2; $q++){
				echo '<div class="row">';
				for($r=0;$r<4;$r++){
					if($q!=1){
					if($r != 1){
						echo '<div class="col-md-' . $segment7[$q][$r][1] . ' gray">
								<h3 class="tiny">' . $segment7[$q][$r][0] . '</h3>
								<h3 class="target-' . $segment7[$q][$r][0] . '"></h3>
								</div>';
					}else{
						echo '<div class="col-md-' . $segment7[$q][$r][1] . ' gray">
								<h3 class="tiny"> Passive Sense </h3>
								<h3 class="tiny">' . $segment7[$q][$r][0] . '</h3>
							</div>';
						}
					}else{
					if($r != 1){
						echo '<div class="col-md-' . $segment7[$q][$r][1] . ' gray">
								<h3 class="target-' . $segment7[$q][$r][0] . '"></h3>
								</div>';
					}else{
						echo '<div class="col-md-' . $segment7[$q][$r][1] . ' gray">
								<h3 class="tiny">' . $segment7[$q][$r][0] . '</h3>
							</div>';
						}
					}
				}
				echo '</div>';
			}
				         echo   '<div class="row"><div class="col-md-8">
		                            <label class="tiny"> Special Senses </label> 
						<input name="special-movement" class="form-control">
					</div>
					<div class="col-md-4">
		                            <button class="btn btn-default space-fix"> Add </button> 
					</div>';
			echo '</div>';
				echo '<div class="row"><div class="col-md-12 title gray">
				<h3> Attack Workspace </h3>
				</div></div>';
				$segment8 = array(array("Att Bonus", 3),array("", 2),array("1/2 lvl", 1),array("abil", 1),array("class", 1),array("prof", 1),array("Feat", 1),array("ENH", 1),array("misc",1));

			for ($s = 0; $s<2; $s++){
				echo '<div class="row">';
				for($t=0;$t<9;$t++){
		                    echo '<div class="col-md-' . $segment8[$t][1] . ' gray">
		                		<label class="tiny">' . $segment8[$t][0] . '</label>
		                                <h3 id="target-' . $segment8[$t][0] . '"></h3>
					  </div>';
				}
				echo  '</div>';
				if($s==0){
				echo '<div class="row">
		                        <div class="col-md-8">
		                            <label class="tiny"> Ability </label> 
						<input name="conditional-3-Attack Workspace" class="form-control">
					</div>
					<div class="col-md-4">
		                            <button class="btn btn-default space-fix"> Add </button> 
					</div>
		        	      </div>';
		    	}
		    }
					echo   '<div class="row">
					   <div class="col-md-12 title gray">
							<h3> FEATS </h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<select class="form-control" id="feats"></select>
						</div>
						<div class="col-md-4">
		                    <button class="btn btn-default"> Add </button> 
						</div>
					</div>';
			}
			echo '</div>';
	}?>
		</div>
	</div>	
    </body>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/variables.js"></script>
    <script src="js/populate.js"></script>
    <script src="js/calc.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
    $(function () {
  	$('[data-toggle="popover"]').popover();
    });
    $('.tiny').popover();
    </script>
</html>