var announcements = [];


//Announcement Strings (Or json if optional, however writing it in an array is neater than loading and writing a json and then parsing it)
announcements.push("Test Announcement 1");
announcements.push("Test Announcement 2");
announcements.push("Test Announcement 3");




//Announcement Logic

var announcementShown = getCookie("announcementShown")
console.log(announcementShown);

if(announcementShown == "")
{
    showAnnouncement();
}
else
{
    document.getElementById("footer1").innerHTML = "";
    document.getElementById("footer2").innerHTML = "";
}


function showAnnouncement()
{
    var d = new Date();
    d.setTime(d.getTime() + (10 * 60 * 1000));
    setCookie("announcementShown", d.toUTCString());
    
    var selectedAnnouncement = Math.floor(Math.random() * (announcements.length));

    document.getElementById("randomText").innerHTML = announcements[selectedAnnouncement];

    var showAdOrNah = Math.round(Math.random());
    if(showAdOrNah > 0)
    {
        document.getElementById("footer1").innerHTML = "";
    }
    else
    {
        document.getElementById("footer2").innerHTML = "";
    }


}

function destroyFooter()
{
    document.getElementById("footer1").innerHTML = "";
}

function getCookie(cname)
{
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue)
{
    var d = new Date();
    d.setTime(d.getTime() + (10 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = "announcementShown=" + true + ";" + expires + ";path=/";
}