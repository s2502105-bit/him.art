<!DOCTYPE html>
<html>
<head>
     <title>H.I.M. </title>
     <style>
        
        * { box-sizing: border-box; }

        body {
            background: #121012;              
            color: grey;                    
            font-family: italic;
            margin: 0;
            padding: 0;
        }

        #site-nav {                           
            display: flex;                   
            justify-content: center;
            gap: 60px;
            background: #1c1c1c;
            padding: 14px 0;
            border-bottom: 2px solid #a80000;
        }

        #site-nav a {
            color: grey;
            text-decoration: none;
            font-weight: italic;
            letter-spacing: 1px;
        }
          #site-nav a:hover { color: #a80000; }

        .hero {                                
            text-align: center;
            padding: 50px 20px 30px;
        }

        .hero h1 {
            font-size: 3em;
            color: #a80000;
            margin: 0 0 6px;
        }

        .hero p {
            color: #a80000;
            font-style: italic;
        }

        .section {                             
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
            border-top: 1px solid grey;
        }

        .section h2 {
            color: #c2102a;
            border-left: 4px solid #c2102a;
            padding-left: 10px;
        }

        .about-grid {
            display: grid;                    
            grid-template-columns: 200px 1fr;
            gap: 24px;
            align-items: center;
        }

        .about-grid img {
            width: 100%;                     
            height: 150px;                      
            border-radius: 6px;
            border: 2px solid #c2102a;
        }

        @media (max-width: 600px) {
            .about-grid { grid-template-columns: 1fr; }
        }

        video {
            width: 100%;
            max-width: 1000px;
            height: auto;
            display: block;
            margin: 10px 0;
        }
      
        table.discography {
            width: 100%;                       
            border-collapse: collapse;
            margin-top: 16px;
        }

        table.discography th,
        table.discography td {
            border: 1px solid #a80000;
            padding: 10px;
            text-align: left;
        }

        table.discography th {
            background: #1c1c1c;
            color: #c2102a;
        }

        .track-row {
            cursor: pointer;
        }

        .track-row:hover td {
            background: #1c1c1c;
        }

        .track-row.active td {
            background: #2a0a0a;
            border-color: #c2102a;
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            width: 240px;
            border: 1px solid #555;
            background: #1c1c1c;
            color: #eee;
        }

        .search-bar button,
        .guestbook-form button,
        .bio-toggle {
            padding: 8px 16px;
            background: #c2102a;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .search-bar button:hover,
        .guestbook-form button:hover,
        .bio-toggle:hover { background: #8a0303; }

        iframe.map {
            width: 100%;
            height: 400px;
            border: 2px solid #a80000;
        }

        .contact-links {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .contact-links li {
            margin-bottom: 8px;
        }

        .contact-links a {
            color: grey;
            background: #1c1c1c;
            border-left: 3px solid #a80000;
            padding: 8px 12px;
            display: inline-block;
            text-decoration: none;
        }

        .contact-links a:hover { color: #c2102a; }

        .guestbook-form input,
        .guestbook-form textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            background: #a80000;
            color: #a80000;
            border: 1px solid #a80000;
        }

        #guestbook-output {                   
            margin-top: 14px;
            padding: 10px;
            background: #a80000;
            border-left: 4px solid #c2102a;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 16px;
        }

        .gallery-card {
            background: #a80000;
            border: 1px solid #a80000;
            border-radius: 6px;
            overflow: hidden;
            text-align: center;
        }

        .gallery-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
        }

        .gallery-caption {
            padding: 8px;
            color: #b9b0b0;
            font-style: italic;
            font-size: 0.9em;
            margin: 0;
        }

        @media (max-width: 600px) {
            .gallery-grid { grid-template-columns: 1fr; }
        }

        .iconic-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 16px;
        }

        .iconic-card {
            background: #1c1c1c;
            border: 1px solid #a80000;
            border-left: 4px solid #c2102a;
            padding: 16px;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }

        .iconic-card h3 {
            color: grey;
            margin: 0 0 8px;
            font-size: 1.1em;
        }

        .iconic-card p {
            font-size: 0.9em;
            color: grey;
            margin: 0 0 12px;
        }

        .iconic-card audio {
            width: 100%;
            margin-top: auto;
        }

        @media (max-width: 600px) {
            .iconic-list { grid-template-columns: 1fr; }
        }

    </style>
