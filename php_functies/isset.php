<?PHP
if (isset($_POST['kleur'])) {
    set_kleurenthema($_POST['kleur']);
}

if (isset($_POST['login'])) {
    validate_user($_POST['gebruikersnaam'], $_POST['wachtwoord']);
}

if (isset($_POST['loguit'])) {
    unset($_SESSION['loggedIn']);
    unset($_SESSION['status']);
    unset($_SESSION['user']);
    header('Refresh:0');
}

if (isset($_POST['close'])) {
    $_SESSION['weggeclicked'] = 'true';
    header('Refresh:0');
}

function return_alert()
{
    if (isset($_SESSION['status'])) {
        if ($_SESSION['weggeclicked'] == 'false') {
            require_once('./webelementen/alert.php');
        }
    }
}
function return_anchor()
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] == "W3rkgev3r2938") {
            return '<a href="./wie_ben_ik.php">Wat voor persoon ben ik</a>';
        }
    }
}
?>