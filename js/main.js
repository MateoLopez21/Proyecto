let text = "SportSize";

let answer = document.getElementById('title');

let i = 0;
function writeMessage(){
    answer.innerHTML = text.slice(0,i);
    i++
    // if (i > text.length) {
    //     i = 0;
    // }
}

setInterval(writeMessage, 100);