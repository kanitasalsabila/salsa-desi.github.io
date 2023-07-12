<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Final Project Desi & Kanita</title>
     <link rel="stylesheet" type="text/css" href="http://localhost/project-web/assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header><td bgcolor="#98f0ff"></td>
            <hgroup>
                <h1>Sleep Well Journey</h1>
                <h4>___________________________________________________________________________________________________</h4>
            </hgroup>
                <nav>
                <ul>
                    <li><a href="<?php echo base_url()."index.php/web" ?>" class="<?php echo $active_menu == 'home' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="<?php echo base_url()."index.php/web/about" ?>" class="<?php echo $active_menu == 'about' ? 'active' : ''; ?>">Reading List</a></li>
                    <li><a href="<?php echo base_url()."index.php/web/music" ?>" class="<?php echo $active_menu == 'music' ? 'active' : ''; ?>">Music for You</a></li>
                </ul>

                </nav>
    <div class="clear"></div>
        </header>
