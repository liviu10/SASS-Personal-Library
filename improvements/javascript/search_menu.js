function searchMenu() {
  var input, filter, ul, li, span, i;
  input = document.getElementById("search_menu");
  filter = input.value.toUpperCase();
  ul = document.getElementById("menu_list");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    span = li[i].getElementsByTagName("span")[0];
    if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}