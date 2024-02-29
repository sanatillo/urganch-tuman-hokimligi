let a = document.createElement(a);
// console.log(a);

function posts() {
    $.ajax({
        url: 'http://127.0.0.1:8000/api/data',
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("Posts : ", data.posts)
        },
        error: function () {
            alert("Xatolik yuz berdi");
        }
    })
}

document.addEventListener("DOMContentLoaded", posts);


$.ajax({
    url: 'http://127.0.0.1:8000/api/data',
    type: "GET",
    dataType: "json",
    success: function (data) {
        
        // let row = document.querySelector(".row-cols-1"),
        //     generalCard = [],
        //     card = [],
        //     img = [],
        //     cardBody = [],
        //     cardTitle = [],
        //     cardText = [];

        // let inserted = [],
        //     insertedCard = [],
        //     insertedImg = [],
        //     insertedCardBody = [],
        //     insertedCardTitle = [],
        //     insertedCardText = [];


            // generalCard[i] = document.createElement("div");
            // card[i] = document.createElement("div");
            // img[i] = document.createElement("img");
            // cardBody[i] = document.createElement("div");
            // cardTitle[i] = document.createElement("h5");
            // cardText[i] = document.createElement("p");

            // inserted[i] = row.appendChild(generalCard[i]);
            // insertedCard[i] = inserted[i].appendChild(card[i]);
            // insertedImg[i] = insertedCard[i].appendChild(img[i]);
            // insertedCardBody[i] = insertedCard[i].appendChild(cardBody[i]);
            // insertedCardTitle[i] = insertedCardBody[i].appendChild(cardTitle[i]);
            // insertedCardText[i] = insertedCardBody[i].appendChild(cardText[i]);


            // inserted[i].classList.add("col-lg-4");
            // insertedCard[i].classList.add("card");
            // let imgPath =  insertedImg[i].classList.add("card-img-top");
            // insertedCardBody[i].classList.add("card-body");
            // let titlejson = insertedCardTitle[i].classList.add("card-title");
            // let textJson = insertedCardText[i].classList.add("card-text");
        
            let title = document.querySelectorAll(".card-title"),
                shortContent = document.querySelectorAll(".card-text"),
                image = document.querySelectorAll(".card-img-top");
            
            for (let i = 0; i < 3; i++) {
                // imgPath.innerHTML = data.posts[i].photo_path;
                // titlejson.innerHTML = data.posts[i].title;
                // textJson.innerHTML = data.posts[i].short_content;
                if(data.posts[i].short_content.length > 40){
                    shortContent[i].innerHTML = `${data.posts[i].short_content.slice(0,95)}...`;
                }
                title[i].innerHTML = data.posts[i].title;
                image[i].src = data.posts[i].photo_path;
            }
    },
    error: function () {
        alert("Json was not found");
    }
})




    `<div class="col-lg-4">
            <div class="card">
              <img class="card-img-top" alt="..">
              <div class="card-body ">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content.</p>
              </div>
            </div>
          </div>`