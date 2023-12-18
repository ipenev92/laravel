export default (() => {
    const filter = document.querySelector(".filter");
    const filterModal = document.querySelector(".filter-modal")
    const modalAccept = document.querySelector(".content-buttons-accept");
    const modalDeny = document.querySelector(".content-buttons-deny");

    filter?.addEventListener("click", () => {
        filterModal.classList.add("active")
    });

    modalAccept?.addEventListener("click", () => {
        filterModal.classList.remove("active");
    }); 

    modalDeny?.addEventListener("click", () => {
        filterModal.classList.remove("active");
    }); 
})();