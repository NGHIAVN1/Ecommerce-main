function expandSearch() {
  let searchExpan = document.getElementsByClassName('result-find');
    if(searchExpan[0].style.display === "none") {
        searchExpan[0].style.display = "flex";
    } else {
        searchExpan[0].style.display = "none";
    }
}
