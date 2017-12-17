<?php
$page = $_SERVER['PHP_SELF'];
$sec = "300";
?>
<html>
    <head>
	<title>FitzG</title>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<style>
	body {background-color: orange;}
	
	
	th {background-color: #4CAF50;
	color: white;
	}
	td {background-color: black;
	color: #FFFFFF;
	}
	tr:hover {background-color: #f5f5f5;}
	
	</style>
    </head>
    <body color='white'>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retroxeventxmas";
require_once( "RA_API.php" );

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Users
$user = array("FitzG");
$userl = count($user);

echo "<table width = '70%' border='1px' align='center'>";
echo "<tr>";
echo "<th>User</th><th>ActRaiser</th><th>ActRaiser 2</th><th>Batman Returns</th><th>Coron Land</th><th>Daze Before Christmas</th><th>Home Alone 2: Lost in New York</th><th>Nightmare Busters</th><th>Super Noah's Ark 3D </th><th>Super Star Wars: The Empire Strikes Back</th>
<th>Fantasy Zone</th>
<th>Antarctic Adventure</th>
<th>Batman Returns</th>
<th>Binary Land</th>
<th>Blades of Steel</th>
<th>Fire 'N Ice</th>
<th>Heavy Shreddin'</th>
<th>Home Alone</th>
<th>Home Alone 2: Lost in New York</th>
<th>Ice Climber</th>
<th>Kickle Cubicle</th>
<th>Ice Hockey</th>
<th>Kid Icarus</th>
<th>NHLPA Hockey '93 </th>
<th>Ski or Die</th>
<th>Snow Bros.</th>
<th>Toadette's Christmas Adventure</th>
<th>Yume Penguin Monogatari</th>
<th>Snowboard Kids</th>
<th>Snowboard Kids 2</th>
<th>Batman Returns</th>
<th>Daze Before Christmas</th>
<th>Gynoug</th>
<th>Mutant League Hockey</th>
<th>Snow Bros.</th>
<th>Super Fantasy Zone</th>
<th>Santa Claus Junior</th>
<th>The Grinch</th>
<th>Elf - The Movie</th>
<th>Elf Bowling 1 & 2</th>
<th>Santa Claus Saves The Earth</th>
<th>Spyro - Season of Ice</th>
<th>The Polar Express</th>
<th>The Santa Clause 3 - The Escape Clause</th>
<th>Kid Icarus Of Myths and Monsters</th>




<th>Clay Fighter</th>
<th>Cybernator</th>
<th>Daffy Duck: The Marvin Missions </th>
<th>Do-Re-Mi Fantasy - Milon no Dokidoki Daibouken</th>
<th>Donkey Kong Country</th>
<th>Donkey Kong Country - Competition Edition</th>
<th>Donkey Kong Country 3: Dixie Kong's Double Trouble!</th>
<th>Dragon View</th>
<th>E.V.O. - Search for Eden</th>
<th>Final Fantasy - Mystic Quest</th>
<th>Final Fantasy III</th>
<th>Final Fantasy V (J2E)</th>
<th>Harvest Moon</th>
<th>Hook</th>
<th>Kid Klown in Crazy Chase</th>
<th>Kidou Senshi Gundam F91 - Formula Senki 0122</th>
<th>Kirby Super Star</th>
<th>Kirby's Dream Course</th>
<th>Kirby's Dream Land 3</th>
<th>Mario And Wario</th>
<th>Marvel Super Heroes - War of the Gems</th>
<th>Mega Man 7</th>
<th>Mega Man X</th>
<th>Mega Man X Hard-Type</th>
<th>Mega Man X2</th>
<th>Mega Man X3</th>
<th>Mega Man X3 - Zero Project</th>
<th>Mickey to Donald Magical Adventure 3</th>
<th>Mr. Nutz</th>
<th>Out to Lunch</th>
<th>Parodius - Non-Sense Fantasy</th>
<th>Rockman and Forte</th>
<th>Romancing Mario</th>
<th>Run Saber</th>
<th>Secret of Mana</th>
<th>Seiken Densetsu 3</th>
<th>Shin Megami Tensei II</th>
<th>Soul Blazer</th>
<th>Speedy Gonzales: Los Gatos Bandidos</th>
<th>Star Ocean</th>
<th>Super Adventure Island</th>
<th>Super Adventure Island II</th>
<th>Super Bomberman 2 (U)</th>
<th>Super Bomberman 3</th>
<th>Super Bomberman 5 - Gold Cartridge</th>
<th>Super Demo World: The Legend Continues</th>
<th>Super Mario All-Stars</th>
<th>Super Mario Bros. Enhanced (SMW Hack)</th>
<th>Super Mario RPG Armageddon v8 Easy Type</th>
<th>Super Mario World 2: Yoshi's Island (U) (1.0)</th>
<th>Super Metroid</th>
<th>Terranigma</th>
<th>Tetris Attack</th>
<th>The 7th Annual Vanilla Level Design Contest (SMW hack)</th>
<th>The Great Circus Mystery Starring Mickey and Minnie</th>
<th>The Legend of Zelda - A Link to the Past</th>
<th>The Magical Quest starring Mickey Mouse</th>
<th>The Twisted Tales of Spike McFang </th>
<th>Theme Park</th>
<th>Tiny Toon Adventures: Wacky Sports Challenge</th>
<th>Sky Blazer</th>
<th>Wario's Woods (U)</th>
<th>Wizardry V - Heart of the Maelstrom</th>
<th>Zelda 3: Goddess of Wisdom (v.3-0)</th>
<th>Ninja Gaiden </th>
<th>Dragon Spirit</th>
<th>~Bonus~ Akumajou Special: Boku Dracula-kun</th>
<th>~Bonus~ Mega Man</th>
<th>~Multi~ Contra</th>
<th>Action 52</th>
<th>Adventure Island II</th>
<th>Adventure Island III</th>
<th>Akumajou Special: Boku Dracula-kun</th>
<th>Batman: Return Of The Joker</th>
<th>Battletoads</th>
<th>Bio Miracle Bokutte Upa</th>
<th>Bucky O'Hare</th>
<th>Chip 'N Dale: Rescue Rangers 2</th>
<th>Cocoron</th>
<th>Contra</th>
<th>Crystalis</th>
<th>Digital Devil Monogatari: Megami Tensei</th>
<th>Dragon Spirit - The New Legend</th>
<th>Duck Tales</th>
<th>Felix the Cat</th>
<th>G.I. Joe: A Real American Hero</th>
<th>Kid Niki 3</th>
<th>Kirby's Adventure</th>
<th>Kiwi Kraze: A Bird-Brained Adventure! </th>
<th>Little Nemo: The Dream Master</th>
<th>Mega Man</th>
<th>Mega Man 6</th>
<th>Metroid</th>
<th>Metroid: Rogue Dawn</th>
<th>Mother: 25th Anniversary Edition</th>
<th>Panic Restaurant</th>
<th>Parodius</th>
<th>Roll-chan Evolution, Episode I - Roll-chan Gaiden</th>
<th>Rollergames</th>
<th>Snake Rattle 'n Roll</th>
<th>Super Mario Bros</th>
<th>Super Mario Bros. 2</th>
<th>Super Mario Bros. 3</th>
<th>Takahashi Meijin no Bouken Jima IV (Adventure Island 4) </th>
<th>Tale Spin</th>
<th>The Little Mermaid</th>
<th>The Smurfs</th>
<th>Toki</th>
<th>Transformers: Mystery of Convoy</th>
<th>Bonus~ F-Zero X</th>
<th>Army Men: Sarges Heroes</th>
<th>Banjo-Kazooie</th>
<th>Bomberman 64: The Second Attack </th>
<th>Chameleon Twist 2</th>
<th>Diddy Kong Racing</th>
<th>F-Zero X</th>
<th>Kirby 64 - The Crystal Shards </th>
<th>Mario Party</th>
<th>Mario Party 3</th>
<th>Paper Mario</th>
<th>Pilotwings 64</th>
<th>Super Mario 64</th>
<th>Adventures of Batman and Robin, The</th>
<th>Aero the Acro-Bat 2</th>
<th>After Burner II</th>
<th>Comix Zone</th>
<th>Ecco the Dolphin</th>
<th>Mazin Saga: Mutant Fighter</th>
<th>Mega Bomberman</th>
<th>Ninja Gaiden</th>
<th>Penguins of Pilaster</th>
<th>Phantasy Star II </th>
<th>PulseMan</th>
<th>Ristar</th>
<th>Road Rash</th>
<th>Road Rash 3: Tour de Force</th>
<th>Road Rash II</th>
<th>Sonic 3 & Knuckles</th>
<th>Sonic 3 Complete</th>
<th>Sonic 3D Blast</th>
<th>Sonic the Hedgehog 3</th>
<th>Strider</th>
<th>True Lies</th>
<th>Valis</th>
<th>Dragon Warrior Monsters 2: Tara's Adventure</th>
<th>Gex 3 - Deep Pocket Gecko</th>
<th>Harvest Moon 2</th>
<th>Harvest Moon 3</th>
<th>Mr. Nutz</th>
<th>Pokemon - Crystal Version</th>
<th>Warlocked</th>
<th>Zook Hero 2</th>
<th>Zook Hero Z</th>
<th>Advance Wars</th>
<th>Alien Hominid</th>
<th>Banjo-Kazooie Grunty's Revenge</th>
<th>Banjo-Pilot</th>
<th>Bomberman Tournament</th>
<th>Castlevania - Harmony of Dissonance</th>
<th>Crash Bandicoot: The Huge Adventure</th>
<th>Crash Nitro Kart</th>
<th>Crash Purple - Ripto's Rampage</th>
<th>Denki Blocks!</th>
<th>Densetsu no Stafy</th>
<th>Disney Princess</th>
<th>Disney's Magical Quest Starring Mickey & Minnie</th>
<th>DK: King Of Swing</th>
<th>Donkey Kong Country</th>
<th>Donkey Kong Country 2</th>
<th>Donkey Kong Country 3</th>
<th>Dragon Ball GT: Transformation</th>
<th>Final Fantasy Tactics Advance</th>
<th>Fire Emblem: The Binding Blade</th>
<th>Game & Watch Gallery 4</th>
<th>Golden Sun: The Lost Age</th>
<th>Kirby & The Amazing Mirror</th>
<th>Kirby: Nightmare in Dream Land </th>
<th>Konjiki no Gash Bell!!: Unare! Yuujou no Zakeru</th>
<th>Kuru Kuru Kururin</th>
<th>Mario Party Advance</th>
<th>Mario Pinball Land</th>
<th>Mega Man & Bass</th>
<th>Mega Man Battle Network</th>
<th>Mega Man Battle Network 2</th>
<th>Mega Man Zero</th>
<th>Mega Man Zero 2</th>
<th>Mega Man Zero 3</th>
<th>Mega Man Zero 4</th>
<th>Metroid: Fusion</th>
<th>Metroid: Zero Mission</th>
<th>Mother 3</th>
<th>Pokemon - Ash Gray</th>
<th>Pokemon - Light Platinum</th>
<th>Pokemon Mystery Dungeon - Red Rescue Team</th>
<th>Shin Megami Tensei: Devil Children - Dark Version</th>
<th>Shin Megami Tensei: Devil Children - Light Version</th>
<th>Sigma Star Saga</th>
<th>Sonic Advance</th>
<th>Sonic Advance 2</th>
<th>Sonic Advance 3</th>
<th>Spyro - Attack of the Rhynocs</th>
<th>Spyro 2 - Season of Flame</th>
<th>Spyro Orange - Cortex Conspiracy </th>
<th>Super Mario Advance 3: Yoshi's Island</th>
<th>Super Mario Advance 4 - Super Mario Bros 3 (E-World Hack)</th>
<th>Sword of Mana</th>
<th>The Legend of Zelda: A Link to the Past - Four Swords</th>
<th>Wario Land 4</th>
<th>Yu Yu Hakusho - Ghost Files: Tournament Tactics</th>
<th>Adventure Island</th>
<th>Baby T-Rex</th>
<th>Balloon Kid</th>
<th>Bust-A-Move 2: Arcade Edition</th>
<th>Bust-A-Move 3 DX</th>
<th>Buster Brothers</th>
<th>Castlevania II - Belmont's Revenge</th>
<th>Donkey Kong</th>
<th>Donkey Kong Land</th>
<th>Donkey Kong Land III</th>
<th>Duck Tales</th>
<th>Felix the Cat</th>
<th>Kaeru no Tame ni Kane wa Naru (For the Frog the Bell Tolls)</th>
<th>Kirby's Dream Land 2</th>
<th>Mega Man Xtreme</th>
<th>Mega Man: Dr. Wily's Revenge</th>
<th>Metroid II: Return of Samus </th>
<th>Mole Mania</th>
<th>Mr. Nutz</th>
<th>Pokemon Trading Card Game</th>
<th>The Little Mermaid</th>
<th>Tintin in Tibet</th>
<th>Wario Land 3</th>



<th>Toad's Christmas Adventure</th>
<th>Star Fox 2</th>
<th>F-Zero - GP Legend</th>
<th>F-Zero Advance: Maximum Velocity</th>
<th>Fire Emblem: The Binding Blade </th>
<th>Gex 3 - Deep Cover Gecko</th>
<th>GoldenEye 007</th>
<th>Legend of Zelda, The - Majoras Mask</th>
<th>Barbie Super Model</th>
<th>Bible Adventures</th>";






echo "</tr>";

$RAConn = new RetroAchievements('FitzG' , 'rCbm67XEF6VH1V0ncHsC6H7Y0vMvpaqH');	


//ActRaiser SNES
$ID3= array("9439","9423","9424","9425","9426","9427","9428","9429","9430","9431","9432","9433","9442","1977","9434","9435","9436","9437","9438","9440","9441","9443","9444","9445","10354","9447","9448","9449","9450","9451","9452","9453","9454","9455");
$longitud3 = count($ID3);
//ActRaiser 2 SNES
$ID4= array("32794","32795","32796","32797","32798","32799","32800","32801","32802","32803","32804","32805","32806","32807","32808","32809","32810","32811","32812","32813","32814","32815","32816","32817","32818","32819","32820","32821","32822","32823","32824","32825","32826","32827","32828","32829","32830","32831","32832","32833","32834","32835","32836","32837","32838","32839");
$longitud4 =count ($ID4);
//Batman Returns
$ID5= array("20092","20093","20094","20095","20096","20097","20098","384","385","386","387","388","389","390","800");
$longitud5 = count($ID5);
//Coron Land SNES
$ID6 = array("31245","31242","31243","31244","31230","31231","31232","31233","31234","31235","31236","31237","31238","31239","31240","31241","31252","31253","31254","31255","31246","31247","31248","31249","31250","31251");
$longitud6 = count($ID6);
//Daze Before Christmas SNES
$ID7 = array("31342","31343","31344","31345","31346","31347","31348","31349","31350","31351","31352","31353","31354","31355","31356","31357","31358","31359");
$longitud7 = count($ID7);
//Home Alone 2: Lost in New York SNES
$ID8 = array("43842","43843","43844","43845","43846","43847","43848","43849","43850","43851","43852","43853","43854","43855","43856","43857","43858","43859","43860","43861","43862","43863","43864","43865","43866","43867","43868","43869","43870","43871");
$longitud8 = count($ID8);
//Nightmare Busters SNES
$ID9= array("17181","17182","17183","17184","17185","17186","17187","17188","17189","17190","17191","17192","17193","17194","17195","17198","17199","17200","17201","17202","17203","17204","17205","17206","17207","17208","17209","17210","17211","17212","17213","17214","17215","17216","17217","17218","17219","17220","17221","17226","17227","17232","17233","17234","17235","17236","17237","17238","17239","17240","17241","17242","17243","17244");
$longitud9 = count($ID9);
//Super Noah's Ark 3D SNES
$ID10= array("40987","40988","40989","40990","40991","40992","40993","40994","40995","40996","40997","40998","40999","41000","41001","41002","41003","41004","41005","41006","41007","41008","41009","41010","41011","41012","41013");
$longitud10 = count($ID10);

//SNES	Super Star Wars: The Empire Strikes Back
$ID11=array("29096","29097","29098","29099","29100","29101","29102","29103","29104","29105","29106","29107","29108","29109","29110","29111","29112","29113","29114","29115","29116","29117","29118","29119","29120","29121","29122","29123","29124","29125","29126","29127","29128","29129","29130","29131","29132","29133","29134","29135","29136","29137","29138","29139","29140","29141");
$longitud11= count($ID11);

//Fantasy Zone MSX
$ID12=array("47462","47463","47464","47465","47466","47467","47468","47608","47469","47470","47471","47480","47481","47482","47716","47717","47718","47635","47636","47601","47602","47603","47604","47605","47712","47483","47634","47812","47713","47714","47711","47715");
$longitud12= count($ID12);

//NES	Antarctic Adventure
$ID13=array("20357","20358","20359","20360","20361","20362","20363","20364","20365","20366","20367","20368","20369","20370","20371","20373","20374","20375","20376","20377");
$longitud13= count($ID13);

//NES	Batman Returns
$ID14=array("52715","52716","52717","52718","52719","52720","52721","52722","52723","52724","52725","52726","52727","52728","52729","52730","52731","52732","52733","52734","52735","52736","52737","52738","52739","52740");
$longitud14= count($ID14);

//NES	Binary Land
$ID15 = array("14361","14362","14363","14364","14365","14366","14367","14368","14369","14370","14371","14372","14373","14374","14375","14376","14377","14378","14379","14380","14434","14435","14436","14437","14438","14439","14440","14441","14442","14443","14444","14445","14446","14447","14448","14449","14450","14451","14452","14453","14454","14455","14456","14459","14460","14461","14462","14463","14464","14465","14466","14467","14468","14469","14470","14471","14472","14473","14474","14475","14476","14477","14478","14479","14480","14481","14482","14483","14484","14485","14486","14487","14488","14489","14490","14491","14492","14493","14494","14495","14496","14497","14498","14499","14500","14502","14503","14504","14505");
$longitud15= count($ID15);

////NES	Blades of Steel
$ID16 = array("9459","9460","9461","9462","9463","9464","9465","9466","9467","9481","9482","9490","9499","9500","9501","9503","9504","9509","9510","9511","9512","9513","9514","9515","9517","9518","9519","9520","9521","9522","9523","9524","9525","9526","9527","9528","9529","9530","9531","9532","9533","9534","9535","9536","9537","9538","9539","9540","9541","9542");
$longitud16= count($ID16);

//NES	Fire 'N Ice
$ID17 = array("21868","21869","21870","21871","21872","21873","21874","21875","21876","21877");
$longitud17= count($ID17);

////NES	Heavy Shreddin'
$ID18 = array("43617","43618","43619","43620","43621","43622","43623","43624","43625","43626","43627","43628","43629","43630","43631","43632","43633","43634","43635","43636","43637","43638","43639","43640","43641","43642","43643","43644","43645","43646","43647","43648","43649");
$longitud18= count($ID18);

//NES	Home Alone
$ID19 = array("31452","31453","31454","31455","31456","31457","31458","31459","31460","31461","31462");
$longitud19 = count($ID19);

//NES	Home Alone 2: Lost in New York
$ID20 = array("43168","43169","43170","43171","43172","43173","43174","43175","43176","43177","43178","43179","43180","43181","43182","43183","43184","43185","43186","43187","43188","43189","43190","43191","43192","43163","43164","43165");
$longitud20 = count($ID20);

//NES	Ice Climber
$ID21 = array("29562","29563","29564","29565","29566","29567","29568","29569","29570","29571","29572","29573","29574","29575","29576","29577","29578","29579","29580","29581","29582","29583","29584","29585","29586","29587","29588","29589","29590","29591","29592","29593","29594","29595");
$longitud21 = count($ID21);

//NES	Kickle Cubicle
$ID22 = array("23160","23517","23515","23512","23514","23513","23516","29643","23589","23588","5375","29642","23161","5283","5341","5359","5376","5394","5395","5396","5397","5398","5399");
$longitud22 = count($ID22);

//NES	Ice Hockey
$ID23 = array("40552","40553","40554","40555","40556","40557","40558","40559","40560","40561","40562","40563","40564","40565","40566","40567","40568","40569","40570","40571","40572");
$longitud23 = count($ID23);

//NES	Kid Icarus
$ID24 = array("25526","25523","25524","25525","9100","25877","25527","25528","25878","25879","25880","25516","25517","25518","25519","25520","25521","25522","25596","9099","9098","9101","9102","9103","25597","25598","25599","25612","25884","25882","26025","26026","26027");
$longitud24 = count($ID24);

//NES	NHLPA Hockey '93 
$ID25 = array("1554","1553","1552","1551","1546","1550","85");
$longitud25 = count($ID25);

//NES	Ski or Die
$ID26=array("31121","31122","31123","31124","31125","31126","31127","31128","31129","31130","31131","31132","31133","31134","31135","31136","31137","31138","31139","31140","31141","31142","31143","31144","31145");
$longitud26=count($ID26);

//NES	Snow Bros.
$ID27=array("14314","14315","14316","14317","14318","14319","14320","14321","14322","14323","14324","14325","14326","14327","14328","14329","14330","14331","14332","14333","14334","14335","14336");
$longitud27=count($ID27);

//NES	Toadette's Christmas Adventure
$ID28=array("41703","41704","41705","41706","41707","41708","41709","41710","41711","41712","41713","41714","41715","41716","41717","41718","41719","41720","41721","41722");
$longitud28=count($ID28);

//NES	Yume Penguin Monogatari
$ID29=array("19413","19414","19419","19415","19421","19416","19420","19417","19422","19418","19423","19424","19454","19429","19430","19431","19434","19436","19435","19437","19438","19440","19439","19441","19443","19444","19445","19446","19449","19448","19447","19450","19451","19453","19452","19412","19427","19426","19428","19442","19425");
$longitud29=count($ID29);

//N64	Snowboard Kids
$ID30=array("48361","48378","48381","48384","48387","48390","48393","48396","48399","54197","54198","54199","54194","54195","54196","54200","54249","54248","54250","54251","54252","54253","54254","54255","54256");
$longitud30=count($ID30);


//N64	Snowboard Kids 2
$ID31=array("52389","52390","52391","52392","52393","52394","52395","52396","52397","52398","52399","52400","52401","52402","52403","52404","52405","52406","52407","52408","52409","52410","52411","52412","52783","52678","52830","52817","52831","52782","52815","52814","52680","52781","52820","52818","52834","52832","52816","52780","52804","52819","52821","52679");
$longitud31=count($ID31);	  

//GEN	Batman Returns
$ID32=array("48014","48015","48016","48017","48018","48019","48020","48021","48022","48023","48024","48025","48026","48027","48028","48029","48030","48031","48032","48033","48034","48035","48036","48037");
$longitud32=count($ID32);

//GEN	Daze Before Christmas
$ID33=array("31256","31257","31258","31271","31262","31263","31264","31265","31266","31267","31268","31269","31270","31272","31274","31276","31278","31279","31273","31275","31277","31280","31281","31259","31634","31261");
$longitud33=count($ID33);

//GEN	Gynoug
$ID34=array("772","773","774","775","776","777","871");
$longitud34=count($ID34);

//GEN	Mutant League Hockey
$ID35=array("45465","45490","45491","45492","45493","45494","45495","45496","45497","45498","45499","45500","45501","45502","45503","45504","45505","45506","45507","45508","45509","45510","45511","45512","45520","45521","45522","45523","45524","45525","45526","45527","45528","45529","45530","45531","45532","45533","45534","45535");
$longitud35=count($ID35);

//GEN	Snow Bros.
$ID36=array("1476","1477","1478","1479","1480","1481","1482","1483","1484","1485");
$longitud36=count($ID36);

//GEN	Super Fantasy Zone
$ID37=array("5025","5026","5027","5028","5029","5030","5031","5032","5033","5034","5035","5036","5037","5038","5039","5040","5041","5042","5043","5044","5045","5046","5047","5048","5049","5050","5051","5052","5053","5054","5055","5056","5057","5058","5059","5060","5061","5062","5063","5064","5065","5066","5067","5068","5069");
$longitud37=count($ID37);

//GBC	Santa Claus Junior
$ID38=array("31427","31428","31429","31430","31431","31432","31433","31434","31435","31436","31437","31438","31439","31440","31441");
$longitud38=count($ID38);

//GBC	The Grinch
$ID39=array("6878","6879","6880","6881","6882","6883","6884","6885");
$longitud39=count($ID39);

//GBA	Elf - The Movie
$ID40 = array("31080","31081","31082","31083","31084","31085","31086","31087","31088","31089","31090","31091","31092","31093","31094","31095","31096","31097","31098");
$longitud40=count($ID40);

//GBA	Elf Bowling 1 & 2
$ID41=array("31295","31297","31298","31299","31300","31301","31302","31303","31304","31305");
$longitud41=count($ID41);

//GBA	Santa Claus Saves The Earth
$ID42=array("31177","31178","31179","31180","31181","31182","31198","31183","31184","31185","31186","31187","31188","31189","31190","31191","31192","31193","31194","31195","31196","31197");
$longitud42=count($ID42);

//GBA	Spyro - Season of Ice
$ID43=array("30345","30346","30347","30348","30349","30350","30351","30352","30353","30354","30355","30356","30357","30358","30359","30360","30361","30362","30363","30364","30365","30366","30367","30368","30369","30370","30371","30372","30373","30374","30375","30376","30377","30378","30379");
$longitud43=count($ID43);

//GBA	The Polar Express
$ID44=array("31564","31565","31566","31567","31568","31569","31570","31571","31572","31573","31574","31575","31576","31577","31578","31579","31580","31581","31582","31583","31584","31585","31586","31587");
$longitud44=count($ID44);

//GBA	The Santa Clause 3 - The Escape Clause
$ID45=array("31595","31596","31597","31598","31599","31600","31601","31602","31603","31604","31605","31606","31607","31608","31609","31610","31611","31612");
$longitud45=count($ID45);

//GB	Kid Icarus Of Myths and Monsters
$ID46=array("22747","22748","22749","22750","22751","22752","22753","22754","22755","22756","22757","22758","22759","22760","22761","22762","22763","22764","22765","22766","22767","22768");
$longitud46=count($ID46);

//Stray Cheevos
//SNES 857 Clay Fighter 
$ID51=array("17822","17840");
$longitud51=count($ID51);

//SNES	867 Cybernator
$ID52=array("37680");
$longitud52=count($ID52);

//SNES	 255 Daffy Duck: The Marvin Missions 
$ID53=array("357");
$longitud53=count($ID53);

//SNES	2802","Do-Re-Mi Fantasy - Milon no Dokidoki Daibouken
$ID54=array("38157","38158","38163");
$longitud54=count($ID54);

//SNES	337 Donkey Kong Country
$ID55=array("949","2503","2513");
$longitud55=count($ID55);

//SNES	8249 Donkey Kong Country - Competition Edition
$ID56=array("40607","40611","40613","40608","40612","40614");
$longitud56=count($ID56);

//SNES	473 Donkey Kong Country 3: Dixie Kong's Double Trouble!
$ID57=array("4807","1077");
$longitud57=count($ID57);

//SNES	881 Dragon View
$ID58=array("45885","45886");
$longitud58=count($ID57);

//SNES	887 E.V.O. - Search for Eden
$ID59=array("22121","22128","22141","22142","22145","22146","22147","22148","22172");
$longitud59=count($ID59);

//SNES 909 Final Fantasy - Mystic Quest
$ID60=array("8586","8601","8605");
$longitud60=count($ID60);

//SNES 341	Final Fantasy III
$ID61=array("4938","4960","4967","4962");
$longitud61=count($ID61);

//SNES	Final Fantasy V (J2E)
$ID62=array("16982","17015");
$longitud62=count($ID62);

//SNES	Harvest Moon
$ID63=array("10678","10679","10702");
$longitud63=count($ID63);

//SNES	Hook
$ID64=array("14654","14655","14902");
$longitud64=count($ID64);

//SNES	Kid Klown in Crazy Chase
$ID65=array("7342","7350","7351");
$longitud65=count($ID65);

//SNES	Kidou Senshi Gundam F91 - Formula Senki 0122
$ID66=array("45023","45041");
$longitud66=count($ID66);

//SNES	Kirby Super Star
$ID67=array("6590");
$longitud67=count($ID67);

//SNES	Kirby's Dream Course
$ID68=array("13512");
$longitud68=count($ID68);

//Kirby's Dream Land 3 
$ID69=array("7706","7730","7737","7804","7770");
$longitud69=count($ID69);

//Mario And Wario
$ID70=array("26200","26230","26231","26232","26233","26234","26235","26236","26237","26238","26239");
$longitud70=count($ID70);

//Marvel Super Heroes - War of the Gems
$ID71=array("34739","34740","34741","34742","34743","34860","40226");
$longitud71=count($ID71);

//Megaman 7
$ID72=array("4628","11583","11576","11730");
$longitud72=count($ID72);

//Megaman X
$ID73=array("2204","2205","2206");
$longitud73=count($ID73);

//Mega Man X Hard-Type
$ID74=array("30802","30810","30892","30950");
$longitud74=count($ID74);

//Mega Man X2
$ID75=array("4675","14346","10960");
$longitud75=count($ID75);

//Mega Man X3
$ID76=array("12070","12217","13680","14104");
$longitud76=count($ID76);

//"Mega Man X3 - Zero Project
$ID77=array("38603","38613","38620");
$longitud77=count($ID77);

//Mickey to Donald Magical Adventure 3
$ID78=array("601","37521");
$longitud78=count($ID78);

//Mr. Nutz
$ID79=array("34852","34853","34854","34855");
$longitud79=count($ID79);

//Out to Lunch
$ID80=array("12555","12556","12557","12558","12559","12560","12561","12562");
$longitud80=count($ID80);

//Parodius - Non-Sense Fantasy
$ID81=array("39320","39370","39371","39372","39550","39374","39373","39388","39392");
$longitud81=count($ID81);


//Rockman and Forte
$ID82=array("9602","9614","9622");
$longitud82=count($ID82);

//Romancing Mario
$ID83=array("26126","26127");
$longitud83=count($ID83);

//Run Saber
$ID84=array("18197");
$longitud84=count($ID84);

//Secret of Mana
$ID85=array("18031","18030","18056");
$longitud85=count($ID85);

//Seiken Densetsu 3
$ID86=array("29212","29242");
$longitud86=count($ID86);

//Shin Megami Tensei II
$ID87=array("17312");
$longitud87=count($ID87);

//Soul Blazer
$ID88=array("31451");
$longitud88=count($ID88);

//Speedy Gonzales: Los Gatos Bandidos
$ID89=array("376");
$longitud89=count($ID89);

//Star Ocean
$ID90=array("20202","20201");
$longitud90=count($ID90);

//Super Adventure Island
$ID91=array("29905","29913");
$longitud91=count($ID91);

//Super Adventure Island II
$ID92=array("36979","36987","36988","36989");
$longitud92=count($ID92);

//Super Bomberman 2 (U)
$ID93=array("8428");
$longitud93=count($ID93);

//Super Bomberman 3
$ID94=array("30994","30995","31103");
$longitud94=count($ID94);

//Super Bomberman 5 - Gold Cartridge
$ID95=array("37771");
$longitud95=count($ID95);

//Super Demo World: The Legend Continues
$ID96=array("19956");
$longitud96=count($ID96);

//Super Mario All-Stars
$ID97=array("26958","26953","26977","26985","27006");
$longitud97=count($ID97);

//Super Mario Bros. Enhanced (SMW Hack)
$ID98=array("37052","37075","37073","37071","37048","37047","37043","37042");
$longitud98=count($ID98);

//Super Mario RPG Armageddon v8 Easy Type
$ID99=array("36511","36526","36532","36533");
$longitud99=count($ID99);

//Super Mario World 2: Yoshi's Island (U) (1.0)
$ID100=array("5973","5974","5975","1308");
$longitud100=count($ID100);

//Super Metroid
$ID101=array("1849","1910");
$longitud101=count($ID101);

//Terranigma
$ID102=array("14338","14583","14339");
$longitud102=count($ID102);

//Tetris Attack
$ID103=array("2900","2901");
$longitud103=count($ID103);

//The 7th Annual Vanilla Level Design Contest (SMW hack)
$ID104=array("29738","29740","29739","30111","30685");
$longitud104=count($ID104);

//The Great Circus Mystery Starring Mickey and Minnie
$ID105=array("1414","45551","45578");
$longitud105=count($ID105);

//The legend of zelda - a link to the past
$ID106=array("2282","2365");
$longitud106=count($ID106);

//The Magical Quest starring Mickey Mouse
$ID107=array("1383","3055");
$longitud107=count($ID107);

//The Twisted Tales of Spike McFang
$ID108=array("26312","26313","26040");
$longitud108=count($ID108);

//Theme Park
$ID109=array("10611","10617");
$longitud109=count($ID109);

//Tiny Toon Adventures: Wacky Sports Challenge
$ID110=array("10414","10415","10464");
$longitud110=count($ID110);

//SKY BLAZER Wario Adventure REMOVED
$ID111=array("23360");
$longitud111=count($ID111);

//Wario's Woods (U)
$ID112=array("8468");
$longitud112=count($ID112);

//Wizardry V - Heart of the Maelstrom
$ID113=array("29940");
$longitud113=count($ID113);

//Zelda 3: Goddess o Wisdom (v.3-0)
$ID114=array("34012","34819","34820");
$longitud114=count($ID114);

//Ninja Gaiden
$ID115=array("48118","49364","49365","49366","48126","48134","49253","49159");
$longitud115=count($ID115);

//Dragon Spirit
$ID116=array("4790");
$longitud116=count($ID116);

//~Bonus~ Akumajou Special: Boku Dracula-kun
$ID117=array("53796");
$longitud117=count($ID117);

//~Bonus~ Mega Man
$ID118=array("53273","53283");
$longitud118=count($ID118);
//~Multi~ Contra
$ID119=array("52382","52383","52415","52388","52420","52421","52179","52165");
$longitud119=count($ID119);
//Action 52
$ID120=array("20557","20616");
$longitud120=count($ID120);

//Adventure Island II
$ID121=array("40658","40675","40683");
$longitud121=count($ID121);

//Adventure Island III
$ID122=array("15805","15806","15807");
$longitud122=count($ID122);

//Akumajou Special: Boku Dracula-kun
$ID123=array("53743","53774","53784");
$longitud123=count($ID123);

//Batman: Return Of The Joker
$ID124=array("21882","21890","21935");
$longitud124=count($ID124);

//Battletoads
$ID125=array("4256");
$longitud125=count($ID125);

//Bio Miracle Bokutte Upa
$ID126=array("23839","23840","9832","23860");
$longitud126=count($ID126);

//Bucky O'Hare
$ID127=array("7597","9205");
$longitud127=count($ID127);

//Chip 'N Dale: Rescue Rangers 2
$ID128=array("38982","38983","38984","42623");
$longitud128=count($ID128);

//Cocoron
$ID129=array("24623","24621","24620");
$longitud129=count($ID129);

//Contra
$ID130=array("4270","51301","6847");
$longitud130=count($ID130);

//Crystalis
$ID131=array("8040");
$longitud131=count($ID131);

//Digital Devil Monogatari: Megami Tensei
$ID132=array("36960");
$longitud132=count($ID132);

//Dragon Spirit - The New Legend
$ID133=array("44888","44908");
$longitud133=count($ID133);

//Duck Tales
$ID134=array("3497","45115","45116","3550","45129","45134","45145");
$longitud134=count($ID134);

//Felix the Cat
$ID135=array("8361","8362","8363","8364","19889","19890","19891","19892","19905","19906");
$longitud135=count($ID135);

//G.I. Joe: A Real American Hero
$ID136=array("37265","37271","37277");
$longitud136=count($ID136);

//NES	Kid Niki 3
$ID137=array("13341","13474","13517");
$longitud137=count($ID137);

//NES	Kirby's Adventure
$ID138=array("6738","9191");
$longitud138=count($ID138);

//NES	Kiwi Kraze: A Bird-Brained Adventure!
$ID139=array("24075","24076");
$longitud139=count($ID139);

//Little Nemo: The Dream Master
$ID140=array("7089","41027");
$longitud140=count($ID140);

//Mega Man
$ID141=array("3407","29646","3476","29639");
$longitud141=count($ID141);

//Mega Man 6
$ID142=array("7247","10962");
$longitud142=count($ID142);

//Metroid
$ID143=array("3511");
$longitud143=count($ID143);

//Metroid Rogue Dawn
$ID144=array("46974");
$longitud144=count($ID144);

//Mother 25th Anniversary Edition
$ID145=array("18380");
$longitud145=count($ID145);

//Panic Restaurant
$ID146=array("4815","5271");
$longitud146=count($ID146);

//Parodius
$ID147=array("32678","32626","32622","47904");
$longitud147=count($ID147);

//Roll-chan Evolution, Episode I-Roll-chan Gaiden NES
$ID148=array("42586","42575","42568","42557");
$longitud148=count($ID148);

//ROLLERGAMES NES
$ID149=array("29879");
$longitud149=count($ID149);

//Snake Rattle 'n Roll NES
$ID150=array("18403");
$longitud150=count($ID150);

//Super Mario Bros NES
$ID151=array("39683","39685","39687");
$longitud151=count($ID151);

//Super Mario Bros. 2 NES
$ID152=array("41337","3427","3439","35474");
$longitud152=count($ID152);

//Super Mario Bros. 3 NES
$ID153=array("4213","4222","4281","4290");
$longitud153=count($ID153);

//NES	Takahashi Meijin no Bouken Jima IV (Adventure Island 4) 
$ID154=array("54435","54436","54438","54439","54433");
$longitud154=count($ID154);

//NES	Tale Spin
$ID155=array("8061","8117");
$longitud155=count($ID155);

//NES	The Little Mermaid
$ID156=array("11946","11955");
$longitud156=count($ID156);

//NES	The Smurfs
$ID157=array("6653","6654","6657","6666","6667","6670");
$longitud157=count($ID157);

//NES	Toki
$ID158=array("12499");
$longitud158=count($ID158);

//NES	Transformers: Mystery of Convoy
$ID159=array("40296","40309");
$longitud159=count($ID159);

//N64	~Bonus~ F-Zero X
$ID160=array("53620","53585","53590","53608");
$longitud160=count($ID160);

//N64	Army Men: Sarges Heroes
$ID161=array("54884","54898");
$longitud161=count($ID161);
//N64	Banjo-Kazooie
$ID162=array("48921","50940");
$longitud162=count($ID162);

//N64	Bomberman 64: The Second Attack 
$ID163=array("49396","49405","49428");
$longitud163=count($ID163);

//N64	Chameleon Twist 2
$ID164=array("53239","53233","53248");
$longitud164=count($ID164);

//N64	Diddy Kong Racing
$ID165=array("48471","48477","48488","48489","48490","48491");
$longitud165=count($ID165);

//N64	F-Zero X
$ID166=array("53633","53638");
$longitud166=count($ID166);

//N64	Kirby 64 - The Crystal Shards 
$ID167=array("48903","53323","53321","53316");
$longitud167=count($ID167);

//N64	Mario Party
$ID168=array("50772");
$longitud168=count($ID168);

//N64	Mario Party 3
$ID169=array("53052","53058","53091");
$longitud169=count($ID169);

//N64	Paper Mario
$ID170=array("49545");
$longitud170=count($ID170);

//N64	Pilotwings 64
$ID171=array("49885","49888");
$longitud171=count($ID171);

//N64	Super Mario 64
$ID172=array("48647","48653","48708");
$longitud172=count($ID172);

//GEN	Adventures of Batman and Robin, The
$ID173=array("325","8093");
$longitud173=count($ID173);

//GEN	Aero the Acro-Bat 2
$ID174=array("7172","7176","7177","7179","7180","7182","7183","7181");
$longitud174=count($ID174);

//GEN	After Burner II
$ID175=array("1442","1446","1447","1449","1453","1456");
$longitud175=count($ID175);

//GEN	Comix Zone
$ID176=array("4795","4796");
$longitud176=count($ID176);

//GEN	Ecco the Dolphin
$ID177=array("5697","5698","5699","5700","5701");
$longitud177=count($ID177);

//GEN	Mazin Saga: Mutant Fighter
$ID178=array("40621","40622","40623","40624","40625");
$longitud178=count($ID178);

//GEN	Mega Bomberman
$ID179=array("42433","42432","38758");
$longitud179=count($ID179);

//GEN	Ninja Gaiden
$ID180=array("30654","30655","30686","30657","30663","30686");
$longitud180=count($ID180);

//GEN	Phantasy Star III: Generations of Doom
$ID181=array("53650");
$longitud181=count($ID181);

//GEN	Phantasy Star II 
$ID182=array("37694","44561");
$longitud182=count($ID182);

//GEN	PulseMan
$ID183=array("12133","12134","12135");
$longitud183=count($ID183);

//GEN	Ristar
$ID184=array("1344","18942","18943");
$longitud184=count($ID184);

//GEN	Road Rash
$ID185=array("45084","45085");
$longitud185=count($ID185);

//GEN	Road Rash 3: Tour de Force
$ID186=array("221");
$longitud186=count($ID186);

//GEN	Road Rash II
$ID187=array("45246","45260");
$longitud187=count($ID187);

//GEN	Sonic 3 & Knuckles
$ID188=array("19367","36681");
$longitud188=count($ID188);

//GEN	Sonic 3 Complete
$ID189=array("19969");
$longitud189=count($ID189);

//GEN	Sonic 3D Blast
$ID190=array("4179");
$longitud190=count($ID190);

//GEN	Sonic the Hedgehog 3
$ID191=array("291","19545");
$longitud191=count($ID191);

//GEN	Strider
$ID192=array("1363","1364");
$longitud192=count($ID192);

//GEN	True Lies
$ID193=array("26413","26422","26430");
$longitud193=count($ID193);

//GEN	Valis
$ID194=array("5225","5226","5227");
$longitud194=count($ID194);

//GBC	Dragon Warrior Monsters 2: Tara's Adventure
$ID195=array("17622");
$longitud195=count($ID195);

//GBC	Gex 3 - Deep Pocket Gecko
$ID196=array("28893","28894","28887");
$longitud196=count($ID196);

//GBC	Harvest Moon 2
$ID197=array("17712");
$longitud197=count($ID197);

//GBC	Harvest Moon 3
$ID198=array("17406","17408","17459");
$longitud198=count($ID198);

//GBC	Mr. Nutz
$ID199=array("6955","6956","6957","6958","6959");
$longitud199=count($ID199);

//GBC	Pokemon - Crystal Version
$ID200=array("5958");
$longitud200=count($ID200);

//GBC	Warlocked
$ID201=array("13242");
$longitud201=count($ID201);

//GBC	Zook Hero 2
$ID202=array("37350","37351");
$longitud202=count($ID202);

//GBC	Zook Hero Z
$ID203=array("37377","37378","37385");
$longitud203=count($ID203);

//GBA	Advance Wars
$ID204=array("11433","11435","11498");
$longitud204=count($ID204);

//GBA	Alien Hominid
$ID205=array("15519","15216","15217","15218");
$longitud205=count($ID205);

//GBA	Banjo-Kazooie Grunty's Revenge
$ID206=array("36054","36056","36068","36075","36044");
$longitud206=count($ID206);

//GBA	Banjo-Pilot
$ID207=array("38696","38702","38712","38718","38728","38734","38744","38750","38767","38773","38783","38789");
$longitud207=count($ID207);

//GBA	Bomberman Tournament
$ID208=array("12728");
$longitud208=count($ID208);

//GBA	Castlevania - Harmony of Dissonance
$ID209=array("13112");
$longitud209=count($ID209);

//GBA	Crash Bandicoot: The Huge Adventure
$ID210=array("22792","22787","22812","22813","22822","22823");
$longitud210=count($ID210);

//GBA	Crash Nitro Kart
$ID211=array("17519","17513","17514","17515");
$longitud211=count($ID211);

//GBA	Crash Purple - Ripto's Rampage
$ID212=array("28166","28210","28176","28177","28178","28179","28197","28203","28202","28160");
$longitud212=count($ID212);

//GBA	Denki Blocks!
$ID213=array("47149","47133","47141","47158");
$longitud213=count($ID213);

//GBA	Densetsu no Stafy
$ID214=array("27263","27267");
$longitud214=count($ID214);

//GBA	Disney Princess
$ID215=array("30590","30591","30577","30562","30563","30564","30628");
$longitud215=count($ID215);

//GBA	Disney's Magical Quest Starring Mickey & Minnie
$ID216=array("39953","39954");
$longitud216=count($ID216);

//GBA	DK: King Of Swing
$ID217=array("40922","40923","40924","40925","40927");
$longitud217=count($ID217);

//GBA	Donkey Kong Country
$ID218=array("2695","2696","2697");
$longitud218=count($ID218);

//GBA	Donkey Kong Country 2
$ID219=array("21974","21977","21982");
$longitud219=count($ID219);
//GBA	Donkey Kong Country 3
$ID220=array("28323");
$longitud220=count($ID220);
//GBA	Dragon Ball GT: Transformation
$ID221=array("23681","23697");
$longitud221=count($ID221);
//GBA	Final Fantasy Tactics Advance
$ID222=array("13645","14199");
$longitud222=count($ID222);
//GBA	Fire Emblem: The Binding Blade
$ID223=array("46958","46927","46896");
$longitud223=count($ID223);
//GBA	Game & Watch Gallery 4
$ID224=array("41287");
$longitud224=count($ID224);
//GBA	Golden Sun: The Lost Age
$ID225=array("35988");
$longitud225=count($ID225);
//GBA	Kirby & The Amazing Mirror
$ID226=array("7301");
$longitud226=count($ID226);

//GBA	Kirby: Nightmare in Dream Land 
$ID227=array("11895","11896");
$longitud227=count($ID227);

//GBA	Konjiki no Gash Bell!!: Unare! Yuujou no Zakeru
$ID228=array("40423","40424","40425");
$longitud228=count($ID228);
//GBA	Kuru Kuru Kururin
$ID229=array("21276","21277","21275");
$longitud229=count($ID229);
//GBA	Mario Party Advance
$ID230=array("16070","16081","16084");
$longitud230=count($ID230);
//GBA	Mario Pinball Land
$ID231=array("18839","18840","18841","18842","18843","18844","18845","18846","18847","18860","18877");
$longitud231=count($ID231);
//GBA	Mega Man & Bass
$ID232=array("38218","38219","38248","38261");
$longitud232=count($ID232);
//GBA	Mega Man Battle Network
$ID233=array("8499");
$longitud233=count($ID233);
//GBA	Mega Man Battle Network 2
$ID234=array("43735","43775","43792");
$longitud234=count($ID234);
//GBA	Mega Man Zero
$ID235=array("10539","10573","10514");
$longitud235=count($ID235);
//GBA	Mega Man Zero 2
$ID236=array("25032","25033","25054","25055");
$longitud236=count($ID236);
//GBA	Mega Man Zero 3
$ID237=array("22702","22713");
$longitud237=count($ID237);
//GBA	Mega Man Zero 4
$ID238=array("26467","26483");
$longitud238=count($ID238);
//GBA	Metroid: Fusion
$ID239=array("4659","4660");
$longitud239=count($ID239);
//GBA	Metroid: Zero Mission
$ID240=array("5769");
$longitud240=count($ID240);
//GBA	Mother 3
$ID241=array("8372","7591");
$longitud241=count($ID241);
//GBA	Pokemon - Ash Gray
$ID242=array("39072","39253","39426");
$longitud242=count($ID242);
//GBA	Pokemon - Light Platinum
$ID243=array("27535","27567","27569");
$longitud243=count($ID243);
//GBA	Pokemon Mystery Dungeon - Red Rescue Team
$ID244=array("11799","11800","11811");
$longitud244=count($ID244);
//GBA	Shin Megami Tensei: Devil Children - Dark Version
$ID245=array("36110","36109","36137");
$longitud245=count($ID245);
//GBA	Shin Megami Tensei: Devil Children - Light Version
$ID246=array("36392","36407");
$longitud246=count($ID246);
//GBA	Sigma Star Saga
$ID247=array("43929","43930","43931","43932","43976","43907");
$longitud247=count($ID247);
//GBA	Sonic Advance
$ID248=array("32763","32764","32765","32766","53461");
$longitud248=count($ID248);
//GBA	Sonic Advance 2
$ID249=array("1327","1328");
$longitud249=count($ID249);
//GBA	Sonic Advance 3
$ID250=array("19265","19278","32958","19286");
$longitud250=count($ID250);
//GBA	Spyro - Attack of the Rhynocs
$ID251=array("35120","35122","35141","35091");
$longitud251=count($ID251);
//GBA	Spyro 2 - Season of Flame
$ID252=array("22700","22674");
$longitud252=count($ID252);
//GBA	Spyro Orange - Cortex Conspiracy 
$ID253=array("28117","28118","28119","28120","28121","28146","28150","28215","28098","28101","28142","28150");
$longitud253=count($ID253);
//GBA	Super Mario Advance 3: Yoshi's Island
$ID254=array("38410","38411","38412","38414","38415","38416","38417","38418","38432","38438");
$longitud254=count($ID254);
//GBA	Super Mario Advance 4 - Super Mario Bros 3 (E-World Hack)
$ID255=array("33431","33438","33442","33443","33469","33476","33480","33481","33499");
$longitud255=count($ID255);
//GBA	Sword of Mana
$ID256=array("35661");
$longitud256=count($ID256);
//GBA	The Legend of Zelda: A Link to the Past - Four Swords
$ID257=array("2568","2575");
$longitud257=count($ID257);
//GBA	Wario Land 4
$ID258=array("10001");
$longitud258=count($ID258);
//GBA	Yu Yu Hakusho - Ghost Files: Tournament Tactics
$ID259=array("22983","23075");
$longitud259=count($ID259);
//GB	Adventure Island
$ID260=array("9019","9926");
$longitud260=count($ID260);
//GB	Baby T-Rex
$ID261=array("7998","7999","8000","8001");
$longitud261=count($ID261);
//GB	Balloon Kid
$ID262=array("4592","4598");
$longitud262=count($ID262);
//GB	Bust-A-Move 2: Arcade Edition
$ID263=array("7047","6127","5988","6858","7048","6128","5989","6859","7049","6129","5990","6860");
$longitud263=count($ID263);
//GB	Bust-A-Move 3 DX
$ID264=array("24553","24517","24481","24535","24552","24516","24480","24534","24551","24515","24479","24533");
$longitud264=count($ID264);
//GB	Buster Brothers
$ID265=array("47983");
$longitud265=count($ID265);
//GB	Castlevania II - Belmont's Revenge
$ID266=array("30597","31007","31008","30779","30780","30786","30598");
$longitud266=count($ID266);
//GB	Donkey Kong
$ID267=array("4608","18205");
$longitud267=count($ID267);
//GB	Donkey Kong Land
$ID268=array("34492","34499");
$longitud268=count($ID268);
//GB	Donkey Kong Land III
$ID269=array("8849","8809","8811");
$longitud269=count($ID269);
//GB	Duck Tales
$ID270=array("28686");
$longitud270=count($ID270);
//GB	Felix the Cat
$ID271=array("6687","6688","6689");
$longitud271=count($ID271);
//GB	Kaeru no Tame ni Kane wa Naru (For the Frog the Bell Tolls)
$ID272=array("34876","34915","34916","34918","34945");
$longitud272=count($ID272);
//GB	Kirby's Dream Land 2
$ID273=array("5734","5740","5940","38509");
$longitud273=count($ID273);
//GB	Mega Man Xtreme
$ID274=array("11653","11655");
$longitud274=count($ID274);
//GB	Mega Man: Dr. Wily's Revenge
$ID275=array("13805","13806","42682");
$longitud275=count($ID275);
//GB	Metroid II: Return of Samus 
$ID276=array("1940");
$longitud276=count($ID276);
//GB	Mole Mania
$ID277=array("23523","23525","23531","23533","23538","23540");
$longitud277=count($ID277);
//GB	Mr. Nutz
$ID278=array("6996","6997","6998","6999","7000");
$longitud278=count($ID278);
//GB	Pokemon Trading Card Game
$ID279=array("7400");
$longitud279=count($ID279);
//GB	The Little Mermaid
$ID280=array("33116");
$longitud280=count($ID280);
//GB	Tintin in Tibet
$ID281=array("27773");
$longitud281=count($ID281);
//GB	Wario Land 3
$ID282=array("5617");
$longitud282=count($ID282);




//SNES	Toad's Christmas Adventure
$ID285=array("55401","55402","55403","55404","55405","55406","55407","55408","55409","55410","55411","55416","55412","55413","55414","55400");
$longitud285=count($ID285);

//SNES	Star Fox 2
$ID286=array("31769","31770","53268");
$longitud286=count($ID286);

//GBA	F-Zero - GP Legend
$ID287=array("32014");
$longitud287=count($ID287);

//GBA	F-Zero Advance: Maximum Velocity
$ID288=array("53730");
$longitud288=count($ID288);


//N64	Gex 3 - Deep Cover Gecko
$ID289=array("48834","48835","48864","48877");
$longitud289=count($ID289);

//N64	GoldenEye 007
$ID290=array("49105","49109","49167","48969","48992","48993");
$longitud290=count($ID290);

//N64	Legend of Zelda, The - Majoras Mask
$ID291=array("55484","55530","55534");
$longitud291=count($ID291);

//SNES	Barbie Super Model
$ID292=array("39160");
$longitud292=count($ID292);

//Bible Adventures
$ID293=array("55627","55628","55629","55630","55635","55636","55637","55638","55639","55640","55641","55642","55643","55648","55644","55631","55632","55633","55634","55626","55655","55654","55656","55657","55658","55645","55646","55647","55649","55650","55651","55652","55653");
$longitud293=count($ID293);


//users



for($l=0; $l<$userl; $l++){
	


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'270' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud3 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID3[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID3[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID3[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID3[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3408' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud4 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID4[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID4[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID4[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID4[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'269' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud5 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID5[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID5[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID5[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID5[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2740' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud6 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID6[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID6[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID6[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID6[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2219' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud7 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID7[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID7[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID7[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID7[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'937' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud8 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID8[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID8[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID8[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID8[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4944' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud9 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID9[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID9[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID9[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID9[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3805' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud10 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID10[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID10[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID10[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID10[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1424' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud11 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID11[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID11[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID11[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID11[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10025' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud12 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID12[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID12[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID12[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID12[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4094' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud13 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID13[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID13[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID13[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID13[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1569' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud14 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID14[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID14[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID14[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID14[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4808' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud15 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID15[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID15[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID15[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID15[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1582' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud16 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID16[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID16[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID16[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID16[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}


}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1686' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud17 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID17[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID17[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID17[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID17[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1733' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud18 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID18[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID18[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID18[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID18[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1737' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud19 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID19[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID19[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID19[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID19[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1736' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud20 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID20[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID20[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID20[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID20[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1743' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud21 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID21[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID21[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID21[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID21[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1777' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud22 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID22[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID22[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID22[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID22[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1744' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud23 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID23[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID23[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID23[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID23[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1478' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud24 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID24[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID24[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID24[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID24[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'17' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud25 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID25[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID25[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID25[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID25[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1953' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud26 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID26[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID26[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID26[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID26[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1961' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud27 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID27[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID27[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID27[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID27[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'9112' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud28 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID28[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID28[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID28[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID28[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}
}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5241' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud29 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID29[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID29[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID29[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID29[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10199' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud30 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID30[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID30[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID30[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID30[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10247' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud31 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID31[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID31[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID31[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID31[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4140' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud32 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID32[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID32[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID32[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID32[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1439' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud33 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID33[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID33[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID33[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID33[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'330' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud34 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID34[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID34[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID34[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID34[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'160' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud35 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID35[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID35[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID35[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID35[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'583' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud36 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID36[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID36[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID36[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID36[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2348' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud37 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID37[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID37[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID37[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID37[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7146' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud38 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID38[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID38[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID38[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID38[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3646' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud39 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID39[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID39[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID39[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID39[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7128' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud40 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID40[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID40[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID40[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID40[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6101' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud41 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID41[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID41[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID41[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID41[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2481' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud42 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID42[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID42[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID42[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID42[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4203' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud43 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID43[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID43[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID43[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID43[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7159' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud44 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID44[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID44[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID44[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID44[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7158' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud45 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID45[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID45[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID45[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID45[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'704' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud46 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID46[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID46[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID46[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID46[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	
	

	}

}
//////////////////////////////////////////
//Stray Cheevos                        //
////////////////////////////////////////

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'857' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud51 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID51[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID51[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID51[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID51[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'867' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud52 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID52[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID52[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID52[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID52[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'255' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud53 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID53[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID53[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID53[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID53[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2802' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud54 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID54[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID54[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID54[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID54[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'337' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud55 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID55[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID55[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID55[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID55[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8249' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud56 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID56[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID56[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID56[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID56[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'473' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud57 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID57[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID57[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID57[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID57[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'881' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud58 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID58[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID58[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID58[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID58[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'887' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud59 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID59[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID59[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID59[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID59[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'909' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud60 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID60[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID60[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID60[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID60[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'341' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud61 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID61[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID61[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID61[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID61[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1386' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud62 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID62[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID62[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID62[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID62[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'934' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud63 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID63[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID63[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID63[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID63[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'940' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud64 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID64[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID64[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID64[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID64[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'979' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud65 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID65[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID65[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID65[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID65[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3135' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud66 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID66[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID66[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID66[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID66[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'814' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud67 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID67[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID67[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID67[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID67[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'986' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud68 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID68[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID68[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID68[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID68[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'813' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud69 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID69[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID69[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID69[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID69[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3225' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud70 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID70[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID70[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID70[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID70[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1016' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud71 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID71[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID71[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID71[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID71[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'469' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud72 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID72[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID72[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID72[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID72[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'637' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud73 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID73[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID73[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID73[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID73[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6997' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud74 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID74[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID74[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID74[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID74[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'629' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud75 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID75[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID75[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID75[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID75[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'624' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud76 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID76[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID76[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID76[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID76[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8463' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud77 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID77[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID77[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID77[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID77[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'296' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud78 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID78[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID78[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID78[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID78[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1041' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud79 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID79[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID79[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID79[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID79[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1082' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud80 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID80[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID80[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID80[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID80[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2610' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud81 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID81[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID81[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID81[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID81[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3438' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud82 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID82[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID82[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID82[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID82[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
}
	

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6212' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud83 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID83[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID83[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID83[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID83[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3248' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud84 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID84[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID84[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID84[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID84[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'400' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud85 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID85[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID85[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID85[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID85[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1391' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud86 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID86[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID86[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID86[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID86[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3496' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud87 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID87[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID87[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID87[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID87[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1168' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud88 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID88[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID88[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID88[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID88[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'261' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud89 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID89[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID89[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID89[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID89[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1392' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud90 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID90[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID90[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID90[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID90[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1198' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud91 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID91[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID91[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID91[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID91[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1197' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud92 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID92[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID92[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID92[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID92[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'500' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud93 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID93[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID93[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID93[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID93[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3594' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud94 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID94[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID94[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID94[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID94[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1444' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud95 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID95[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID95[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID95[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID95[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4049' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud96 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID96[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID96[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID96[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID96[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'253' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud97 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID97[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID97[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID97[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID97[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1508' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud98 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID98[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID98[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID98[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID98[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7943' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud99 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID99[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID99[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID99[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID99[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'558' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud100 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID100[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID100[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID100[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID100[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'236' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud101 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID101[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID101[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID101[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID101[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

	//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'242' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud102 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID102[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID102[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID102[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID102[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
///////////////////////// HERE
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'815' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud103 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID103[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID103[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID103[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID103[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6647' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud104 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID104[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID104[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID104[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID104[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'573' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud105 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID105[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID105[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID105[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID105[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'355' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud106 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID106[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID106[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID106[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID106[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'467' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud107 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID107[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID107[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID107[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID107[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1287' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud108 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID108[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID108[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID108[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID108[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3907' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud109 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID109[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID109[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID109[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID109[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1354' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud110 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID110[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID110[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID110[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID110[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2620' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud111 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID111[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID111[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID111[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID111[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1305' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud112 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID112[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID112[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID112[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID112[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1326' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud113 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID113[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID113[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID113[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID113[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5994' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud114 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID114[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID114[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID114[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID114[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10014' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud115 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID115[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID115[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID115[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID115[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2242' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud116 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID116[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID116[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID116[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID116[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1510' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud117 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID117[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID117[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID117[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID117[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6729' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud118 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID118[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID118[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID118[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID118[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6836' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud119 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID119[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID119[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID119[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID119[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2361' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud120 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID120[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID120[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID120[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID120[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1524' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud121 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID121[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID121[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID121[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID118[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1525' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud122 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID122[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID122[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID122[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID122[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2863' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud123 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID123[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID123[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID123[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID123[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4559' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud124 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID124[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID124[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID124[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID124[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1509' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud125 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID125[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID125[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID125[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID125[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4694' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud126 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID126[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID126[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID126[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID126[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2360' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud127 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID127[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID127[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID127[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID127[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1616' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud128 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID128[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID128[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID128[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID128[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5300' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud129 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID129[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID129[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID129[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID129[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1447' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud130 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID130[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID130[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID130[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID130[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1636' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud131 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID131[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID131[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID131[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID131[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8092' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud132 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID132[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID132[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID132[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID132[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1666' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud133 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID133[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID133[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID133[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID133[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1472' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud134 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID134[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID134[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID134[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID134[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1683' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud135 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID135[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID135[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID135[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID135[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1700' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud136 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID136[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID136[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID136[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID136[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5001' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud137 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID137[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID137[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID137[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID137[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1479' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud138 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID138[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID138[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID138[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID138[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1784' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud139 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID139[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID139[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID139[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID139[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1803' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud140 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID140[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID140[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID140[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID140[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1448' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud141 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID141[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID141[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID141[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID141[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1485' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud142 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID142[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID142[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID142[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID142[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1487' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud143 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID143[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID143[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID143[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID143[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'9597' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud144 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID144[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID144[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID144[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID144[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5175' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud145 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID145[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID145[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID145[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID145[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1871' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud146 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID146[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID146[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID146[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID146[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5473' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud147 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID147[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID147[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID147[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID147[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8723' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud148 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID148[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID148[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID148[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID148[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1925' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud149 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID149[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID149[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID149[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID149[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1958' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud150 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID150[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID150[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID150[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID150[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1446' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud151 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID151[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID151[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID151[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID151[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1994' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud152 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID152[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID152[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID152[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID152[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
}
else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1995' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud153 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID153[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID153[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID153[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID153[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6429' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud154 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID154[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID154[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID154[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID154[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2009' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud155 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID155[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID155[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID155[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID155[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1802' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud156 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID156[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID156[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID156[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID156[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3578' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud157 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID157[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID157[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID157[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID157[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2034' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud158 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID158[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID158[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID158[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID158[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4105' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud159 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID159[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID159[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID159[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID159[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10962' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud160 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID160[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID160[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID160[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID160[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10148' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud161 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID161[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID161[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID161[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID161[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10210' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud162 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID162[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID162[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID162[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID162[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10330' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud163 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID163[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID163[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID163[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID163[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10283' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud164 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID164[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID164[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID164[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID164[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10202' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud165 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID165[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID165[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID165[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID165[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10133' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud166 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID166[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID166[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID166[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID166[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10246' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud167 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID167[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID167[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID167[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID167[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10263' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud168 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID168[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID168[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID168[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID168[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10108' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud169 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID169[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID169[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID169[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID169[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10154' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud170 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID170[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID170[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID170[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID170[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10277' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud171 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID171[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID171[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID171[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID171[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10003' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud172 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID172[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID172[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID172[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID172[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'168' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud173 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID173[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID173[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID173[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID173[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'13' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud174 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID174[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID174[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID174[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID174[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'109' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud175 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID175[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID175[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID175[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID175[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'53' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud176 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID176[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID176[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID176[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID176[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud177 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID177[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID177[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID177[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID177[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2413' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud178 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID178[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID178[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID178[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID178[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'494' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud179 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID179[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID179[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID179[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID179[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'288' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud180 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID180[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID180[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID180[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID180[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1435' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud181 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID181[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID181[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID181[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID181[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1436' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud182 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID182[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID182[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID182[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID182[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'650' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud183 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID183[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID183[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID183[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID183[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'83' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud184 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID184[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID184[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID184[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID184[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'82' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud185 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID185[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID185[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID185[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID185[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'166' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud186 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID186[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID186[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID186[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID186[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'119' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud187 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID187[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID187[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID187[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID187[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4874' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud188 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID188[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID188[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID188[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID188[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5247' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud189 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID189[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID189[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID189[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID189[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'326' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud190 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID190[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID190[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID190[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID190[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'21' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud191 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID191[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID191[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID191[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID191[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'250' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud192 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID192[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID192[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID192[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID192[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4483' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud193 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID193[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID193[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID193[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID193[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2367' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud194 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID194[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID194[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID194[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID194[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4915' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud195 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID195[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID195[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID195[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID195[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6791' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud196 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID196[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID196[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID196[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID196[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5155' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud197 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID197[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID197[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID197[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID197[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5143' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud198 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID198[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID198[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID198[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID198[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3650' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud199 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID199[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID199[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID199[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID199[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'810' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud200 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID200[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID200[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID200[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID200[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4922' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud201 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID201[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID201[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID201[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID201[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}




//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10277' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud171 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID171[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID171[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID171[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID171[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10003' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud172 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID172[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID172[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID172[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID172[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'168' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud173 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID173[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID173[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID173[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID173[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'13' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud174 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID174[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID174[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID174[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID174[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'109' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud175 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID175[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID175[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID175[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID175[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'53' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud176 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID176[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID176[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID176[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID176[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud177 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID177[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID177[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID177[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID177[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2413' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud178 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID178[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID178[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID178[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID178[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'494' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud179 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID179[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID179[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID179[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID179[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'288' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud180 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID180[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID180[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID180[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID180[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1435' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud181 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID181[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID181[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID181[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID181[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'1436' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud182 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID182[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID182[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID182[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID182[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'650' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud183 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID183[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID183[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID183[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID183[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'83' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud184 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID184[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID184[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID184[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID184[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'82' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud185 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID185[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID185[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID185[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID185[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'166' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud186 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID186[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID186[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID186[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID186[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'119' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud187 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID187[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID187[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID187[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID187[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4874' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud188 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID188[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID188[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID188[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID188[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5247' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud189 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID189[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID189[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID189[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID189[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'326' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud190 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID190[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID190[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID190[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID190[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'21' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud191 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID191[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID191[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID191[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID191[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'250' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud192 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID192[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID192[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID192[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID192[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4483' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud193 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID193[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID193[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID193[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID193[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2367' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud194 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID194[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID194[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID194[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID194[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4915' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud195 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID195[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID195[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID195[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID195[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6791' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud196 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID196[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID196[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID196[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID196[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5155' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud197 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID197[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID197[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID197[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID197[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5143' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud198 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID198[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID198[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID198[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID198[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3650' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud199 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID199[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID199[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID199[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID199[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'810' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud200 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID200[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID200[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID200[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID200[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4922' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud201 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID201[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID201[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID201[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID201[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8239' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud202 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID202[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID202[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID202[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID202[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8228' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud203 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID203[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID203[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID203[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID203[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'506' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud204 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID204[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID204[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID204[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID204[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5068' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud205 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID205[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID205[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID205[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID205[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'744' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud206 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID206[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID206[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID206[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID206[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4072' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud207 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID207[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID207[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID207[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID207[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'509' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud208 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID208[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID208[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID208[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID208[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2353' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud209 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID209[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID209[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID209[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID209[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'526' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud210 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID210[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID210[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID210[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID210[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5127' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud211 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID211[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID211[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID211[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID211[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3618' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud212 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID212[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID212[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID212[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID212[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6759' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud213 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID213[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID213[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID213[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID213[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5619' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud214 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID214[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID214[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID214[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID214[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7092' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud215 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID215[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID215[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID215[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID215[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'8679' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud216 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID216[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID216[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID216[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID216[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5008' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud217 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID217[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID217[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID217[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID217[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'750' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud218 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID218[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID218[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID218[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID218[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'751' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud219 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID219[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID219[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID219[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID219[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'752' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud220 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID220[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID220[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID220[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID220[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'753' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud221 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID221[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID221[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID221[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID221[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'519' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud222 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID222[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID222[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID222[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID222[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4879' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud223 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID223[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID223[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID223[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID223[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'766' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud224 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID224[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID224[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID224[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID224[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2592' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud225 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID225[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID225[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID225[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID225[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'769' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud226 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID226[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID226[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID226[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID226[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'770' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud227 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID227[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID227[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID227[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID227[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7015' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud228 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID228[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID228[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID228[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID228[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5377' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud229 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID229[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID229[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID229[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID229[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5093' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud230 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID230[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID230[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID230[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID230[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2445' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud231 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID231[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID231[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID231[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID231[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2179' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud232 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID232[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID232[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID232[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID232[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}





//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'575' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud233 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID233[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID233[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID233[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID233[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'773' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud234 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID234[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID234[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID234[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID234[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'782' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud235 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID235[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID235[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID235[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID235[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'783' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud236 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID236[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID236[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID236[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID236[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'625' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud237 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID237[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID237[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID237[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID237[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'784' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud238 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID238[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID238[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID238[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID238[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'785' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud239 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID239[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID239[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID239[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID239[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'534' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud240 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID240[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID240[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID240[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID240[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'677' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud241 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID241[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID241[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID241[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID241[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5245' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud242 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID242[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID242[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID242[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID242[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3817' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud243 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID243[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID243[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID243[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID243[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2816' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud244 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID244[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID244[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID244[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID244[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4881' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud245 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID245[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID245[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID245[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID245[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5913' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud246 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID246[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID246[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID246[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID246[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5179' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud247 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID247[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID247[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID247[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID247[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'793' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud248 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID248[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID248[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID248[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID248[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'557' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud249 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID249[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID249[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID249[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID249[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'794' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud250 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID250[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID250[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID250[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID250[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4204' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud251 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID251[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID251[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID251[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID251[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'796' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud252 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID252[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID252[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID252[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID252[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4205' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud253 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID253[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID253[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID253[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID253[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5234' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud254 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID254[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID254[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID254[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID254[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7442' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud255 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID255[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID255[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID255[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID255[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4206' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud256 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID256[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID256[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID256[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID256[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'580' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud257 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID257[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID257[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID257[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID257[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'800' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud258 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID258[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID258[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID258[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID258[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5564' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud259 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID259[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID259[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID259[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID259[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2265' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud260 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID260[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID260[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID260[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID260[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'4089' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud261 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID261[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID261[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID261[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID261[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}





//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2184' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud262 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID262[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID262[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID262[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID262[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2465' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud263 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID263[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID263[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID263[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID263[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5955' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud264 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID264[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID264[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID264[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID264[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}






//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6447' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud265 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID265[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID265[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID265[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID265[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5013' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud266 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID266[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID266[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID266[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID266[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'692' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud267 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID267[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID267[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID267[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID267[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'693' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud268 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID268[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID268[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID268[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID268[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'695' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud269 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID269[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID269[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID269[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID269[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'522' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud270 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID270[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID270[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID270[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID270[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3606' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud271 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID271[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID271[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID271[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID271[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5045' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud272 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID272[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID272[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID272[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID272[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'707' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud273 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID273[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID273[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID273[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID273[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'713' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud274 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID274[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID274[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID274[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID274[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2253' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud275 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID275[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID275[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID275[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID275[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'521' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud276 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID276[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID276[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID276[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID276[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'2477' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud277 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID277[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID277[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID277[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID277[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'3651' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud278 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID278[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID278[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID278[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID278[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'727' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud279 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID279[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID279[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID279[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID279[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6484' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud280 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID280[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID280[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID280[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID280[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'6263' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud281 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID281[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID281[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID281[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID281[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'741' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud282 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID282[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID282[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID282[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID282[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'9113' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud285 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID285[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID285[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID285[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID285[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5209' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud286 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID286[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID286[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID286[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID286[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'5343' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud287 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID287[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID287[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID287[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID287[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'507' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud288 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID288[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID288[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID288[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID288[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}



//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10223' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud289 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID289[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID289[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID289[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID289[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10073' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud290 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID290[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID290[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID290[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID290[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}
	

}


//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'10679' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud291 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID291[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID291[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID291[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID291[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'412' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud292 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID292[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID292[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID292[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID292[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}

//Copy
$data = $RAConn->GetGameInfoAndUserProgress( $user[$l],'7013' );	
//Longitud Insertar Updatear
for($i=0; $i<$longitud293 ; $i++)
{	

	$idcheevo = array($data->Achievements->$ID293[$i]->ID);
	$idc = implode(" , ",$idcheevo);
	
	

	$points=array((int)$data->Achievements->$ID293[$i]->Points);
	$poin = implode(" , ",$points);
	
	
	if(empty($data->Achievements->$ID293[$i]->DateEarnedHardcore))
	{
		$fecha= "";
		$fech = $fecha;
	}else
	{
		 $fecha = array($data->Achievements->$ID293[$i]->DateEarnedHardcore);
		 $fech = implode(" , ",$fecha);
	(int)$gameid = $data->ID;
$user1= $user[$l];

$resultquery="SELECT idcheevo FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";
$resultquery1="SELECT user FROM cheevos WHERE idcheevo='$idc' AND user='$user1'";

$resultado =  mysqli_query($conn,$resultquery);
$resulta= mysqli_fetch_array($resultado, MYSQL_ASSOC);
$res = implode(" , ",(array)$resulta);
 

$resultado1 =  mysqli_query($conn,$resultquery1);
$resulta1= mysqli_fetch_array($resultado1, MYSQL_ASSOC);
$res1 = implode(" , ",(array)$resulta1);

$valor1 = $res;
$valor2 = $res1;


if($valor1 == $idc && $valor2 == $user1)
{
	
$sql1= "UPDATE cheevos SET DateEarned='$fech',points='$poin' 
WHERE idcheevo='$idc' AND user='$user1' AND gameid='$gameid'";

if (mysqli_query($conn, $sql1)) {
    
} else {
    echo "Error " . $sql1 . "<br>" . mysqli_error($conn);
}
mysqli_free_result($resultado); 
mysqli_free_result($resultado1); 

}
else {
	
	$year = date('Y',strtotime($fech));
	$month =date('m',strtotime($fech));
	
	if($month == 12 && $year == 2017 ){
		
$sql="INSERT INTO cheevos(idcheevo,user,gameid,points,DateEarned) 
Values ('$idc', '$user1', '$gameid', '$poin', '$fech')";
if (mysqli_query($conn, $sql)) {
	
    //Mensaje
} else {
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
	}
	
	}

	
	

	}



}
//Consulta Table

echo "<tr>";

echo "<td>";
echo $user[$l];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '270' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3408' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '269' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2740' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2219' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '937' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4944' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3805' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1424' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10025' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4094' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1569' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4808' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1582' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1686' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1733' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1737' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1736' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1743' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1777' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1744' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1478' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '17' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1953' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1961' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '9112' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5241' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10199' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10247' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4140' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1439' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '330' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '160' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '583' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2348' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7146' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3646' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7128' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6101' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2481' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4203' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7159' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7158' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '704' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";







//////////////////////
///Straycheevos//////
////////////////////
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '857' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '867' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '255' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2802' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '337' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8249' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '473' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '881' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '887' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '909' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '341' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1386' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '934' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '940' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '979' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3135' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '814' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '986' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '813' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3225' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1016' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '469' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '637' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6997' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '629' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '624' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8463' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '296' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1041' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1082' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2610' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3438' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6212' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3248' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '400' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1391' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3496' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1168' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '261' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1392' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1198' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1197' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '500' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3594' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1444' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4049' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '253' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1508' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7943' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '558' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '236' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '242' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '815' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6647' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '573' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '355' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '467' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1287' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3907' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1354' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2620' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1305' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1326' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5994' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10014' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2242' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1510' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6729' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6836' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2361' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1524' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1525' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2863' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4559' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1509' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4694' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2360' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1616' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5300' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1447' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1636' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8092' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1666' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1472' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1683' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1700' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5001' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1479' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1784' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1803' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1448' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1485' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1487' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '9597' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5175' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1871' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5473' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8723' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1925' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1958' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1446' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1994' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1995' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6429' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2009' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1802' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3578' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2034' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4105' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10962' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10148' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10210' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10330' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10283' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10202' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10133' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10246' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10263' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10108' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10154' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10277' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10003' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '168' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '13' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '109' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '53' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2413' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '494' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '288' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1435' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1436' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '650' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '83' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '82' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '166' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '119' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4874' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5247' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '326' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '21' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '250' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4483' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2367' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4915' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6791' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5155' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5143' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3650' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '810' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4922' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8239' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8228' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '506' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5068' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '744' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4072' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '509' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2353' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '526' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5127' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3618' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6759' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5619' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7092' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8679' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5008' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '750' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '751' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '752' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '753' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '519' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4879' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '766' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2592' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '769' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '770' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7015' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5377' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5093' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2445' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2179' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '575' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '773' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '782' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '783' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '625' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '784' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '785' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '534' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '677' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5245' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3817' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2816' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4881' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5913' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5179' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '793' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '557' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '794' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4204' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '796' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4205' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5234' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7442' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4206' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '580' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '800' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5564' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2265' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '4089' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2184' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2465' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5955' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6447' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5013' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '692' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '693' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '695' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '522' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3606' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5045' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '707' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '713' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2253' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '521' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2477' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3651' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '727' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6484' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '6263' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '741' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '9113' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5209' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5343' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '507' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10223' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10073' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10679' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '412' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7013' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";

echo "</tr>";





}



echo"</table>";

mysqli_close($conn);

?>
</body>
</html>


