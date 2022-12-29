<html>
    <head>
        <title> Pemrosesan File</title>
        <html>
            <head>
                <title>download</title>
            </head>
            <body>
                <h2> Penggunaan download</h2>
                Click <a href="download.php?file=include.php">here</a> untuk download file
            </body>
        </html>
        <?php
        header("Content-Type:application/zip");
        header("Content-Lenght:".filesize($file));
        header("Content-Disposition: attachment;filename=$file");
        readfile($file);
        ?>
    </head>
</html>