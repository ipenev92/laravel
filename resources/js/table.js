export default (() => {
    const removeModal = document.querySelector(".delete-modal")
    const modalAccept = document.querySelector(".delete-modal .content-buttons-accept");
    const modalDeny = document.querySelector(".delete-modal .content-buttons-deny");
    const tableSection = document.querySelector('.table');

    tableSection?.addEventListener('click', async (event) => {
        if (event.target.closest('.edit-button')) {
            alert("hola");
        }

        if (event.target.closest('.delete-button')) {
            removeModal.classList.add("active"); 
        }

        modalAccept?.addEventListener("click", () => {
            removeModal.classList.remove("active");
        }); 

        modalDeny?.addEventListener("click", () => {
            removeModal.classList.remove("active");
        }); 
    });
})();