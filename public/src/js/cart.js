
/*
function AddCart(val1) {
   myWindow = window.open(val1, "myWindow", "toolbar=no, menubar=no,scrollbars=no,resizable=no,width=5, height=5");   // Opens a new window
   sleep(1000);
   myWindow.close();   // Closes the new window
   location.reload();
}

function sleep(miliseconds) {
    var currentTime = new Date().getTime();
    while (currentTime + miliseconds >= new Date().getTime()) {
    }
}
*/
function search() {
 //var NAME=document.getElementById("selectme").getAttribute("data-name");

 var var1=document.getElementById("search").value;
 if(var1==""){
      alert("please input something");
 }else{
 	
 	 location.href = 'http://localhost:8000//product-search/'+var1;
 }

}