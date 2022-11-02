{/* load scriptorium data */
var i = 0;
var txt = "ScriptureFest";
var speed = 100;

  function typeWritter() {
    if (i < txt.length) {
    document.getElementById("x").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWritter, speed);
    }
  }
}

{/* head section */
  //meta section
  var meta = document.createElement("meta")
  meta.setAttribute("charset", "UTF-8")

  var metaOne = document.createElement("meta")
  metaOne.setAttribute("name", "keywords")
  metaOne.setAttribute("content", "Texas, ScriptureFest")

  var metaTwo = document.createElement("meta")
  metaTwo.setAttribute("name", "description")
  metaTwo.setAttribute("content", "Texas ScriptureFest, Texas ScritureFest website")
  
  var metaThree = document.createElement("meta")
  metaThree.setAttribute("name", "veiwpoint")
  metaThree.setAttribute("content", "width=device-width, initial-scale=1.0")
  
  //link section
  var link = document.createElement("link")
  link.setAttribute("rel", "icon")
  link.setAttribute("href", "https://bl6pap003files.storage.live.com/y4mkaQeML3_VLpeazZ6VLo3BTSj1mmAZKc1VK_IOlemBMblO5lKERfYZ_ak1XMVskxw7COoJp5WFwI470vEfc36MQfBXRLNN-eRtGQlMayOhhPIP5tOzeZ5P-6K7L7SfVyyeJa4aU-Lx0354NGtv2BAuMqsEnREmbL9Z51dVaj4aym8kaarXDMWX3buek085pag?width=1080&height=1080&cropmode=none")
  
  var linkOne = document.createElement("link")
  linkOne.setAttribute("rel", "stylesheet")
  linkOne.setAttribute("href", "wjdoonan.github.io/texasscripturefest/Styles/texasscripturefeststylesheet.css")
}