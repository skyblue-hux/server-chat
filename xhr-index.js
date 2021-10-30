const xhr = new XMLHttpRequest();
const list = document.getElementById("list");

xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {
    var names = xhr.responseText;
    console.log(names)
    //list.innerHTML = names.substr(0, names.indexOf(':'));
  }
}

xhr.open("GET", "chats.txt", true);
xhr.send();
