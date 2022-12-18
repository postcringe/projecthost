$(document).ready(function() {
    function ShowForm(table, id, properties, method) {
        let inputs = "";
        Object.entries(properties).forEach(function(element, index) {
            if (element[0]=="DETAIL_TEXT")
            {
                inputs += `<textarea name="${element[0]}">${element[1]}</textarea><br>`;
            }
            else 
            {
            inputs += `<input type="text" name="${element[0]}" value="${element[1]}"><br>`;
            }
            
        });
        let header = "";
        let buttonContent = "";
        let action = "";
        switch(method) {
            case "addData": {
                header = `Добавить в таблицу ${table} новый элемент`;
                buttonContent = "Добавить";
                action = "./addData.php";
            }break;
            case "removeData": {
                header = `Удалить из таблицы ${table} элемент с ID = ${id}`;
                buttonContent = "Удалить";
                action = "./removeData.php";
            }break;
            case "changeData": {
                header = `Изменить в таблице ${table} элемент с ID = ${id}`;
                buttonContent = "Изменить";
                action = "./changeData.php";
            }break;
            default: {
                return false;
            }
        }
        let form = `<div class='modal-wrapper'><form action="${action}" method="post" class=modal-form><p class='modal-form__header'>${header}</p><div class='modal-form__inputs'>${inputs}</div><input type='submit' value=${buttonContent}><button id='close_modal_form' type='button'>Отмена</button></form></div>`;
        $("body").append(form);
        setTimeout(function() {
            $("#close_modal_form").click(function() {
                $(this).closest(".modal-wrapper").remove();
            });
            $(".modal-form").submit(function(e) {
                e.preventDefault();
                let html = $(this).serialize();
                html = `${html}&TABLE_ID=${table}&ELEMENT_ID=${id}`;
                console.log(html);
                $.ajax({
                    url: action,
                    method: 'post',
                    data: html,
                    success: function(data){
                        alert(data);    /* выведет "Текст" */
                        console.log();
                        location.reload(); 
                    },
                    error: function(data) {
                        alert(data);   /* выведет "Ошибка" */
                    }
                });
            });
        },300);
    }

    $(".remove-data-button").click(function() {
        let id = $(this).attr("element-id");
        let table = $(this).attr("table-id");
        let method = "removeData";
        let properties = new Object();
        let i = 0;
        $("#admin-table-items th").each(function(index) {
            if (i == 0) {
                i++;
                return true;
            }
            let prop_key = $(this).html();
            let selector = `#${prop_key}_${id}`;
            let prop_val = $(selector).html();
            if (prop_key != "ID") {
                properties[prop_key] = prop_val;
            }
        });
        ShowForm(table, id, properties, method);
    });
    $(".add-data-button").click(function() {
        let id = $(this).attr("element-id");
        let table = $(this).attr("table-id");
        console.log(table);
        let method = "addData";
        let properties = new Object();
        let i = 0;
        $("#admin-table-items th").each(function(index) {
            if (i == 0) {
                i++;
                return true;
            }
            let prop_key = $(this).html();
            let selector = `#${prop_key}_${id}`;
            let prop_val = $(selector).html();
            if (prop_key != "ID") {
                properties[prop_key] = prop_val;
            }
        });
        ShowForm(table, id, properties, method);
    });
    $(".change-data-button").click(function() {
        let id = $(this).attr("element-id");
        let table = $(this).attr("table-id");
        let method = "changeData";
        let properties = new Object();
        let i = 0;
        $("#admin-table-items th").each(function(index) {
            if (i == 0) {
                i++;
                return true;
            }
            let prop_key = $(this).html();
            let selector = `#${prop_key}_${id}`;
            let prop_val = $(selector).html();
            if (prop_key != "ID") {
                properties[prop_key] = prop_val;
            }
        });
        ShowForm(table, id, properties, method);
    });

   

    $("#main_checkbox").click(function() {
        console.log("click");
        if ($(this).is(":checked")) {
            $("#admin-table-items td input:checkbox").prop("checked", true);
        }
        else {
            $("#admin-table-items td input:checkbox").prop("checked", false);
        }
    });
});
