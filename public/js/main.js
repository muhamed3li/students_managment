/**
 * ******************
 * **** Level Start ****
 * ******************
 */

function getGroupFromLevel(levelId = "level_id", groupId = "group_id") {
    $(`#${levelId}`).change(function () {
        $.ajax("/level/getGroups/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                $(`#${groupId}`).html("<option>اختر</option>");
                data.forEach((element) => {
                    $(`#${groupId}`).append(`
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

/**
 * ******************
 * **** Exam Start ****
 * ******************
 */
function getExamFromGroup(group_id = "group_id", exam_id = "exam_id") {
    $(`#${group_id}`).change(function () {
        $.ajax("/groups/getExams/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                $(`#${exam_id}`).html("<option>اختر</option>");
                data.forEach((element) => {
                    $(`#${exam_id}`).append(`
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
 * **** Exam End ****
 * ******************
 */

/**
 * ******************
 * **** Homwork Start ****
 * ******************
 */
function getHomeworkFromGroup(
    group_id = "group_id",
    homework_id = "homework_id"
) {
    $(`#${group_id}`).change(function () {
        $.ajax("/groups/getHomework/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                console.log(data);
                $(`#${homework_id}`).html("<option>اختر</option>");
                data.forEach((element) => {
                    $(`#${homework_id}`).append(`
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
 * **** Homwork End ****
 * ******************
 */

function getStudentFromGroup(groupId = "group_id", studentId = "student_id") {
    $(`#${groupId}`).change(function () {
        $.ajax("/groups/getStudents/" + this.value, {
            dataType: "json",
            success: function (data, status) {
                $(`#${studentId}`).html("<option>اختر</option>");
                data.forEach((element) => {
                    $(`#${studentId}`).append(`
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

function studentDualBox(studentsList) {
    $("#barcode").on("keypress", function (event) {
        var keycode = event.keyCode ? event.keyCode : event.which;
        if (keycode == "13") {
            attendAjax(event, studentsList);
        }
    });
}
function attendAjax(e, studentsList) {
    e.preventDefault();

    var id = $("#barcode").val();
    id = idFromBarcode(id);

    $.ajax({
        type: "GET",
        url: "/students/getStudetnById/" + id,
        data: { _token: "{{csrf_token()}}" },
        success: function (data) {
            let student = JSON.parse(data);
            studentsList.append(`
            <option value="${student.id}" selected>${student.name}</option>
            `);
            studentsList.bootstrapDualListbox("refresh");
            $("#barcode").val("");
            $("#barcode").focus();
        },
        error: function (data, textStatus, errorThrown) {
            console.log(data);
        },
    });
}

function idFromBarcode(id) {
    if (id.length >= 5) {
        id = id.slice(0, -1);
    }
    return id;
}
