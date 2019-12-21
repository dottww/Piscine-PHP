

$(document).ready(function () {
    ft_list_div = $("#ft_list");
    
    load();
    
    $("#btn").mouseout(function () {
        $(ft_list_div).empty();
        load();
    })
    // setInterval(function (){
    //     $(ft_list_div).empty();
    //     load();
    // }, 100000);

    function load(){
        $.ajax(`select.php`, {
            type: "GET",
            success: function (res) {
                for (var id in res)
                    add_todo(id, res[id]);
            }
        })
    }
 
    function add_todo(id, text) {
        var newtd = document.createElement("div");
        newtd.id = id;
        newtd.innerHTML = text;
        //console.log(newtd);
        ft_list_div.prepend(newtd);
        //console.log(ft_list_div);
        newtd.onclick = function () { del_todo(id); };
    }

    function delete_todo(id) {
        var deltd = document.getElementById(id);
        deltd.parentNode.removeChild(deltd);
    }

    function del_todo(id) {
        if (confirm("Remove this item?")) {
            $.ajax(`delete.php?id=${id}`, {
                type: "GET",
                success: function () {
                    delete_todo(id);
                }
            });
        }
    }

    $("#btn").click(function () {
        var text = prompt("Please fill in a new TO DO.", "TO DO");
        if (text) {
            $.ajax(`insert.php?value=${text}`, {
                type: "GET",
                success: function (res) {
                    add_todo(res["id"], text);
                }
            });
        }
    });
});