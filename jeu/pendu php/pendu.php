
<?php
session_start();
$alphabet="abcdefghijklmnopqrstuvwxyz";
if(!empty($_GET['reset']) && $_GET['reset']=='true')
    session_unset();
?>
<form method="post" action="index.php">
<input type="hidden" name="partie" value="new"/>
<input type="submit"/>
</form>
<?php
if (isset($_POST['partie'])&& $_POST['partie']=="new")
{
    $_SESSION['mot']="cartographie";
    for($i=0;$i<strlen($_SESSION['mot']);$i++)
    {
        $_SESSION['recherche'][$i]="_";
    }
}
if (isset($_SESSION['mot']))
{
    if (isset($_GET['lettre']))
    {
        $_SESSION['lettres'].=$_GET['lettre'];
        for($j=0;$j<count($_SESSION['recherche']);$j++)
        {
            if(substr($_SESSION['mot'],$j,1)==$_GET['lettre'])
                $_SESSION['recherche'][$j]=$_GET['lettre'];
        }
    }
    for($i=0;$i<count($_SESSION['recherche']);$i++)
    {
        echo $_SESSION['recherche'][$i]." ";
    }
    echo "<br/>";
    for($i=0;$i<strlen($alphabet);$i++)
    {
        if (strpos($_SESSION['lettres'],substr($alphabet,$i,1))===false)
        {
            echo "<a href='index.php?lettre=".substr($alphabet,$i,1)."'>".substr($alphabet,$i,1)."</a> ";
        }
        else
        {
            echo substr($alphabet,$i,1)." ";
        }
    }
    ?>
    <br/>
    <a href="index.php?reset=true">Recommencer</a>
    <?php
}
?>
