<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retroxeventxmas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Users
$user = array("FitzG","DrPixel","Slyshock","LootusMaximus","Blazekickn","GOGZero","Danver2618","Matheus2653","Chaykin","JAM","PabloTMF","kraftydinosaur","Thoreau","BenGhazi","kdecks","Salsa","Yakurena","Shmelyoff","Dexterspet","ViperZang","Pinto","EnigmaGameZ","FuturoReidoNatal","caricatur","Grenade44","Theztret00","Celeryyy","Gamechamp","Totaya");
//
$userl = count($user);

echo "<table width = '70%' border='1px' align='center'>";
echo "<tr></tr>";
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
<th>Phantasy Star III: Generations of Doom</th>
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
<th>Gex 3 - Deep Cover Gecko</th>
<th>GoldenEye 007</th>
<th>Legend of Zelda, The - Majoras Mask</th>
<th>Barbie Super Model</th>
<th>Bible Adventures</th>";






echo "</tr>";


for($l=0; $l<$userl; $l++){

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
    ?>
	
    </body>
</html>