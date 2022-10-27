/*      ADD ELLEMENTS      */

const modalContainerAdd = document.querySelector(".modal-container-add");
const modalTriggersAdd = document.querySelectorAll(".modal-trigger-add");

modalTriggersAdd.forEach(trigger=>trigger.addEventListener("click", toggleModalAdd))

function toggleModalAdd(){
    modalContainerAdd.classList.toggle("active")
}