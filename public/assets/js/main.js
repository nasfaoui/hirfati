
// **********************checked client*****************************


const check = (function(){
    if(client_chek.checked ===true){
        client_child1.classList.add("client-child11");
        client_chek.style.visibility = "visible";
    }else{
        client_child1.classList.remove("client-child11");
        client_chek.style.visibility = "hidden";
    }
})();


client_child1.addEventListener('click' , ()=>{
        client_chek.checked = true;
        Travailleur_chek.checked = false;
        client_child1.classList.add("client-child11");
        client_chek.style.visibility = "visible";
        Travail_child1.classList.remove("client-child11");
        Travailleur_chek.style.visibility = "hidden";
});



// **********************checked Travailleur*****************************
const check2 = (function(){
    if(Travailleur_chek.checked ===true ){
        Travail_child1.classList.add("client-child11");
        Travailleur_chek.style.visibility = "visible";
    }else{
        Travail_child1.classList.remove("client-child11");
        Travailleur_chek.style.visibility = "hidden";
    }
})();

Travail_child1.addEventListener('click' , ()=>{

        Travailleur_chek.checked =true;
        client_chek.checked = false;
        Travail_child1.classList.add("client-child11");
        Travailleur_chek.style.visibility = "visible";
        client_child1.classList.remove("client-child11");
        client_chek.style.visibility = "hidden";

});











