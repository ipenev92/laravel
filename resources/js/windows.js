export default (() => {
    const data = document.querySelector(".form-data");
    const dataButton = document.querySelector(".form-data button");
    const images = document.querySelector(".form-images");
    const imagesButton = document.querySelector(".form-images button");
  
    dataButton?.addEventListener("click", () => {
        images.classList.add("active")
        data.classList.add("active");
        dataButton.classList.remove("active");
    });

    imagesButton?.addEventListener("click", () => {
        data.classList.add("active")
        images.classList.toggle("active");
        imagesButton.classList.toggle("active");
    });
})();