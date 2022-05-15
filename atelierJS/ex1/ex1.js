function splash(a=undefined){
    if(a) alert("difficulty unrecognized, please type one of the following: easy, medium, hard");
    else alert("wlecome to hidden number");
    a=prompt("please choose your diffuclty","easy");
    b={"easy":5,"hard":2,"medium":3};
    if (b[a]){
        launchgame(b[a]);
    }
    else splash(-1);
}
function launchgame(a){
    Win=false;
    rand=Math.floor(Math.random()*10);
    b=a;
    for(let i=0;i<b;i++){
        s="Guess the number!\n"+String(a)+"guesses remaining";
        guess=prompt(s);
        if (guess==rand) {Win=true;win();}
        else{
            a=a-1;
            alert("wrong guess!");
        }
    }
    if (!Win){
        alert("you losse :(\nThe correct answer is :"+String(rand));
        splash();
    }
}
function win(){
    alert("you Win!!!!! \n retry?");
    splash();
}
splash();
