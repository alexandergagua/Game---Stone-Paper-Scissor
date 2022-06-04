<head>
  <title>Rock | Paper | Scissors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center" style="background-image:url('https://images.unsplash.com/photo-1468186402854-9a641fd7a7c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80');color:white;">
  <h1>Rock | Paper | Scissors</h1>
  <p>Play the game with your Computer</p> 
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <label for="">Choose Your Weapen</label>
                <select name="game" id="" class="form-control" title="Please Choose Your Weapen" required>
                    <option value="0">Choose any one</option>
                    <option value="R">Stone | Rock</option>
                    <option value="P">Paper</option>
                    <option value="S">Scissors</option>
                </select><br/>
                <input class="btn btn-success" type="submit" name="sb" value="Select">
            </form>
        </div>
    </div>
</div>
<?php
if(isset($_POST['sb']) && $_POST['game']!='0')
{

function sortgame($comp,$you)
{
    
    
    
    if($you=='R' && $comp=='P')
    {
        return 1;
    }
    elseif($you=='P' && $comp=='R')
    {
        return -1;
    }

    if($you=='R' && $comp=='S')
    {
        return 1;
    }
    elseif($you=='S' && $comp=='R')
    {
        return -1;
    }

    if($you=='P' && $comp=='S')
    {
        return -1;
    }
    elseif($you=='S' && $comp=='P')
    {
        return 1;
    }
    
    if($comp==$you)
    {
        return 0;
    }


}

$str = 'PRS';
$shuffled = str_shuffle($str);

$result = sortgame(substr($shuffled,'0','1'),$_POST['game']);

$winner = '';

if($result==0)
{
    $winner = "You Choose ".$_POST['game']." and Computer Choose ".substr($shuffled,'0','1')." Game Draw!";
?>
    <audio controls autoplay="true" style="display:none;">
      <source src="3.wav" type="audio/ogg">
      <source src="3.wav" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
<?php
}
elseif($result==1)
{
    $winner = "You Choose ".$_POST['game']." and Computer Choose ".substr($shuffled,'0','1')." You Won!";
?>
<audio controls autoplay="true" style="display:none;">
  <source src="1.wav" type="audio/ogg">
  <source src="1.wav" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<?php
}
else
{
    $winner = "You Choose ".$_POST['game']." and Computer Choose ".substr($shuffled,'0','1')." Computer Won!";
?>
<audio controls autoplay="true" style="display:none;">
  <source src="2.wav" type="audio/ogg">
  <source src="2.wav" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<?php
}

echo "<center><strong class='alert alert-success'>".$winner."</strong></center><br/><br><br>";
}
else
{
    echo "<center><strong class='alert alert-success'>Please Choose Your Option....</strong></center>";
}
?>
