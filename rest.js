var slide=document.querySelectorAll('.slide')
var radbtn=document.querySelectorAll('.rad-btn')
var left=document.querySelector('.left')
var right=document.querySelector('.right')
var slideInt;
var intTime=5000;
right.addEventListener('click',function(e){
    e.preventDefault();
    nextSlide();
    clrInterval();
})
left.addEventListener('click',function(e){
    e.preventDefault();
    preSlide();
    clrInterval();
})


function nextSlide(){
    var curr=document.querySelector('.curr')
    var active=document.querySelector('.active')

    curr.classList.remove('curr')
    active.classList.remove('active')
    if(curr.nextElementSibling){
        curr.nextElementSibling.classList.add('curr')
        active.nextElementSibling.classList.add('active')
    }
    else{
        slide[0].classList.add('curr')
        radbtn[0].classList.add('active')
    }
}
function preSlide(){
    var curr=document.querySelector('.curr')
    var active=document.querySelector('.active')

    curr.classList.remove('curr')
    active.classList.remove('active')
    if(curr.previousElementSibling){
        curr.previousElementSibling.classList.add('curr')
        active.previousElementSibling.classList.add('active')
    }
    else{
        slide[slide.length-1].classList.add('curr')
        radbtn[radbtn.length-1].classList.add('active')
    }
}
slideInt=setInterval(nextSlide,intTime)
console.log(slide)

function clrInterval(){
    clearInterval(slideInt);
    slideInt=setInterval(nextSlide,intTime)

}
var meal=document.querySelectorAll('.meals')
var left1=document.querySelectorAll('.left1')
var right1=document.querySelectorAll('.right1')

meal.forEach((item,i)=>{
    var prewid=item.getBoundingClientRect();
    var wid=prewid.width;
    left1[i].addEventListener('click',function(e){
        e.preventDefault();
       
         clrInterval1();
        item.scrollLeft-=wid;
    })
    right1[i].addEventListener('click',function(e){
        e.preventDefault();
        clrInterval1();
        item.scrollLeft+=wid;
    })
    console.log(wid)



})
function next1(){
meal.forEach((item,i)=>{
   
        var prewid=item.getBoundingClientRect();
        var wid=prewid.width;
        item.scrollLeft+=wid;
    
        console.log(item.scrollLeft)
        if(item.scrollLeft==2392){
            item.scrollLeft=0;
        }
   

})

}
var slideInt1;
var intTime1=3000;
 slideInt1=setInterval(next1,intTime1)
function clrInterval1(){
    clearInterval(slideInt1)
     slideInt1=setInterval(next1,intTime1)

}

