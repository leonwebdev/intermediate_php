<?php

// your code here




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Books you might like...</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div class="util">
    
</div>

<div id="header">

<nav>
    <img id="logo" src="images/logo.jpg" alt="logo" />
    <ul>
        <li class="current"><a href="index.php">home</a></li><li>
        <a href="index.php">books</a></li><li>
        <a href="index.php">about</a></li><li>
        <a href="index.php">contact</a></li>
    </ul>

</nav>
</div><!-- /#header -->


<div class="container">

    
    <div class="header_img">
        <img src="images/header.jpg" alt="header" />
    </div>
        <div class="search">

            <form action="index.php" method="get" autocomplete="off" novalidate>
                <input id="search" type="text" name="search" maxlength="255" />&nbsp;
                <input type="submit" value="search" />
                <div>
                    <ul id="live_search"></ul>
                </div>
            </form>

        </div><!-- /.search -->

        <hr class="clear" />

<div class="content">

<h1>Books</h1>


    <div class="categories">

        <h3>Categories</h3>

        <ul>
                                    <li><a href="index.php?genre_id=1">
                SF</a></li>
                                    <li><a href="index.php?genre_id=2">
                Horror</a></li>
                                    <li><a href="index.php?genre_id=4">
                Drama</a></li>
                                    <li><a href="index.php?genre_id=5">
                Politics</a></li>
                                    <li><a href="index.php?genre_id=6">
                Legal</a></li>
                                    <li><a href="index.php?genre_id=3">
                Literature</a></li>
                                </ul>
    </div> 

    <div class="shelf">

            
        <div class="book">

            <div class="img">
                <img src="images/covers/a_mixed_blessing.jpg" alt="A Mixed Blessing" />
            </div>
            <div class="details">
                <p><strong>A Mixed Blessing</strong><br />
                    by <a href="index.php?author_id=7">Sally Unger</a><br />
                    <span>Politics</span>, 450 pages, 2002, $12.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/the_carpet_baggers.jpg" alt="Carpet Baggers" />
            </div>
            <div class="details">
                <p><strong>Carpet Baggers</strong><br />
                    by <a href="index.php?author_id=5">Lee Sheldon</a><br />
                    <span>Drama</span>, 340 pages, 1977, $3.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/carrie.jpg" alt="Carrie" />
            </div>
            <div class="details">
                <p><strong>Carrie</strong><br />
                    by <a href="index.php?author_id=4">Stephen King</a><br />
                    <span>Horror</span>, 300 pages, 1975, $4.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/castle_of_adventure.jpg" alt="Castle of Adventure" />
            </div>
            <div class="details">
                <p><strong>Castle of Adventure</strong><br />
                    by <a href="index.php?author_id=22">Enid Blyton</a><br />
                    <span>SF</span>, 224 pages, 1944, $33.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/caves_of_steel.jpg" alt="Caves of Steel" />
            </div>
            <div class="details">
                <p><strong>Caves of Steel</strong><br />
                    by <a href="index.php?author_id=20">Isaac Asimov</a><br />
                    <span>SF</span>, 198 pages, 1957, $4.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/dune.jpg" alt="Dune" />
            </div>
            <div class="details">
                <p><strong>Dune</strong><br />
                    by <a href="index.php?author_id=1">Frank Herbert</a><br />
                    <span>SF</span>, 556 pages, 1975, $5.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/dune_messiah.jpg" alt="Dune Messiah" />
            </div>
            <div class="details">
                <p><strong>Dune Messiah</strong><br />
                    by <a href="index.php?author_id=1">Frank Herbert</a><br />
                    <span>SF</span>, 350 pages, 1977, $2.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/flash_forward.jpg" alt="Flash Forward" />
            </div>
            <div class="details">
                <p><strong>Flash Forward</strong><br />
                    by <a href="index.php?author_id=9">Robert Sawyer</a><br />
                    <span>SF</span>, 417 pages, 2006, $19.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/island.jpg" alt="Island" />
            </div>
            <div class="details">
                <p><strong>Island</strong><br />
                    by <a href="index.php?author_id=2">Richard Laymon</a><br />
                    <span>Horror</span>, 345 pages, 2003, $4.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/not_a_penny_more.jpg" alt="Not a Penny More" />
            </div>
            <div class="details">
                <p><strong>Not a Penny More</strong><br />
                    by <a href="index.php?author_id=6">Daniel Chambers</a><br />
                    <span>Politics</span>, 300 pages, 1980, $5.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/black_box.jpg" alt="The Black Box" />
            </div>
            <div class="details">
                <p><strong>The Black Box</strong><br />
                    by <a href="index.php?author_id=21">Michael Connelly</a><br />
                    <span>Literature</span>, 345 pages, 2012, $25.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/the_oath.jpg" alt="The Oath" />
            </div>
            <div class="details">
                <p><strong>The Oath</strong><br />
                    by <a href="index.php?author_id=8">John Lescroart</a><br />
                    <span>Legal</span>, 500 pages, 2008, $24.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

            
        <div class="book">

            <div class="img">
                <img src="images/covers/under_the_dome.jpg" alt="Under the Dome" />
            </div>
            <div class="details">
                <p><strong>Under the Dome</strong><br />
                    by <a href="index.php?author_id=4">Stephen King</a><br />
                    <span>Horror</span>, 1200 pages, 2010, $17.99</p>
                    <p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ves ...<p>
            </div>

        </div><!-- /.book -->

        
    </div><!-- /.shelf -->

</div><!-- /content -->

</div><!-- /.container -->

<div id="footer">

    <p><a href="index.php">Home</a> | 
        <a href="index.php">Books</a> | 
        <a href="index.php">About</a> | 
        <a href="index.php">Contact</a>

    <p>Content copyright by Big Book Site - all rights reserved.</p>

</div><!-- /footer -->

</body>
</html>


