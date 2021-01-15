<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/header.php'; ?>

<div id="mainWrapper">
    <div id="sidebar">
        <ul>
            <li><a href="#" onclick="bio" id="bio">Dossier</a></li>
            <li><a href="#"  onclick="statSheet" id="statSheet">Stats</a></li>
            <li onclick="skillSheet" id="skillSheet">Skills</li>
        </ul>
    </div>

    <div id="viewports">    
        <div id="bioPage">This is some bio information.</div>
        <div id="statPage">This is some stats.</div>
        <div id="skillPage">Here are my credentials</div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/snippits/footer.php'; ?>