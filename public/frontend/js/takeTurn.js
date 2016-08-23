'use strict';
$(function () {
    // setInterval(function showTime() {
    //     var now = new Date(Date.now());
    //     $('.time').html(((now.getHours() < 10) ? '0' + now.getHours() : now.getHours()) + ":" + ((now.getMinutes() < 10) ? '0' + now.getMinutes() : now.getMinutes()) + ":" + ((now.getSeconds() < 10) ? '0' + now.getSeconds() : now.getSeconds()));
    // }, 1000);

    // $('.taketurn').on('click', function () {
    //     var $this = $(this);
    //     var $data = $this.data();
    //
    //     if ($data.left == 0) {
    //         $this.prop('disabled', true);
    //         return;
    //     }
    //
    //     init($this, $data, {});
    //     var $form = $("#frmCalendar");
    //     $.ajax({
    //         url: $form.attr('action'),
    //         method: "GET",
    //         contentType: "application/json; charset=utf-8",
    //         dataType: "json",
    //         data: {id: $data.id},
    //         cache: false,
    //         timeout: 5000,
    //         async: false,
    //         success: function (json) {
    //             return false;
    //         },
    //         error: function (textStatus) {
    //             console.error("Request failed: " + textStatus);
    //         }
    //     });
    // });
    //
    // function init($this, $data, json) {
    //     var text = '';
    //     if ($data.take) {
    //         $data.left++;
    //         $data.take = false;
    //         $this.removeClass('btn-warning').addClass('btn-primary')
    //         text = 'Tomar';
    //     } else {
    //         $data.left--;
    //         if ($data.left == 0) {
    //             $this.removeClass('btn-primary').removeClass('btn-warning').addClass('btn-danger').prop('disabled', true)
    //         } else {
    //             $this.removeClass('btn-primary').addClass('btn-warning')
    //         }
    //         $data.take = true;
    //         text = 'Soltar';
    //     }
    //
    //     var $count = $data.left + "/" + $data.total;
    //
    //     var $small = $('small');
    //     $small.text($count)
    //     $this.html($small).data($data);
    // }
    //
    //
    // // -------------------------------
    //
    // function getTurn(turnid) {
    //     var dynamicData = {};
    //     dynamicData["id"] = turnid;
    //     // Returns the jQuery ajax method
    //     return $.ajax({
    //         url: "/admin/frontend/",
    //         type: "get",
    //         data: dynamicData
    //     });
    // }
    //
    // var person1 = getName("2342342"),
    //     person2 = getName("3712968"),
    //     people = [person1, person2];
    //
    // $.when.apply(this, people).then(function () {
    //     // Both the ajax requests have completed
    // });
});