
<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
        <style>
            @import "compass";
            @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic);
            body {
                background: linear-gradient(rgba(30, 27, 38, 0.95), rgba(30, 27, 38, 0.95)), url("https://i.ibb.co/FDGqCmM/papers-co-ag74-interstellar-wide-space-film-movie-art-33-iphone6-wallpaper.jpg");
                background-position: center;
                background-size: cover;
                background-repeat: repeat;
            }
            .container {
                width: 100%;
                height: 150%;
                display: flex;
            }
            .cellphone-container {
                width: 375px;
                height: 700px;
                background-color: #1e1b26;
                margin: 60px auto 0 auto;
                box-shadow: 5px 5px 115px -14px black;
                border-radius: 4px;
            }
            .movie-img {
                width: 100%;
                height: 380px;

                background-position: center;
                background-repeat: no-repeat;
                background-size:cover;
                z-index: 111 !important;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, black), color-stop(0.35, black), color-stop(0.5, black), color-stop(0.65, black), color-stop(0.85, rgba(0, 0, 0, 0.6)), color-stop(1, rgba(0, 0, 0, 0)));
                position: relative;
            }
            .movie {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+39,1e1b26+53&0+38,1+55 */
                background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 38%, rgba(255, 255, 255, 0.06) 39%, rgba(30, 27, 38, 0.88) 53%, #1e1b26 55%);
                /* FF3.6-15 */
                background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 38%, rgba(255, 255, 255, 0.06) 39%, rgba(30, 27, 38, 0.88) 53%, #1e1b26 55%);
                /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 38%, rgba(255, 255, 255, 0.06) 39%, rgba(30, 27, 38, 0.88) 53%, #1e1b26 55%);
                /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#1e1b26',GradientType=0);
                /* IE6-9 */
                position: absolute;
                background-size: contain;
                background-size: cover;
                z-index: 1 !important;
                width: 375px;
                height: 660px;
                display: block;
                border-radius: 4px;
            }
            .text-movie-cont {
                padding: 0px 12px;
                text-align: justify;
            }
            .watch-btn {
                display: block;
                border: 1px solid #fe4141;
                border-radius: 5px;
                padding: 4px;
                width: 140px;
            }
            .watch-btn h3 i {
                font-size: 14px;
                margin-right: 2px;
                position: relative;
                float: left;
                line-height: 1;
            }
            .action-row {
                margin-top: 24px;
            }
            .summary-row {
                margin-top: 12px;
            }
            /* TYPOGRAPHY STARTS */
            /* Fonts */
            h1, h2, h3, h4, h5 {
                font-family: 'Montserrat', sans-serif;
                color: #e7e7e7;
                margin: 0px;
            }
            h1 {
                font-size: 36px;
                font-weight: 400;
            }
            h3 {
                font-size: 14px;
                font-weight: 400;
                color: #fe4141;
            }
            h5 {
                font-size: 12px;
                font-weight: 400;
            }
            .movie-gen, .movie-likes {
                margin: 0px;
                padding: 0px;
            }
            .movie-gen li, .movie-likes li {
                font-family: 'Open Sans', sans-serif;
                font-size: 12px;
                color: #818181;
                width: auto;
                display: block;
                float: left;
                margin-right: 6px;
                font-weight: 600;
            }
            .movie-likes {
                float: right;
            }
            .movie-likes li {
                color: #fe4141;
            }
            .movie-likes li:last-child {
                margin-right: 0px;
            }
            .movie-likes li i {
                font-size: 14px;
                margin-right: 4px;
                position: relative;
                float: left;
                line-height: 1;
            }
            .movie-details {
                font-family: 'Open Sans', sans-serif;
                font-size: 12px;
                font-weight: 300;
                color: #b4b4b4;
            }
            .movie-description {
                font-family: 'Open Sans', sans-serif;
                font-size: 12px;
                font-weight: 400;
                color: #9b9b9b;
                text-align: justify;
                line-height: 1.3;
            }
            .movie-director {
                font-family: 'Open Sans', sans-serif;
                font-size: 12px;
                font-weight: 300;
                color: #e7e7e7;
                font-style: italic;
            }
            /* TYPOGRAPHY ENDS */
            /** GRID STARTS **/
            .thegrid {
                margin: 0 auto;
            }
            .elements-distance, .movie-details, .movie-description, .movie-director {
                margin: 0px;
            }
            .mr-grid {
                width: 100%;
            }
            .mr-grid:before, .mr-grid:after {
                content: "";
                display: table;
            }
            .mr-grid:after {
                clear: both;
            }
            .mr-grid {
                *zoom: 1;
            }
            .col1, .col2, .col3, .col3rest, .col4, .col4rest, .col5, .col5rest, .col6, .col6rest {
                margin: 0% 0.5% 0.5% 0.5%;
                padding: 1%;
                float: left;
                display: block;
            }
            /* Columns match, minus margin sum. E.G. margin-left+margin-right=1%, col2=50%-1% - added padding:1%*/
            .col1 {
                width: 98%;
            }
            .col2 {
                width: 47%;
            }
            .col3 {
                width: 30.3333333333%;
            }
            .col4 {
                width: 22%;
            }
            .col5 {
                width: 17%;
            }
            .col6 {
                width: 13.6666666667%;
            }
            /* Columns match with their individual number. E.G. col3+col3rest=full width row */
            .col3rest {
                width: 63.6666666667%;
            }
            .col4rest {
                width: 72%;
            }
            .col5rest {
                width: 77%;
            }
            .col6rest {
                width: 80.3333333333%;
            }
            .dribbble-link {
                width: 50px;
                height: 50px;
                position: fixed;
                bottom: 15px;
                right: 15px;
                border-radius: 50px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p1.jpg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>The Super Mario Bros. Movie (2023)</</h1>
                                <ul class="movie-gen">
                                    <li>7.1/10 |</li>
                                    <li>1h 33m |</li>
                                    <li>Comedy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description"> While working underground to fix a water main, Brooklyn plumbers-and brothers-Mario and Luigi are
                                    transported down a mysterious pipe and wander into a magical new world. </p>
                            </div>
                        </div>
                        <div class="mr-grid director">
                            <div class="col1">
                                <p class="movie-director">Directed by - Aaron Horvath,</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p9.jpg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>The King of Blaze</h1>
                                <ul class="movie-gen">
                                    <li>7.5/10  |</li>
                                    <li>1h 49min  |</li>
                                    <li>Drama, Korean,</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">A story revolving around the Fire God, the Wind Goddess and the ensuing romance between them as they risk their lives for the sake of their homeland. </p>
                            </div>
                        </div>
                        <div class="mr-grid director-row">
                            <div class="col1">
                                <p class="movie-director">Directed by - Hsiu Lan Hu</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src="p8.jpeg"></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>X-Men 2000</h1>
                                <ul class="movie-gen">
                                    <li>7.3/10  |</li>
                                    <li>1h 44min  |</li>
                                    <li>Action, English</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">In a world where mutants (evolved super-powered humans) exist and are discriminated against, two groups form for an inevitable clash: the supremacist Brotherhood, and the pacifist X-Men. </p>
                            </div>
                        </div>
                        <div class="mr-grid director-row">
                            <div class="col1">
                                <p class="movie-director">Directed by - Bryan Singer</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH NOW</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p5.jpg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>Kung Fu Panda</h1>
                                <ul class="movie-gen">
                                    <li>7.6/10 |</li>
                                    <li>1h 32m |</li>
                                    <li>Animation , Chinese</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">To everyone's surprise, including his own, Po, an overweight, clumsy panda, is chosen as protector of the Valley of Peace. His suitability will soon be tested as the valley's arch-enemy is on his way. </p>
                            </div>
                        </div>
                        <div class="mr-grid director">
                            <div class="col1">
                                <p class="movie-director">Directed by - Mark Osborne</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p4.jpeg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>The Batman</h1>
                                <ul class="movie-gen">
                                    <li>7.8/10  |</li>
                                    <li>2h 56min  |</li>
                                    <li>Action, English,</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the city's hidden corruption and question his family's involvement.</p>
                            </div>
                        </div>
                        <div class="mr-grid director-row">
                            <div class="col1">
                                <p class="movie-director">Directed by - Matt Reeves</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH NOW</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p6.jpg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>Interstellar</h1>
                                <ul class="movie-gen">
                                    <li>7.4/10  |</li>
                                    <li>2h 49min  |</li>
                                    <li>Adventure, Drama, Sci-Fi,</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">A group of elderly people are giving interviews about having lived in a climate of crop blight and constant dust reminiscent of The Great 
                                    Depression of the 1930's. The first one seen is an elderly woman stating her father was a farmer, but did not start out that way. </p>
                            </div>
                        </div>
                        <div class="mr-grid director-row">
                            <div class="col1">
                                <p class="movie-director">Directed by - Matthew McConaughey</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p7.jpeg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>Avengers:Endgame</</h1>
                                <ul class="movie-gen">
                                    <li>8.4/10 |</li>
                                    <li>3h 1 m |</li>
                                    <li>Action , English</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.</p>
                            </div>
                        </div>
                        <div class="mr-grid director">
                            <div class="col1">
                                <p class="movie-director">Directed by - Anthony Russo,</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p8.jpg'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>Harry Potter & Deathly Hallows</</h1>
                                <ul class="movie-gen">
                                    <li>8.1/10  |</li>
                                    <li>2h 10min  |</li>
                                    <li>Adventure, English,</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description"> Harry, Ron, and Hermione search for Voldemort's remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts. </p>
                            </div>
                        </div>
                        <div class="mr-grid director-row">
                            <div class="col1">
                                <p class="movie-director">Directed by - David Yates</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="cellphone-container">    
                <div class="movie">       

                    <div class="movie-img"><img src='p2.png'></div>
                    <div class="text-movie-cont">
                        <div class="mr-grid">
                            <div class="col1">
                                <h1>Barbie</h1>
                                <ul class="movie-gen">
                                    <li>7.4/10  |</li>
                                    <li>1h 54min  |</li>
                                    <li>Fantasy ,English,</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mr-grid summary-row">
                            <div class="col2">
                                <h5>SUMMARY</h5>
                            </div>

                        </div>
                        <div class="mr-grid">
                            <div class="col1">
                                <p class="movie-description">Barbie suffers a crisis that leads her to question her world and her existence. </p>
                            </div>
                        </div>
                        <div class="mr-grid director-row">
                            <div class="col1">
                                <p class="movie-director">Directed by -Greta Gerwig</p>
                            </div>
                        </div>
                        <div class="mr-grid action-row">
                            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH</h3></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
