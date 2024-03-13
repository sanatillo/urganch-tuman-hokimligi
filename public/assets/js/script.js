let p = document.querySelector("#text");
let btn = document.querySelector("#btn");


btn.addEventListener('click', function () {
        if (p.style.display == "none") {
            p.style.display = "block";
        } else {
            p.style.display = "none";
        }

})


