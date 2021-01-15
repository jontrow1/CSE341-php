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
        <div id="bio">This is some bio information.</div>
        <div id="statSheet">This is some stats.</div>
        <div id="skillSheet">Here are my credentials</div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>