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
            <img src="/images/bioPic.jpg" alt="Picture of Jon playing golf">
            <p> Jon Trowbridge lives in sunny Florida with his wife, Heather and (2) two daughters, Alexis - age 12, and Savannah - 6.
                He has another child, Oliver - age 23, who still lives in Michigan with his fiancée, Emily - age unsure, and his son, Vincent - age 2.</p>
            <p>Jon Trowbridge is a 35-year-old male who enjoys playing different types of games, ranging from video games to tabletop games and anything in between.
                Most of the time, Jon can be found on his computer or his PS4, <i>when his family is away</i>, otherwise he can be found spending time with them
                as that is his true passion.</p>
            <p>Jon Trowbridge loves his family dearly and would do anything for them. That is the main reason he now lives in Florida, working in a place that he does not particularly like.
                It's also the reason why he does things like playing with barbies, growing a garden full of vegetables he doesn't like, taking care of two cats that he is allergic to, and eating gluten-free foods.</p>
            <p>Other things to mention is Jon's enjoyment of golf and disc golf. However, these are only ever enjoyed when there is someone else to enjoy them with. 
                He has many a times taken his daughters and son out to go golfing with him, though it can be quite expensive so it doesn't happen often. He also has found a friend to go disc golfing with
                and therefore goes regularly to throw some discs at a cage (<i>this is free</i>).</p>
            <p>Weekly, Jon will spend times playing Dungeons and Dragons where he pretends to be anything from a Gnome Artificer to female Drow Sorcerer. The possibilities are endless when he gets into
                roleplaying, though his wife mocks him for playing pretend house like a child.</p>
            <p id="caption">Image credited to Savannah Trowbridge</p>
        </div>
        <div id="statSheet">
            <table>
                <tr>
                    <td>Name:</td>
                    <td>Jon Trowbridge</td>
                </tr>
                <tr>
                    <td>Level:</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>Race:</td>
                    <td>Human</td>
                </tr>
                <tr>
                    <td>Health:</td>
                    <td>100% (Covid-free)</td>
                </tr>
                <tr>
                    <td>Mana:</td>
                    <td>0 (This is real life)</td>
                </tr>
                <tr>
                    <td>Stamina:</td>
                    <td>Average</td>
                </tr>
                <tr>
                    <td>Strength:</td>
                    <td>20 push-ups is about maximum</td>
                </tr>
                <tr>
                    <td>Dexterity:</td>
                    <td>Can weave in and out through Disney pretty easily</td>
                </tr>
                
                <tr>
                    <td>Constitution:</td>
                    <td>Superb, hardly ever gets sick</td>
                </tr>
                <tr>
                    <td>Intelligence</td>
                    <td>Higher than average but nowhere near enough to answer child's questions</td>
                </tr>
                <tr>
                    <td>Wisdom:</td>
                    <td>Getting wiser everyday</td>
                </tr>
                <tr>
                    <td>Charisma:</td>
                    <td>Ready to feel awkward</td>
                </tr>
                <tr>
                    <td>Abilities:</td>
                    <td>Sewing, Reading, Gaming, Woodworking, Gardening</td>
                </tr>
                <tr>
                    <td>Alignment:</td>
                    <td>Neutral Good</td>
                </tr>
                <tr>
                    <td>Languages:</td>
                    <td>English, can say doesn't speak French in French, process of learning Spanish
                </tr>
            </table>
        </div>
        <div id="skillSheet">
            <div id="chartContainer"></div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>