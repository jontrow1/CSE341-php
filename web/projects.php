<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/header.php'; ?>

<div id="mainWrapper">
    <div id="sidebar">
        <ul>
            <li>
                <button onclick="weeks()" class="smallButton"></button>
                <p>Weekly Assignments</p>
            </li>
            <li>
                <button onclick="teams()" class="smallButton"></button>
                <p>Team assignments</p>
            </li>
            <li>
                <button  onclick="projs()" class="smallButton"></button>
                <p>Projects</p>
            </li>
        </ul>
    </div>

    <div id="viewports">    
        <div id="weeks">
            <h1>Coming Soon</h1>
        </div>
        <div id="teams">
            <h1>Weekly Team Assignments</h1>
            <ul>
                <li><a href="/week2/team1.html" title="Week 2 team Assignment">Week 2</a></li>
            </ul>
        </div>
        <div id="projs">
            <h1>Coming Soon</h1>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>