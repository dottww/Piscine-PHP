
var todo_list = [];
var ft_list_div;
var cname = "todos";

$(document).ready(function () {
	ft_list_div = $('#ft_list');
	if (get_cookie()) {
		todo_list = print_cookie();
	}
	$('#btn').click(function () {
		var text = prompt("Please fill in a new TO DO.", "TO DO");
		if (text) {
			add_todo(text);
		}
	});
});

function get_cookie() {
	return (document.cookie.split("=")[0] == cname) ? "1" : null;
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
	// var test=$('#ft_list').html();
	// console.log((test));
	return todos;
}

function add_todo(text) {
	var newtd = document.createElement("div");
	newtd.innerHTML = text;
	// newtd.addEventListener("click", del_todo);
	$(newtd).click(del_todo);
	// ft_list_div.insertBefore(newtd, ft_list_div.firstChild);
	ft_list_div.prepend(newtd);
	todo_list.push(newtd.textContent);
	// console.log(todo_list);
	set_cookie(cname, todo_list);
}

function del_todo() {
	if (confirm("Do you want to remove this item?")) {
		// this.parentElement.removeChild(this);
		$(this).remove();
		var index = todo_list.indexOf(this.textContent);
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