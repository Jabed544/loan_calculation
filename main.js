  //fatch data from update.php
fetch("update.php")
.then((response)=>{
return response.text();

})

.then((data)=>{
    let vata=data;
    let deduct=vata-2000;
    document.getElementById("demo").innerHTML=deduct;
    //send data to insertbal.php
$("#field").click(function(){
    document.getElementById("newinput").style.display="block";

    
})

   $("#payment").click(function(){
    var takeinput=document.getElementById("newinput").value;
    
    if(takeinput==100){
    let sent=deduct;
    //culculation
    let persentage=sent/100*2;
    let total=sent+persentage;
    $.ajax({
        url:"insertbal.php",
        data:"sender="+total,
  })
    }
    
 })
  

}) 

   