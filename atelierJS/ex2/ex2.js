let textArea=document.querySelector("#TextArea");
let color=document.querySelector("#Color");
let font=document.querySelector("#Font");
let size=document.querySelector("#Size");
textArea.style.fontSize=size.value+'pt';
textArea.style.fontFamily=font.value;

color.addEventListener('change',function(){
    document.querySelector("#TextArea").style.color=this.value;
});

size.addEventListener('change',function(){
    document.querySelector("#TextArea").style.fontSize=this.value+'pt';
});
font.addEventListener('change',function(){
    document.querySelector("#TextArea").style.fontFamily=this.value;
});


// color.addEventListener("change",function(textArea,color){
//     textArea.style.color=color.value;
// }(textArea,color));
// size.addEventListener("change",(this)=>{textArea.style.size=size.value});
// font.addEventListener("change",(this)=>{textArea.style.font=font.value});
// textArea.style.color="#9c36fe";