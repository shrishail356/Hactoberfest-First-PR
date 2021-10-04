var num=document.querySelectorAll(".btn").length; 
for(var i=0;i<num;i++){
    document.querySelectorAll("button")[i].addEventListener("click",function(){
        makesound(this.innerHTML);
        button_animation(this.innerHTML)
    });
}

 /* ######################################################## */

document.addEventListener("keypress",function(event){
makesound(event.key);
button_animation(event.key)
});
function makesound(alpha){
    var audio;
    switch(alpha){
        case "w":   audio=new Audio("./sounds/tom-1.mp3");
                    audio.play();
                    break;
        case "a":   audio=new Audio("./sounds/tom-2.mp3");
                    audio.play();
                    break;
        case "s":   audio=new Audio("./sounds/tom-3.mp3");
                    audio.play();
                    break;
        case "d":   audio=new Audio("./sounds/tom-4.mp3");
                    audio.play();
                    break;
        case "j":   audio=new Audio("./sounds/snare.mp3");
                    audio.play();
                    break;
        case "k":   audio=new Audio("./sounds/crash.mp3");
                    audio.play();
                    break;
        case "l":   audio=new Audio("./sounds/kick-bass.mp3");
                    audio.play();
                    break;
        default:console.log(this.innerHTML);
}
}
function button_animation(key_rec)
{
    var curr_btn = document.querySelector("button."+key_rec);
    curr_btn.classList.add("pressed");
    
    setTimeout(function(){
        curr_btn.classList.remove("pressed");
    },100);
   
} 
