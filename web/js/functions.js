function getDate() {
    var date = document.lastModified;
    document.getElementById("date").innerHTML = date;
}

function bio() {
    var bio = document.getElementById("bio");
    var stat = document.getElementById("statSheet");
    var skill = document.getElementById("skillSheet");
    if (bio.style.display = "none") {
        bio.style.display = "block";
        if (stat.style.display = "block") {
            stat.style.display = "none";
        } 
        if (skill.style.display = "block") {
            skill.style.display = "none";
        }
    }
}

function statSheet() {
    var bio = document.getElementById("bio");
    var stat = document.getElementById("statSheet");
    var skill = document.getElementById("skillSheet");
    if (stat.style.display = "none") {
        stat.style.display = "block";
        if (bio.style.display = "block") {
            bio.style.display = "none";
        } 
        if (skill.style.display = "block") {
            skill.style.display = "none";
        }
    }
}

function skillSheet() {
    var bio = document.getElementById("bio");
    var stat = document.getElementById("statSheet");
    var skill = document.getElementById("skillSheet");
    if (skill.style.display = "none") {
        skill.style.display = "block";
        if (stat.style.display = "block") {
            stat.style.display = "none";
        } 
        if (bio.style.display = "block") {
            bio.style.display = "none";
        }
    }
}

function weeks() {
    var weeks = document.getElementById("weeks");
    var teams = document.getElementById("teams");
    var projs = document.getElementById("projs");
    if (weeks.style.display = "none") {
        weeks.style.display = "block";
        if (teams.style.display = "block") {
            teams.style.display = "none";
        } 
        if (projs.style.display = "block") {
            projs.style.display = "none";
        }
    }
}

function teams() {
    var weeks = document.getElementById("weeks");
    var teams = document.getElementById("teams");
    var projs = document.getElementById("projs");
    if (teams.style.display = "none") {
        teams.style.display = "block";
        if (weeks.style.display = "block") {
            weeks.style.display = "none";
        } 
        if (projs.style.display = "block") {
            projs.style.display = "none";
        }
    }
}

function projs() {
    var weeks = document.getElementById("weeks");
    var teams = document.getElementById("teams");
    var projs = document.getElementById("projs");
    if (projs.style.display = "none") {
        projs.style.display = "block";
        if (teams.style.display = "block") {
            teams.style.display = "none";
        } 
        if (weeks.style.display = "block") {
            weeks.style.display = "none";
        }
    }
}