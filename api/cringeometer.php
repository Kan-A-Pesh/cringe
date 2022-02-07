<?php

if (!isset($_GET["pseudo"]))
    die("Pseudo not set!");

$pseudo = strtolower($_GET["pseudo"]);
$score = 0;
$title = "Tu n'es pas ravagé(e)!";
$desc = "";

$ps_super = false;
$ps_mega = false;
$ps_dragon = false;
$ps_slayer = false;

function str_starts_with( $haystack, $needle ) {
    $length = strlen( $needle );
    return substr( $haystack, 0, $length ) === $needle;
}

function str_ends_with( $haystack, $needle ) {
   $length = strlen( $needle );
   if( !$length ) {
       return true;
   }
   return substr( $haystack, -$length ) === $needle;
}

function str_contains( $haystack, $needle ) {
    return strpos($haystack, $needle) !== false;
}

if (str_starts_with($pseudo, "xx")) {$score += 2;}
else if (str_starts_with($pseudo, "x_")) {$score += 1;}

if (str_ends_with($pseudo, "xx")) {$score += 2;}
else if (str_ends_with($pseudo, "_x")) {$score += 1;}


if (str_contains($pseudo, "super"))
{
    $score += 2;
    $desc = "Des <b>super</b>s encouragement pour ce <b>super</b> pseudo!";
    $ps_super = true;
}
if (str_contains($pseudo, "mega"))
{
    $score += 2;
    $desc = "Des <b>mega</b>s félicitations pour ce <b>mega</b> pseudo!";
    $ps_mega = true;
}
if (str_contains($pseudo, "dragon"))
{
    $score += 5;
    $desc = "Des dragons ... qui joue aux jeux vidéos?";
    $ps_dragon = true;
}
if (str_contains($pseudo, "slayer"))
{
    $score += 5;
    $desc = "Un slayer? Slayer de pseudos?";
    $ps_slayer = true;
}

if (str_contains($pseudo, "gamer"))
{
    $score += 5;
    $desc = "Je pense qu'avec ce pseudo beaucoup de gens se douteront que tu est un gamer!";
}
else if (str_contains($pseudo, "g@mer"))
{
    $score += 7;
    $desc = "g@mer ... sérieux?";
}
else if (str_contains($pseudo, "g@m3r")) 
{
    $score += 7;
    $desc = "g@m3r ... bon ...";
}
else if (str_contains($pseudo, "gam3r"))
{
    $score += 7;
    $desc = "gam3r ... sérieux?";
}
if ($ps_super && $ps_mega)
{
    if ($ps_dragon && $ps_slayer){
        $desc = "Woooow il est désormais inarrêtable!";}
    else if($ps_dragon){
            $desc = "<i>".$pseudo." est mort de chute.</i> J'imagine que tu l'as déja vu souvent nan?";}
    else if($ps_slayer){
        $desc = "En vrai, y'a pire nan? C'est déja grave mais ça pourrais être pire?";}
    else{
        $desc = "Des <b>super</b>s <b>mega</b>s félicitations pour ce <b>super mega</b> pseudo!";}
}
else if ($ps_super)
{
    if ($ps_dragon && $ps_slayer){
        $desc = "Super? Dragon? Slayer? Hmm ...";}
    else if($ps_dragon){
            $desc = "Mettre 'super' et 'dragon' dans un pseudo c'est pas dangeureux?";}
    else if($ps_slayer){
        $desc = "'super slayer' ... j'crois qu'il manque 'pro' pour que ce soit parfait!";}
}
else if ($ps_mega)
{
    if ($ps_dragon && $ps_slayer){
        $desc = "Mega Dragon Slayer, donc tu abbats des <b>mega</b>s dragons!";}
    else if ($ps_dragon){
        $desc = "Mettre 'mega' et 'dragon' dans un pseudo c'est plus que dangeureux.";}
    else if ($ps_slayer){
        $desc = "Le mega dragon! Même en nom de boss c'est pas stylé.";}
}

if (str_contains($pseudo, "pro"))
{
    $score += 5;
    $desc = "C'est pas parce qu'il y a 'pro' dans ton pseudo que tu <b>es</b> un pro!";
}

preg_match_all('!\d+!', $pseudo, $matches);
if (str_contains($pseudo, "sha")){ $score += 4;}
if (str_contains($pseudo, "kan")){ $score += 4;}
if (str_contains($pseudo, "lon")){ $score += 3;}
if (str_contains($pseudo, "nin")){ $score += 5;}
if (str_contains($pseudo, "pro")){ $score += 5;}
if (str_contains($pseudo, "mas")){ $score += 4;}
if (str_contains($pseudo, "ter")){ $score += 3;}
if (str_contains($pseudo, "gas")){ $score += 2;}
if (str_contains($pseudo, "plu")){ $score += 2;}
if (str_contains($pseudo, "omg")){ $score += 3;}
if (str_contains($pseudo, "x")){ $score += 1;}
if (str_contains($pseudo, "sc")){ $score += 3;}
if (str_contains($pseudo, "tad")){ $score += 5;}
if (str_contains($pseudo, "et")){ $score += 3;}
if (str_contains($pseudo, "car")){ $score += 2;}
if (str_contains($pseudo, "bus")){ $score += 2;}
if (str_contains($pseudo, "jok")){ $score += 3;}
if (str_contains($pseudo, "blu")){ $score += 2;}
if (str_contains($pseudo, "red")){ $score += 5;}
if (str_contains($pseudo, "pur")){ $score += 10;}

if (substr_count($pseudo, "_") > 5){ $score += 2;}
if (substr_count($pseudo, "_") > 10){ $score += 3;}

$score = $score * 6;

if ($score > 0){ $title = "Très peu ravagé!";}
if ($score > 5){ $title = "Peu ravagé!";}
if ($score > 15){ $title = "Plutot ravagé!";}
if ($score > 30){ $title = "Ravagé!";}
if ($score > 50){ $title = "Ravagé à plus de 50%!";}
if ($score > 60){ $title = "C'est grave là!";}
if ($score > 70){ $title = "Le ravageomètre est en sueur...";}
if ($score > 80){ $title = "Le ravageomètre pleure là...";}
if ($score > 90){ $title = "Le summum est atteind!";}
if ($score >= 100){
    $title = "Ravagé";
    $desc = "Ravagé";
}
if ($score >= 200){
    $title = "Ravagé Master";
    $desc = "Un maitre!";
}
if ($score >= 250){
    $title = "Ravagé King";
    $desc = "Le roi des ravagés";
}
if ($score >= 300){
    $title = "Ravagé God";
    $desc = "À ça 🤏 d'être dans le leaderboard!";
}
if ($score >= 400){
    $title = "✨ RAVAGAX ✨";
    $desc = "Top 100 dans le leaderboard!";
}
if ($score >= 500){
    $score = 500;
    $title = "✨⭐ R A V A G A X ⭐✨";
    $desc = "Top 1! Victoire Royale!";
}

echo($score."|".$desc."|".$title);
?>