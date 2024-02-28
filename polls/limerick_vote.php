<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "../../upload_dir/limerick_poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
    $yes = $yes + 1;
}
if ($vote == 1) {
    $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes . "||" . $no;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
    <tr>
        <td>Yes:</td>
        <td><img src="images/poll.png" width='<?php echo (100 * round($yes / ($no + $yes), 2)); ?>' height='20'>
            <?php echo (100 * round($yes / ($no + $yes), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>No:</td>
        <td><img src="images/poll.png" width='<?php echo (100 * round($no / ($no + $yes), 2)); ?>' height='20'>
            <?php echo (100 * round($no / ($no + $yes), 2)); ?>%
        </td>
    </tr>
</table>

<p>This poem is <b>not</b> computor generated. It was written
    by Jennifer Gottschalk (ie: not me)</p>