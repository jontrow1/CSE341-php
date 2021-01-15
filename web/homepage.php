<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/header.php'; ?>

<div id="mainWrapper">
    <div id="sidebar">
        <ul>
            <li>
                <button onclick="bio()" class="smallButton"></button>
                <p>Dossier</p>
            </li>
            <li>
                <button onclick="statSheet()" class="smallButton"></button>
                <p>Stats</p>
            </li>
            <li>
                <button  onclick="skillSheet()" class="smallButton"></button>
                <p>Skills</p>
            </li>
        </ul>
    </div>

    <div id="viewports">    
        <div id="bio">
            <figure>
                <img src="/images/bioPic.jpg" alt="Picture of Jon playing golf">
                <figcaption>Taken by Savannah</figcaption>
            </figure>
            <p> Jon Trowbridge lives in sunny Florida with his wife, Heather and (2) two daughters, Alexis - age 12, and Savannah - 6.
                He has another child, Oliver - age 23, who still lives in Michigan with his fiancée, Emily - age unsure, and his son, Vincent - age 2.</p>
            <p>Jon Trowbridge is a 35-year-old male who enjoys playing different types of games, ranging from video games to tabletop games and anything in between.
                Most of the time, Jon can be found on his computer or his PS4, <i>when his family is away</i>, otherwise he can be found spending time with them
                as that is his true passion.</p>
            <p>Jon Trowbridge loves his family dearly and would do anything for them. That is the main reason he now lives in Florida, working in a place that he does not particularly like.
                It's also the reason why he does things like playing with barbies, growing a garden full of vegetables he doesn't like, taking care of two cats that he is allergic to, and eating gluten-free foods.
        </div>
        <div id="statSheet">This is some stats.</div>
        <div id="skillSheet">Here are my credentials</div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>