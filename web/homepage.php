<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/header.php'; ?>

<div id="mainWrapper">
    <div id="sidebar">
        <ul>
            <li onclick="bio()" id="bio">Dossier</li>
            <lionclick="statSheet()" id="statSheet">Stats</li>
            <li onclick="skillSheet()" id="skillSheet">Skills</li>
        </ul>
    </div>

    <div id="viewports">    
        <div id="bioPage">This is some bio information.</div>
        <div id="statPage">This is some stats.</div>
        <div id="skillPage">Here are my credentials</div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>