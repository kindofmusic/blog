<!DOCTYPE html>
<html lang="pl">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Kind of music</title>
 <meta name="description" content="Blog poświęcony zespołom muzycznym, muzyce, a także o homerecordingu">
 <meta name="keywords" content="blog, muzyka, opinie, zespoły">
 <meta name="author" content="Trevor Philips Industries">
 <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">

 
</head>

<body>
<header>

<div class="logo align-self-center  "><img src="img/logo.png"/>
</div>
</div>


<div class="menu  ">
<?php include 'nav.php'; ?>
</div>
</header>

<div class="container ">
    <div class= "row">
<main class="col-md-9">
    <article class=" " >
    <?php
if(isset( $_GET[ 'site' ] )){
$site = htmlspecialchars( $_GET['site'] ) .'.inc.php';
if( file_exists( $site )){
include( $site );
}else{
echo'strona o podanym adresienie istnieje';
}
}else{
echo ' ale fajnie :P:)))Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet metus eget fermentum convallis. Aliquam erat volutpat. Sed quis vulputate neque. Aenean euismod erat eget luctus fringilla. Vestibulum venenatis blandit massa, ac blandit purus fringilla sit amet. Proin vitae arcu dictum, bibendum dolor accumsan, ultricies enim. Vivamus condimentum lobortis ex ac vehicula. Duis luctus hendrerit leo, in euismod turpis. Maecenas aliquam nunc fermentum massa maximus, a fringilla ex ultricies. Suspendisse potenti. Aenean et vestibulum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed pretium libero. Maecenas lobortis malesuada velit, vitae tristique erat rhoncus eget. Etiam eleifend cursus tortor, id venenatis nibh porta ut.

Donec consequat odio a lectus tincidunt, vel efficitur velit ullamcorper. Etiam nec placerat purus. Vestibulum pretium bibendum commodo. Proin pretium tellus sodales neque commodo gravida. Nullam iaculis nibh id odio maximus, ut mattis justo posuere. Morbi et nunc ut urna fringilla fermentum vel at purus. Vivamus augue neque, fringilla ut consectetur at, tristique vitae augue. Aenean porta eros quis nulla pretium venenatis.

Vivamus odio velit, mollis nec eros in, dignissim facilisis diam. Nam non rhoncus nibh, ut porta quam. Proin eu turpis nec odio tincidunt dictum in sed tortor. Mauris rhoncus porta blandit. Aliquam erat volutpat. Nam rutrum erat sed nulla luctus, euismod rutrum orci elementum. Aenean a elit vitae nunc sagittis lobortis vel rutrum massa. Quisque nibh lorem, porta et diam at, aliquet rhoncus dolor. Morbi molestie risus quis dictum aliquam. Nulla vel velit at sapien vestibulum accumsan. Nullam et nunc quis enim pharetra ornare. Vivamus porta lorem nec ipsum imperdiet volutpat.

Donec porta porta cursus. Vestibulum a orci lectus. Vestibulum fringilla enim a ante viverra, nec cursus mauris efficitur. Suspendisse potenti. Sed quis urna diam. Quisque vestibulum lacus malesuada odio ornare, vel sagittis felis accumsan. Morbi tempus tortor ut ullamcorper hendrerit. Ut sed pretium mauris, sit amet vehicula urna. Fusce non justo malesuada, fermentum sem at, tempus lorem. Integer pretium vel leo a condimentum. Duis hendrerit viverra risus sed posuere. Pellentesque nec auctor ante, sodales semper libero.

Sed at est faucibus dolor elementum vulputate id nec leo. Cras tristique dignissim nibh, et dignissim leo sollicitudin eu. Vestibulum sit amet ligula a eros porttitor aliquet. Suspendisse accumsan id turpis congue placerat. Nam tempus fringilla urna, at dictum sem mollis id. Duis id tincidunt dolor. Nullam tempor vulputate pulvinar. Aenean viverra, orci vitae auctor pulvinar, eros augue finibus ipsum, eu efficitur massa dui tincidunt massa. Pellentesque ut vehicula elit, at eleifend lorem. Cras at ligula cursus, luctus mauris at, maximus risus. Proin velit elit, efficitur sed nisl vitae, fringilla tempor est. Morbi nunc justo, facilisis non purus ut, rhoncus vestibulum metus. Sed varius sem sed dui sollicitudin, eu euismod nulla tincidunt. Suspendisse potenti. Curabitur convallis porttitor accumsan. Fusce commodo posuere sapien, sed sagittis nulla rhoncus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui justo, elementum ac venenatis at, feugiat a magna. Ut suscipit ipsum et ultricies malesuada. Morbi ac dolor lectus. Sed auctor laoreet sem non condimentum. Curabitur eleifend aliquam mauris a tristique. Phasellus fermentum, justo sit amet condimentum molestie, ex metus convallis est, sit amet pretium turpis nunc quis turpis. Nulla rutrum, lectus sed rhoncus posuere, sapien enim condimentum nibh, eget tempus est est quis mi. Donec feugiat, arcu at scelerisque molestie, purus leo tempor magna, fringilla egestas massa ligula ut dui. Integer gravida neque vitae posuere sodales.

Nulla arcu nulla, gravida nec sapien id, porttitor pellentesque neque. Proin hendrerit, metus at ultricies egestas, eros orci mollis dui, scelerisque cursus dolor turpis non tortor. Suspendisse quis vulputate odio. Aliquam ipsum diam, maximus eu vehicula vel, ornare non ante. Cras fringilla massa sed enim bibendum fringilla. Mauris ultrices turpis a nibh dictum, non rhoncus augue pretium. Nulla facilisi. Quisque enim lectus, fermentum in pretium sed, maximus eget est. Nunc varius, sapien id mollis consequat, massa magna aliquet sapien, ut facilisis ligula nisi eu ipsum. Proin sem lorem, lobortis et eros ac, viverra mattis augue. Etiam eu scelerisque nibh, eget pharetra sapien. Quisque sit amet nisi et magna imperdiet euismod sit amet nec mi. Vivamus enim odio, rutrum eu posuere semper, posuere sit amet enim.

Integer pulvinar neque quis libero varius sagittis. Aliquam est sem, congue eget ullamcorper nec, ultrices sit amet purus. Ut cursus turpis non urna ornare, a tempus metus porta. Donec molestie orci a ex gravida dictum. Mauris vel sapien lorem. Pellentesque a sem vitae ante mattis dignissim ac consequat sem. Sed eget nisl vitae nisi consequat lobortis. Nulla mi metus, cursus eu convallis ut, consectetur gravida augue. Proin fringilla nisl odio, id auctor urna sodales quis. Fusce nec pretium elit. Proin vulputate gravida leo, sit amet volutpat nisl vehicula non. Nam ullamcorper, erat non maximus eleifend, justo libero pulvinar magna, a feugiat ante odio ut diam.

In sodales vulputate odio, pellentesque finibus sem laoreet in. Ut aliquet porttitor enim, et accumsan leo fringilla vitae. Sed aliquet imperdiet quam vel posuere. Fusce id orci eget purus tristique ullamcorper. Suspendisse potenti. Quisque tempor mattis scelerisque. Donec vehicula bibendum mi eu vehicula.

Ut mauris tortor, placerat ac porttitor feugiat, egestas sit amet odio. In hac habitasse platea dictumst. Nullam dapibus elit augue, nec blandit velit finibus eget. Morbi ex sapien, pretium ultricies nulla nec, luctus semper mi. Sed vitae odio sagittis, elementum tortor ac, pharetra diam. Sed sed tempus quam, eget elementum erat. Donec viverra turpis consectetur nunc auctor, ut condimentum est laoreet. Mauris placerat congue est ac rhoncus. Mauris id egestas arcu, ut ornare quam. Integer quis nunc enim. Donec vehicula ex eu tellus fringilla vehicula. Donec sollicitudin cursus leo vel iaculis. Donec congue nisi nisi, quis maximus augue pharetra nec. In ut erat sed nisi rutrum fermentum. Fusce vitae maximus augue, in condimentum sem. Morbi eros ipsum, congue a vulputate ut, faucibus ac lacus.

In arcu erat, euismod pulvinar ullamcorper non, hendrerit at justo. Mauris tincidunt erat et felis porttitor venenatis. Etiam molestie libero ut enim tempus, non euismod lacus placerat. Aliquam convallis nulla et nisl aliquet congue. Praesent at sem arcu. Mauris ut fringilla justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque pharetra dui sit amet purus dapibus, ut elementum lacus efficitur. Phasellus a finibus nisl, sed viverra mauris. Morbi ultricies metus a ante commodo, eget vehicula leo ullamcorper. In ornare justo quis lacus mattis vestibulum sit amet laoreet lectus. In id metus arcu. Aenean ut nisi tincidunt, vehicula risus nec, posuere nisl.

Curabitur lobortis magna ex, a semper lectus tempor aliquet. Nunc vel nunc at metus rutrum semper vel et ex. Curabitur quis porta lacus. Quisque aliquet risus mauris, in vestibulum eros interdum at. Nam blandit dignissim purus eu maximus. Aliquam vestibulum, nisi eget posuere fringilla, lorem elit consectetur odio, id hendrerit sem metus eget ante. Aenean id maximus ante. Nam in luctus leo, eu vestibulum mauris. Cras molestie enim libero. Curabitur at leo tortor. Curabitur consequat turpis massa, eu scelerisque sapien scelerisque vitae. In sit amet imperdiet ante. Nulla non dapibus sem. Nunc iaculis fringilla suscipit. Donec vitae sagittis leo.

Suspendisse vitae libero eleifend, gravida leo ut, porta lorem. Nam sodales ultrices nisi eu venenatis. Phasellus eget mi felis. Fusce egestas lacinia sem placerat finibus. Duis vestibulum massa vel viverra maximus. Sed imperdiet sed quam vel pretium. Pellentesque in enim quis est semper aliquet. Etiam gravida massa in lectus placerat aliquam. Phasellus sed finibus lorem, a ultrices velit.

In vel quam nisl. Fusce cursus rhoncus risus, quis pharetra felis pretium eget. Morbi eget posuere lectus. Donec vitae magna euismod, sodales augue ut, rutrum tellus. Curabitur porta rhoncus porttitor. Pellentesque eu sodales mi. Phasellus velit justo, dapibus et magna id, convallis gravida lacus.

Morbi congue orci dictum, porta ligula hendrerit, tristique est. Maecenas interdum erat non sagittis rutrum. Donec rutrum fermentum malesuada. Integer ligula elit, imperdiet imperdiet tortor vel, molestie malesuada metus. Duis feugiat efficitur bibendum. Maecenas nec turpis in diam tincidunt laoreet non vitae eros. Praesent in eros ornare, vehicula orci vitae, mattis ex. Sed a libero ornare, eleifend nulla in, blandit odio. Vestibulum a est sit amet nulla posuere tincidunt sit amet quis tortor.';
}
?>  
       
        
    </article>
    </main>  
    <aside class=" col-md-3 ">
    <?php include 'panel-right.php'; ?>
    </aside>        
</div>
</div>
<footer>
<?php include 'footer.php'; ?>
</footer>    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>