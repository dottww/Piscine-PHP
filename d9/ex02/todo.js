
var todo_list = [];
var ft_list_div;
var cname="todos";

window.onload = function () {
	ft_list_div = document.getElementById("ft_list");
	if (get_cookie()) {
		todo_list = print_cookie();
	}
	document.getElementById("btn").addEventListener("click", function () {
		var text = prompt("Please fill in a new TO DO.", "TO DO");
		if (text) {
			add_todo(text);
		}
	});
};

function get_cookie() {
	return (document.cookie.split("=")[0]==cname) ? "1" : null;
}

function print_cookie() {
	todos = (document.cookie.split("=")[1]).split(',');
	// console.log(todos);
	var todosLength = todos.length;
	// console.log(todosLength);
	for (var i = 0; i < todosLength; i++) {
		add_todo(todos[i]);
	}
	// console.log(todos);
	return todos;
}

function add_todo(text) {
	var newtd = document.createElement("div");
	newtd.innerHTML = text;
	newtd.addEventListener("click", del_todo);
	ft_list_div.insertBefore(newtd, ft_list_div.firstChild);
	todo_list.push(newtd.textContent);
	// console.log(todo_list);
	set_cookie(cname, todo_list);
}

function del_todo() {
	if (confirm("Do you want to remove this item?")) {
		this.parentElement.removeChild(this);
		var index = todo_list.indexOf(this.textContent);
		// console.log(todo_list);
		todo_list.splice(index, 1);
		// console.log(todo_list);
		set_cookie(cname, todo_list);
	}
}

function set_cookie(cname, cvalue) {
	var d = new Date();
	d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	// console.log(expires);
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}