<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <title>Document</title>
</head>

<body>
    <nav id="navbar" class="navbar">
        <?php
            include 'nav.php';
        ?>
    </nav>
    <main>
        <section id="Welcome">
            <div class="welcome-container">
                <div class="mini-description">
                    <h2>nous rassemblons les passionnés de technologie</h2>
                    <p>Micro Club est le premier club scientifique fondé en Algérie, le 5 mars 1985.
                        Nous nous concentrons sur l'informatique et le domaine informatique alors que nous travaillons à
                        la vulgarisation auprès de la communauté étudiante.</p>
                </div>
            </div>
        </section>
        <section id="events-brief-show" class="events-brief-show">
            <div class="events-brief-show-sub-sec">
                <h2>
                    Nos Evènements
                </h2>
                <p>
                    Nos événements les plus récents
                </p>
                <div class="event-slides">
                    <div class="event-slide">
                        <div class="img-container">
                            <img src="images/Events/AGC.jpg" alt="">
                        </div>
                        <div class="brief-info">
                            <h2>alerian game challenge</h2>
                            <p>L'un de nos événements les plus importants de l'année où nous réunissons les amateurs de
                                jeux vidéo d'algérie</p>
                        </div>
                    </div>
                    <div class="event-slide">
                        <div class="img-container">
                            <img src="images/Events/WomenDay.png" alt="">
                        </div>
                        <div class="brief-info">
                            <h2>8 Mars</h2>
                            <p>Nous célébrons ce jour spécial sur notre chemin</p>
                        </div>
                    </div>
                    <div class="event-slide">
                        <div class="img-container">
                            <img src="images/Events/Anniversary.png" alt="">
                        </div>
                        <div class="brief-info">
                            <h2>MC Anniversary</h2>
                            <p>chaque année le 5 mars nous fêtons l'anniversaire de notre club, cette année nous avons
                                fêté les 48 ans du club</p>
                        </div>
                    </div>
                    <div class="event-slide">
                        <div class="img-container">
                            <img src="images/Events/MCTF.png" alt="">
                        </div>
                        <div class="brief-info">
                            <h2>MC Capture the flag</h2>
                            <p>l'un de nos événements les plus importants, où chaque informaticien est invité à
                                participer</p>
                        </div>
                    </div>
                    <div class="event-slide">
                        <div class="img-container">
                            <img src="images/Events/IOC.png" alt="">
                        </div>
                        <div class="brief-info">
                            <h2>Impact Of Code</h2>
                            <p>événement d'une semaine qui consiste en des défis algorithmiques enveloppés dans une
                                histoire captivanteF</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Articles">
            <div class="Articles-container">
                <h2>Articles</h2>
                <div class="Articles-wrapper">
                    <div class="Article-One">
                        <h2 class="A-1-H2">How video games are made</h2>
                        <p class="A-1-P"> <span class="first-letter">F</span>rom role-playing games, shooters,
                            first-person shooters
                            to platformers, videos games are one
                            of the only mediums that allow you not only to watch but to interact and exist within a
                            whole new world. That’s why many people of different ages consider video games as their
                            favorite pass-time.
                        </p>
                        <p class="A-1-P">
                            For the past few years, the video game industry saw the release of many new video games, So
                            it’s easy to think that Developing a game isn’t a long process and that games are no more
                            than simply electronic toys made with some clicks. But in the reality developing a game is a
                            very long process that follows specific steps.
                        </p>
                        <p class="A-1-P">
                            This article will answer the questions that are asked in order to understand What Game
                            development is and What process it follows.<span class="rm"
                                onclick="document.getElementById('Artical-One-content').style.display='flex'">Read-more</span>
                        </p>
                    </div>
                    <div class="Article-Two">
                        <h2 class="A-2-H2">Gaming industry</h2>
                        <p class="A-2-P"> <span class="first-letter">N</span> owadays gaming has become a viable form of
                            entertainment for players from all
                            backgrounds and
                            ages. The improvements to the hardware such as sound cards, graphics, and faster processors
                            have meant a related growth and development of the gaming industry as well As a result,
                            modern games have become very demanding.
                        </p>
                        <h3 class="A-2-H3">What is the gaming industry?</h3>
                        <p class="A-2-P">The video game industry is the industry involved in the development, marketing,
                            and
                            monetization of video games. It encompasses dozens of job disciplines and its component
                            parts employ thousands of people worldwide. The gaming industry has grown from focused
                            markets to the mainstream in the recent years.<span class="rm" class="rm"
                                onclick="document.getElementById('Artical-Two-content').style.display='block'">Read-more</span>
                        </p>
                    </div>
                </div>
                <div id="Artical-One-content" class="Artical-One-content">
                    <div class="scroll-div">
                        <div class="exit-container">
                            <a onclick="document.getElementById('Artical-One-content').style.display='none'"
                                class="A-exit">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                        <div class="Article-One-content-container">
                            <h2 class="A-1-H2">How video games are made</h2>
                            <p class="A-1-P"> <span class="first-letter">F</span>rom role-playing games, shooters,
                                first-person shooters
                                to platformers, videos games are one
                                of the only mediums that allow you not only to watch but to interact and exist within a
                                whole new world. That’s why many people of different ages consider video games as their
                                favorite pass-time.
                            </p>
                            <div class="article-One-img-container">
                                <img src="images/article-One-images/1.jpeg" alt="" height="460px" width="692px">
                            </div>
                            <p class="A-1-P">
                                For the past few years, the video game industry saw the release of many new video games,
                                So
                                it’s easy to think that Developing a game isn’t a long process and that games are no
                                more
                                than simply electronic toys made with some clicks. But in the reality developing a game
                                is a
                                very long process that follows specific steps.
                            </p>
                            <p class="A-1-P">
                                This article will answer the questions that are asked in order to understand What Game
                                development is and What process it follows.
                            </p>
                            <h3 class="A-1-H3">What is Game development?</h3>
                            <p class="A-1-P">
                                It’s taking an idea or a concept for a game and developing, programming, rendering,
                                testing, until having a full-fledged game.
                            </p>
                            <p class="A-1-P">
                                In order to do so, a general process is followed, and it is typically divided into three
                                distinct stages: pre-production, production, and post-production.
                            </p>
                            <h3 class="A-1-H3">The Pre-Production</h3>
                            <p class="A-1-P">
                                Also known as the design phase, is the stage that defines what the game is about, why it
                                should be made, and what is going to take in order to make it.
                            </p>
                            <p class="A-1-P">
                                in a professional environment, pre-production can last from one week to more than a year
                                depending on the size and complexity of the project, but it shouldn’t be more than 20%
                                of the total estimated time of the game development.
                            </p>
                            <p class="A-1-P">
                                The information gathered during this stage forms the basis of the Game Design Document.
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP">The Game Design Document (GDD):</h3>
                            <p class="A-1-P">
                                it’s the North star of every game. a GDD is a living document that fully expresses the
                                vision for the game including: the idea or concept, the genre, story and characters,
                                Core games mechanics, gameplay, level world design, art or sketches, and the
                                monetization strategy.
                            </p>
                            <p class="A-1-P">
                                It is also made so that each team member understands its roles and maps out a production
                                plan.
                            </p>
                            <p class="A-1-P">
                                The GDD is continuously updated and refined throughout production. This could be due to
                                technical or financial restraints, or simply realizing that things just don’t look, play
                                or work as well as planned.
                            </p>
                            <p class="A-1-P">
                                Big companies such as EA, Microsoft, and Sony, are highly process-driven and require
                                heavy documentation. it’s a big part of how they achieved their success.
                                To sum up; a GDD keeps the work organized, helps identify potential risks, helps pitch
                                and finance the game, and finally, will help with marketing the product once it’s ready
                                to be released.
                            </p>
                            <h3 class="A-1-H3">The prototype:</h3>
                            <p class="A-1-P A-1-P-SP">
                                “ While ideas, psychology, theories, and other deep thinking metaphors are important,
                                you can only design so far in your head or on paper. Most game ideas need to be touched,
                                felt, played, and tested sooner rather than later.”
                            </p>
                            <div class="article-One-img-container">
                                <img src="images/article-One-images/2.png" alt="" width="692px" height="240">
                                <figcaption>A game prototype</figcaption>
                            </div>
                            <p class="A-1-P">
                                A video game prototype is a raw test that checks the functionality, user experience,
                                gameplay, mechanics, and art direction. It is usually done on paper before time and
                                money are spent on a digital version, and should unearth any potential difficulties or
                                challenges that could affect the gameplay.
                                Free tools are a great way to adopt this approach, so they’re used enthusiastically.

                            </p>
                            <p class="A-1-P">
                                Tools like Unity and Blender -and many others-, give placeholder assets that are used
                                for things like weapons and props, and if approved, they’re replaced with final,
                                high-quality versions later on. They’re generally pretty basic shapes, but can also be a
                                little more advanced, and can be purchased or found for free online within game
                                development software.
                            </p>
                            <div class="article-One-img-container">
                                <img src="images/article-One-images/3.jpg" alt="" width="692px" height="418px">
                                <figcaption>Unity 3D</figcaption>
                            </div>
                            <div class="article-One-img-container">
                                <img src="images/article-One-images/4.jpeg" alt="" width="692px" height="410px">
                                <figcaption>Blender</figcaption>
                            </div>
                            <div class="article-One-img-container">
                                <img src="images/article-One-images/5.jpg" alt="" width="692px" height="364px">
                                <figcaption>Unity Assets Store</figcaption>
                            </div>
                            <p class="A-1-P">
                                Even if the prototype doesn’t look completely polished, it will still help to learn
                                something new about the game that wants to be made.
                            </p>
                            <p class="A-1-P">
                                The most important thing to remember in prototyping is: <b>knowing what you are trying
                                    to
                                    prove.</b> One tool won’t be able to help with creating everything needed ,but
                                running short
                                prototypes can be an invaluable way to test your big ideas for each separate element.
                            </p>
                            <p class="A-1-P">
                                For more details you can check these links :
                            </p>
                            <a class="A-1-links" href="https://balsamiq.com/company/news/game-designers/">
                                <p class="A-1-P">https://balsamiq.com/company/news/game-designers/</p>
                            </a>
                            <a class="A-1-links" href="https://youtu.be/Ef2ClQoyu1o">
                                <p class="A-1-P">https://youtu.be/Ef2ClQoyu1o</p>
                            </a>
                            <h3 class="A-1-H3 A-1-H3-SP">The Production:</h3>
                            <p class="A-1-P">
                                The production of a video game is the stage where all the main work takes place, and it
                                can take quite a long time. It requires artists to develop the game assets programmer
                                for writing the source code, music, sounds and effects, and other various levels within
                                the game. As the game is being developed the publisher might set need-to-be-met
                                milestones that will be used to track development and progress:
                            </p>
                            <ul>
                                <li>
                                    <p class="A-1-P"><b>Prototype:</b> (as mentioned above) the first test of the game,
                                        is
                                        typically done in the pre-production stage and usually on paper.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>First playable:</b> is the first digital version of the game,
                                        with many
                                        of the main elements of gameplay included. This stage gives the publisher a
                                        better idea of what the actual game will look like.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Vertical slice:</b> a full sample of the game that includes all
                                        of the
                                        features and which can be played by potential publishers. This is often used to
                                        pitch the game to investors. A vertical slice maybe a few minutes long or up to
                                        a full half-hour.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Pre-alpha:</b> is where most of the content is developed,
                                        Features are
                                        often added and cut here before the game becomes complete.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Alpha:</b> all of the key features are included at this stage
                                        and the
                                        game is fully playable. Of course, additions can still be made, and the game can
                                        be tweaked and revised if necessary. after being tested by the QA testers to
                                        make sure everything is running seamlessly.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Beta:</b> At this point, all the content and assets are
                                        integrated, and
                                        the team should be focused on optimization rather than adding new functions or
                                        features.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Code Release:</b> all bugs have been corrected and the game is
                                        ready
                                        for review by the console manufacturers.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Gold Master:</b> this is the final version of the game that is
                                        released
                                        to the public.
                                    </p>
                                </li>
                            </ul>
                            <p class="A-1-P">
                                Now many developers choose to develop a game using a game development engine that can
                                make the process of creating a game much easier and enable developers to reuse lots of
                                functionality
                            </p>
                            <p class="A-1-P">
                                Some Game Engines have a very steep learning curve such as <b>CryEngine</b> or <b>Unreal
                                    Engine.</b>Yet, other tools are very accessible to beginners, and some do not even
                                need you to be
                                able to write code to create your game, <b>e.g., Construct 2</b>. The Unity Game Engine
                                ranges
                                somewhere in the middle, while it is beginner-friendly, some popular and commercial
                                games have been built using <b>Unity.</b>
                                The <b>BuildBox engine</b> is basically for developing hypercasual games.
                            </p>
                            <p class="A-1-P">
                                In game development, many roles are needed to help the process works smoothly. The most
                                common positions are:
                            </p>
                            <ul>
                                <li>
                                    <p class="A-1-P"><b>Project manager:</b> project manager makes sure that the game
                                        development process runs smoothly, they are the center of communication between
                                        the dev design and teams and executives
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">You can find more about project manager here**:**
                                        <a class="A-1-links" href="https://intogames.org/role/project-manager-games">
                                            <p class="A-1-P">https://intogames.org/role/project-manager-games</p>
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Game developers / Programmers:</b> their work includes helping
                                        to turn
                                        the design concept into code to create a fully playable game they’re software
                                        engineers and computer scientists with a strong programming background with
                                        creativity and some math skills
                                        Find more here:
                                        <a class="A-1-links"
                                            href="https://www.cgspectrum.com/career-pathways/game-programmer">
                                            <p class="A-1-P">https://www.cgspectrum.com/career-pathways/game-programmer
                                            </p>
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Game designers:</b> A game designer is the creative driver of
                                        the game,
                                        and generally a cross between a writer and an artist, with some knowledge of
                                        programming.
                                        <a class="A-1-links" href="https://en.wikipedia.org/wiki/Video_game_design">
                                            <p class="A-1-P">
                                                https://en.wikipedia.org/wiki/Video_game_design
                                            </p>
                                        </a>
                                </li>
                                <li>
                                    <p class="A-1-P"><b>Game artists:</b> Game artists can include concept artists,
                                        animators, 3D modelers, and
                                        FX artists. This group is responsible for bringing color, movement, and life to
                                        the
                                        game.
                                        Find more about game artists:
                                        <a class="A-1-links"
                                            href="https://www.techwibe.com/the-role-of-a-game-artist-in-the-gamedev-industry/">
                                            <p class="A-1-P">
                                                https://www.techwibe.com/the-role-of-a-game-artist-in-the-gamedev-industry/
                                            </p>
                                        </a>
                                    </p>
                                </li>
                                <div class="article-One-img-container">
                                    <img src="images/article-One-images/6.png" alt="" width="692px" height="388px">
                                    <figcaption>Character sketching for the game</figcaption>
                                </div>
                                <li>
                                    <p class="A-1-P">
                                        <b>Audio engineers/sound designers/composers:</b> The sound experts develop
                                        realistic sound effects, record voice-overs/dialogue between characters, and
                                        create soundtracks that set the mood for players, adding suspense or audio
                                        cues. To know more click here:
                                    </p>
                                    <a
                                        href="https://www.screenskills.com/job-profiles/browse/games/audio/sound-designer-games/">
                                        <p class="A-1-P">
                                            https://www.screenskills.com/job-profiles/browse/games/audio/sound-designer-games/
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>video game testers:</b> they are also known for QA (quality assurance ) they
                                        test
                                        the game, looks for bugs, and ensure that the game runs smoothly and
                                        instructions are clear for the player, they report errors to the dev team to fix
                                        them.
                                    </p>
                                    <p class="A-1-P">
                                        find more here:
                                    </p>
                                    <a href="https://www.careerexplorer.com/careers/games-tester/">
                                        <p class="A-1-P">
                                            https://www.careerexplorer.com/careers/games-tester/
                                        </p>
                                    </a>
                                </li>
                            </ul>
                            <p class="A-1-P">
                                and yet there are more roles such as quest designers, writers, combat designers,
                                translators …
                            <p class="A-1-P">
                                different roles of game dev:
                                <a href="">
                                    <p class="A-1-P">
                                        here
                                    </p>
                                </a>
                            </p>

                            </p>
                            <h3 class="A-1-H3">The Post-Production:</h3>
                            <p class="A-1-P">
                                different roles of game dev: here
                            </p>
                            <h3 class="A-1-H3">Conclusion:</h3>
                            <p class="A-1-P">
                                It is one of the most exciting times for any gaming studio. . Years of hard work has
                                finally paid off, and video game sales are (hopefully) pouring in. But once production
                                is complete and the game has shipped, the development process continues with some team
                                members being relegated to maintenance fixing bugs being reported by public gamers.
                            </p>
                            <p class="A-1-P">
                                Game development is a competitive skill and requires a lot of time which makes it
                                overwhelming for newbies who want to develop their first game.
                                if this is your case, here are some of our favorite game development tips that we hope
                                will help you start your quest to become a really good developer:
                            </p>
                            <ul>
                                <li>
                                    <p class="A-1-P">
                                        <b>create a plan and Get organized</b> Whether you’re a solo dev or part of a
                                        large
                                        team, time management and organization are essential for keeping larger game
                                        projects on track.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Design with users in mind:</b> This includes information about your players
                                        and the
                                        information about the platform they will use
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Play, test, and code side-by-side:</b> When you are able to real-time
                                        multitask on
                                        your game, you will begin to know what it is like to be a pro game developer.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Never stop learning:</b> In game development, you can never become an
                                        all-conquering
                                        expert without adopting a forever learning attitude, developers just cannot take
                                        the risk of slowing down in their learning curve. and participating in
                                        competitions for this kind of activities such as Our upcoming one “AGC” , can be
                                        a great opportunity to put your hand into work and experiment.
                                    </p>
                                </li>
                            </ul>
                            <p class="A-1-P">
                                Additional Resources :
                            </p>
                            <a class="A-1-links" href="ttps://www.cgspectrum.com/blog/game-development-process">
                                <p class="A-1-P">
                                    https://www.cgspectrum.com/blog/game-development-process
                                </p>
                            </a>
                            <a class="A-1-links" href="https://youtu.be/SicZcaa-pRk">
                                <p class="A-1-P">
                                    https://youtu.be/SicZcaa-pRk
                                </p>
                            </a>
                            <a class="A-1-links" href="https://www.gamedesigning.org/video-game-development/">
                                <p class="A-1-P">
                                    https://www.gamedesigning.org/video-game-development/
                                </p>
                            </a>
                            <a class="A-1-links" href="https://en.wikipedia.org/wiki/2021_in_video_games">
                                <p class="A-1-P">
                                    https://en.wikipedia.org/wiki/2021_in_video_games
                                </p>
                            </a>
                            <a class="A-1-links" href="https://gamegavel.com/how-video-games-are-developed/">
                                <p class="A-1-P">
                                    https://gamegavel.com/how-video-games-are-developed/
                                </p>
                            </a>
                            <a class="A-1-links" href="https://www.youtube.com/watch?v=PYNftj1DNKc">
                                <p class="A-1-P">
                                    https://www.youtube.com/watch?v=PYNftj1DNKc
                                </p>
                            </a>
                            <a class="A-1-links" href="https://gamegavel.com/how-video-games-are-developed/">
                                <p class="A-1-P">
                                    https://gamegavel.com/how-video-games-are-developed/
                                </p>
                            </a>
                            <a class="A-1-links" href="https://www.youtube.com/watch?v=SicZcaa-pRk">
                                <p class="A-1-P">
                                    https://www.youtube.com/watch?v=SicZcaa-pRk
                                </p>
                            </a>
                            <a class="A-1-links" href="https://www.youtube.com/watch?v=ZGGMmguIZD0">
                                <p class="A-1-P">
                                    https://www.youtube.com/watch?v=ZGGMmguIZD0
                                </p>
                            </a>
                            <h3 class="A-1-H3">Credits:</h3>
                            <ul>
                                <li>
                                    <p class="A-1-P">
                                        <b>Touaa Maria</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Boutaleb Ramy</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Merouani Souha</b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="Artical-Two-content" class="Artical-One-content">
                    <div class="scroll-div">
                        <div class="exit-container">
                            <a onclick="document.getElementById('Artical-Two-content').style.display='none'"
                                class="A-exit">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                        <div class="Article-Two-content-container">
                            <h2 class="A-1-H2">Gaming Industry</h2>
                            <p class="A-1-P"> <span class="first-letter">N</span>owadays gaming has become a viable form
                                of entertainment for players from all backgrounds and ages. The improvements to the
                                hardware such as sound cards, graphics, and faster processors have meant a related
                                growth and development of the gaming industry as well As a result, modern games have
                                become very demanding.
                            </p>
                            <div class="article-One-img-container">
                                <img src="images/article-Two-images/First.jpeg" alt="" height="460px" width="692px">
                            </div>
                            <h3 class="A-1-H3">What is the gaming industry?</h3>
                            <p class="A-1-P">
                                The video game industry is the industry involved in the development, marketing, and
                                monetization of video games. It encompasses dozens of job disciplines and its component
                                parts employ thousands of people worldwide. The gaming industry has grown from focused
                                markets to the mainstream in the recent years.
                            </p>
                            <h3 class="A-1-H3">The importance of the gaming industry</h3>
                            <p class="A-1-P">
                                The gaming industry is arguably one of the most important and innovative sectors in tech
                                today. Its importance to culture, social networking, and entertainment cannot be
                                understated.
                            </p>
                            <h3 class="A-1-H3">Structure of the video game industry</h3>
                            <p class="A-1-P">
                                The gaming industry roughly splits into 3 main subgroups: console, PC, and Mobile.
                                knowing these 3 different segments is vital because they represent the are of
                                concentration and specialty of different video game manufacturers.
                            </p>
                            <div class="article-One-img-container">
                                <img src="images/article-Two-images/2.png" alt="" height="460px" width="692px">
                            </div>
                            <h3 class="A-1-H3">Consoles</h3>

                            <p class="A-1-P">
                                Console games are a type of video game that has interactive multimedia software, that
                                uses a video game console to provide an interactive multimedia experience.<br>
                                They are most popular because of their higher profit margins and less diversity in game
                                types.<br>
                                Being the largest segment of the video game industry they are contested by fierce
                                competition by the major players in the industry.<br>

                            </p>
                            <p class="A-1-P">
                                Nintendo, Microsoft, and Sony, are the controllers of the industry, and stakes are high
                                since the software and hardware levels are controlled in an oligopolistic market
                                structure the examples in this segment are Xbox 360 and Wii by Microsoft and Nintendo
                                respectively.
                            </p>
                            <p class="A-1-P">
                                You can check this link for some static details:
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP">Mobile</h3>
                            <p class="A-1-P">
                                Mobile gaming has become the driving force behind the rapid growth of the global video
                                gaming market.
                            </p>
                            <p class="A-1-P">
                                As a highly fluid system, it was able to morph from applications-only gaming to in-app
                                game experiences like those from WeChat, and users are progressively incorporating these
                                games into their daily routines. These games work as they are fast and easy.
                            </p>
                            <p class="A-1-P">
                                Wordle is a great example: it simply asks players to guess a 5-letter long word.<br>
                                The game launched in October and by the end of January, there were more than 45m
                                players,
                                resulting in an acquisition at an undisclosed price by the New York Times just last
                                week.
                            </p>
                            <p class="A-1-P">
                                When talking about big players in the video gaming smartphone subsector we cannot forget
                                to mention Activision Blizzard and its incredibly famous game Candy Crush Saga, which
                                contributed to bringing the number of cellphone game players to over 2.2bn.
                            </p>
                            <h3 class="A-1-H3">PC</h3>
                            <p class="A-1-P">
                                Last but not least is the PC Games. PC games or personal computer games are played on a
                                computer through keyboards, mouse, a joystick or a gamepad. These games are
                                characterized by a lack of a central controlling authority and a greater capacity for
                                input, processing, and output. PC games lost the market to consoles briefly in the
                                mid-90s but resurfaced in the mid-2000s thanks to digital distribution.
                            </p>
                            <p class="A-1-P">
                                The Pc Game segment is free because of the universal knowledge of the computer platform.
                                This makes the manufacturers of PC games be imaginative programmers who are not
                                restricted by any kind of manufacturer licensing fees.<br>The development fees are
                                relatively lower, thus making this segment open to risk-takers. This analysis of the
                                structure enables us to understand the economics behind the gaming industry and the
                                battle for supremacy in the industry.
                            </p>
                            <h3 class="A-1-H3">The Game industry’s Main Goal</h3>
                            <p class="A-1-P">
                                game companies have an objective which is To get closer to Their gamers who represent
                                the key part of the value chain.
                            </p>
                            <p class="A-1-P">
                                and one of the ways to get there is to build a unified front-line that will give them
                                support, that will listen to them, and will entertain them. That’s what the Consumer
                                Relationship Centre is there for.
                            </p>
                            <p class="A-1-P">
                                In our modern era time goes even faster than it used to. Gamers want quick feedback and
                                they want an efficient reply, and then what companies try to bring on top of that is a
                                shared passion for video games.
                            </p>
                            <p class="A-1-P">
                                To share their commitment and passion with their gamers, the game companies set
                                themselves these 4 objectives :
                            </p>
                            <ul>
                                <li>
                                    <p class="A-1-P">
                                        Conducting “games of skill” which includes all such games where there is a
                                        preponderance of skill over chance, including where the skill relates to
                                        strategizing the manner of placing wagers or placing bets, or where the skill
                                        lies in team selection or selection of virtual stocks based on analyses, or
                                        where the skill relates to how the moves are made, whether through the
                                        deployment of physical or mental skill and acumen.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Conducting skill games programs like Chess, Sudoku, Quizzes, Binary Options,
                                        Bridge, Poker, Rummy, Nap, Spades, Auction, Solitaire, virtual Golf, virtual
                                        racing games including virtual horse racing, virtual car racing, etc.; virtual
                                        Sports including virtual Soccer, virtual Cricket, virtual Archery, virtual
                                        snooker/bridge/pool, virtual fighting, virtual wrestling, virtual boxing,
                                        virtual combat games, virtual adventure games, virtual mystery and detective
                                        games, virtual stock/monopoly games, virtual team selection games, virtual
                                        sports fantasy league games.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Offering “games of skill” on the website, mobile platform, television, or any
                                        other online media and also to earn revenue using advertising or by taking a
                                        percentage of winnings of gameplay or charging a fixed fee for membership or for
                                        downloading a game.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Carrying on the business of buying, selling, reselling, importing, exporting,
                                        transporting, storing, developing, promoting, marketing or supplying, trading,
                                        dealing in any manner whatsoever in all types of goods related to games on
                                        retail as well as on wholesale basis in India or elsewhere.
                                    </p>
                                </li>
                            </ul>
                            <h3 class="A-1-H3 A-1-H3-SP">The Growth of the Game industry</h3>
                            <div class="article-One-img-container">
                                <img src="images/article-Two-images/3.jpeg" alt="" width="692px" height="240">
                                <figcaption>A game prototype</figcaption>
                            </div>
                            <p class="A-1-P">
                                The gaming market is growing with the increasing per capita income, growing interest,
                                and the rising number of dual-income households, augmenting the transformation of the
                                global market.
                            </p>
                            <p class="A-1-P">
                                This growth is due to :
                            </p>
                            <ul>
                                <li>
                                    <p class="A-1-P">
                                        The continuous technological advancements in the gaming industry that are
                                        significantly propelling the industry’s growth, and enhancing the way games are
                                        created and improving the overall gaming experience of the users.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Game developers across emerging economies that are continually striving to
                                        enhance the gaming experience by launching and rewriting codes for diverse
                                        console/platforms, such as PlayStation, Xbox, and Windows PC, incorporated into
                                        a standalone product provided to gamers through a cloud platform.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        The rising internet connectivity, increasing adoption of smartphones, and the
                                        advent of high bandwidth network connectivity, such as 5G, have further
                                        increased the demand of the gaming market across the globe.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Furthermore, according to the statistics published by DataReporal, the number of
                                        internet users increased by 7.7% in 2021 compared to 2020. Moreover, they
                                        increased by 4% to 4,950 million in January 2022 compared to January 2021, when
                                        the users totaled 4,758 million.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Cloud gaming services focus on leveraging hyper-scale cloud capabilities,
                                        streaming media services, and global content delivery networks to build the next
                                        generation of social entertainment platforms. These factors have an anticipated
                                        positive impact on market growth.
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        Additionally, leveraging cloud technology in the gaming market is likely to
                                        drive the demand and engagement of multi-players for different games, boosting
                                        the market growth during the forecast period.
                                    </p>
                                </li>
                            </ul>
                            <h3 class="A-1-H3 A-1-H3-SP">The Future Of The Gaming Industry</h3>
                            </h3>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">virtual reality</h3>
                            <p class="A-1-P">
                                One of the most exciting new technologies in gaming is virtual reality. VR headsets
                                allow you to immerse yourself in a completely digital world, and it’s an incredible
                                experience. There are only a few VR games available, but that number is sure to grow in
                                the years to come
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">Augmented Reality</h3>
                            <p class="A-1-P">
                                Augmented reality is another exciting new technology that’s starting to make its way
                                into the gaming world. With AR, you can overlay digital elements in the real world. For
                                example, you might see a character standing in your living room while playing a game.
                                Moreover, it’s already being used in popular games like Pokemon Go
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">Artificial intelligence</h3>
                            <p class="A-1-P">
                                Artificial Intelligence (AI) refers to the ability of machines to carry out “smart
                                tasks”. It is any intelligence demonstrated by a machine, creating optimal solutions to
                                problems. These optimal solutions are usually pre-programmed. However, rather than
                                following a single repetitive motion, AI can adapt to different situations
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">Cloud Gaming</h3>
                            <p class="A-1-P">
                                With cloud gaming, players no longer need to own or download games- they can simply
                                access them online. This is a great option for people who don’t have a lot of storage
                                space on their devices or those who want to play games that aren’t available in their
                                region
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">eSports</h3>
                            <p class="A-1-P">
                                Esports is another area growing rapidly, and it’s poised to become a huge industry in
                                the
                                years to come. With millions of people watching competitive gaming matches online,
                                there’s
                                no doubt that this is an area that’s worth investing in.
                            <p class="A-1-P">
                                Here is an article that explains more about it:<br>
                                https://builtin.com/media-gaming/future-of-gaming
                            </p>
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">Conclusion</h3>
                            <p class="A-1-P">
                                It’s hard to believe that gaming is only a few decades old. It seems like it’s been a
                                part
                                of our lives forever. And the truth is gaming will only become more and more popular in
                                the
                                years to come. The future of gaming is looking incredibly exciting, and it’s poised to
                                become even more popular in the years to come. With new technology emerging all the
                                time,
                                the gaming industry is constantly evolving- and it’s never been more exciting. We can
                                expect
                                to see some amazing things in the years to come. So if you’re a gamer, be sure to keep
                                an
                                eye on the latest developments- it’s going to be a wild ride!
                            </p>
                            <h3 class="A-1-H3 A-1-H3-SP" font-size="0.5em">Additional resources</h3>
                            <a class="A-1-links" href="https://bsic.it/in-depth-analysis-of-the-gaming-industry-1/">
                                <p class="A-1-P">
                                    https://bsic.it/in-depth-analysis-of-the-gaming-industry-1/
                                </p>
                            </a>
                            <a class="A-1-links"
                                href="https://www.mordorintelligence.com/industry-reports/global-gaming-market">
                                <p class="A-1-P">
                                    https://www.mordorintelligence.com/industry-reports/global-gaming-market
                                </p>
                            </a>
                            <a class="A-1-links"
                                href="https://www.statista.com/topics/1906/mobile-gaming/#topicHeader__wrapper">
                                <p class="A-1-P">
                                    https://www.statista.com/topics/1906/mobile-gaming/#topicHeader__wrapper
                                </p>
                            </a>
                            <h3 class="A-1-H3">Credits:</h3>
                            <ul>
                                <li>
                                    <p class="A-1-P">
                                        <b>Touaa Maria</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Boutaleb Ramy</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="A-1-P">
                                        <b>Merouani Souha</b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>