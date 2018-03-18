<?php
    date_default_timezone_set('Europe/Sofia');
    if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
    } else {
        $ym = date('Y-m');
    }

    $timestamp = strtotime($ym, "-01");
    if ($timestamp === false){
        $timestamp = time();
    }
    $today = date('Y-m-d', time());

    $html_title = date('Y / m', $timestamp);

    $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
    $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

    $day_count = date('t', $timestamp);

    $str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

    $weeks = array();
    $week = '';


    $week .= str_repeat('<td></td>', $str);

    for ( $day = 1; $day <= $day_count; $day++, $str++) {
        $date = $ym.'-'.$day;
        if ($today == $date){
            $week .= '<td class="today">'.$day;
        } else {
            $week .= '<td><a href="add_event.php?date= '. $date.'" >'.$day;
        }
        $week .='</a></td>';

        if ($str % 7 == 6 || $day == $day_count){

            if ($day == $day_count) {
                $week .= str_repeat('<td></td>', 6 - ($str % 7));
            }

            $weeks [] = '<tr>'.$week.'</tr>';

            $week = '';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Calendar</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <link rel="stylesheet" href="includes/style.css">
    <script src="includes/bootstrap.min.js"></script> 
</head>
<body>
    <div class="wrapper calendar">
        <div class="box">
            <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a><?php echo $html_title; ?><a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
            
            <table border=1 class="table  table-dark">
                <tr>
                    <th>S</th>
                    <th>M</th>
                    <th>T</th>
                    <th>T</th>
                    <th>W</th>
                    <th>F</th>
                    <th>S</th>
                </tr>

                <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    }
                ?>
            </table>
        </div>

        <div class="container buttons">
            <a href= "eventlist.php" class="btn btn-success"> Events</a>
            <a href="logout.php" name="logout" class="btn btn-primary"/>Log Out</a>
        </div>
    </div>
</body>
</html>