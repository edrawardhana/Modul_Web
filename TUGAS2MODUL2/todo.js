let taskList = document.getElementById("taskList");
let taskInput = document.getElementById("taskInput");

function addTask() {
  let taskText = taskInput.value.trim();
  if (taskText !== "") {
    let li = document.createElement("li");
    li.innerHTML = `${taskText} 
      <button class="edit" onclick="editTask(this)">Edit</button> 
      <button class="delete" onclick="deleteTask(this)">Delete</button>`;
    taskList.appendChild(li);
    taskInput.value = "";
  }
}

function deleteTask(button) {
  let li = button.parentElement;
  taskList.removeChild(li);
}

function editTask(button) {
  let li = button.parentElement;
  let taskText = prompt("Edit task:", li.firstChild.textContent.trim());
  if (taskText !== null) {
    li.firstChild.textContent = taskText + " ";
  }
}
