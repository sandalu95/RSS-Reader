/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// var newvari;
// var x=document.getElementById("change2");
// var y=document.getElementById("change");
// function myFunction(newvari) {
//     if(newvari=='Feeds'){
//     	x.style.display="none";
//     	y.style.display="block";
//     }else{
//     	x.style.display="block";
//     	y.style.display="none";
//     }
// }
