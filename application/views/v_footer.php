<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Contoh Website</title>
     <style>
        .comment-box textarea {
            color: #1100ff; 
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <footer>
            <a href='http://created.by.desi.salsa'>Comment</a>

            <!-- Comment -->
            <div class="comment-box">
                <?php
                // Tampilkan komentar yang telah disubmit
                if (isset($_POST['submit_comment'])) {
                    $komentar = $_POST['komentar'];
                    echo "<p>$komentar</p>";
                }
                ?>

                <!-- Form untuk memasukkan komentar -->
                <form method="POST" action="">
                    <textarea name="komentar" placeholder="Add your comments"></textarea>
                    <button type="submit" name="submit_comment">Post a comment</button>
                </form>
            </div>
        </footer>
    </div>
</body>
</html>
