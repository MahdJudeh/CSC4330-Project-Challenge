var xmlHttp = createXmlHttpRequestObject();

function yHandler(){
  var wrap = document.getElementById('wrap');
  var contentHeight = wrap.offsetHeight;// Gets page content height
  var yOffset = window.pageYOffset;//Gets the vertical scroll
  var y = yOffset + window.innerHeight;// gives the vertical scroll position and the innerHeight to see if we are at the bottom of the page
  if(y >= contentHeight){
    wrap.innerHTML += 'div class ="newData"></div>';//ajax call to get more dynamic data
  }

}
window.onscroll = yHandler;

function createXmlHttpRequestObject(){

  var xmlHttp;
  if(window.ActiveXObject){
    try{
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }catch(e){
      xmlHttp = false;
    }
  }
  else{
    try{
      xmlHttp = new XMLHttpRequest();
    }catch(e){
      xmlHttp = false;
    }
  }
  if(!xmlHttp){
    alert("cant create that object");
  }
  else{
    return xmlHttp;
  }
}
function process(){
  if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
    xmlHttp.open("POST", "index.php", true);
  }else {

  }
}
