<?php
$dir    = './';
$dataFile = scandir($dir);
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


</head>

<body style="width: 80%;
    margin: auto;
    border: 1px solid grey;
    padding: 10px;
    margin-top: 20px;
    margin-bottom: 50px;">

    <div style="">
        <h2 style="width : 50%; float: left">Link : <?= $link ?></h2>
        <h2 style="width : 50%; float: left; text-align: right;">
            <a href="upload.php" style="text-decoration: none;
    color: green;">Upload</a>
        </h2>
    </div>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>link</th>
                <th>link coppy</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($dataFile); $i++) {
                ?>
                <tr>
                    <td><?= $dataFile[$i] ?></td>
                    <td>
                        <?php
                            $d = explode(".", $dataFile[$i]);
                            if (count($d) > 1) {
                                echo $d[count($d) - 1];
                            } else {
                                echo "";
                            }

                            ?>
                    </td>
                    <td><a href="<?php echo $link .  $dataFile[$i]; ?>">down</a></td>
                    <td onclick="myFunction(this)"><?= $link .  $dataFile[$i] ?> </td>
                    <td>
                        <?= date("d/m/Y - H:i:s",  filemtime($dataFile[$i])) ?>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                columnDefs: [{
                    targets: -1,
                    className: 'dt-body-left',

                }],
                paging: true,
                "pageLength": 50
                // "pagingType": "full_numbers"
            });
        });

        function myFunction(t) {
            /* Get the text field */
            var copyText = t;
            // document.execCommand("copy", true, copyText.textContent);
            window.prompt("Copy to clipboard: Ctrl+C, Enter", copyText.textContent);
        }
    </script>
</body>

</html>
