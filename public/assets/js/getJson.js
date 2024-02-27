x = fetch('http://127.0.0.1:8000/api/Bosh%20sahifa')
  .then(x => x.text())
  .then(console.log());

$.ajax({
  url: 'http://127.0.0.1:8000/api/Bosh%20sahifa',
  method: 'GET',
  success: function (data) {
    data.forEach(e => {
        // for (const key in e) {
            if(e.id == 1){
                document.querySelector(".card-title").innerHTML = e;
                document.querySelector(".card-text").innerHTML = e.short_content;
                document.querySelector(".card-img-top").src = e.photo_path;
            }
                // }
        // for (let i in e) {
            // console.log(i);
        // }
        //   console.log(e);
        //   console.log(e.photo_path);
    });
  }
})