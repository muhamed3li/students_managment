/**
 * ******************
 * **** Level Start ****
 * ******************
 */

function getGroupFromLevel() {
    $("#level_id").change(function () {
        $.ajax("/level/getGroups/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                $("#group_id").html("<option>اختر</option>");
                data.forEach((element) => {
                    $("#group_id").append(`
                <option value="${element.id}">${element.name}</option>
                `);
                });
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            },
        });
    });
}

/**
 * ******************
 * **** Level End ****
 * ******************
 */

/**
 * ******************
 * **** Payment Start ****
 * ******************
 */
function getLevelByIdForMoney(id1, id2, id3, id4) {
    $("#level_id").change(function () {
        $.ajax("/level/getLevelById/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                $(`#${id1}`).val(data.month_cost);
                $(`#${id2}`).val(data.malazem_cost);
                $(`#${id3}`).val(0);
                calculateTheValue(id1, id2, id3, id4);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            },
        });
    });
}

function calculatePaymentTotal(id1, id2, id3, id4) {
    $(`#${id1}`).on("input", function () {
        calculateTheValue(id1, id2, id3, id4);
    });
    $(`#${id2}`).on("input", function () {
        calculateTheValue(id1, id2, id3, id4);
    });
    $(`#${id3}`).on("input", function () {
        calculateTheValue(id1, id2, id3, id4);
    });
}

function calculateTheValue(id1, id2, id3, id4) {
    x = parseFloat($(`#${id1}`).val());
    y = parseFloat($(`#${id2}`).val());
    z = parseFloat($(`#${id3}`).val());
    if (!x) x = 0;
    if (!y) y = 0;
    if (!z) z = 0;
    $(`#${id4}`).val((x + y - z).toFixed(2));
}

/**
 * ******************
 * **** Payment End ****
 * ******************
 */

function getStudentFromGroup() {
    $("#group_id").change(function () {
        $.ajax("/groups/getStudents/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                $("#student_id").html("<option>اختر</option>");
                data.forEach((element) => {
                    $("#student_id").append(`
                <option value="${element.id}">${element.name}</option>
                `);
                });
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            },
        });
    });
}
