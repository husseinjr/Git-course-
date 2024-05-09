function lines (){
   let bgMovi =document.querySelector('body')
   let e =document.createElement('div');
   let size =Math.random()*12;
   let duration =Math.random()*3;
   e.setAttribute('id','circle');
   bgMovi.appendChild(e);
   e.style.width=2+size+'px';
   e.style.left=Math.random()*+innerWidth +'px';
   e.style.animationDuration=2 +duration+'s';
 
}

setInterval(function(){
   lines();
},500)