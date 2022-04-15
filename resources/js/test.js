document.addEventListener("DOMContentLoaded", function(event) {
var svgNs = "http://www.w3.org/2000/svg"
var backgroundSVG = document.getElementById('svgBg');
var svgRect = backgroundSVG.getBoundingClientRect();
var svgHeight = svgRect.height;
var svgWidth = svgRect.width;



//adds a group, circle, and text to background svg to be animated
function addCir (svgPaths){
   // let group = document.createElementNS(svgNs, "g");
  //  let svgText = document.createElementNS(svgNs, "text");
   // let svgTextNode = document.createTextNode(randomWord());
   //  svgText.appendChild(svgTextNode);

    var Yellowcircle = document.createElementNS(svgNs, "circle");

      Yellowcircle.setAttributeNS(null, "r", 5);
      Yellowcircle.setAttributeNS(null, "fill", "url(#grad1)");
    // group.appendChild(Yellowcircle);
//group.appendChild(svgText);
      backgroundSVG.appendChild(Yellowcircle);

      animeTest(Yellowcircle, svgPaths);
  }

// random coordinates for path and radius expansion in animate functions
function randomX () {
   let rx = Math.floor((Math.random() * svgWidth) + 1);
   return rx;
}
function randomY() {
    let ry = Math.floor((Math.random() * svgHeight) + 1);
    return ry;
}
function randonR(){
    let svgR = Math.floor(Math.random() * 20 + 6);
    return svgR;
}

// adds the random animation path to svg
function addpath() {

    var svgPaths = document.createElementNS(svgNs, "path");

    svgPaths.setAttributeNS(null,"fill","none");

    svgPaths.setAttributeNS(null,"d","M" + randomX() + ", "+ svgHeight + " Q250,"+randomY() +" "+ randomX() + ", "+0 );


    backgroundSVG.appendChild(svgPaths)
    addCir(svgPaths);

}
//adds an animation path every 2 seconds
function  gogoAnimate(i){
    setTimeout(function (){addpath()}, 1000 * i);

};

//adds path x times
for(let i=0; i<50; i++){

        gogoAnimate(i);

}

// back round animation
function animeTest(ele, circlePath){
   var path = anime.path(circlePath);
anime({
  targets: ele,
    translateX: path('x'),
    translateY: path('y'),
    r:randonR(),
    opacity: 0,
    easing:'linear',
    duration: 15000,
    loop: false,

    complete: function () {
        backgroundSVG.removeChild(ele);
    }
});

}



});
