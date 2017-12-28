var announcements = [];

//Config:

//Announcement Strings (Or json if optional, however writing it in an array is neater than loading and writing a json and then parsing it)
announcements.push("Test Announcement 1");
announcements.push("Test Announcement 2");
announcements.push("Test Announcement 3");

//Timers
var timeBeforeNextAnnouncementAfterPageIdle = 3 * 10 * 1000; //3 minutes
var timeBeforeNextAnnouncement = 10 * 60 * 1000; //10 minutes

















//Announcement Logic ======================================

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
    window.setTimeout(showAnAnnouncement, timeBeforeNextAnnouncementAfterPageIdle);

}

function showAnAnnouncement()
{
    var selectedAnnouncement = Math.floor(Math.random() * (announcements.length));
    
    document.getElementById("footer1").innerHTML='<section class="col-6 p-3"><h6 class="text-left text-white" id="randomText">' + announcements[selectedAnnouncement] + '</h6></section><section class="col-6 p-3"><button class="btn btn-warning float-right" onclick="destroyFooter()">Hide</button></section>'
}


function showAnnouncement()
{
    var d = new Date();
    d.setTime(d.getTime() + timeBeforeNextAnnouncement);
    setCookie("announcementShown", d.toUTCString());

    var showAdOrNah = Math.round(Math.random());
    if(showAdOrNah > 0)
    {
        document.getElementById("footer1").innerHTML = "";
    }
    else
    {
        document.getElementById("footer2").innerHTML = "";
        showAnAnnouncement();
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
    d.setTime(d.getTime() + timeBeforeNextAnnouncement);
    var expires = "expires="+d.toUTCString();
    document.cookie = "announcementShown=" + true + ";" + expires + ";path=/";
}