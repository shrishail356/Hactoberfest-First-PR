const checks=document.querySelectorAll(".box .minibox");
const reset=document.querySelector(".reset");
let turn=0;const x='x',o='o';
let dispText=document.querySelector('.win');
reset.addEventListener('click',restart);
start();
function start()
{
    turn=0;
    checks.forEach(check => {
        check.classList.remove(x);
        check.classList.remove(o);
        check.removeEventListener('click',addX);
        check.addEventListener('click',addX,{once:true})});
}
function addX(event)
{
    const minibox=event.target;
    const mark=turn&1?x:o;
    markXO(minibox,mark);
    turn++;
    if(won(mark))
    {
        dispText.innerText=`${turn&1?"O's":"X's"} Wins!`;
        dispText.style.backgroundColor='rgb(19, 140, 196)';
        setTimeout(restart,1000);
    }
    else if(turn==9 && !won(mark))
    {
        dispText.innerText="It's a draw!";
        dispText.style.backgroundColor='rgb(19, 140, 196)';
        setTimeout(restart,1000);
    }
}
function restart()
{
    dispText.innerText='';
    dispText.style.backgroundColor='';
    start();
}
function markXO(minibox,mark)
{
    minibox.classList.add(mark);
}
const win_combo=[[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]]
function won(mark)
{
    return win_combo.some(combo=>{
        return combo.every(index=>{
            return checks[index].classList.contains(mark);
        })
    })
}

function resizeToMinimum(w,h){
    w=w>window.outerWidth?w:window.outerWidth;
    h=h>window.outerHeight?h:window.outerHeight;
    window.resizeTo(w, h);
};
window.addEventListener('resize', function(){resizeToMinimum(1000,1000)}, true)