<?php

function let_login($con, $parm, $name) {
    //parm - поле по которому выбираем, тип того, что ввёл юзверь
    $sql = "SELECT p.hash FROM people p WHERE p.$parm='$name'";
    echo $sql;
    $query = mysqli_query($con, $sql);
    $r = mysqli_fetch_row($query);
    if ($r != 0) {
        return $r[0];
    } else {
        return 'end';
    }
}

function get_nameold($con, $fb, $parm) {
    //$sql = "select p.name as 'name', p.surname as 'surname' from people p where p.hash='$fb'";
    $sql = "select p.$parm from people p where p.hash='$fb'";
    echo '<br>' . $sql;
    $query = mysqli_query($con, $sql);
    $r = mysqli_fetch_row($query);
    return $r[0];
}

function is_email($email) {
    if (!preg_match('/^[A-Za-z0-9!#$%&\'*+-\/=?^_`{|}~]+@[A-Za-z0-9- ]+(\.[AZa-z0-9-]+)+[A-Za-z]$/', $email)) {
        return false;
    } else {
        return true;
    }
}

function set_hash($con) {
    for ($i = 1; $i < 101; $i++) {
        $nim = rand(1111111111, 9999999999);
        $sql = 'UPDATE realestate.people p SET p.`phonenumb`="8' . $nim . '" WHERE p.id =' . "'$i'";
        $query = mysqli_query($con, $sql);
    }

    echo mysqli_affected_rows($con);
}

function get_name($con, $fb) {
    $sql = "select * from people p where p.hash='$fb'";
    $query = mysqli_query($con, $sql);
    $rows = mysqli_fetch_assoc($query);
    return $rows;
}

function set_man($name, $surname, $middlename, $filialid, $passport, $email, $pass_hash, $phonenumb) {
    $sql = "INSERT IGNORE INTO people (name, surname, `middle-name`, `filial-id`, passport, email, hash, phonenumb) VALUES ('$name', '$surname', '$middlename', '$filialid', '$passport', '$email', '$pass_hash', '$phonenumb')";
    $query = mysqli_query($con, $sql);
    return mysqli_affected_rows($query);
}

function select_fil($con) {
    if (isset($_REQUEST["filialid"]))
        $name = $_REQUEST["filialid"];
    else {
        $name = '0';
    }
    $sql = "SELECT f.phone from filials f";
    //echo '<br>s=' . $sql;
    $query = mysqli_query($con, $sql);
    echo  "<select name='filialid'>";
    while ($r = mysqli_fetch_assoc($query)) {
        if ($r["phone"] == $name)
            $s = 'selected';
        else {
            $s = '';
        }
        echo "<option value =" . $r["phone"] . " $s>" . $r["phone"] . "</option>";
    }
    echo '</select>';
}

function select_id_fil($con, $da) {
    $sql = "SELECT f.id from filials f WHERE f.phone='".$da."'";
    $query = mysqli_query($con, $sql);
    $r = mysqli_fetch_row($query);
    return $r[0];
}

?>