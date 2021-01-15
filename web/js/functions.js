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