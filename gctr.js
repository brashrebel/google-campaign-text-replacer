function gctrQueryVariable(variable) {
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
function ReplaceGCTRContent(selector, content) {
// Method found here http://stackoverflow.com/questions/3808808/how-to-get-element-by-class-in-javascript
  var nodeList = document.querySelectorAll(selector);
  for (var i = 0, length = nodeList.length; i < length; i++) {
     nodeList[i].innerHTML = content;
  }
}
function gctrImplement() {
var utm_term = gctrQueryVariable("utm_term");
var utm_source = gctrQueryVariable("utm_source");
var utm_medium = gctrQueryVariable("utm_medium");
var utm_campaign = gctrQueryVariable("utm_campaign");
var utm_content = gctrQueryVariable("utm_content");
if(utm_term != false)
ReplaceGCTRContent(".gctr-term", utm_term);
if(utm_source != false)
ReplaceGCTRContent(".gctr-source", utm_source);
if(utm_medium != false)
ReplaceGCTRContent(".gctr-medium", utm_medium);
if(utm_campaign != false)
ReplaceGCTRContent(".gctr-name", utm_campaign);
if(utm_content != false)
ReplaceGCTRContent(".gctr-content", utm_content);
}
gctrImplement();