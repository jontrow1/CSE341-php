<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/header.php'; ?>

<div id="mainWrapper">
    <div id="sidebar">
        <ul>
            <li onclick="bio()">Dossier</li>
            <lionclick="statSheet()">Stats</li>
            <li onclick="skillSheet()">Skills</li>
        </ul>
    </div>

    <div id="viewports">    
        <div id="bio">This is some bio information.</div>
        <div id="statSheet">This is some stats.</div>
        <div id="skillSheet">Here are my credentials</div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>