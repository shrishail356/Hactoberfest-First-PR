window.onload = function () {
    document.getElementById("loading").style.display = "none";
    const songs=[{
        id:1,
        name:"Jaan Meri Jaa Rahi Sanam",
        singer:"Jubin Nautiyal, Tulsi Kumar",
        source:"1.mp3"
    },
    {
        id:2,
        name:"Sanseinn",
        singer:"Sawai Bhatt",
        source:"2.mp3"
    },
    {
        id:3,
        name:"Taa chuma",
        singer:"Jubin Nautiyal, Tulsi Kumar",
        source:"3.mp3"
    }]
    var play=0;
    var audioId=0;
    var Rotate=0;
    document.querySelector(".play").addEventListener("click",function () {
        if (play==0) {
            document.querySelector(".play").className="play fas fa-pause";
            play=1;
            document.querySelector("audio").play();
            Rotate=1;
        }
        else{
            document.querySelector(".play").className="play fas fa-play";
            play=0;
            document.querySelector("audio").pause();
            Rotate=0;
        }
    })
    document.querySelector(".backward").addEventListener("click",function () {
        audioId--;
        audioId=((audioId+songs.length)%(songs.length));
        const audioSrc=audioId+1;
        document.querySelector("audio").src="./music/"+audioSrc+".mp3";
        document.querySelector(".img").src="./images/"+audioSrc+".jpg";
        document.querySelector("audio").play();
        document.querySelector(".play").className="play fas fa-pause";
        Rotate=1;
    })
    document.querySelector(".forward").addEventListener("click",function () {
        audioId++;
        audioId=((audioId+songs.length)%(songs.length));
        const audioSrc=audioId+1;
        // document.querySelector("audio").src="./music/"+(audioId+1)+".mp3";
        document.querySelector("audio").src="./music/"+audioSrc+".mp3";
        document.querySelector(".img").src="./images/"+audioSrc+".jpg";
        document.querySelector("audio").play();
        document.querySelector(".play").className="play fas fa-pause";
        document.querySelector(".name").innerHTML=songs[audioId].name.toUpperCase();
        document.querySelector(".singer").innerHTML=songs[audioId].singer;
        Rotate=1;
    })
    setInterval(() => {
        if (Rotate!=0) {
            Rotate+=1;
            Rotate=Rotate%360;
            if (Rotate==0) {
                Rotate=1;
            }
            document.querySelector(".img").style.transform="rotate("+Rotate+"deg)";
        }
    }, 5);
    /* for background colours */
    var R,G,B;
    setInterval(function () {
        if(play==1){
            R = Math.floor(Math.random()*256);
            G = Math.floor(Math.random()*256);
            B = Math.floor(Math.random()*256);
            document.querySelector("html").style.backgroundColor="rgb("+R+","+G+","+B+")";
        }
    },100);
}
