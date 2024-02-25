x = fetch('http://127.0.0.1:8000/api/Bosh%20sahifa')
  .then(x => x.text())
  .then(console.log());

$.ajax({
  url: 'http://127.0.0.1:8000/api/Bosh%20sahifa',
  method: 'GET',
  success: function (data) {
    data.forEach(e => {
      console.log(e);
      document.querySelector(".card-title").innerHTML = e.title;
      document.querySelector(".card-text").innerHTML = e.content;
    });
  }
})