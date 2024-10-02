// loading
const load = document.querySelector(".loader-container");
let loading = setTimeout(loader, 550);

function loader(){
    load.classList.add("display")
}