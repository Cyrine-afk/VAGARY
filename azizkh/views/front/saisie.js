function test() {
    var len = f.id_client.value.length;
    

    if (parseInt(len)<8 || parseInt(len)>8) {
        alert("L' id doit contenir exactement 8 chiffres");
        return false;
    }
    
}

function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }