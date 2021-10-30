const xhr = new XMLHttpRequest();
const msgs = document.getElementById("messages");
const userName = localStorage.getItem("User");

xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {
    msgs.innerHTML = xhr.responseText;
  }
}

xhr.open("GET", "chats.txt", true);
xhr.send();

setInterval(function() {
  xhr.open("GET", "chats.txt", true);
  xhr.send();
}, 3000);
