var announcements = [];


//Announcement Strings (Or json if optional, however writing it in an array is neater than loading and writing a json and then parsing it)
announcements.push("Test Announcement 1");
announcements.push("Test Announcement 2");
announcements.push("Test Announcement 3");




//Announcement Logic
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