</head>
<body>

    <nav id="site-nav">
        <a href="#about">About</a>
        <a href="#video">Video</a>
        <a href="#discography">Discography</a>
        <a href="#map">Hometown</a>
        <a href="#fanart">Fan Art</a>
        <a href="#iconic">Iconic Music</a>
        <a href="#contact">Contact</a>
    </nav>

    <section class="hero">
        <h1>H.I.M.</h1>
        <p>His Infernal Majesty — Helsinki, Finland</p>
    </section>

    <section class="section" id="about">
        <h2>About</h2>
        <div class="about-grid">
            <img src="images/him-logo.png" alt="HIM heartagram logo" width="200" height="200">

            <div>
                <p id="bio-text">
                    HIM is a Finnish rock band formed in Helsinki in 1991, known for
                    blending gothic rock and heavy metal with a melodic, romantic
                    edge. Their signature symbol, the "heartagram," became one of
                    the most recognizable logos in rock music.
                </p>
                <p id="bio-text-extra" style="display:none;">
                    The band released eight studio albums between 1997 and 2017,
                    including <em>Razorblade Romance</em> and <em>Dark Light</em>,
                    before disbanding in 2017 after a farewell tour.
                </p>
                <button class="bio-toggle" onclick="toggleBio()">Read more</button>
            </div>
        </div>
    </section>

    <section class="section" id="video">
        <h2>Music Video</h2>
        <p id="now-playing" style="color:grey; font-style:italic; margin-bottom:8px;">
            ▶ Now Playing: Right Here In My Arms
        </p>
        <video id="mainVideo" controls width="480" height="270">
            <source id="mainVideoSrc" src="media/right-here-in-my-arms.mp4" type="video/mp4">
        </video>
    </section>

    <section class="section" id="discography">
        <h2>Discography</h2>

        <ol>
            <li>Right Here In My Arms</li>
            <li>Join Me in Death</li>
            <li>Wicked Game</li>
            <li>Buried Alive by Love</li>
            <li>Wings of a Butterfly</li>
            <li>Killing Loneliness</li>
        </ol>

        <div class="search-bar">
            <input type="text" id="songSearch" placeholder="Search artist or song...">
            <button onclick="filterSongs()">Search</button>
        </div>

        <table class="discography" id="songTable">
            <tr>
                <th>No.</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Song</th>
                <th>Play</th>
            </tr>

            <tr class="track-row" data-video="media/right-here-in-my-arms.mp4" data-title="Right Here In My Arms" onclick="loadTrack(this)">
                <td>1</td>
                <td>HIM</td>
                <td>Razorblade Romance</td>
                <td>Right Here In My Arms</td>
                <td>
                    <audio controls>
                        <source src="media/right-here-in-my-arms.mp3" type="audio/mpeg">
                    </audio>
                </td>
            </tr>
            <tr class="track-row" data-video="media/join-me-in-death.mp4" data-title="Join Me in Death" onclick="loadTrack(this)">
                <td>2</td>
                <td>HIM</td>
                <td>Razorblade Romance</td>
                <td>Join Me in Death</td>
                <td>
                    <audio controls>
                        <source src="media/join-me-in-death.mp3" type="audio/mpeg">
                    </audio>
                </td>
            </tr>
            <tr class="track-row" data-video="media/wicked-game.mp4" data-title="Wicked Game" onclick="loadTrack(this)">
                <td>3</td>
                <td>HIM</td>
                <td>Razorblade Romance</td>
                <td>Wicked Game</td>
                <td>
                    <audio controls>
                        <source src="media/wicked-game.mp3" type="audio/mpeg">
                    </audio>
                </td>
            </tr>

            <tr class="track-row" data-video="media/buried-alive-by-love.mp4" data-title="Buried Alive by Love" onclick="loadTrack(this)">
                <td>4</td>
                <td>HIM</td>
                <td>Love Metal</td>
                <td>Buried Alive by Love</td>
                <td>
                    <audio controls>
                        <source src="media/buried-alive-by-love.mp3" type="audio/mpeg">
                    </audio>
                </td>
            </tr>

            <tr class="track-row" data-video="media/wings-of-a-butterfly.mp4" data-title="Wings of a Butterfly" onclick="loadTrack(this)">
                <td>5</td>
                <td>HIM</td>
                <td>Dark Light</td>
                <td>Wings of a Butterfly</td>
                <td>
                    <audio controls>
                        <source src="media/wings-of-a-butterfly.mp3" type="audio/mpeg">
                    </audio>
                </td>
            </tr>
            <tr class="track-row" data-video="media/killing-loneliness.mp4" data-title="Killing Loneliness" onclick="loadTrack(this)">
                <td>6</td>
                <td>HIM</td>
                <td>Dark Light</td>
                <td>Killing Loneliness</td>
                <td>
                    <audio controls>
                        <source src="media/killing-loneliness.mp3" type="audio/mpeg">
                    </audio>
                </td>
            </tr>
        </table>
    </section>

    <section class="section" id="map">
        <h2>Hometown</h2>
        <p>HIM formed in Helsinki, Finland.</p>
        <iframe class="map"
            src="https://www.google.com/maps?q=Helsinki,Finland&output=embed"
            loading="lazy">
        </iframe>
    </section>

    <section class="section" id="fanart">
        <h2>Art</h2>
        <div class="gallery-grid">
            <div class="gallery-card">
                <img src="images/fanart-1.jpg" width="260" height="200">
            </div>
            <div class="gallery-card">
                <img src="images/fanart-2.jpg" width="260" height="200">
            </div>
            <div class="gallery-card">
                <img src="images/fanart-3.jpg" width="260" height="200">
            </div>
        </div>
    </section>

    <section class="section" id="iconic">
        <h2>Iconic Music</h2>
        <p> Three of HIM's most defining songs.
        <div class="iconic-list">
            <div class="iconic-card">
                <h3>Wicked Game</h3>
                <p>From <em>Razorblade Romance</em> (1999) — a haunting cover of Chris Isaak's classic that introduced HIM to the world.</p>
                <audio controls>
                    <source src="media/wicked-game.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="iconic-card">
                <h3>Wings of a Butterfly</h3>
                <p>From <em>Dark Light</em> (2005) — HIM's biggest international hit and the song that topped rock charts worldwide.</p>
                <audio controls>
                    <source src="media/wings-of-a-butterfly.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="iconic-card">
                <h3>Killing Loneliness</h3>
                <p>From <em>Dark Light</em> (2005) — a fan favourite known for its soaring chorus and connection to overcome profound isolation and despair.</p>
                <audio controls>
                    <source src="media/killing-loneliness.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <h2>Contact</h2>

        <p>HIM is no longer active, but you can find official material here:</p>
        <ul class="contact-links">
            <li><a href="https://heartagram.com" target="_blank" rel="noopener">Official Website</a></li>
            <li><a href="https://www.facebook.com/theheartagram" target="_blank" rel="noopener">Facebook</a></li>
            <li><a href="https://www.instagram.com/heartagram" target="_blank" rel="noopener">Instagram</a></li>
            <li><a href="https://www.youtube.com/user/him" target="_blank" rel="noopener">YouTube</a></li>
        </ul>
    </section>

    <script>
        const trackRows = document.querySelectorAll(".track-row");
        const mainVideo = document.getElementById("mainVideo");
        const mainVideoSrc = document.getElementById("mainVideoSrc");
        const nowPlaying = document.getElementById("now-playing");
        let currentIndex = 0;

        function loadTrack(row) {
            const videoFile = row.getAttribute("data-video");
            const title    = row.getAttribute("data-title");

            mainVideoSrc.setAttribute("src", videoFile);
            mainVideo.load();
            mainVideo.play();

            nowPlaying.textContent = " ▶ Now Playing: " + title;

            trackRows.forEach(r => r.classList.remove("active"));
            row.classList.add("active");

            currentIndex = Array.from(trackRows).indexOf(row);

            document.getElementById("video").scrollIntoView({ behavior: "smooth" });
        }

        mainVideo.addEventListener("ended", function () {
            const nextIndex = currentIndex + 1;
            if (nextIndex < trackRows.length) {
                loadTrack(trackRows[nextIndex]);
            } else {
                nowPlaying.textContent = "Playlist complete";
            }
        });

        function toggleBio() {
            const extra = document.getElementById("bio-text-extra");
            const btn = document.querySelector(".bio-toggle");
            const isHidden = extra.style.display === "none";
            extra.style.display = isHidden ? "block" : "none";
            btn.textContent = isHidden ? "Read less" : "Read more";
        }

        function filterSongs() {
            const query = document.getElementById("songSearch").value.toLowerCase();
            const table = document.getElementById("songTable");
            const rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const rowText = rows[i].textContent.toLowerCase();
                rows[i].style.display = rowText.includes(query) ? "" : "none";
            }
        }
    </script>

</body>
</html>