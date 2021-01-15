<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/header.php'; ?>

<div id="mainWrapper">
    <div id="sidebar">
        <ul>
            <li>
                <button onclick="weeks()" class="smallButton"></button>
                <p>Proves</p>
            </li>
            <li>
                <button onclick="teams()" class="smallButton"></button>
                <p>Teams</p>
            </li>
            <li>
                <button  onclick="projs()" class="smallButton"></button>
                <p>Project</p>
            </li>
        </ul>
    </div>

    <div id="viewports">    
        <div id="weeks" class="viewports">
            <h1>Weekly Prove Assignments</h1>
            <p>Coming Soon!</p>
        </div>
        <div id="teams" class="viewports">
            <h1>Weekly Team Assignments</h1>
            <ul>
                <li><a href="/week2/team1.html" title="Week 2 team Assignment">Week 2</a></li>
            </ul>
        </div>
        <div id="projs" class="viewports">
            <h1>Projects</h1>
            <p>Coming Soon!</p>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>