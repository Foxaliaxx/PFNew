function delay(n){
    return new Promise(function(resolve){
        setTimeout(resolve,n*1);
    });
}
/*      MORE ELLEMENTS      */

const modalContainerMore = document.querySelector(".modal-container-more");
const modalTriggersMore = document.querySelectorAll(".modal-trigger-more");

modalTriggersMore.forEach(trigger=>trigger.addEventListener("click", toggleModalMore))

async function toggleModalMore(){
    await delay(1);
    modalContainerMore.classList.toggle("active")
}