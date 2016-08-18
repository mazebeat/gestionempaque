'use strict';
$(function () {
    setInterval(showTime, 1000);

    function showTime() {
        var now = new Date(Date.now());
        $('.time').html(((now.getHours() < 10) ? '0' + now.getHours() : now.getHours()) + ":" + ((now.getMinutes() < 10) ? '0' + now.getMinutes() : now.getMinutes()) + ":" + ((now.getSeconds() < 10) ? '0' + now.getSeconds() : now.getSeconds()));
    }
//            console.time('takeClick')            //
    $('button.taketurn').click(function () {
        //console.time('takeClick')
        var $this = $(this);
        var $data = $this.data();

        if ($data.left == 0) {
            $this.prop('disabled', true);
            return;
        } else {
            init($this, $data, {});
            var $form = $("#frmCalendar");
//                    console.time('takeClickAjax')
            $.ajax({
                url: $form.attr('action'),
                method: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: {id: $data.id},
                cache: false,
                timeout: 5000,
                async: false,
                success: function (json) {
//                            console.info('success' + JSON.stringify(json))
                    return false;
                },
                error: function (textStatus) {
                    console.error("Request failed: " + textStatus);
                },
                complete: function (json) {
//                            console.timeEnd('takeClickAjax')
                }
            });
        }
//                console.timeEnd('takeClick')
    });

    function init($this, $data, json) {
//                        $("#log").html(json);
        var text = '';
        if ($data.take) {
            $data.left++;
            $data.take = false;
            $this.removeClass('btn-warning').addClass('btn-primary')
            text = 'Tomar';
        } else {
            $data.left--;
            if ($data.left == 0) {
                $this.removeClass('btn-primary').removeClass('btn-warning').addClass('btn-danger').prop('disabled', true)
            } else {
                $this.removeClass('btn-primary').addClass('btn-warning')
            }
            $data.take = true;
            text = 'Soltar';
        }
        $this.html(text + "<small>(" + $data.left + "/" + $data.total + ")</small>").data($data);
    }

});