window.onload = function() {
  const addBtn = document.getElementById("add-btn");            // Shows modal window
  const overlay = document.getElementById("overlay");           // Modal window
  const modalExit = document.getElementById("modal-exit");      // X button in the top right corner of modal
  
  // Show modal on add button click
  addBtn.onclick = function() {
    overlay.style.display = "block";
  }

  // Hide modal
  modalExit.onclick = function() {
    overlay.style.display = "none";
  }
}

function toggleTaskDone(id) {
  $.ajax({
    type: "POST",
    url: 'updateTodoDone.php',
    data: { todoId: id },
    success: function(done) {
      const check = document.getElementById(id);
      console.log(done);
      if(done == 0) {
        check.classList.remove("check-icon-true");
        check.classList.add("check-icon-false");
        console.log("green");
      } else {
        check.classList.remove("check-icon-false");
        check.classList.add("check-icon-true");
        console.log("red");
      }
    }
  });
}

function deleteTodo(id) {
  const todoItem = document.getElementById("item-" + id);
  console.log(id);
  $.ajax({
    type: "POST",
    url: "deleteTodo.php",
    data: { todoId: id },
    success: function(msg) {
      console.log("COME ON");
      $(todoItem).remove();
    }
  })
}